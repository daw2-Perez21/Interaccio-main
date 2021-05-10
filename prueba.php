<?php
require("message.php");
$query = "
	UPDATE chat_message 
	SET status = '2' 
	WHERE chat_message_id = '".$_POST["chat_message_id"]."'
	";


$b=2;


$a = new Message($bd, $b);
$a->setStatus(2)->save();

?>

