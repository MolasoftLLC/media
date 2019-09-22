<template>
  <div>
  <div class="mainimg_container_person" style="">
        <img class="mainimg_person" src="../assets/etc/lance_main.jpg" />
        <div class="on_profile">
            <img id="person" class="mainimg_on_person" src="../assets/person/kenta.jpg" />
            <div class="profile_desc">
                <div class="inline"><h1 >北中 健太</h1><img src="../assets/icon/twitter.png" alt=""><img style="margin-left:8px;" src="../assets/icon/instagram.png" alt=""></div>
                <p>カメラマン/バー店主/コミュニティ運営</p>
                <p>1992年生、和歌山県出身。5年勤めた部品商社を退職後、飲食未経験からミュージック&ゲームバーをオープン。
                    店舗経営を行いながらクリエイターとしても活動し、現在は写真撮影と映像制作を中心に活動中。
                    また、社会人のうつ病を防ぐための活動として500人規模のコミュニティ運営も行う
                </p>
                <div class="in">
                    <p><a href="#">店舗運営</a></p>
                    <p><a href="#">クリエイティブ</a></p>
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
               
            

                <div class="panel">

                    <div class="clear"></div>

               
                </div>

                <h2 class="free big">Career</h2>
                <div class="career">
                    <div class="career_grid">
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
                <div class="schedule">
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
</template>

<script>

　　 
    export default {
        mounted() {
            this.fetchLancers(),
            this.firstMove()
        },
        data() {
            return {
                lancers: []
            }
        },
        methods: {
            fetchLancers() {
                var id = this.$route.params['id']
                // var id = this.$route.query.itemId
                return axios.get('/api/lancer/'+id)
                .then(res =>  {
                    console.log(res.data);
                    this.lancers = res.data
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
                        this.lancers = res.data　
                        // this.$set(this.lancers, res.data);
                    }) 
                    
                    
                }
            
            }
        }

    }
</script>