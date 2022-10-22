<?php
if (!isset($_SESSION)) {
    session_start();
}
function is_loggedIn()
{
    return  isset($_SESSION['login']);
}
