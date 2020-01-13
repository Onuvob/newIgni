<template>
    <div id="core-team">

        <div class="container core-team-details my-auto">
            <h2>CORE TEAM</h2>

            <b-row class="team">
                <div v-for="post in allposts" class="m-auto text-center">
                    <b-col v-if="post.tag == 'core-team'">

                        <b-img class="core-team-image" v-bind:src="'storage/media/' + image" rounded="circle" alt="Circle image"></b-img>
                        <h4 class="title-color">{{ post.title }}</h4>
                        <p>{{ post.body }}</p>

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
        },

        data() {
            return {
                image: 'aritra_chaklader.jpg'
            }
        },
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

    .team-body {
        color: #5D5D5D;
    }

    .core-team-image{
        height: 150px;
        width: 150px;
    }

</style>
