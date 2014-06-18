<?php



# Include html header
include(APP_VIEW . "/header.php");

# Include main navigation
include(APP_VIEW . "/nav.php");

include(APP_MODEL . "/classInsertLibrary.php");
	
$logged_user_id = 1;
if ( !empty ( $_POST ) ) {
	$add_status = $insert->add_status($logged_user_id, $status_time, $status_content);
}

include( APP_VIEW ."/status/statusView.php" );



# Include html footer
include(APP_VIEW . "/footer.php");


	