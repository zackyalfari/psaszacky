<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home': default:
        include('home.php');
        break;
    case 'teacher':
        include('teacher/index.php');
        break;
    case 'subject':
        include('subject/index.php');
        break;
}