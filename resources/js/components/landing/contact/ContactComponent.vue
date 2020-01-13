<template>
    <div id="contact-landing" class="">
        <div class="container">

            <b-row class="contact-details">
                <b-col>
                    <h3 v-scroll-reveal.reset="{
                    rotate:{x:50,},
                    delay: 200,
                    duration: 1000,
                    }">HAVE ANY QUERIES?</h3><br>
                    <h4 v-scroll-reveal.reset="{
                                rotate:{x:50,},
                                delay: 400,
                                duration: 1000,
                            }" class="text-color">FEEL FREE TO CONTACT US ANYTIME</h4><br>
                    <h4 v-scroll-reveal.reset="{
                                rotate:{x:50,},
                                delay: 500,
                                duration: 1000,
                            }">ignistudiosbd@gmail.com</h4>
                </b-col>

                <b-col class="">

                </b-col>
            </b-row>

        </div>
    </div>
</template>

<script>
    export default {
        name: "ContactComponent",
    }
</script>



<style scoped>
    #contact-landing
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
