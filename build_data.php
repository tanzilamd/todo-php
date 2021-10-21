<?php
    session_start();
    session_unset();
    $_SESSION['todo-list'] = [];

    print "<pre>";
    print_r($_SESSION);
?>