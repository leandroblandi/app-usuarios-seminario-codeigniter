<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?=$this->lang->line('app_title');?>
  </title>
  <!-- Link del favicon y de los archivos .css -->
  <link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico')?>" type="image/x-icon">
  <link rel="stylesheet" href="<?=base_url('assets/css/normalize.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/header.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/footer.css')?>">

  <!-- Agregamos estilos segun sea la vista -->
  <?php if($this->router->method === 'index'): ?>
    <link rel="stylesheet" href="<?=base_url('assets/css/user-list.css')?>">
  <?php endif; ?>

  <?php if($this->router->method === 'createUser'): ?>
    <link rel="stylesheet" href="<?=base_url('assets/css/create-user.css')?>">
  <?php endif; ?>

  <?php if($this->router->method === 'modifyUser'): ?>
    <link rel="stylesheet" href="<?=base_url('assets/css/modify-user.css')?>">
  <?php endif; ?>

</head>
<body>
  <div class="nav-menu-icon">
    <a href="#" class="menu-icon">
      <i class="fa-solid fa-bars"></i>
    </a>
    <p>
      <?=$this->lang->line('app_title');?>
    </p>
  </div>
  <div class="nav-menu">
    <ul>
      <li>
        <a href="<?=site_url('users/')?>">
          <i class="fa-solid fa-users"></i>
          <?=$this->lang->line('menu_list');?>
        </a>
      </li>
      <li>
        <a href="<?=site_url('create-user/')?>">
          <i class="fa-solid fa-plus"></i>
          <?=$this->lang->line('menu_create');?>
      </a>
      </li>
    </ul>
    <div class="language-toggle">
      <a href="<?=site_url('change-lang/english')?>">
        <i class="fa-solid fa-language"></i>
        <?=$this->lang->line('lang_english');?>
      </a>
      <a href="<?=site_url('change-lang/spanish')?>">
        <i class="fa-solid fa-language"></i>
        <?=$this->lang->line('lang_spanish');?>
      </a>
    </div>
  </div>
