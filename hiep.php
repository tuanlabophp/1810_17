<?php
	$post = [
		'title' => 'Tieu de',
		'content' => 'Noi dung'
	];

	//Get value by key: $post['title'];

	$posts = [
		[
			'title' => 'Tieu de bai 1',
			'content' => 'Noi dung bai 1'
		],
		[
			'title' => 'Tieu de bai 2',
			'content' => 'Noi dung bai 2'
		],
		[
			'title' => 'Tieu de bai 3',
			'content' => 'Noi dung bai 3'
		],
	];

	$newPosts = [
		[
			'title' => 'Tieu de bai moi 1',
			'content' => 'Noi dung bai moi 1'
		],
		[
			'title' => 'Tieu de bai moi 2',
			'content' => 'Noi dung bai moi 2'
		],
	];

?>
<h1>Post</h1>
<table border="1">
	<thead>
		<th>Title</th>
		<th>Content</th>
	</thead>
	<tbody>
		<tr>
			<?php
				foreach ($post as $value) {
					echo "<td>$value</td>";
				}
			?>
		</tr>
	</tbody>
</table>

<h1>List posts</h1>
<table border="1">
	<thead>
		<th>Title</th>
		<th>Content</th>
	</thead>
	<tbody>
		<?php
			foreach ($posts as $value) {
				echo "<tr>";
					echo "<td>" . $value['title'] . "</td>";
					echo "<td>" . $value['content'] . "</td>";
				echo "</tr>";
			}

			for ($i=0; $i < count($newPosts); $i++) { 
				echo "<tr>";
					echo "<td>" . $newPosts[$i]['title'] . "</td>";
					echo "<td>" . $newPosts[$i]['content'] . "</td>";
				echo "</tr>";
			}
		?>
	</tbody>
</table>