<?php
// Check for empty fields
if(empty($_POST['message']))
   {
	echo "Напишите что-нибудь";
	return false;
   }

return true;			
?>