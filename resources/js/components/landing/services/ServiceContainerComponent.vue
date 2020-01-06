<template>
    <div id="service-container">

        <div class="container">

            <h2>SERVICES</h2>

            <b-row class="p-4">

                <b-col class="">
                    <b-row class="">
                        <GameDevComponent></GameDevComponent>
                    </b-row>
                    <b-row class="">
                        <Visualization></Visualization>
                    </b-row>
                </b-col>

                <b-col class="">
                    <b-row class="">
                        <WebDevComponent></WebDevComponent>
                    </b-row>
                    <b-row class="">
                        <GameDevComponent></GameDevComponent>
                    </b-row>
                </b-col>

            </b-row>

        </div>

    </div>
</template>

<script>
    import GameDevComponent from './GameDevComponent';
    import Visualization from './3DVisualizationComponent';
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

</style>
