<?php
  require_once 'credential.php';
  $connection = new mysqli($hn, $un, $pw, $db);

  //check connection
  if ($connection->connect_error)
    die($connection->connect_error);

  $query = "CREATE TABLE users (
    username VARCHAR(32),
    password VARCHAR(32),
    
    )";
  $result = $connection->query($query);
  if (!$result)
    die($connection->error);

    $connection->close();

    echo 'Table created';

?>