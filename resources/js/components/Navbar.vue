<template>
　 <nav class="navbar">
   
    <RouterLink class="navbar__brand free" to="/">
      <h1>EVIS <span style="font-size:12px;">~多種多様なワークスタイルを知るメディアサイト~</span></h1>
    </RouterLink>

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