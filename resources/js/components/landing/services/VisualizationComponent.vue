<template>
    <div id="visualization">
        <div v-for="post in allposts">
            <div v-if="post.tag == 'services-3d'" class="text-color">
                <h2>{{ post.title }}</h2>
                <p>{{ post.body }}</p>
            </div>
        </div>

    </div>
</template>


<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: "VisualizationComponent",

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

    .text-color
    {
        color: #FFFFFF;
    }

</style>
