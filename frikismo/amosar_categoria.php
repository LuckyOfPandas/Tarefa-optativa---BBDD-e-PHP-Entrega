	<?php// Juegos ?>
	<h2 class="center">Categorias registradas</h2></br>

		<table id="categorias">
    	<tr>
			<th> id </th>
			<th> nombre </th>
			<th> descripcion </th>
		</tr>
		<tr>
		
		<?php
	


	    $qry_cat = "SELECT * FROM categorias order by nombre";
	    $res_cat = mysqli_query($conector, $qry_cat);
		
		if ($res_cat->num_rows > 0) {
			while($row = $res_cat->fetch_assoc()) {
				echo "<td>" . $row["id"] . "</td>" . 
					 "<td>" . $row["nombre"] . "</td>" .
					 "<td>" . $row["descripcion"] . "</td>" . 
					 "</tr>";
			}
		} else {
			echo "0 results";
		}

		mysqli_free_result($res_cat);
		?>
		</table>