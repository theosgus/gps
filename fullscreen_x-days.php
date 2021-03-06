<?php

/**
 * @file map.php
 * @description Displays x days of locations in Google Maps in fullscreen
 * @author Ebo Eppenga
 * @copyright 2013
 */

include "get.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="author" content="Ebo Eppenga" />
    <link rel="shortcut icon" href="favicon.png" />
    <title>GG-Tracker - GPS and GSM Tracking - Fullscreen X Days</title>
    
    <link href="css/google-maps-fullscreen.css" rel="stylesheet" />
    <?php include "script_x-days.php"; ?>
  </head>

  <body>
    <div id="map-canvas"></div>
  </body>
</html>
