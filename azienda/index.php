<?php
  require_once 'Dipendenti.php';
  require_once 'Dirigenti.php';
  require_once 'Amministrativo.php';
  $direttore = new Dirigenti('fffffffff', 'mario', 'rossi', 'via la vespa', 'hhhhhhhh', 'jjjjjjjjj', 6, '9-18', 20);
  var_dump($direttore);
?>
