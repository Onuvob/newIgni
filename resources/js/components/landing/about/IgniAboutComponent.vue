<template>
    <div id="igni-about">

        <div class="container">
            <b-row>
                <b-col class="">

                </b-col>

                <b-col class="">
                    <div v-for="post in allposts">
                        <div v-if="post.tag == 'about'">
                            <h2 class="text-color-title">{{ post.title }}</h2>
                            <p class="text-color-body">{{ post.body }}</p>
                        </div>
                    </div>
                </b-col>
            </b-row>
        </div>

    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: "IgniAboutComponent",

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

    #igni-about
    {
        height: 100vh;
        background: linear-gradient(98deg, #E8E8E8 50%, #091F3B 50%);
    }

    .text-color-title
    {
        color: #00FFEE;
    }

    .text-color-body
    {
        color: #FFFFFF;
    }

</style>
