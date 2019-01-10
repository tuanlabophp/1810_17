<?php 
	$post = [
				"title"=>"tiêu đề 1",
				"content"=>"noi dung 1",
			];

	$posts = [
			[
				"title"=>"tiêu đề 1",
				"content"=>"noi dung 1",
			],
			[
				"title"=>"tiêu đề 2",
				"content"=>"noi dung 2",
			],
			[
				"title"=>"tiêu đề 3",
				"content"=>"noi dung 3",
			]
		]
 ?>
<table border="1">
 	<tr>
 		<td>title</td>
 		<td>content</td>
 	</tr>
 	<tbody>
 		<?php 
 		echo "<tr>";
			foreach ($post as $key => $value) {
						echo "
							<td>$value</td>
						";
					};
		echo "</tr>";
 		 ?>
 	</tbody>
 </table>
<h1>listposts</h1>
<table border="1">
 		<tr>
 			<td>title</td>
 			<td>content</td>
 		</tr>
 		<tbody>
 			<?php
 				foreach ($posts as  $value) {
 					echo "<tr>";
 						echo "<td>".$value['title']."</td>";
 						echo "<td>".$value['content']."</td>";
 					echo "</tr>";
 				}
 			?>
 		</tbody>
 </table>