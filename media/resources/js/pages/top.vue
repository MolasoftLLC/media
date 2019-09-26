<template>
<div>
    <div class="mainimg_container" style="">
        <img class="mainimg" src="../assets/etc/mainimg3.jpg" />
        <!-- <video class="mainimg" src="images/sample.mp4" autoplay loop muted></video> -->
        <img class="mainimg_on  slideInRight" src="../assets/etc/logo.png" />
        <div class="main_catch">
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
        <div class="container_crip"><img src="../assets/etc/clip.png" alt=""></div>
        <div class="more_left fuwafuwa"  ><span>◀︎</span><br>more</div>
        <div class="more_right  fuwafuwa" ><span>▶︎</span><br>more</div>

        <a name="interview" ></a>
       

        <h1 class="free">Freelance Interview</h1>
        <p class="free">多種多様な生き方を知る</p>
        <img src="../assets/etc/nami2.png" alt="" class="animated" data-animate="rubberBand">

      　<div class="panel" >
            <div v-for="(lancer, id) in lancers" v-bind:key="id">
                <div >
                    <div class="news_img animated" data-animate="fadeInUp">
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
            <div class="clear"></div>
          　 <p class="tag_serch ">タグで絞り込む</p>
        　   <ul class="tag_grid animated" data-animate="fadeInUp">
                  <li><RouterLink :to="'/tag/' + 'service'" ><img src="../assets/etc/ser.png" alt="" class="tagimg"><br>サービス業</RouterLink></li>
                  <li><RouterLink :to="'/tag/' + 'shop'" ><img src="../assets/etc/shop.png" alt="" class="tagimg"> <br>店舗運営</RouterLink></li>
                  <li><RouterLink :to="'/tag/' + 'creative'" ><img src="../assets/etc/pen.png" alt="" class="tagimg"><br>クリエイティブ</RouterLink></li>
                  <li><RouterLink :to="'/tag/' + 'it'" ><img src="../assets/etc/it.png" alt="" class="tagimg"><br>テクノロジー</RouterLink></li>
                  <li><RouterLink :to="'/tag/' + 'etc'" ><img src="../assets/etc/ques.png" alt="" class="tagimg"><br>その他</RouterLink></li>
            </ul>
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