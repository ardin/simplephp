<?php
  // ssl detection
  echo ((isset($_SERVER['HTTP_X_SSL']))?'ssl':'non-ssl');
?>
