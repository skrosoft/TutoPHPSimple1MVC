<h1>Lista de usuarios</h1>
<p>
	Hola, soy aqui va la lista.
</p>
<table class="table table-responsive">
	<thead>
		<tr>
			<th>Name</th>
			<th>Gender</th>
		</tr>
	</thead>
	<tbody>
		<?php while($user = mysqli_fetch_array($user_list_result)){ ?>
		<tr>
			<td><?php echo htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8'); ?></td>
			<td><?php echo htmlentities($user['gender'], ENT_QUOTES, 'UTF-8'); ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>