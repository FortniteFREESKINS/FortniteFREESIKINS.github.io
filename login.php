<?php
$login = filter_input(INPUT_POST,['login']);
$password = filter_input(INPUT_POST,['password']);


      if (!$login || !$password )
      {
        echo 'Brak wszystkich danych';
        exit;
      }
      @ $conn = new mysqli('sql2.freesqldatabase.com','sql2287835','sql2287835','bV9!gQ8*');
      
      if (mysqli_connect_errno())
      {
        echo 'Połączenie z bazą nie powiodło się. Spóbuj ponownie';
        exit;
      }else
      {
      $sql = "INSERT INTO dane (id,email, pass)
      VALUES ('', $login, $password)";
      }
   
   $conn->close();

?>