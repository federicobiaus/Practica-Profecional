<?php
session_start();
session_destroy();
echo 'Session cerrada';
?>
<script>location.href = "login.php";</script>