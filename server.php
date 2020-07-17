

<?php include __DIR__ .'/partials_php/database.php';


  $database_json = json_encode($database);

  header('Content-Type: application/json');

  echo($database_json);

?>
