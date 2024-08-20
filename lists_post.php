<?php
require_once 'Post.php';

$post = new Post();
$allPosts = $post->listAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>List of Posts</title>
</head>
<body style="background-color: #d8f0ff">
    <div class="container mt-5">
    <h2>List of Posts</h2>
    <a href="create_post.php"><button type="button" class="btn btn-warning"> Create New Post</button></a>
    <table border="1" class="table table-bordered mt-3">
        <tr>
            <th >Title</th>
            <th >Author</th>
            <th >Actions</th>
        </tr>
        <?php foreach ($allPosts as $post): ?>
            <tr>
                <td scope="row"><?php echo $post['title']; ?></td>
                <td scope="row"><?php echo $post['author']; ?></td>
                <td scope="row">
                <div class="btn-group" role="group" aria-label="Basic example"> 
                    <button type="button" class="btn btn-light"><a href="view_post.php?id=<?php echo $post['id']; ?>">View</a></button>
                    <button type="button" class="btn btn-light"><a href="edit_post.php?id=<?php echo $post['id']; ?>">Edit</a></button>
                    <button type="button" class="btn btn-light"><a href="delete_post.php?id=<?php echo $post['id']; ?>" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a></button>
                </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>