<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<h2 class="title">
		<?=$this->lang->line('user_list_title');?>
	</h2>
	<!-- Si hay usuarios -->
	<?php if((isset($users)) && ($users != null)): ?>
		<table class="users-tables">
			<tr>
				<th>#</th>
				<th>
					<?=$this->lang->line('username_label');?>
				</th>
				<th>
					<?=$this->lang->line('password_label');?>
				</th>
				<th>
					<?=$this->lang->line('email_label');?>
				</th>
				<th>
					<?=$this->lang->line('action_label');?>
				</th>
			</tr>
			<!-- Iteramos cada elemento y generamos un <tr> con los datos -->
				<?php foreach($users as $user): ?>
					<tr>
						<td>
							<?=html_escape($user['id']);?>
						</td>
						<td>
							<?=html_escape($user['username']);?>
						</td>
						<td>
							<?=html_escape($user['password']);?>
						</td>
						<td>
							<?=html_escape($user['email']);?>
						</td>
						<!-- Por cada fila, generamos una columna de acciones: borrar y modificar
								 con las url generada a partir de los ID's de los usuarios
						-->
						<td>
							<a class="btn delete-btn" href="<?=site_url('delete-user/' . $user['id']  . '/')?>">
								<i class="fa-solid fa-trash"></i>
							</a>
							<a class="btn modify-btn" href="<?=site_url('modify-user/' . $user['id']  . '/')?>">
								<i class="fa-solid fa-pen"></i>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
		</table>
	<?php endif; ?>
	<!-- Si no hay usuarios -->
	<?php if(!isset($users) || ($users == null)): ?>
		<div class="no-users-info">
			<p class="info">
			<?=$this->lang->line('no_users_info');?>
			</p>
		</div>
	<?php endif; ?>
</div>