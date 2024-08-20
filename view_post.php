<?php
require_once 'Post.php';

if (isset($_GET['id'])) {
    $post = new Post();
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
    <title>View Post</title>

    <style>
    body {
      
      background-color: #ADD8E6;
    }
    .container {
      margin-top: 100px;
      padding: 50px;
      background-color: #0097A7;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-custom {
      width: 150px;
    }
  </style>
</head>
<body style="background-color: #d8f0ff">
<div class="container">   
<h1><p class="text-center">View post</p></h1>
    <?php if ($postData): ?>
        <p><strong>Title:</strong> <?php echo $postData['title']; ?></p>
        <p><strong>Author:</strong> <?php echo $postData['author']; ?></p>
        <p><strong>Content:</strong> <?php echo $postData['content']; ?></p>
        <p><strong>Created At:</strong> <?php echo $postData['created_at']; ?></p>
        <p><strong>Updated At:</strong> <?php echo $postData['updated_at']; ?></p>
    <?php else: ?>
        <p>Post not found.</p>
    <?php endif; ?>
    <a href="lists_post.php"><button type="button" class="btn btn-light btn-custom">Back to List</button></a>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>