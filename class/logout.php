<?php
session_start();
unset($_SESSION[logado]);
session_destroy();
?>
<script>location.href='../login.php';</script> 
<?php exit('Redirecionando...'); ?>