<!-- Includo il database nel file index.PHP -->
<?php include 'database.php';?>
<?php include 'functions.php';?>


<main>

  <!-- Inizializzo un ciclo foreach per stampare tutti dischi  -->
  <!-- nell'array database nella pagina -->

  <ul>
    <?php echo print_albums($database) ?>
  </ul>


</main>
