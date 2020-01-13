<template>
    <nav class="navbar navbar-expand-md navbar-light fixed-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto nav-bg p-2">
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link" href="#home">IGNI STUDIOS</a>
                </li>

                <li class="nav-item active  mr-3 ml-3">
                    <a class="nav-link" href="#home">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link" href="#about-landing">ABOUT US</a>
                </li>
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link" href="#services-landing">SERVICES</a>
                </li>
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link" href="#team-landing">TEAM</a>
                </li>
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link" href="#gallery-landing">GALLERY</a>
                </li>
                <li class="nav-item mr-3 ml-3">
                    <a class="nav-link" href="#contact-landing">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>


</template>

<script>
    export default {
        name: "NavigationComponent"
    }
</script>

<style scoped>

    .nav-bg
    {
        background: rgba(2,2,2,0.2);
    }

    .nav-link
    {
        color: #00FFEE !important;
    }

    .nav-bg li:hover
    {
        background: #00A7B4;
        -ms-transform: scale(1.5); /* IE 9 */
        -webkit-transform: scale(1.5); /* Safari 3-8 */
        transform: scale(1.5);
        transition: transform .2s;
    }

</style>




