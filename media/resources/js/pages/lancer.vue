<template>
  <div id="app">
       <a name="interview" ></a>
    <div class="header_adjust"></div>
   
  <h1 class="free">Freelance file.1   Kenta Kitanaka</h1>
  <p>店舗経営/カメラマン</p>


　<div class="panel">
  
   <div class="interview_img">
  <img src="../assets/person/kenta.jpg" width="100%" />
  </div>

  <div class="clear"></div>

    <h2 class="free big">about</h2>
    <p class="interview_p">1992年生、和歌山県出身。5年勤めた部品商社を退職後、飲食未経験からミュージック&ゲームバーをオープン。
店舗経営を行いながらクリエイターとしても活動し、現在は写真撮影と映像制作を中心に活動中。
また、社会人のうつ病を防ぐための活動として500人規模のコミュニティ運営も行う</p>
</div>
<div v-for="(lancer, id) in lancers" v-bind:key="id">
        <h1>
            <router-link :to="'/lancer/' + lancer.id">{{ lancer.title }}</router-link>
        </h1>
        <p>
            {{ lancer.content }}
        </p>
</div>


  </div>
</template>

<script>
　　 
    export default {
        mounted() {
            this.fetchLancers()
        },
        data() {
            return {
                lancers: []
            }
        },
        methods: {
            fetchLancers() {
                var id = this.$route.params['id']
                // var id = this.$route.query.itemId
                return axios.get('/api/lancer/'+id)
                .then(res =>  {
                    console.log(res.data);
                    this.lancers = res.data
                })
            }
        },
        watch: {
            '$route': function (to, from) {
                if (to.path !== from.path) {
                    
                    var id = this.$route.params['id']
                    return axios.get('/api/lancer/'+id)
                   .then(res =>  {
                        console.log(res.data);
                        this.lancers = res.data　
                        // this.$set(this.lancers, res.data);
                    }) 
                    
                    
                }
            
            }
        }

    }
</script>