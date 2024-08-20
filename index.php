<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Blog mangagment system</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      
      background-color: #d8f0ff;
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
<body>
  <div class="container text-center">
    <h1 class="mb-4">Welcome to Blog mangaement system</h1>
   
    <a href="create_post.php"><button type="button" class="btn btn-warning btn-custom me-2">create new post</button></a>
    <a href="lists_post.php"><button type="button" class="btn btn-light btn-custom">list al posts</button></a>   
  </div> 

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>