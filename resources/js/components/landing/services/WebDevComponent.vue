<template>
    <div id="game-dev">

        <div v-for="post in allposts">
            <div
                v-scroll-reveal.reset="{
                                rotate:{x:50,},
                                delay: 600,
                                duration: 1000,
                            }"
                v-if="post.tag == 'services-web'">
                <h2><img class="logo-img" src="storage/media/web_logo.svg" alt="logo"/> {{ post.title }}</h2>
                <p>{{ post.body }}</p>
            </div>
        </div>

    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: "WebDevComponent",

        methods:{
            ...mapActions(['fetchPosts']),
        },

        computed: mapGetters(['allposts']),

        created()
        {
            this.fetchPosts();
        }
    }
</script>



<style scoped>
    img {
        width: 26px;
        height: 26px;
        fill: #00949F;
    }

    .logo-img path {
        fill: #00949F;
    }

    h2{
        color: #00949F;
    }

</style>
