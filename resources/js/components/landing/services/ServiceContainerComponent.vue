<template>
    <div id="service-container">

        <div class="container">

            <h2 class="text-color service-header">SERVICES</h2>

            <b-row class="services">

                <b-col class="my-auto">
                    <b-row class="m-5">
                        <GameDevComponent></GameDevComponent>
                    </b-row>
                    <b-row class="m-5">
                        <Visualization></Visualization>
                    </b-row>
                </b-col>

                <b-col class="my-auto">
                    <b-row class="m-5">
                        <WebDevComponent></WebDevComponent>
                    </b-row>
                    <b-row class="m-5">
                        <AppDevComponent></AppDevComponent>
                    </b-row>
                </b-col>

            </b-row>

        </div>

    </div>
</template>

<script>
    import GameDevComponent from './GameDevComponent';
    import Visualization from './VisualizationComponent';
    import AppDevComponent from "./AppDevComponent";
    import WebDevComponent from "./WebDevComponent";

    export default {
        name: "ServiceContainerComponent",
        components: {
            GameDevComponent,
            Visualization,
            AppDevComponent,
            WebDevComponent
        }
    }
</script>

<style scoped>

    #service-container
    {
        overflow: hidden;
        height: 100vh;
        position: relative;
        background: linear-gradient(98deg, #091F3B 50%, #E8E8E8 50%);
    }

    .services
    {
        position: absolute;
        height: 80%;
    }

    .text-color
    {
        color: #FFFFFF;
    }

    .service-header
    {
        padding-top: 6%;
    }

</style>
