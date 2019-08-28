<template>
  <div>
    <header>
      <Navbar />
      <Linkbar />
    </header>

    <main>

      <div class="container" >
         <RouterView />
      </div>

      <div class="container">
        <RouterView name="talkComponents"/>
      </div>

      
    </main>
    
    <Footer />
  </div>
</template>




<script>
import Navbar from './components/Navbar.vue'
import Linkbar from './components/Linkbar.vue'
import Footer from './components/Footer.vue'

export default{
    components: {
        Navbar,
        Footer,
        Linkbar
    },
    computed: {

    },

    watch: {

    }

}

</script>
