<?php



# Include html header
include(APP_VIEW . "/header.php");

# Include main navigation
include(APP_VIEW . "/nav.php");

include(APP_MODEL . "/classInsertLibrary.php");
include(APP_MODEL . "/classQueryLibrary.php");

$logged_user_id = 1;

$friends = $query->get_friends($logged_user_id);

include( APP_VIEW ."/friends/friendsView.php" );


# Include html footer
include(APP_VIEW . "/footer.php");



	