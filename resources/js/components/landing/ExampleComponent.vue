<template>
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <video autoplay muted loop id="bkgrdVideo">
                        <source src="https://youtu.be/Z0wYyaR7G-8" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


