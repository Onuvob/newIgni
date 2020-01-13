<template>
    <div id="igni-about">

        <b-row class="about-igni">
            <b-col class="about-col-1 img-hover-zoom">
                <img src="storage/media/about_image.png" alt="Flowers in Chania" width="460" height="345">
            </b-col>

            <b-col class="my-auto">
                <div v-for="post in allposts">
                    <div v-if="post.tag == 'about'" class="m-5">
                        <h2 class="text-color-title"><img class="my-auto" src="storage/media/icon.png" alt="logo" /> {{ post.title }}</h2>
                        <p class="text-color-body" v-html="post.body"></p>
                    </div>
                </div>
            </b-col>
        </b-row>

    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: "IgniAboutComponent",

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

    #igni-about {
        position: relative;
        height: 100vh;
        background: #091F3B;
    }

    .about-igni {
        height: 100%;
        position: absolute;
    }

    .text-color-title {
        color: #00FFEE;
    }

    .text-color-body {
        color: #FFFFFF;
    }

    .about-col-1 img{
        height: 100%;
        width: 100%;
    }

    /* [1] The container */
    .img-hover-zoom {
        /* [1.1] Set it as per your need */
        overflow: hidden; /* [1.2] Hide the overflowing of child elements */
    }

    /* [2] Transition property for smooth transformation of images */
    .img-hover-zoom img {
        transition: transform .5s ease;
    }

    /* [3] Finally, transforming the image when container gets hovered */
    .img-hover-zoom:hover img {
        transform: scale(1.5);
    }

    .row {
        margin-right: 0px;
    }

    .text-color-title img {
        width: 35px;
        height: 35px;
    }


</style>
