<template>
  <div>
  <nav class="navbar" style="top:7rem; height:7rem; background: none;
};">
   
    <ul class="nav_link">
      <li  class="nav_link"> <a class="deco_none" href="#interview"> <img src="../assets/icon/file_wh.png"   class="icon" /><br>インタビュー記事</a></li>
      <li  class="nav_link"><a class="deco_none" href="#session"><img src="../assets/icon/mic_wh.png"  class="icon"/><br>講演会</a></li>
    </ul>
    <div class="clear"></div>
      
  </nav>
  <div class="mainimg_container" style="">
    <img class="mainimg" src="../assets/etc/lance_main.jpg" />
    <img class="mainimg_on" src="../assets/etc/logo.png" />
  </div>
  </div>
</template>


<script>
export default {
  computed: {
    isLogin () {
      return this.$store.getters['auth/check']
    },
    username () {
      return this.$store.getters['auth/username']
    }
  }
}
</script>