<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Vincent van Bergen">
    <link rel="shortcut icon" href="../static/favicon.png" type="image/png" />


    <title>{block name=title}Dispuut Baldr{/block}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../static/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="../static/css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Baldr style -->
    <link rel="stylesheet" href="../static/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {literal}
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-62081341-1', 'auto');
            ga('send', 'pageview');

        </script>
    {/literal}

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="../static/img/logo_grey.png" alt="Dispuut Baldr" style="height: 25px;">
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                {include file="menu.tpl" nocache}
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

{block name=content}{/block}

<!--
<footer class="footer">
    <div class="container">
        <p class="text-muted"></p>
    </div>
</footer>
-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../static/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>