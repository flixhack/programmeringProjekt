<?php
session_start();
 ?>
<?php
session_unset();
session_destroy();

print '<script window.location = "RegisterAndLogin/FrontLogin.php"; </script>';

 ?>
