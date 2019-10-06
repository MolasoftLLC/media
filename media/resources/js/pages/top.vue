<template>
<div>
    <div  style="" v-bind:class="{scroll_none: scrollY > 400,  scroll_on: scrollY < 400}">
        <!-- <div class="slideInRight mainimg_container">
            <img class="mainimg slideInRight" style="animation-duration:3.6s;" src="../assets/etc/clip1.jpg" >
        </div> -->
        <!-- <video id="video" class="mainimg" src="images/sample.mp4" autoplay loop muted></video> -->
        
        <div class="main_catch mainimg_on">
            <img class="  slideInRight"  src="../assets/etc/toplogo.png" />
            <h1 >関西のフリーランスを見つけるメディアサイト</h1>
            <!-- <p>人気のタグから探す</p>
            <ul class="tag_grid" style="padding-top:24px;">
                <li><a href="">サービス業</a></li>
                <li><a href="">店舗運営</a></li>
                <li><a href="">クリエイティブ</a></li>
                <li><a href="">テクノロジー</a></li>
                <li><a href="">その他</a></li>
            </ul> -->
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
      <div class="container_max">
        <div class="container_crip"><img src="../assets/etc/clip.png" alt=""></div>
        <!-- <div class="more_left fuwafuwa"  ><RouterLink :to="'/tag/all'"><span>◀︎</span><br>more</RouterLink></div>
        <div class="more_right  fuwafuwa" ><RouterLink :to="'/tag/all'"><span>▶︎</span><br>more</RouterLink></div> -->

        <a name="interview" ></a>
       

        <h1 class="free">Freelance Interview</h1>
        <p class="free">多種多様な生き方を知る</p>
        <!-- <img src="../assets/etc/nami2.png" alt="" class="animated" data-animate="rubberBand"> -->

      　<div class="panel" >
            <div v-for="(lancer, id) in lancers" v-bind:key="id">
                <div >
                    <div class="news_img animated" data-animate="fadeInUp">
                        <RouterLink :to="'/lancer/' + lancer.id">
                          <img :src="'/images/'+lancer.img" width="100%" />
                          <p class="read_more">Read more</p>
                        </RouterLink>
                        <p class="on_name"></p>
                        <p class="ontext">{{ lancer.name }}<br>{{ lancer.works }}</p>
                    </div>
                </div>
                <div v-if="id===3||id===6" class="clear"></div>
            </div>
            <div class="clear"></div>
          　 <p class="tag_serch ">タグで絞り込む</p>
        　   <ul class="tag_grid animated" data-animate="fadeInUp">
                  <li class="tagimg"><RouterLink :to="'/tag/' + 'service'" ><img src="../assets/etc/ser.png" alt="" ><br><span class="tagname">サービス業</span></RouterLink></li>
                  <li class="tagimg"><RouterLink :to="'/tag/' + 'shop'" ><img src="../assets/etc/shop.png" alt="" > <br>店舗運営</RouterLink></li>
                  <li class="tagimg"><RouterLink :to="'/tag/' + 'creative'" ><img src="../assets/etc/pen.png" alt="" ><br>クリエイティブ</RouterLink></li>
                  <li class="tagimg"><RouterLink :to="'/tag/' + 'it'" ><img src="../assets/etc/it.png" alt="" ><br>テクノロジー</RouterLink></li>
                  <li class="tagimg"><RouterLink :to="'/tag/' + 'etc'" ><img src="../assets/etc/ques.png" alt="" ><br>その他</RouterLink></li>
            </ul>
        </div>
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
            this.imagehaight()
            this.videoGo()
        },
        data() {
            return {
                lancers: [],
                lancers_it: [],
                tab: 1,
                scrollY: 0,
                timer: null
            }
        },
        created: function () {
            // ハンドラを登録
            window.addEventListener('scroll', this.handleScroll)
          },
        beforeDestroy: function () {
            // ハンドラを解除（コンポーネントやSPAの場合忘れずに！）
            window.removeEventListener('scroll', this.handleScroll)
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
            },
            imagehaight() {
                let height=$(".mainimg_container").height();
                let height2=window.innerHeight-120;
    
                console.log(height);
                $(".mainimg").css("height", height).css("min-height", height2);
	  
                // $(".hougan").css("height", height).css("min-height", height2);
              
                $(".main_catch").css("min-height", height2+120);//10pxだけ余裕をもたせる

            },
                // 違和感のない程度に200ms間隔でscrollデータを更新する例
            handleScroll() {
              if (this.timer === null) {
                  this.timer = setTimeout(function () {
                  this.scrollY = window.scrollY
                  clearTimeout(this.timer)
                  this.timer = null
                }.bind(this), 200)
              }
             },
            videoGo() {
             let video = document.getElementById('video');
                console.log(video);
                // 自動再生する
                video.autoplay = true;
                
                // 繰り返し再生する
                video.loop = true;
                
                // 無音で再生する
                video.muted = true;
	
             }
    }
    }
</script>