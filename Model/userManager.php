<?php
function addUser($user){
  $db = connectToDataBAse();
  $query = $db->prepare('INSERT INTO user(name, sexe, status, password) VALUES(:name, :sexe, :status, :password)');
  $result = $query->execute(array(
      "name" => $user["name"],
      "sexe" => $user["sexe"],
      "status" =>  "user",
      "password" => $user["password"]));
  return $result;
  $query->closeCursor();
}

function getUser($name){
  $db = connectToDataBAse();
  $select = $db->prepare("SELECT * FROM user WHERE name= ?");
  $select->execute([$name]);
  $user = $select->fetch(PDO::FETCH_ASSOC);
  if ($user){
    return true;
  }
}

function getUsers(){
  $db = connectToDataBAse();
  $select = $db->query('SELECT * FROM user');
  $users = $select->fetchAll(PDO::FETCH_ASSOC);
  return $users;
}

function getUserPassword($name){
  $db = connectToDataBAse();
  $select = $db->prepare("SELECT * FROM user WHERE name= ?");
  $select->execute([$name]);
  $user = $select->fetch(PDO::FETCH_ASSOC);
  $hashedPassword = $user["password"];
  return $hashedPassword;
}
 ?>
