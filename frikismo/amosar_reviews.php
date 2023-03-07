<?php// Juegos ?>
    <h2 class="center">Reviews realizadas</h2></br>

        <table id="reviews">
        <tr>
            <th> ID Review </th>
            <th> Periodista </th>
            <th> Pagina </th>
            <th> Nombre del juego </th>
            <th> Nombre de la compañia </th>
            <th> Nombre de la categoria </th>
            <th> Valoracion </th>
            <th> Comentarios adicionales </th>
        </tr>
    <?php

        $qry_review = "SELECT * FROM reviews order by Nombre_juego";
        $res_review = mysqli_query($conector, $qry_review);

        if ($res_review->num_rows > 0) {
            // salida dos datos de cada fila
            while($row = $res_review->fetch_assoc()) {
                echo "<td>" . $row["id"] . "</td>" . 
                     "<td>" . $row["Periodista"] . "</td>" .
                     "<td>" . $row["Pagina"] . "</td>" . 
                     "<td>" . $row["Nombre_juego"] . "</td>" .
                     "<td>" . $row["Nombre_compañia"] . "</td>" .
                     "<td>" . $row["Nombre_categoria"] . "</td>".
                     "<td>" . $row["Valoracion"] . "</td>".
                     "<td>" . $row["Comentarios_Adicionales"] . "</td>".
                     "</tr>";
            }
        } else {
            echo "0 results";
        }
        mysqli_free_result($res_review);

        ?>
        </table>