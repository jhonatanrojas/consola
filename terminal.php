<?php
$command= "ls";

  exec($command,$output,$return_var);

  var_dump($output);
  var_dump($return_var);
?>