<?php
$MessageManager = new MessageManager($db);
$messages = $MessageManager->getAll(10);
$count = sizeof($messages)-1;
while ( isset($messages[$count]) )
{
	$message = $messages[$count];
	$date = date( "H:i" , strtotime($message->getCreateDate()));
	if( $message->getUser()->getId() == $_SESSION['id'] )
		require('module/message/views/MessageConnect.phtml');		
	else
		require('module/message/views/Message.phtml');
	$count--;
}	
?>