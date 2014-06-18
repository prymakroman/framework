<?php



# Include html header
include(APP_VIEW . "/header.php");

# Include main navigation
include(APP_VIEW . "/nav.php");

include(APP_MODEL . "/classInsertLibrary.php");
include(APP_MODEL . "/classQueryLibrary.php");

$logged_user_id = 1;

if ( !empty ( $_POST ) ) {
	$send_message = $insert->send_message($message_time, $message_sender_id, $message_recipient_id, $message_subject, $message_content);
}

$friend_ids = $query->get_friends($logged_user_id);

foreach ( $friend_ids as $friend_id ) {
	$friend_objects[] = $query->load_user_object($friend_id);
}



include( APP_VIEW ."/compose/composeView.php" );


# Include html footer
include(APP_VIEW . "/footer.php");


	