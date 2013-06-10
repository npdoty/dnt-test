<?php
$tracking_status_values = array("1", "3", "C", "D", "N", "P", "U", "X", "!", "?");  
  // list of all potentially valid tracking status values, the non-compliant indicator value, and an invalid value
  $dnt = $_SERVER['HTTP_DNT'];
  
  $tk = $_GET['tk'];
  if (isset($tk)) {
    header('Tk: '.$tk);
  } else {
    header('Tk: 1');  // for this test-case, this page is claiming first party compliance
    $tk = "1";
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
  <title>DNT Tk Responses Test</title>
</head>
<body>
  <h1>DNT Tk Responses Test</h1>
  <?php foreach ($tracking_status_values as $value) {?>
    <iframe src="echo.php?tk=<?php echo $value; ?>" width="300" height="320">
      <p>Test only works with <tt>iframe</tt> support.</p>
    </iframe>
  <?php } ?>
  <hr>
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