<?php



# Include html header
include(APP_VIEW . "/header.php");

# Include main navigation
include(APP_VIEW . "/nav.php");

include(APP_MODEL . "/classInsertLibrary.php");
include(APP_MODEL . "/classQueryLibrary.php");

if ( !empty ( $_POST ) ) {
    if ( $_POST['type'] == 'add' ) {
        $add_friend = $insert->add_friend($_POST['user_id'], $_POST['friend_id']);
    }

    if ( $_POST['type'] == 'remove' ) {
        $remove_friend = $insert->remove_friend($_POST['user_id'], $_POST['friend_id']);
    }
}

$logged_user_id = 1;

if ( !empty ( $_GET['uid'] ) ) {
    $user_id = $_GET['uid'];
    $user = $query->load_user_object($user_id);

    if ( $logged_user_id == $user_id ) {
        $mine = true;
    }
} else {
    $user = $query->load_user_object($logged_user_id);
    $mine = true;
    }

$friends = $query->get_friends($logged_user_id);

include( APP_VIEW ."/view/viewProfile.php" );


		

# Include html footer
include(APP_VIEW . "/footer.php");

    


		
