<?php
  $dnt = $_SERVER['HTTP_DNT'];
?>
<!DOCTYPE html>
<html>
<body>
  <?php if (isset($dnt)) { ?>
    <p>This page received a <tt>DNT</tt> header value of <tt><?php echo $dnt; ?></tt>.</p>
  <?php } else { ?>
    <p>No <tt>DNT</tt> header on this request.</p>
  <?php } ?>
</body>
