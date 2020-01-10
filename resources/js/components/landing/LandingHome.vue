<template>
    <div id="landing">
        <b-carousel
            >

            <b-carousel-slide
                caption="First slide"
                img-src="https://picsum.photos/1024/480/?image=10">
            </b-carousel-slide>

            <b-carousel-slide
                caption="Second Slide"
                img-src="https://picsum.photos/1024/480/?image=12">
            </b-carousel-slide>

            <b-carousel-slide
                caption="Third Slide"
                img-src="https://picsum.photos/1024/480/?image=22">
            </b-carousel-slide>

        </b-carousel>
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>
    #landing
    {
        height: 100vh;
    }
</style>
