<?php
session_start();

$_SESSION['cuenta']++; 

echo '<p>Se incremento valor sesion cuenta</P>';