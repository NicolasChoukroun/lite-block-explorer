<?php
 require_once('./config.php');
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="./style.css" type="text/css" />
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <title><?php echo $GLOBALS['name']; ?> block explorer</title>
 </head>
 <body>
 <div id="menuback">
  <div id="menubar">
   <div id="logo"><a href="./"><img class="logobig" src="./img/logo.png" alt="Cryptoz" /></div>
   <div id="logotext"> <?php echo $GLOBALS['name']; ?> block explorer</a></div>
   <div id="searchbox"><form action="./?page=search" method="get"><input type="hidden" name="page" value="search" /><input type="text" name="id" /> <input type="submit" value="Search" /></form></div>
   <div id="menu">
    <a href="./">Home</a> | <a href="./?page=contact">Contact</a>
   </div>
  </div>
 </div>
 <div id="content">
  <?php
   $page = isset($_GET['page']) ? $_GET['page'] : '';
   switch ($page) {
    case 'contact':
     require_once('contact.php');
     break;
    case 'block':
     require_once('block.php');
     break;
    case 'search':
     require_once('search.php');
     break;
    case 'tx':
     require_once('tx.php');
     break;
    default:
     require_once('blocklist.php');
     break;
   }
  ?>
 </div>
 <div id="footerback">
  <div id="footer" style="line-height: 18px;">
<div style="text-align: center;
    color: #b3b3b3;
    text-decoration: none;
    font-size: 0.8em;
    padding: 15px;
    line-height: 24px;">This site is powered by the open source <a target="_blank" href="https://github.com/bubasik/lite-block-explorer">lite-block-explorer</a> project forked by <a target="_blank" href="http://cpu-pool.com/">CPU-POOL.COM</a>, created by Bubasik and Elicoin and is licensed under the MIT License.</div>
   <a href="./"><img class="logosmall" src="./img/logo.png" alt="" /> <?php echo $GLOBALS['name']; ?> block explorer, <?php echo date('Y'); ?></a>
  </div>
 </div>
</html>
 </body>
</html>
