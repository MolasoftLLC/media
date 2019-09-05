<template>
  <div id="app">
       <a name="interview" ></a>
    <div class="header_adjust"></div>
   
  <h1 class="free">Freelance Intaview</h1>
      <ul class="tab">
      <li
        class="tab__item"
        :class="{'tab__item--active': tab === 1 }"
        @click="tab = 1"
      >最新記事</li>

    </ul>

　<div class="panel" v-show="tab === 1">
    <div v-for="(lancer, id) in lancers" v-bind:key="id">
        <div class="news_img">
            <RouterLink :to="'/lancer/' + lancer.id" >
                <img src="../assets/person/kenta.jpg" width="100%" />
                <p class="read_more">Read more</p>
            </RouterLink>

          <p class="on_name">{{ lancer.title }}</p>
          <p class="on_category">{{ lancer.content }}</p>
          <p class="ontext">コミュ二ティの運営で鬱病の無い社会を目指す。</p>
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