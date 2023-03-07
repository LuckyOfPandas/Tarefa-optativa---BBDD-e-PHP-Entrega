	<?php// Juegos ?>
	<h2 class="center">Creadores registrados</h2></br>

		<table id="creadores">
    	<tr>
			<th> id </th>
			<th> nombre </th>
			<th> nickname </th>
			<th> pais_de_origen </th>
			<th> pais_de_residencia</th>
			<th> plataformas </th>
			<th> Enlace </th>
			<th> Nazi </th>
			<th> Funado </th>
		</tr>

	<?php
	    $qry_crear = "SELECT * FROM creadores_de_contenido order by nombre";
	    $res_crear = mysqli_query($conector, $qry_crear);

		if ($res_crear->num_rows > 0) {
			while($row = $res_crear->fetch_assoc()) {
				echo "<td>" . $row["id"] . "</td>" . 
					 "<td>" . $row["nombre"] . "</td>" .
					 "<td>" . $row["nickname"] . "</td>" . 
					 "<td>" . $row["pais_de_origen"] . "</td>" .
					 "<td>" . $row["pais_de_residencia"] . "</td>" .
					 "<td>" . $row["plataformas"] . "</td>" .
					 "<td>" . $row["Enlace"] . "</td>" .
					 "<td>" . $row["Nazi"] . "</td>" .
					 "<td>" . $row["Funado"] . "</td>" .
					 "</tr>";
			}
		} else {
			echo "0 results";
		}
		mysqli_free_result($res_crear);

		?>
		</table>