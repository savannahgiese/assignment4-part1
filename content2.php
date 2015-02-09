<?php
session_start();
if(isset($_GET['action']) && $_GET['action'] == 'end'){
    unset($_SESSION['worked']);
    $_SESSION = array();
    session_destroy();
    $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filePath = implode('/', $filePath);
    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
    header("Location: {$redirect}/login.php", true);
    die();
}

if(session_status() == PHP_SESSION_ACTIVE){
    if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_SESSION['username'])){
        header("Location: http://savvyg.me/CS_290/assignment4-part1/login.php");
    }
    if (!isset($_SESSION['visits2'])) {
        $_SESSION['visits2'] = 0;
    }
    if(!isset($_SESSION['username']) && isset($_POST['username']) && $_POST['username'] != ''){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['visits2'] = 0;
    }
    else{
        if(isset($_POST['username']) && isset($_SESSION['username']) && $_SESSION['username'] != $_POST['username'] && $_POST['username'] != ''){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['visits2'] = 0;
        }
    }
    if(isset($_SESSION['username']) && $_SESSION['username'] != NULL){
        echo "Hi " . $_SESSION['username'] . ", you have visited 'Content 2 " . $_SESSION['visits2'] . " times. \n";
        echo ("<br><br>Click 
        <a href=\"http://savvyg.me/CS_290/assignment4-part1/content1.php\">here</a> to go to Content 1.");
        echo ("<br><br>Click 
        <a href=\"http://savvyg.me/CS_290/assignment4-part1/content1.php?action=end\">here</a> to logout.");
        $_SESSION['worked'] = 0;
    }
    else{
        echo ("A username must be entered. Click 
        <a href=\"http://savvyg.me/CS_290/assignment4-part1/login.php\">here</a> to return to the login screen.");
    }
    $_SESSION['visits2']++;
}
?>