<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<h2 class="title"><?=$header?></h2>
	<table class="users-tables">
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>e-mail</th>
		</tr>
			<?php if($users != null): ?>
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
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
	</table>
</div>