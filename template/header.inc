<?php
$pagename = Null;
if (isset($_GET['p']))
	$pagename = $_GET['p'];
?>

<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="<?php echo $cfg_stylesheet; ?>">
  <link rel="alternate" type="application/rss+xml" title="<?php echo $cfg_sitename; ?>" href="rss">
  <title><?php echo $pagename ? '(*mentebinaria).' . $pagename : $cfg_sitename; ?></title>
  </head>

 <body>
  <div id="box">
   <div id="logo">
    <? echo logo(); ?>
   </div>
   
   <? if ($cfg_show_random_quotes) { ?>
   <div id="frase">
    <? echo frase(); ?>
   </div>
   <? } ?>
 
   <div id="menu"><? echo menu($pagename); ?></div>
