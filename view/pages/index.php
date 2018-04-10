<div class="container">
	<table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Species</th>
            <th>Status</th>
            <th>Client</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>

        </thead>
        <tbody>
        <?php


        foreach ($joined as $patient => $Pvalue){

            echo "<tr><td class=\"td\">" .$Pvalue['patient_name'] . "</td> <td class=\"td\">" . $Pvalue['species_description'] . "</td> <td class=\"td\">" . $Pvalue['patient_status'] .  "</td> <td class=\"td\">" . $Pvalue['client_firstname'] . " " . $Pvalue['client_lastname'] .  "</td>" . "<td class=\"td\">". $Pvalue["Gender"] ."</td>" ."<td class=\"td\"    ><a href=". URL . 'edit/editpage/' . $Pvalue["patient_id"] . ">Edit</a></td></tr>";
        }
        ?>
        </tbody>
	</table>
</div>