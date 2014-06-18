<?php



# Include html header
include(APP_VIEW . "/header.php");

# Include main navigation
include(APP_VIEW . "/nav.php");

include(APP_MODEL . "/classInsertLibrary.php");
include(APP_MODEL . "/classQueryLibrary.php");

$logged_user_id = 1;

if ( !empty ( $_POST ) ) {
	$update = $insert->update_user($logged_user_id, $_POST);
}

$user = $query->load_user_object($logged_user_id);


include( APP_VIEW ."/edit/editView.php" );


# Include html footer
include(APP_VIEW . "/footer.php");


	