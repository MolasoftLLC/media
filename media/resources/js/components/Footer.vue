<template>
  <footer class="footer slideInRight" style="color:#fefefe; animation-duration: 4s;" >
    <div>
    <!-- <RouterLink to="/" style="color:#fefefe; display:block;">
      <h1><img src="../assets/etc/logo.png" class="main_logo"/><p class="main_copy">-多種多様なワークスタイルを知るメディアサイト -ランスクリップ- </p></h1>
    </RouterLink> -->
    
    <p class="company">運営・問い合わせ</p>
    <a href="https://studio-evis.net" target="_blank" style="color:#fefefe;">
　　 <img src="../assets/etc/evis.png" class="main_logo" style="width:120px; margin:24px 0px;"><p class="main_copy">-新規事業に置ける映像制作とシステム開発ならお任せください- </p></a>
    <div class="clear"></div>
         <!-- <p class="tag_serch" style="color:#fefefe; margin-bottom:24px;">タグで絞り込む</p>
      　 <ul class="tag_grid footer_tag" >
              <li><RouterLink :to="'/tag/' + 'service'" >サービス業</RouterLink></li>
              <li ><RouterLink :to="'/tag/' + 'shop'" >店舗運営</RouterLink></li>
              <li ><RouterLink :to="'/tag/' + 'creative'" >クリエイティブ</RouterLink></li>
              <li ><RouterLink :to="'/tag/' + 'it'" >テクノロジー</RouterLink></li>
              <li ><RouterLink :to="'/tag/' + 'etc'" >その他</RouterLink></li>
        </ul> -->
        <small>Copyright (c) Studio EVIS All Rights Reserved.</small>
    </div>
  </footer>
</template>


<script>
import { mapState, mapGetters } from 'vuex'

export default {
  computed: {
    ...mapState({
      apiStatus: state => state.auth.apiStatus
    }),
    ...mapGetters({
      isLogin: 'auth/check'
    })
  },
  methods: {
    async logout () {
      await this.$store.dispatch('auth/logout')

      if (this.apiStatus) {
        this.$router.push('/login')
      }
    }
  }
}
</script>

