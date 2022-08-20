<h1>Информация об авторе нашего сайта</h1> 
 <?php 
 for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) { 
 $data->data_seek($row_no); 
 $row = $data->fetch_assoc(); 
 echo "<p class='author'>".$row['id']."</p> 
 <p class='author'>".$row['fio']."</p> 
 <p class='author'>".$row['age']."</p> 
 <p class='author'>".$row['location']."</p> 
 <p class='author'>".$row['additional']."</p>"; 
 } 
 ?> 