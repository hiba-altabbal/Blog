<?php
require_once 'Post.php';

$post = new Post();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post->update($_POST['id'], $_POST['title'], $_POST['author'], $_POST['content']);
    header('Location: lists_post.php');
    exit();
}

if (isset($_GET['id'])) {
    $postData = $post->read($_GET['id']);
    $postData = $postData[0]; // Fetch the first result
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Post</title>
</head>
<body style="background-color: #d8f0ff">
<h1><p class="text-center" style="color: #0097A7">Update post</p></h1>

<div class="container mt-5">
    <form method="post" action="edit_post.php">
    

        <input type="hidden" name="id" value="<?php echo $postData['id']; ?>">

        <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Title</label>
         <input type="text" class="form-control"  name="title" value="<?php echo $postData['title']; ?>"  required>
        </div>
        
        <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Author</label>
         <input type="text" class="form-control"  name="author" value="<?php echo $postData['author']; ?>" required>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">content</label>
        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"  required><?php echo $postData['content']; ?></textarea>
        </div>
        <button class="btn btn-primary" type="submit">update</button>
    </form>
</div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>