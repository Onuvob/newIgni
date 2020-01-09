<template>
    <div id="contact-container" class="">
        <div class="container">

            <b-row class="contact-details">
                <b-col>
                    <h2>HAVE ANY QUERIES?</h2><br>
                    <h3 class="text-color">FEEL FREE TO CONTACT US ANYTIME</h3><br>
                    <h4>ignistudiosbd@gmail.com</h4>
                </b-col>

                <b-col class="">

                </b-col>
            </b-row>

        </div>
    </div>
</template>

<script>
    export default {
        name: "ContactComponent"
    }
</script>

<style scoped>
    #contact-container
    {
        height: 100vh;
        background: linear-gradient(98deg, #E8E8E8 50%, #091F3B 50%);
    }

    .contact-details
    {
        padding-top: 10%;
    }

    .text-color
    {
        color: #00949F;
    }
</style>
