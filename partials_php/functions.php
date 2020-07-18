
<!-- Funzione per stampare gli album -->
<!-- richiede un array contenente i dati da stampare -->
<!-- ritorna. la stampa a schermo in un  tag li -->

<?php function print_albums($database){

  $output = '';
  foreach ($database as $album) {
    $output .= '<li class="single_album">';
    $output.= '<img  src ='. $album['poster']. '>';
    $output.= '<h2>' . $album['title'] . '</h2>';
    $output.= '<span>' . $album['author'] . '</span>';
    $output.= '<span>' . $album['year'] . '</span>';
    $output .= '</li>';

  }

  return $output;
}

?>



<!-- Funzione per trovare gli artisti -->
<!-- richiede un array contente il nome da cercare -->
<!-- ritorna solo gli album dell'artista cercato -->

<?php function find_artist($database){ ?>

<!-- Con un tag inline di JS, svuoto il container prima di effettuare la ricerca -->
<script type="text/javascript">
  document.getElementById('album_container').innerHTML = "";
</script>

<!-- Recupero il nome dell'artista inserito nella query string  -->
<!-- tramite query "artist" -->
<?php  $artist_name = $_GET["artist"];

  $output_artist = '';

  // Eseguo il ciclo foreach per trovare l'artista in questione
  foreach ($database as $database_item) {

   $artists =  $database_item["author"];

    // Confronto la parola inserita se fa parte del database del nome degli artisti
    if ($artists == $artist_name) {
      // Produco gli elementi HTML da popolare nel container
      $output_artist.= '<li class="single_album">';
      $output_artist.= '<img  src ='. $database_item['poster']. '>';
      $output_artist.= '<h2>' . $database_item['title'] . '</h2>';
      $output_artist.= '<span>' . $database_item['author'] . '</span>';
      $output_artist.= '<span>' . $database_item['year'] . '</span>';
      $output_artist.= '</li>';
    }

  }
  // Restituisco l'artista trovato
  return $output_artist;
}

?>
