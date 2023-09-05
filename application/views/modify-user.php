<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
  if(!isset($user)) redirect('users/'); 
?>
<div class="container">
  <h2>
    <?=$this->lang->line('modify_user_title');?>
  </h2>
  <?php echo form_open(site_url('modify/' . $user['id'] . '/')) ?>
    <div class="form-control">      
      <label for="username"><?=$this->lang->line('username_label');?> (*)</label>
      <input value="<?=$user['username']?>" autocomplete="off" type="text" name="username" id="user-name" placeholder="Juan Pérez" required>
    </div>
    <div class="form-control">
      <label for="email"><?=$this->lang->line('email_label');?> (*)</label>
      <input value="<?=$user['email']?>" autocomplete="off" type="email" name="email" id="e-mail" placeholder="juanperez@company.com" required>
    </div>
    <div class="form-control">
      <label for="password"><?=$this->lang->line('password_label');?> (*)</label>
      <input class="password-input" value="<?=$user['password']?>" autocomplete="off" type="password" name="password" id="user-password" placeholder="A strong password" required>
      <div class="password-toggle-field">
          <i class="fa-solid fa-eye"></i>
          <span class="password-toggle">
            <?=$this->lang->line('password_show');?>
          </span>
      </div>
    </div>
    <div class="form-submit">
      <input type="submit" value="<?=$this->lang->line('modify_user_title');?>" class="submit-btn">
    </div>
  <?php echo form_close(); ?>
</div>
<script src="<?=base_url('assets/js/util.js')?>"></script>