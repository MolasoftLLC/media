<template>
  <div id="app" class="container">
      <div class="container_max">
    <div class="container_crip"><img src="../assets/etc/clip.png" alt=""></div>
    <a name="session" ></a>
   
    <h1 class="free">Talk session</h1>
    <p class="free" style="padding-bottom: 12px;">フリーランサー・起業家の生の声を聴く</p>

    <img src="../assets/etc/clip3.jpg" alt="" class="animated" data-animate="fadeInUp">
    <ul class="talk_event">
        <li  class="talk_event">2019年9月29日(日) 12:30~13:30</li>
        <li  class="talk_event">関西大学梅田キャンパス スタートアップカフェ大阪</li>
        <li  class="talk_event speaker">今回の登壇者</li>
        <img src="../assets/etc/nami2.png" alt="" class="animated" data-animate="rubberBand">
        
        <div v-for="(speaker, id) in speakers" v-bind:key="id">
        <li>  
              <div class="news_img animated" data-animate="rollIn">
                  <RouterLink :to="'/lancer/' + speaker.id">
                      <img :src="'/images/'+speaker.img" width="100%" />
                      <p class="read_more">Read more</p>
                  </RouterLink>
                  <p class="ontext">{{ speaker.name }}<br>{{ speaker.works }}</p>
              </div>
            
            <div v-if="id===2||id===5" class="clear"></div>
        </li>
        </div>
        
        <li  class="talk_event session_entry animated" data-animate="rubberBand" style="margin-top:64px;"><a href="https://0727-2.peatix.com/" target="_blank" style="    text-decoration: none;color: #fefefe;">詳細/申込はこちら</a></li>
    </ul>
    <div style="width: 180px;margin: 32px auto;display: block;">
        <p style="text-align:center; padding:24px;">協賛・協力</p>
        <img src="../assets/etc/startupcafe.png" width="100%" style="padding-right: 24px;"/>
    </div>
    <h2 class="talk_event">毎月大阪で開催されるフリーランサーと直接話せる企画</h2>
    <p class="talk_event" >働き方に迷っている方や、何かしたいけど踏み出せない方のきっかけ作りになればと思い、
      今現在関西で活動しているフリーランサーの生活やバックグラウンドなどを知ることができる座談会を企画しました。</p>
    <h2 class="talk_event">多種多様な働き方を知り、新しいきっかけを。</h2>
    <p class="talk_event" style="padding-bottom:82px;"> フリーランスに憧れているあなたや、働き方を変えようと思っているあなた。
    「雇われずに働く」という新時代のライフスタイルの実現に向けて、まずはフリーランスで活躍されている方のリアルの声に耳を傾けてみませんか。</p>
  </div>
  </div>
</template>

<script>
    export default {
        created() {
            this.fetchSpeakers()
        },
        data() {
            return {
                speakers: [],
            }
        },
        methods: {
            fetchSpeakers() {
                return axios.get('/api/speaker')
                .then(res =>  {
                    this.speakers = res.data
                })
            }
        }
    }
</script>