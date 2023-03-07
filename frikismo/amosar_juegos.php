 	<?php// Juegos ?>
	<h2 class="center">Juegos registrados</h2></br>

        <table id="juegos">
        <tr>
            <th> id </th>
            <th> nombre </th>
            <th> fecha de salida </th>
            <th> precio </th>
            <th> ventas </th>
            <th> plataformas </th>
            <th> nombre de categoria </th>
            <th> nombre de compañia </th>
            <th> nombre de creador </th>
        </tr>
    <?php

        $qry_juego = "SELECT * FROM juegos order by nombre";
        $res_juego = mysqli_query($conector, $qry_juego);

        if ($res_juego->num_rows > 0) {
            // salida dos datos de cada fila
            while($row = $res_juego->fetch_assoc()) {
                echo "<td>" . $row["id"] . "</td>" . 
                     "<td>" . $row["nombre"] . "</td>" .
                     "<td>" . $row["Fecha_de_salida"] . "</td>" . 
                     "<td>" . $row["Precio"] . "</td>" .
                     "<td>" . $row["Ventas"] . "</td>".
                     "<td>" . $row["Plataformas"] . "</td>".
                     "<td>" . $row["Nombre_de_categoria"] . "</td>".
                     "<td>" . $row["Nombre_de_compañia"] . "</td>".
                     "<td>" . $row["Nombre_de_creador"] . "</td>".
                     "</tr>";
            }
        } else {
            echo "0 results";
        }
        mysqli_free_result($res_juego);

        ?>
        </table>