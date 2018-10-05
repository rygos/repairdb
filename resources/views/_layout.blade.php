<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>RepairDB - @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css"
          media="screen"/>

    <meta property="og:type" content="website"/>

    <script type="text/javascript">
        <!--
        var pixelWidth = screen.width;
        var Pouet = {};
        Pouet.isMobile = false;
        //-->
    </script>
    <script src="/js/app.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js"></script>

    <!--[if lt IE 9]>
    <script src="//ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
    <!--[if IE]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<header>
    <h1>RepairDB</h1>
</header>
<nav id="topbar">
    @include('_partials.navigation')
</nav>
<div id='content'>
    @yield('content')
</div>
<nav id="bottombar">
    @include('_partials.navigation')
</nav>
<footer>
    <ul>
        <li>{{ config('app.name').' - '.config('app.version') }}</li>
    </ul>
</footer>
</body>
</html>

