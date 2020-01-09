<template>
    <div class="bg-color">
        <div class="container py-3">

            <footer class="page-footer font-small">

                <div class="row text-color">
                    <div class="col">
                        <p class="text-left my-auto">©{{ new Date().getFullYear() }} @ IGNI Studios All Rights Reserved</p>

                    </div>
                    <div class="col">
                        <p class="text-right my-auto">Website by IGNI Studios</p>
                    </div>
                </div>

            </footer>

        </div>
    </div>
</template>

<script>
    export default {
        name: "FooterComponent"
    }
</script>

<style scoped>

    .bg-color
    {
        background-color: #2B2B2B;
    }

    .text-color
    {
        color: #707070;
    }

</style>
