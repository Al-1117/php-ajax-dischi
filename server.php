
  
<?php include __DIR__ .'/partials_php/database.php';

  // Converto i dati in formato JSON per essere facilmente manipolabile da
  // altre piattaforme

  $database_json = json_encode($database);


  header('Content-Type: application/json');

  echo($database_json);

?>
