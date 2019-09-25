<template>
  <div>
  <div v-for="(profile, id) in person" v-bind:key="id">
  <div class="mainimg_container_person" style="">
      　
        <img class="mainimg_person" src="../assets/etc/lance_main.jpg" />
        <div class="on_profile">
            <img id="person" class="mainimg_on_person animated " data-animate="rollIn" :src="'/images/'+profile.img"  />
            <div class="profile_desc">
                <div class="inline"><h1 >{{ profile.name }}</h1>
                <img src="../assets/icon/twitter.png" alt=""><img style="margin-left:8px;" src="../assets/icon/instagram.png" alt=""></div>
                <p>{{ profile.tags }}</p>
                <p class="desc">{{ profile.about }}
                </p>
                <div class="in">
                    <p><a href="#">{{ profile.content }}</a></p>
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
        <section class="grid_main">

            <div class="interview_page">
                <a name="interview" ></a>
                <h2 class="free big" >Movie</h2>
                <div class="movie desc_img animated" data-animate="fadeInUp">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/kZj0mYHnhlw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p class="evis">撮影・編集：Studio EVIS <a href="https://studio-evis.net" target="blank">公式HP</a></p>
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
</template>

<script>

　　 
    export default {
        mounted() {
            this.fetchLancers(),
            this.firstMove()
        },
        data() {
            return {
                lancers: [],
                person: [],
            }
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
            firstMove(){
                let person = document.getElementById('person');
                person.classList.add("person_anima");
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