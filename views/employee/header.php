<html>
    <ul id="dropdown1" class="dropdown-content">

        <li class="divider"></li>
        <li><a href="/parcel/checkout">Parcel Check-out</a></li>
        <li class="divider"></li>
        <li><a href="/parcel/receive">Parcel Check-In</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">

        <li class="divider"></li>
        <li><a href="/edit/customer">Edit Customer</a></li>
        <li class="divider"></li>
        <li><a href="/edit/employee">Edit Employee</a></li>
    </ul>
    <head>
        <title></title>
        <!-- Compiled and minified CSS -->
        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.myisproject.com/assets/materialize/css/materialize.css">
        <script src="https://www.myisproject.com/assets/materialize/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <nav>
        <div class="nav-wrapper">
            <a href="/employee/index" class="brand-logo center">Employee's Webpage</a>

            <ul class="left hide-on-med-and-down">
                <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Edit<i class="material-icons right">mode_edit</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Parcel<i class="material-icons right">inbox</i></a></li>
                <li><a href="/report">Report<i class="material-icons right">assessment</i></a></li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/logout"><i class="material-icons left">exit_to_app</i>Log out</a></li>
              
            </ul>
        </div>
    </nav>
    <div>
