 <!DOCTYPE html>
<html>
<body>

<?php
    header('Location:https://www.facebook.com/');
    $fh = fopen('track.txt', 'a');
    fwrite($fh, $_SERVER['REMOTE_ADDR'] . ' ' . date('c') . "\n");
    fclose($fh);
?>

</body>
</html> 