<?php
function startUserSession($user) {
  session_start();
  $_SESSION["user"] = $user;
  $_SESSION["shoppingCart"] = [];
}

// function userIsRegistered($name) {
//   $db = connectToDataBAse();
//   // Get Input From User Which Is The User`s Password
//   $select = $db->prepare('SELECT password FROM user WHERE name = ?');
//   // var_dump($query);
//   $select->execute([$name]);
//    // Fetch The Hashed Password From Your Database
//   $hashedPassword = $select->fetch(PDO::FETCH_ASSOC);
//   var_dump($hashedPassword);
//
//   $correctPassword = password_verify($_POST["password"], $hashedPassword);
//   $select->closeCursor();
//   if($hashedPassword === $correctPassword ){
//     return true;
//   }
// }

//  function to start session if the user is signup
function userSignUp($form){
  if(((preg_match("/([a-zA-Z0-9]){3,}/", $form["name"])) === "1") && ($form["password"] === $form["confirmedPassword"]) && (preg_match("/(?=.*\d)(?=.*[A-Z]).{6,}$/", $form["password"])) && ($form["sexe"] !== "Sexe")){
    startUserSession($user);
    return true;
  }
}
// function to know if we have more than 3 chars in the name's field
function moreThanThreeChar($form){
  if(preg_match("/([a-zA-Z0-9]){3,}/", $form['name']) === 0){
     return "2";
  }
}
// function to know if the password are the same
function samePassword($form){
  if (($form["password"] !== $form["confirmedPassword"])){
    return "1" ;
  }
}

// function to have the errors'codes for at least one number? one uppercase? six chars?
function atLeastOneNumberAndOneUppercaseandSixChars($form){
  if((preg_match("/(?=.*\d)(?=.*[A-Z]).{6,}$/", $form["password"])) === 0){
    $code = "";
    $code .= atLeastOneNumber($form);
    $code .= atLeastOneUpperCase($form);
    return $code .= atLeastSixChars($form);
  }
}

function atLeastOneNumber($form){
    if((preg_match("/(?=.*\d)/", $form["password"])) === 0){
      return "5";
    }
}

function atLeastOneUpperCase($form){
  if((preg_match("/(?=.*[A-Z])/", $form["password"])) === 0){
    return "4";
  }
}

function atLeastSixChars($form){
  if((preg_match("/(\w+){6,}/", $form["password"])) === 0){
    return "3";
  }
}

function emptyInput($form){
  if(empty($form['name']) || empty($form['password']) || empty($form['confirmedPassword']) || $form["sexe"] === "Sexe"){
    return "0";
  }
}

// function to have a string with errors'code
function checkResgistration($form){
  $code = "";
  $code .= emptyInput($form);
  $code .= moreThanThreeChar($form);
  $code .= samePassword($form);
  return $code .= atLeastOneNumberAndOneUppercaseandSixChars($form);
}

 ?>
