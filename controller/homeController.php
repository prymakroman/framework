<?php



# Include html header
include(APP_VIEW . "/header.php");

# Include main navigation
include(APP_VIEW . "/nav.php");

include(APP_MODEL . "/classQueryLibrary.php");
	
$logged_user_id = 1;

include( APP_VIEW ."/home/homeSubNav.php" );
include( APP_VIEW ."/home/homeView.php" );


# Include html footer
include(APP_VIEW . "/footer.php");
