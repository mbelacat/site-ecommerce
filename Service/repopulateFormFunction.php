<?php
function startFormSession($form) {
  session_start();
  $_SESSION["form"] = $form ;
}

function postFormIsNotEmpty($form) {
    if(!empty($form)){
      startFormSession($form);
      return true;
  }
}
?>
