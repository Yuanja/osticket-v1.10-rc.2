<?php
$title=($cfg && is_object($cfg) && $cfg->getTitle())
    ? $cfg->getTitle() : 'osTicket :: '.__('Support Ticket System');
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>LA WatchWorks</title>
    <meta name="description" content="LA WatchWorks Vintage watch specialist">
    <meta name="keywords" content="Vintage Watch Servicing Service">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <!--  Customization addon from Gene Kim. -->
    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="<?php echo LAWATCH_WORKS_ASSETS_PATH; ?>material/material.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo LAWATCH_WORKS_ASSETS_PATH; ?>slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo LAWATCH_WORKS_ASSETS_PATH; ?>slick/slick-theme.css"/>
    <link rel="stylesheet" href="<?php echo LAWATCH_WORKS_ASSETS_PATH; ?>css/test.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?php echo LAWATCH_WORKS_ASSETS_PATH; ?>material/material.js"></script>
  	 <script src="<?php echo LAWATCH_WORKS_ASSETS_PATH; ?>js/test.js"></script>
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
</head>
<body>
