<?php
//pobranie parametru
$tekst = $_GET['tekst'] ?? '<script>alert("Hello World");</script>';
?>
<!DOCTYPE html>
<html>
<body>
<!-- Możliwe wykonanie kodu w javascript preparując dane wejściowe, klasyczny XSS -->
<h1><?php echo $tekst; ?></h1>
</body>
</html>