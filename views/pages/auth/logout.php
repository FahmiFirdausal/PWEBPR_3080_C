<?php
    session_start();

    if (isset($_SESSION["username"])) {
        session_destroy();
        header("Location: /tugas-11/php-auth-sass-main/views/pages/auth/sign-in.php");
    }else{
        header("Location: /tugas-11/php-auth-sass-main/views/pages/auth/sign-in.php");
    }
