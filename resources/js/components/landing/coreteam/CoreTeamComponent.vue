<template>
    <div id="core-team">

        <div class="container">
            <h2>CORE TEAM</h2>

            <b-row class="text-center">

                <b-col class="">
                    <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>
                    <h2>MAHMUDUL HASAN</h2>
                    <h4>CO-FOUNDER & LEAD GAME DEVELOPER</h4>
                </b-col>

                <b-col class="">
                    <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>
                    <h2>ARITRA CHAKLADER</h2>
                    <h4>CO-FOUNDER & LEAD GAME DESIGNER</h4>
                </b-col>

                <b-col class="">
                    <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>
                    <h2>RAISUL HASAN SHAHRUKH</h2>
                    <h4>CEO & MARKETING LEAD</h4>
                </b-col>

            </b-row>
        </div>

    </div>
</template>

<script>
    export default {
        name: "CoreTeamComponent",
        data() {
            return {
                mainProps: { blank: true, blankColor: '#777', width: 75, height: 75, class: 'm1' }
            }
        }
    }
</script>

<style scoped>
    /*#core-team*/
    /*{*/
    /*    height: 100vh;*/
    /*}*/
</style>
