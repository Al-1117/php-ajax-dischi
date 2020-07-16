
<!-- Includo il database nel file index.PHP -->
<?php include 'database.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi musicali</title>
  </head>
  <body>

    <!-- Inizializzo un ciclo foreach per stampare tutti dischi  -->
    <!-- nell'array database nella pagina -->
    <?php foreach ($database as $album){ ?>
      <ul class="disc_container">
        <li class="single_album">
          <h2><?php echo $album['title']?></h2>
          <span><?php echo $album['author']?></span>
          <span><?php echo $album['year']?></span>
          <img src="<?php echo $album['poster']?>" alt="">
        </li>
      </ul>
    <?php } ?> 

  </body>
</html>
