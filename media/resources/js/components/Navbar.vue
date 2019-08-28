<template>

　 <nav class="navbar">
    <RouterLink class="navbar__brand free" to="/">
      <h1><img src="../assets/etc/logo.png" class="main_logo"/><span class="main_copy">多種多様なワークスタイルを知るメディアサイト -ランスクリップ- </span></h1>
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