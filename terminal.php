<?php
$command= "pdfgrep create *pdf  --with-filename  -c -r";

  exec($command,$output,$return_var);

  var_dump($output);
  var_dump($return_var);
?>