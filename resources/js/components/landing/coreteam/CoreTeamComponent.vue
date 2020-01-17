<template>
    <div id="team-landing">

        <div class="container core-team-details my-auto">
            <h2>CORE TEAM</h2>

            <b-row class="team">
                <div v-for="post in allposts" class="m-auto text-center">
                    <b-col v-if="post.tag == 'core-team'">

                        <b-img
                            v-scroll-reveal="{
                                distance: '50px', duration: 1000, easing: 'ease',
                                reset: true,
                                viewFactor: 0.4,
                            }" class="core-team-image" :src="'storage/'+post.image" rounded="circle" alt="Circle image"></b-img>
                        <h4 v-scroll-reveal.reset="{
                                rotate:{x:50,},
                                delay: 500,
                                duration: 1000,
                            }" class="title-color">{{ post.title }}</h4>

                        <p v-scroll-reveal.reset="{
                                rotate:{x:50,},
                                delay: 500,
                                duration: 1000,
                            }">{{ post.body }}</p>

                    </b-col>
                </div>

            </b-row>

        </div>

    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: "CoreTeamComponent",

        methods: {
            ...mapActions(['fetchPosts']),
        },

        computed: mapGetters(['allposts']),

        created() {
            this.fetchPosts();
        }
    }
</script>

<style scoped>

    #team-landing {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    #team-landing:after {
        background: white;
        position: absolute;
        content: '';
        height: 100vh;
        top: 0;
        left: 53px;
        right: 53px;
        -webkit-transform: skew(-9deg);
        -moz-transform: skew(-9deg);
        -o-transform: skew(-9deg);
        z-index: -1;
    }

    .core-team-details {
        padding-top: 6%;
    }

    .team {
        position: absolute;
        height: 70%;
    }

    .title-color {
        color: #00949F;
    }

    .core-team-image{
        height: 150px;
        width: 150px;
    }

</style>
