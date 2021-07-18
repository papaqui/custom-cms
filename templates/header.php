<?php $site_title = 'Custom CMS'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title><?php echo $site_title; ?></title>
</head>
<body>

  <nav>
    <h1><a href="./index.php"><?php echo $site_title; ?></a></h1>
    <ul>
      <li>
        <a href="index.php">Blog</a>
      </li>
      <li>
        <a href="new-post.php">New post</a>
      </li>
    </ul>
  </nav>