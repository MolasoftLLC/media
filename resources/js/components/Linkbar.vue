<template>
  <nav class="navbar" style="top:7rem; height:7rem; background-color:#3e84a8;">
    <ul class="nav_link">
      <li  class="nav_link"> <a class="deco_none" href="#interview"> <img src="../assets/icon/page.png"   class="icon" /><br>インタビュー記事</a></li>
      <li  class="nav_link"><a class="deco_none" href="#session"><img src="../assets/icon/session.png"  class="icon"/><br>講演会</a></li>
    </ul>
  </nav>
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