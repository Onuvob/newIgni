<template>
    <div id="service-container" class="bv-example-row">

        <h2>SERVICES</h2>

        <b-row>

            <b-col>
                <b-row class="bg-dark test">
                    <GameDevComponent></GameDevComponent>
                </b-row>
                <b-row class="bg-info test">
                    <Visualization></Visualization>
                </b-row>
            </b-col>

            <b-col>
                <b-row class="bg-dark test">
                    <WebDevComponent></WebDevComponent>
                </b-row>
                <b-row class="bg-info test">
                    <GameDevComponent></GameDevComponent>
                </b-row>
            </b-col>

        </b-row>

    </div>
</template>

<script>
    import GameDevComponent from './GameDevComponent'
    import Visualization from './3DVisualizationComponent'
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
        height: 100vh;
    }

</style>
