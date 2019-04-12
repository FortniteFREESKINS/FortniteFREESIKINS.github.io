<?php
$login = trim($_POST['login']);
$password = trim($_POST['password']);


      if (!$login || !$password )
      {
        echo 'Brak wszystkich danych';
        exit;
      }
      @ $db = new mysqli('sql2.freesqldatabase.com','sql2287835','sql2287835','bV9!gQ8*');
      
      if (mysqli_connect_errno())
      {
        echo 'Połączenie z bazą nie powiodło się. Spóbuj ponownie';
        exit;
      }
      $db->query('SET NAMES utf8');
      $db->query('SET CHARACTER_SET utf8_unicode_ci');
   

?>