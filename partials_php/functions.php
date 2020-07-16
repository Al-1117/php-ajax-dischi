
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
