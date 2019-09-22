<template>
  <div id="app" class="container">
    <a name="session" ></a>
    <div class="header_adjust"></div>
  <h1 class="free">Talk session<span style="font-size:0.3em;">　フリーランサー・起業家の生の声を聴く</span></h1>
      <ul class="tab">
      <li
        class="tab__item"
        :class="{'tab__item--active': tab === 1 }"
        @click="tab = 1"
      >直近開催</li>
       <li
        class="tab__item"
        :class="{'tab__item--active': tab === 2 }"
        @click="tab = 2"
      >2019.8</li>
       <li
        class="tab__item"
        :class="{'tab__item--active': tab === 3 }"
        @click="tab = 3"
      >2019.7</li>
   
    </ul>

　<div class="panel" v-show="tab === 1">
  <h2 class="talk">Freelance Talk Session Kansai -フリーで働くライフスタイル- Vol.1</h2>
  <ul class="talk_event">
  <li  class="talk_event">2019年7月27日 12:00~13:00</li>
  <li  class="talk_event">関西大学梅田キャンパス スタートアップカフェ大阪</li>
  <li  class="talk_event session_entry" style="margin-top:64px;"><a href="https://0727-2.peatix.com/" target="blank" style="    text-decoration: none;
    color: #fefefe;">お申込みはこちらより</a></li>

  </ul>
  
    <h2 class="speaker">今回の登壇予定者</h2>
   <div class="news_img">
  <img src="../assets/person/kenta.jpg" width="100%" />
  <p class="on_name">Kenta Kitanaka</p>
    <p class="on_category">ミュージックバー運営</p>
  <p class="ontext">コミュ二ティの運営で鬱病の無い社会を目指す。</p>
  </div>
   <div class="news_img">
  <img src="../assets/person/mukae.jpg" width="100%"  />
    <p class="on_name">Seigo Mukae</p>
    <p class="on_category">イベントプランナー</p>
  <p class="ontext">楽しいことは探さず、作る派。</p>
  </div>
   <div class="news_img">
  <img src="../assets/person/yukigao.jpg" width="100%"  />
      <p class="on_name">Yukigao</p>
    <p class="on_category">陶芸家</p>
  <p class="ontext">29歳で会社員を辞めて陶芸の道へ。</p>
  </div>

  <div class="clear"></div>


<p class="talk_event" style="padding-top: 112px;">働き方に迷っている方や、何かしたいけど踏み出せない方のきっかけ作りになればと思い、
今現在関西で活動しているフリーランサーの生活やバックグラウンドなどを知ることができる座談会を企画しました。</p>

<p class="talk_event"> フリーランスに憧れているあなたや、働き方を変えようと思っているあなた。
「雇われずに働く」という新時代のライフスタイルの実現に向けて、
まずはフリーランスで活躍されている方のリアルの声に耳を傾けてみませんか。</p>

</div>

   

　<div class="panel" v-show="tab === 2">
  
  <h1 class="free">comming soon</h1>
  <p>8/24 12:00~13:00@関西大学梅田キャンパス</p>

  <div class="clear"></div>

</div>

　<div class="panel" v-show="tab === 3">
  
   <div class="news_img">
  <img src="../assets/person/kenta.jpg" width="100%" />
  <p class="on_name">Kenta Kitanaka</p>
    <p class="on_category">ミュージックバー運営</p>
  <p class="ontext">コミュ二ティの運営で鬱病の無い社会を目指す。</p>
  </div>
   <div class="news_img">
  <img src="../assets/person/mukae.jpg" width="100%"  />
    <p class="on_name">Seigo Mukae</p>
    <p class="on_category">イベントプランナー</p>
  <p class="ontext">楽しいことは探さず、作る派。</p>
  </div>
   <div class="news_img">
  <img src="../assets/person/yukigao.jpg" width="100%"  />
      <p class="on_name">Yukigao</p>
    <p class="on_category">陶芸家</p>
  <p class="ontext">29歳で会社員を辞めて陶芸の道へ。</p>
  </div>

  <div class="clear"></div>

</div>
 <div style="width: 180px;
    margin: 32px auto;
    display: block;">
    <p style="text-align:center; padding:24px;">協賛・協力</p>
    <img src="../assets/etc/startupcafe.png" width="100%" style="padding-right: 24px;"/>
    </div>
</div>

</template>

<script>
export default {
  data () {
    return {
      tab: 1,
    }
  }
}
</script>