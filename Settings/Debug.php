<?php
  $DebugMode = false; // should probably move this to the database
  if($DebugMode)
  {
    die("Site is in debug-mode");
  }
  else
  {
    throw new Exception("");
  }
  
  // if debug is enabled, include the debug dependencies
?>
