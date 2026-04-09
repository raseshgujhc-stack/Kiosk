<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = "Book Launched";
echo "data: The server time is: {$time}\n\n";
flush();
?>
