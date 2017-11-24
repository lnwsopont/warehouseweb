<html>
    <head>
        <title>MUIC Warehouse Project</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/assets/materialize/css/materialize.css">
        <script src="/assets/materialize/js/materialize.min.js"></script>
        <link href="/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>


        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">MUIC Warehouse Project</a>
            </div>
        </nav>

        <div class='container'>
            <div class="row" style="margin-top: 20px;">
                <div class="col s12 center">
                    <a class="waves-effect waves-light btn" href="/">HOME</a>
                    <a class="waves-effect waves-light btn" href='/product'>PRODUCT</a>
                    <a class="waves-effect waves-light btn" href='/history'>HISTORY</a>
                    <a class="waves-effect waves-light btn" href='/booking'>BOOKING</a>
                    <a class="waves-effect waves-light btn" href='/enquiry'>MESSAGE (<?=$notification?>)</a>
                <a class="waves-effect waves-light btn" href='/logout'>logout</a>
                </div>
            </div>

