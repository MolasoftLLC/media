<template>
<div>
    <div class="mainimg_container" style="">
    <img class="mainimg" src="../assets/etc/lance_main.jpg" />
    <img class="mainimg_on animated" data-animate="fadeInUp" src="../assets/etc/logo.png" />
    <h1 class="main_catch">関西のフリーランスを見つけるメディアサイト</h1>
          <div class="box">
            <p>Scroll</p> 
            <div class="arrowWrap">
                <div class="arrow1">
                    <span></span>
                </div>
                <div class="arrow2">
                    <span></span>
                </div>
            </div>
        </div>
  </div>
  <div id="app" class="container">
    <div class="container_crip"><img src="../assets/etc/clip.png" alt=""></div>
    <div class="more_left"><span>◀︎</span><br>more</div>
    <div class="more_right"><span>▶︎</span><br>more</div>

       <a name="interview" ></a>
    <div class="header_adjust"></div>
 

  <h1 class="free">Freelance Interview</h1>
  <p class="free">多種多様な生き方を知る</p>
  <img src="../assets/etc/nami.png" alt="" class="animated" data-animate="rubberBand">

　<div class="panel" v-show="tab === 1">
    <div v-for="(lancer, id) in lancers" v-bind:key="id">
      <div class="fuwafuwa">
        <div class="news_img animated" data-animate="rollIn">
            
                <RouterLink :to="'/lancer/' + lancer.id">
                   <img :src="'/images/'+lancer.img" width="100%" />
                   <p class="read_more">Read more</p>
                </RouterLink>
           <p class="on_name"></p>
          <p class="ontext">{{ lancer.name }}<br>{{ lancer.tags }}</p>
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
  　<p class="tag_serch ">タグで絞り込む</p>
　  <ul class="tag_grid animated" data-animate="fadeInUp">
      <li><a href=""><img src="../assets/etc/ser.png" alt=""><br>サービス業</a></li>
      <li><a href=""><img src="../assets/etc/shop.png" alt=""><br>店舗運営</a></li>
      <li><a href=""><img src="../assets/etc/pen.png" alt=""><br>クリエイティブ</a></li>
      <li><a href=""><img src="../assets/etc/it.png" alt=""><br>テクノロジー</a></li>
      <li><a href=""><img src="../assets/etc/ques.png" alt=""><br>その他</a></li>
    </ul>
</div>

<div class="panel" v-show="tab === 2">
  
    <div v-for="(lancer_it, id) in lancers_it" v-bind:key="id">
        <div class="news_img">
            <RouterLink :to="'/lancer/' + lancer_it.id">
                <img src="../assets/person/kenta.jpg" width="100%" />
                <p class="read_more">Read more</p>
            </RouterLink>

          <p class="on_name">{{ lancer_it.title }}</p>
          <p class="on_category">{{ lancer_it.content }}</p>
          <p class="ontext">コミュ二ティの運営で鬱病の無い社会を目指す。</p>
        </div>
        <div v-if="id===2||id===5" class="clear"></div>
    </div>
</div>

<div class="panel" v-show="tab === 3">
   <div class="news_img">
  <img src="../assets/person/yukigao.jpg" width="100%"  />
    <p class="read_more">Read more</p>
    <p class="on_name">Yukigao</p>
    <p class="on_category">陶芸家</p>
  <p class="ontext">29歳で会社員を辞めて陶芸の道へ。</p>
  </div>
  <div class="clear"></div>
</div>

<div class="panel" v-show="tab === 4">
  <div class="news_img">
  <img src="../assets/person/kenta.jpg" width="100%" />
   <p class="read_more">Read more</p>
  <p class="on_name">Kenta Kitanaka</p>
    <p class="on_category">ミュージックバー運営</p>
  <p class="ontext">コミュ二ティの運営で鬱病の無い社会を目指す。</p>
  </div>

  <div class="clear"></div>
</div>

<div class="panel" v-show="tab === 5">

   <div class="news_img">
  <img src="../assets/person/mukae.jpg" width="100%"  />
    <p class="read_more">Read more</p>
    <p class="on_name">Seigo Mukae</p>
    <p class="on_category">イベントプランナー</p>
  <p class="ontext">楽しいことは探さず、作る派。</p>
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
            this.fetchLancers(),
            this.fetchLancers_it()
        },
        data() {
            return {
                lancers: [],
                lancers_it: [],
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
            fetchLancers_it() {
                // var id = this.$route.params['id']
                // var id = this.$route.query.itemId
                return axios.get('/api/lancer/')
                .then(resd =>  {
                 　  console.log('動いてる');
                    console.log(resd.data);
                    this.lancers_it = resd.data
                })
            }
        }
    }
</script>