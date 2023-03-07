	<?php// Juegos ?>
	<h2 class="center">Compañias registradas</h2></br>

		<table id="compañias">
		<tr>
			<th> id </th>
			<th> nombre </th>
			<th> Fecha_de_fundacion </th>
			<th> Networth </th>
			<th> Director </th>
			</tr>
		<tr>
				
	<?php
		
	    $qry_com = "SELECT * FROM compañias order by nombre";
	    $res_com = mysqli_query($conector, $qry_com);

		if ($res_com->num_rows > 0) {
			while($row = $res_com->fetch_assoc()) {
				echo "<td>" . $row["id"] . "</td>" . 
					 "<td>" . $row["nombre"] . "</td>" .
					 "<td>" . $row["Fecha_de_fundacion"] . "</td>" . 
					 "<td>" . $row["Networth"] . "</td>" .
					 "<td>" . $row["Director"] . "</td>" .
					 "</tr>";
			}
		} else {
			echo "0 results";
		}
		mysqli_free_result($res_com);

		?>
		</table>