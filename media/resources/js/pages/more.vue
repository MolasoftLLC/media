<template>
  <div class="more_container">
  <div id="app" class="container container_sub slideInRight">
    <div class="container_max">
    <div class="container_crip"><img src="../assets/etc/clip.png" alt=""></div>
    <div class="more_left fuwafuwa"  ><RouterLink :to="'/tag/all'"><span>◀︎</span><br>more</RouterLink></div>
    <div class="more_right  fuwafuwa" ><RouterLink :to="'/tag/all'"><span>▶︎</span><br>more</RouterLink></div>
       <a name="interview" ></a>
    <div class="header_adjust"></div>
   
  <h1 class="free">More Interview</h1>
  <img src="../assets/etc/nami2.png" alt="" class="animated" data-animate="rubberBand">

　<div class="panel">
    <div v-for="(lancer, id) in lancers" v-bind:key="id">
        <div class="news_img animated" data-animate="fadeInUp" >
          <!-- 要実装 -->
        <div v-if="lancer.id !== 100"> 
            <RouterLink :to="'/lancer/' + lancer.id" >
                <img :src="'/images/'+lancer.img" width="100%" />
                <p class="read_more">Read more</p>
            </RouterLink>
          <p class="ontext">{{ lancer.name }}<br>{{ lancer.works }}</p>
        </div>
        </div>
        <div v-if="id===2||id===5" class="clear"></div>
    </div>
    <div class="clear"></div>
 </div>
<div class="clear"></div>
</div>
</div>
</div>
</template>

<script>
    export default {
        created() {
            this.fetchLancers()
        },
        data() {
            return {
                lancers: [],
            }
        },
        methods: {
            fetchLancers() {
                return axios.get('/api/lancer/')
                .then(res =>  {
                    this.lancers = res.data
                })
            },
 
        },
 
    }
</script>