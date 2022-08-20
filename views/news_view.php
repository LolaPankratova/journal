<h1 class="welcome">Добро пожаловать на наш первый сайт!</h1>
<table class="news">
	<tr class="tr_site"><th>ID</th><th>Title</th><th>Content</th><th>Postcard</th></tr>
	<?php 
		for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
		    $data->data_seek($row_no);
		    $row = $data->fetch_assoc();
		    echo "<tr><td class='id_news'>".$row['id_news']."</td><td>".$row['title']."</td><td class='content'>".$row['content']."</td><td><img src='".$row['postcard']."' width='150'/></td></tr>";
		}
	?>
</table>