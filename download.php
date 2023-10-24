<!-- <a href="download.php?file=admission_form.pdf" target="_new"><h4>Download File</h4></a> -->
<!-- PHP Script -->
<?php
if (isset($_GET['file'])) {
  $file = $_GET['file'];
  if (file_exists($file) && is_readable($file) && preg_match('/\.pdf$/',$file)) {
    header('Content-Type: application/pdf');
    header("Content-Disposition: attachment; filename=\"$file\"");
    readfile($file);
    }
  }
?>