<template>
    <div class="more_container">
        
        <div id="app" class="container container_sub slideInRight">
            <div class="container_max">
            <div class="container_crip"><img src="../assets/etc/clip.png" alt=""></div>
            <div class="more_left fuwafuwa"  ><RouterLink :to="'/tag/all'"><span>◀︎</span><br>more</RouterLink></div>
            <div class="more_right  fuwafuwa" ><RouterLink :to="'/tag/all'"><span>▶︎</span><br>more</RouterLink></div>
            <a name="interview" ></a>
            <div class="header_adjust"></div>
    
            <h1 class="free">Search</h1>
            <p class="search">{{ tag }}での検索結果</p>
            <p class="search" style="padding:12px;">{{count}}人がクリップされました！</p>
            <img src="../assets/etc/nami2.png" alt="" class="rubber">

            <div class="panel" v-show="tab === 1">
                <div v-for="(lancer, id) in tags" v-bind:key="id">
                    <div class="news_img slideInRight" >
                    <!-- 要実装 -->
                        <div v-if="lancer.id !== 100"> 
                            <RouterLink :to="'/lancer/' + lancer.id" >
                                <img :src="'/images/'+lancer.img" width="100%" />
                                <p class="read_more">Read more</p>
                            </RouterLink>
                            <p class="ontext">{{ lancer.tags }}</p>
                        </div>
                    </div>
                    <div v-if="id===2||id===5" class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
          　 <p class="tag_serch ">タグで絞り込む</p>
        　   <ul class="tag_grid animated" data-animate="fadeInUp">
                  <li class="tagimg"><RouterLink :to="'/tag/' + 'service'" ><img src="../assets/etc/ser.png" alt="" ><br><span class="tagname">サービス業</span></RouterLink></li>
                  <li class="tagimg"><RouterLink :to="'/tag/' + 'shop'" ><img src="../assets/etc/shop.png" alt="" > <br>店舗運営</RouterLink></li>
                  <li class="tagimg"><RouterLink :to="'/tag/' + 'creative'" ><img src="../assets/etc/pen.png" alt="" ><br>クリエイティブ</RouterLink></li>
                  <li class="tagimg"><RouterLink :to="'/tag/' + 'it'" ><img src="../assets/etc/it.png" alt="" ><br>テクノロジー</RouterLink></li>
                  <li class="tagimg"><RouterLink :to="'/tag/' + 'etc'" ><img src="../assets/etc/ques.png" alt="" ><br>その他</RouterLink></li>
            </ul>
        </div>
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
                tags: [],
                tab: 1,
                tag: 'all',
                count: 0

            }
        },
        methods: {
            fetchLancers() {
                var tag = this.$route.params['tag']
                this.tag = tag;
                // var id = this.$route.query.itemId
                console.log(tag);
                return axios.get('/api/search/'+tag)
                .then(res =>  {
                    console.log(res.data);
                    this.tags = res.data;
                    this.count = res.data.length;

                })
            },
        },
        watch: {
            '$route': function (to, from) {
                if (to.path !== from.path) {
                    
                    var tag = this.$route.params['tag']
                    this.tag = tag;
                    return axios.get('/api/search/'+tag)
                   .then(res =>  {
                        console.log(res.data);
                        this.tags = res.data　
                        this.count = res.data.length;
                        // this.$set(this.lancers, res.data);
                    }) 
                    
                    
                }
            
            }
        }

    }
</script>