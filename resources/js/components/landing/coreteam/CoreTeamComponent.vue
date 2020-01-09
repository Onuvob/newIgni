<template>
    <div id="core-team">

        <div class="container">
            <h2>CORE TEAM</h2>

<!--            <b-row class="">-->
<!--                <div v-for="post in allposts" class="m-auto text-center">-->
<!--                    <b-col v-if="post.tag == 'core-team'" >-->

<!--                        <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>-->
<!--                        <h4>{{ post.title }}</h4>-->
<!--                        <p>{{ post.body }}</p>-->

<!--                    </b-col>-->
<!--                </div>-->

<!--            </b-row>-->
            <div class="team-details">
                <b-row class="text-center">

                    <b-col class="my-auto">
                        <b-img class="my-auto" v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>
                        <h4 class="my-auto">MAHMUDUL HASAN</h4>
                        <p class="my-auto">CO-FOUNDER & LEAD GAME DEVELOPER</p>
                    </b-col>

                    <b-col class="my-auto">
                        <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>
                        <h4>ARITRA CHAKLADER</h4>
                        <p>CO-FOUNDER & LEAD GAME DESIGNER</p>
                    </b-col>

                    <b-col class="my-auto">
                        <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>
                        <h4>RAISUL HASAN SHAHRUKH</h4>
                        <p>CEO & MARKETING LEAD</p>
                    </b-col>

                </b-row>
            </div>

        </div>

    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: "CoreTeamComponent",

        methods:{
            ...mapActions(['fetchPosts']),
        },

        computed: mapGetters(['allposts']),

        created()
        {
            this.fetchPosts();
        },

        data() {
            return {
                mainProps: { blank: true, blankColor: '#777', width: 75, height: 75, class: 'm1' }
            }
        }
    }
</script>

<style scoped>
    #core-team
    {
        height: 100vh;
        background: linear-gradient(98deg, #FFFFFF 90%, #E8E8E8 10%);

    }
</style>
