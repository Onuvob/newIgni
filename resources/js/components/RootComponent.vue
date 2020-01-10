<template>
    <div>
        <Navigation></Navigation>
        <Test></Test>
        <!--        <Landing></Landing>-->
        <About></About>
        <Services></Services>
        <CoreTeam></CoreTeam>
        <Contact></Contact>
        <Footer></Footer>
    </div>

</template>

<script>

    import Navigation from './landing/navigation/NavigationComponent';
    import Landing from './landing/LandingHomeComponent';
    import Test from './landing/navigation/Test';
    import About from './landing/about/IgniAboutComponent';
    import Services from './landing/services/ServiceContainerComponent';
    import CoreTeam from './landing/coreteam/CoreTeamComponent';
    import Contact from './landing/contact/ContactComponent';
    import Footer from './FooterComponent';


    export default {
        name: "RootComponent",

        components: {
            Navigation,
            Landing,
            About,
            Services,
            CoreTeam,
            Contact,
            Footer,
            Test,
        }
    }
</script>

<style scoped>

</style>
