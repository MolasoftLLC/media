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

　<div class="panel" v-show="tab === 1">
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
   <!-- <div class="news_img">
  <RouterLink to="/lancer/2">
    <img src="../assets/person/mukae.jpg" width="100%"  />
    <p class="read_more">Read more</p>
  </RouterLink>

    <p class="on_name">Seigo Mukae</p>
    <p class="on_category">イベントプランナー</p>
  <p class="ontext">楽しいことは探さず、作る派。</p>
  </div>
   <div class="news_img">
      <RouterLink to="/interview3">
    <img src="../assets/person/yukigao.jpg" width="100%"  />
    <p class="read_more">Read more</p>
  </Routerlink>
  
    <p class="on_name">Yukigao</p>
    <p class="on_category">陶芸家</p>
  <p class="ontext">29歳で会社員を辞めて陶芸の道へ。</p>
  </div> -->

  <div class="clear"></div>

</div>


  <div class="clear"></div>
</div>
</div>
</div>
</template>

 <script>
// export default {
//   data () {
//     return {
//       tab: 1,
//     }
//   }
// }
</script>
<script>
    export default {
        mounted() {
            this.fetchLancers()
        },
        data() {
            return {
                lancers: [],
                tab: 1,
            }
        },
        methods: {
            fetchLancers() {
                // var id = this.$route.params['id']
                // var id = this.$route.query.itemId
                return axios.get('/api/lancer/')
                .then(res =>  {
                    console.log(res.data);
                    this.lancers = res.data
                })
            },
 
        },
 
    }
</script>