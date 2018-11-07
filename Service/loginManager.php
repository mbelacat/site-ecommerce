<?php

function userIsRegistered($users, $form) {
  foreach ($users as $user) {
    if($user["name"] === $form["name"] && $user["password"] === $form["password"]) {
      //Si c'est le cas on démarre une session pour y stocker les informations de l'utilisateur
      startUserSession($user);
      return true;
    }
  }
}

function startUserSession($user) {
  session_start();
  $_SESSION["user"] = $user;
  $_SESSION["shoppingCart"] = [];
}

 ?>
