<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include("includes.head")
</head>

<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu"
    data-color="bg-gradient-x-purple-blue" data-col="2-columns">
    @include("includes.nav")
    @yield("contenido")
    @include("includes.footer")
    @include("includes.js")
</body>


</html>