<?php

//Start session
session_start();

// Unset all the session variables
unset($_SESSION['loggedin']);
unset($_SESSION['email']);
?>
<script type="text/javascript">
    window.location = "index.php";
</script>