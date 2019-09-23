<style>

.v-enter-active, .v-leave-active {
  transition: all .5s ease;
}
.v-enter, .v-leave-to {
  opacity: 0;
  transform: translateY(30px);
}

</style>

<template>
    <div>
        <header>
            <Navbar  />
            <Linkbar />
        </header>

        <main>
            <div>
                <transition mode="out-in">
                     <RouterView />
                </transition>
            </div>

            <div >
                <transition mode="out-in">
                    <RouterView name="talkComponents"/>
                </transition>
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
