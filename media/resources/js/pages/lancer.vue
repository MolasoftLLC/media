<template>
  <div>
  
  <div>
        
  <div class="mainimg_container_person" id="mainheight" v-bind:class="{scroll_none: scrollY > 400,  scroll_on: scrollY < 400}">
            <img class="mainimg_person fadeperson" id="imgheight" src="../assets/etc/lance_main.jpg"  style="animation-duration:3s;" >
            <div class="on_profile container_max" id="catchheight">
                <div v-for="(profile, id) in person" v-bind:key="id" style="  display: grid;
  grid-template-columns: 1fr 1.5fr; max-width:700px;   justify-content: center;
  align-items: center;">
                <img id="person" class="mainimg_on_person slideInRight "  :src="'/images/'+profile.img"  />
                <div class="profile_desc">
                    <div class="inline"><h1 >{{ profile.name }}</h1>
                    <img src="../assets/icon/twitter.png" alt=""><img style="margin-left:8px;" src="../assets/icon/instagram.png" alt=""></div>
                    <p>{{ profile.works }}</p>
                    <p class="desc">{{ profile.about }}
                    </p>
                </div>
                </div>
            </div>
            
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

    <div class="interview_grid">
        <div class="container_max">
        <section class="grid_main">
            

            <div class="interview_page">
                <a name="interview" ></a>
                <h2 class="free big" >Movie</h2>
                <div class="movie desc_img animated" data-animate="fadeInUp">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/kZj0mYHnhlw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p class="evis">撮影・編集：Studio EVIS <a href="https://studio-evis.net" target="_blank">公式HP</a></p>
                <div class="interview_talk">
                    <h2 class="question">北中さんはなぜこの事業を始めようと思ったんですか？</h2>
                    <p class="answer">北中：おで…、、お…、、お…、、お…、、お…、、お…、、</p>
                    <h2 class="question">一番苦労したことは？</h2>
                    <p class="answer">北中：ん、、、お…、、お…、、お…、、お…、、お…、、お…、、</p>
                </div>
                <h2 class="free big">Career</h2>
                <div class="career animated" data-animate="fadeInUp" >
                    <div class="career_grid" >
                        <section class="age">年度</section>
                        <section class="age_content">内容</section>
                    </div>
                    <!-- forで回す -->
                    <div class="career_grid">
                        <section class="age">2018年</section>
                        <section class="age_content">起業しました</section>
                    </div>
                </div>

                <h2 class="free big">Schedule</h2>
                <div class="schedule animated" data-animate="fadeInUp" >
                    <img src="../assets/etc/sce.png" alt="">
                </div>


                <!-- <div v-for="(lancer, id) in lancers" v-bind:key="id">
                    <h1>
                        <router-link :to="'/lancer/' + lancer.id">{{ lancer.title }}</router-link>
                    </h1>
                    <p>
                        {{ lancer.content }}
                    </p>
                </div> -->
       
            </div>
         <section class="interviewer animated" data-animate="fadeInUp" >
            <div class="interview_container">
                <img src="../assets/person/kenta.jpg" alt="">
                <div class="interview_desc">
                    <p>記事の作者</p>
                    <p>記事を書いている人の情報を載せます</p>
                </div>
                
            </div>
        </section>
        
        </section>
        
        <section class="want">
            <img src="../assets/etc/clip.png" alt="">
            <p class="button_fix">講演を聴きたい</p>
        </section>
        <section class="good want">
            <img src="../assets/etc/star.png" alt="">
            <p class="button_fix">お気に入り</p>
        </section>
        <section class="contact">
            <img src="../assets/etc/talk.png" alt="">
            <p class="button_fix">相談したい</p>
        </section>
         <section class="contact mail">
            <img src="../assets/etc/mail.png" alt="">
            <p class="button_fix">問い合わせ</p>
        </section>
       
    </div>
  </div>
  </div>
    </div>
　</div>
</template>

<script>

　　 
    export default {
        mounted() {
            this.fetchLancers(),
            this.imagehaight()
        },
        data() {
            return {
                lancers: [],
                person: [],
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
                var id = this.$route.params['id']
                // var id = this.$route.query.itemId
                return axios.get('/api/lancer/'+id)
                .then(res =>  {
                    console.log(res.data);
                    this.person = res.data
                })
            },
    
            imagehaight() {
                let height=$("#mainheight").height();
                let height2=window.innerHeight-120;
                console.log(height2);
                $("#imgheight").css("height", height2).css("min-height", height2+120);
                $("#catchheight").css("height", height2);//10pxだけ余裕をもたせる
                console.log(height2);
            },
            handleScroll() {
              if (this.timer === null) {
                  this.timer = setTimeout(function () {
                  this.scrollY = window.scrollY
                  clearTimeout(this.timer)
                  this.timer = null
                }.bind(this), 200)
              }
             }
        },
        watch: {
            '$route': function (to, from) {
                if (to.path !== from.path) {
                    
                    var id = this.$route.params['id']
                    return axios.get('/api/lancer/'+id)
                   .then(res =>  {
                        console.log(res.data);
                        this.person = res.data　
                        // this.$set(this.lancers, res.data);
                    }) 
                    
                    
                }
            
            }
        }

    }
</script>