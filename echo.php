<?php
  $dnt = $_SERVER['HTTP_DNT'];
  
  $tk = $_GET['tk'];
  if (isset($tk)) {
    header('Tk: '.$tk);
  }
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css" media="screen">
    * {
      font-family: Helvetica, sans-serif;
    }
    tt {
      font-family: "Consolas", monospace;
      font-size: 140%;
    }
  </style>
  <title>DNT Test Echo</title>
</head>
<body>
  <h1>DNT Test Echo</h1>
  <h2>Request</h2>
  <?php if (isset($dnt)) { ?>
    <p>This page received a <tt>DNT</tt> header value of <tt><?php echo $dnt; ?></tt>.</p>
  <?php } else { ?>
    <p>No <tt>DNT</tt> header on this request.</p>
  <?php } ?>
  <h2>Response</h2>
  <?php if (isset($tk)) { ?>
    <p>This page responded with a <tt>Tk</tt> header value of <tt><?php echo $tk; ?></tt>.</p>
  <?php } else { ?>
    <p>No <tt>Tk</tt> header on this response.</p>
  <?php } ?>
</body>
