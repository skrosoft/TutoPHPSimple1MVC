<h1>Lista de usuarios</h1>
<p>
	Hola, soy aqui va la lista.
</p>
<table>
	<thead>
		<th>
			<td>Name</td>
			<td>Gender</td>
		</th>
	<thead>
	<tbody>
		<?php foreach($user_list as $index=>$user){ ?>
		<tr>
			<td><?php echo htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8'); ?></td>
			<td><?php echo htmlentities($user['gender'], ENT_QUOTES, 'UTF-8'); ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>