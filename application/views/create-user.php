<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <div class="container">
    <h2>
      <?=$this->lang->line('create_user_title');?>
    </h2>
    <!-- Este formulario nos lleva a users/create con los datos POST de los campos de abajo -->
    <?php echo form_open(site_url('users/create')) ?>
      <div class="form-control">      
        <label for="username"><?=$this->lang->line('username_label');?> (*)</label>
        <input autocomplete="off" type="text" name="username" id="user-name" placeholder="Juan Pérez" required>
      </div>
      <div class="form-control">
        <label for="email"><?=$this->lang->line('email_label');?> (*)</label>
        <input autocomplete="off" type="email" name="email" id="e-mail" placeholder="juanperez@company.com" required>
      </div>
      <div class="form-control">
        <label for="password"><?=$this->lang->line('password_label');?> (*)</label>
        <input class="password-input" autocomplete="off" type="password" name="password" id="user-password" placeholder="A strong password" required>
        <div class="password-toggle-field">
          <i class="fa-solid fa-eye"></i>
          <span class="password-toggle">
            <?=$this->lang->line('password_show');?>
          </span>
        </div>
      </div>
      <div class="form-submit">
        <input type="submit" value="<?=$this->lang->line('create_user_title');?>" class="submit-btn">
      </div>
    <?php echo form_close(); ?>
  </div>
  <script src="<?=base_url('assets/js/util.js')?>"></script>