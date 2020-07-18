<!-- Includo il database nel file index.PHP -->
<?php include __DIR__ .'/database.php';?>
<?php include __DIR__ .'/functions.php';?>


<main>

  <!-- Inizializzo un ciclo foreach per stampare tutti dischi  -->
  <!-- nell'array database nella pagina -->
  <div class="container">
    <ul class="album_container" id="album_container">
        <?php echo print_albums($database) ?>
      <?php echo find_artist($database) ?>
    </ul>
  </div>


</main>
