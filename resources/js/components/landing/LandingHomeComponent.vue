<template>
    <header class="v-header container">

        <div class="fullscreen-video-wrap">
            <video autoplay loop muted playsinline id="video">
                <source src="storage/media/promo.mp4" type="video/mp4">
            </video>
        </div>

    </header>
</template>

<script>
    export default {
        name: "Test"
    }
</script>

<style scoped>

    .v-header
    {
        height: 100vh;
        display: flex;
        align-items: center;
        color: white;
    }

    .fullscreen-video-wrap
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .fullscreen-video-wrap video
    {
        min-width: 100%;
        min-height: 100%;
    }

    #video
    {
        /*position: fixed;*/
        max-height: 400px;
        min-width: 100%;
        object-fit: fill;
    }
    .header-content h1
    {
        font-size: 50px;
        margin-bottom: 0;
    }

    .header-content p
    {
        font-size: 1.5rem;
        display: block;
        padding-bottom: 2rem;
    }

</style>
