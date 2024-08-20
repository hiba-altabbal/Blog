<?php
require_once 'Post.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = new Post();
    $post->create($_POST['title'], $_POST['author'], $_POST['content']);
    header('Location: lists_post.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create Post</title>
</head>
<body style="background-color: #d8f0ff">
    <h1><p class="text-center" style="color: #0097A7">Create post</p></h1>
    
    <div class="container mt-5">
    <form method="post" action="create_post.php">
    <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">title</label>
         <input type="text" class="form-control"  name="title" id="exampleFormControlInput1" placeholder="title of your post" required>
    </div>
    <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Author</label>
         <input type="text" class="form-control" name="author" id="exampleFormControlInput1" placeholder="Author of this post" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">content</label>
        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"  required></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Create</button>
        
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>