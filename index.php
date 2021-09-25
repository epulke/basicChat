<?php

require_once "vendor/autoload.php";

use App\Comment;
use App\CommentsDatabase;

$commentBase = new CommentsDatabase();

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST["submit"])) {
    $newComment = new Comment($_POST["usrname"], $_POST["comment"]);
    $commentBase->addNewComment($_POST["usrname"], $_POST["comment"]);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['postdata'] = $_POST;
    unset($_POST);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

require "index.view.php";













