 <!DOCTYPE html>
<html>
<body>

<?php

echo "My first PHP script!";
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);

?>

</body>
</html> 