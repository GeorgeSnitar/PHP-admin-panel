<?php
 // (A) LOGIN CHECK
 $_ISADMIN = isset($_SESSION["user"]);
 if (!$_ISADMIN && !isset($_ISLOGIN)) {
       header("Location: " . URL_HOST."login.php"); exit();
 }
 if ($_ISADMIN && isset($_ISLOGIN)) {
       header("Location: " . URL_HOST); exit();
 }?>

<!DOCTYPE html>
<html lang="en">
<head>
      <title>ADMIN PANEL</title>
      <meta charset="UTF-8">
      <meta name="robots" content="noindex, nofollow">      
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2">
      <link  href="<?=URL_PUBLIC?>admin.css" rel="stylesheet">
      <script>var url = {host:"<?URL_HOST?>",public:"<?=URL_PUBLIC?>"};</script>
      <script async src="<?=URL_PUBLIC?>admin.js"></script>
</head>
<body>
      <!-- (B) NOW LOADING SPINNER -->
      <div id="page-loader">
        <img src="<?=URL_PUBLIC?>cube-loader.svg"/>
      </div>

      <?php
      if ($_ISADMIN) {?>
      <!-- (C) SIDE BAR -->
            <nav id="page-sidebar">
              <a href="<?URL_HOST?>pageA.php">
                <span class="ico">&#9879;</span> Module A
               </a>
               <a href="<?=URL_HOST?>pageB.php">
                 <span class="ico">&#9880;</span> Module B
               </a>
            </nav>
     <?php } ?>

     <!-- (D) MAIN CONTENTS -->
     <div id="page-main">
       <?php if ($_ISADMIN) { ?>
       <!-- (D1) NAVIGATION BAR-->
       <nav id="page-nav">
        <div id="page-button-side" onclick="adm.side();">&#9776;</div>
        <div id="page-button-out" onclick="adm.bye();">&#9747;</div>
       </nav>
       <?php }?>
       <!-- (D2) PAGE CONTENTS -->
       <main id="page-contents">

