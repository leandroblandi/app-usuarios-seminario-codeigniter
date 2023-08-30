<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users App</title>
  <link rel="stylesheet" href="<?=base_url('assets/css/normalize.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/header.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/footer.css')?>">
  <?php
    if($this->router->fetch_method() === 'index') {
      echo '<link rel="stylesheet" type="text/css" href="' . base_url('assets/css/user-list.css') . '">';
    } else {
      echo '<link rel="stylesheet" type="text/css" href="' . base_url('assets/css/create-user.css') . '">';
    }
  ?>
</head>
<body>
  <div class="nav-menu">
    <p>
      <?=$app_title?>
    </p>
    <ul>
      <li><a href="<?=site_url('users/')?>">Users list</a></li>
      <li><a href="<?=site_url('users/create-user')?>">Create user</a></li>
    </ul>
  </div>
