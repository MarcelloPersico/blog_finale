<html>

<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Blog random</title>
    <meta charset="utf-8" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="index.php">HOME </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="about.php">ABOUT</a>
                              </li>
                </ul>
                <?php  if (isLogged()) { ?>
                    <a class="btn btn-success mr-2 px-4" href="login.php?logout=yes">logout</a>
                    <a class="btn btn-secondary px-4" href="post.php">post</a>
                <?php } else { ?>
                    <a class="btn btn-success mr-2 px-8" href="login.php">entri pure</a>
                <?php } ?>
              </div>
</nav>