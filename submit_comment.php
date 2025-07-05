<?php
session_start();

if(isset($_POST['comment'])) {
    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');
    $comments = [];

    if(isset($_SESSION['comments'])) {
        $comments = $_SESSION['comments'];
    }

    $comments[] = $comment;
    $_SESSION['comments'] = $comments;

    header('Location: how_to_improve_english.html');
    exit;
}
?>
