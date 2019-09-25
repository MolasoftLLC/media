<template>
  <div id="contact">
  <nav class="navbar" style="top:7rem; height:7rem; background: none;" v-bind:class="{scroll_none: scrollY > 1200}">
   
    <ul class="nav_link">
      <li  class="nav_link"> <a class="deco_none" href="#interview"> <img src="../assets/icon/file_wh.png"   class="icon" /><br>インタビュー記事</a></li>
      <li  class="nav_link"><a class="deco_none" href="#session"><img src="../assets/icon/mic_wh.png"  class="icon"/><br>講演会</a></li>
    </ul>
    <div class="clear"></div>
      
  </nav>
  </div>
</template>


<script>
  export default {

  data() {
      return {
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
    // 違和感のない程度に200ms間隔でscrollデータを更新する例
    handleScroll() {
      if (this.timer === null) {
        this.timer = setTimeout(function () {
          this.scrollY = window.scrollY
          clearTimeout(this.timer)
          this.timer = null
        }.bind(this), 200)
      }
    }
  }
}
</script>	