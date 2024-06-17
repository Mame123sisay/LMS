<?php
// Retrieve the file location from the query parameter
$fileLocation = $_GET['file'];
header('Content-Type: image/png');
header('Content-Disposition: attachment; filename="' . basename($fileLocation) . '"');
header('Content-Length: ' . filesize($fileLocation));

// Read the file and output it to the user
readfile($fileLocation);
?>