<template>
    <div id="core-team">

        <div class="container core-team-details my-auto">
            <h2>CORE TEAM</h2>
<!---->
            <b-row class="team">
                <div v-for="post in allposts" class="m-auto text-center">
                    <b-col v-if="post.tag == 'core-team'" >

                        <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>
                        <h4 class="title-color">{{ post.title }}</h4>
                        <p>{{ post.body }}</p>

                    </b-col>
                </div>

            </b-row>
<!--            <div class="team-details">-->
<!--                <b-row class="text-center team">-->

<!--                    <b-col class="my-auto">-->
<!--                        <b-img class="" v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>-->
<!--                        <h4 class="title-color">MAHMUDUL HASAN</h4>-->
<!--                        <p class="team-body">CO-FOUNDER & LEAD GAME DEVELOPER</p>-->
<!--                    </b-col>-->

<!--                    <b-col class="my-auto">-->
<!--                        <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>-->
<!--                        <h4 class="title-color">ARITRA CHAKLADER</h4>-->
<!--                        <p class="team-body">CO-FOUNDER & LEAD GAME DESIGNER</p>-->
<!--                    </b-col>-->

<!--                    <b-col class="my-auto">-->
<!--                        <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>-->
<!--                        <h4 class="title-color">RAISUL HASAN SHAHRUKH</h4>-->
<!--                        <p class="team-body">CEO & MARKETING LEAD</p>-->
<!--                    </b-col>-->

<!--                </b-row>-->
<!--            </div>-->

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
                mainProps: { blank: true, blankColor: '#777', width: 150, height: 150, class: 'm1' }
            }
        }
    }
</script>

<style scoped>

    #core-team {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }
    #core-team:after {
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

    .core-team-details
    {
        padding-top: 6%;
    }

    .team
    {
        position: absolute;
        height: 70%;
    }

    .title-color
    {
        color: #00949F;
    }

    .team-body
    {
        color: #5D5D5D;
    }

</style>
