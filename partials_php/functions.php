
<?php function print_albums($database){



  $output = '';
  foreach ($database as $album) {
    $output.= '<h2>' . $album['title'] . '</h2>';
    $output.= '<span>' . $album['author'] . '</span>';
    $output.= '<span>' . $album['year'] . '</span>';
    $output.= '<img  src ='. $album['poster']. '>';
  }

  $printed = '<li>'. $output .'</li>';
  return $printed;

}
 ?>
