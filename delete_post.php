<?php
require_once 'Post.php';

if (isset($_GET['id'])) {
    $post = new Post();
    $post->delete($_GET['id']);
    header('Location: lists_post.php');
    exit();
}
?>