<div class="container">
	<table>
        <tr>
        <?php


        foreach ($joined as $patient => $Pvalue){

            echo "<td class=\"td\">" ."<p>" . $Pvalue['patient_name'] . "</td> <td class=\"td\">" . $Pvalue['species_description'] . "</td> <td class=\"td\">" . $Pvalue['patient_status'] .  "</td> <td class=\"td\">" . $Pvalue['client_firstname'] . $Pvalue['client_lastname'] .  "</td></p>";
        }
        ?>
        </tr>
	</table>
</div>