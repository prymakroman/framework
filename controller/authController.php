<?php

switch ( $_GET["a"] ) {

    case "login":
        include( APP_VIEW ."/auth/loginView.php" );
        break;
}
