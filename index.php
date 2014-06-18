<?php

# Load bootstrap to apply configuration
include("config/bootstrap.php");

# Start session to track user
session_start();

# Route request to desired controller
switch ($_GET["q"]) {

    case "home":
        include( APP_CONTROLLER . "/homeController.php");
        break;

    case "view":
        include( APP_CONTROLLER . "/viewController.php");
        break;

    case "edit":
        include( APP_CONTROLLER . "/editController.php");
        break;

    case "member":
        include( APP_CONTROLLER . "/memberController.php");
        break;

    case "friends":
        include( APP_CONTROLLER . "/friendsController.php");
        break;

    case "feed":
        include( APP_CONTROLLER . "/feedController.php");
        break;

    case "status":
        include( APP_CONTROLLER . "/statusController.php");
        break;

    case "inbox":
        include( APP_CONTROLLER . "/inboxController.php");
        break;

    case "compose":
        include( APP_CONTROLLER . "/composeController.php");
        break;
   
    default:
        include( APP_CONTROLLER . "/homeController.php");
        break;
}