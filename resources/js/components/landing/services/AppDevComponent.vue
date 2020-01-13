<template>
    <div id="app-dev">
        <div v-for="post in allposts">
            <div v-if="post.tag == 'services-app'">
                <h2><img src="storage/media/app_logo.svg" alt="logo" /> {{ post.title }}</h2>
                <p>{{ post.body }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: "AppDevComponent",

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
    }

    h2{
        color: #00949F;
    }
</style>
