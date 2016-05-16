<?php 


function redirect($extra)
{
   header('Location:  https://trainservice.herokuapp.com/' . $extra);
   die();
}

?>