<?php
	// include Database connection file 
	include("../../resources/includes/db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Descripcion</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Destacado</th>
							<th>Imagen</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM portafolio";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['descripcion'].'</td>
				<td>'.$row['precio'].'</td>
				<td>'.$row['cantidad'].'</td>
				<td>'.$row['destacado'].'</td>
				<td>'.$row['imagen'].'</td>
				<td>
					<button class="btn btn-warning"><a href="editar.php?id='.$row['id'].'">Editar</a></button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>