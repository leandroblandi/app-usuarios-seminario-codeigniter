<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <div class="container">
    <h2><?=$title;?></h2>
    <?php echo form_open(site_url('users/create')) ?>
      <div class="form-control">      
        <label for="username">Username:</label>
        <input autocomplete="off" type="text" name="username" id="user-name" placeholder="Juan Pérez" required>
      </div>
      <div class="form-control">
        <label for="email">E-Mail:</label>
        <input autocomplete="off" type="email" name="email" id="e-mail" placeholder="juanperez@company.com" required>
      </div>
      <div class="form-control">
        <label for="password">Password:</label>
        <input autocomplete="off" type="password" name="password" id="user-password" placeholder="A strong password" required>
      </div>
      <div class="form-submit">
        <input type="submit" value="Create new user" class="submit-btn">
      </div>
    <?php echo form_close(); ?>
  </div>
</body>
</html>