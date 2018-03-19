<div class="container">
	<table border="1">
        <tr>
        <?php


        foreach ($joined as $patient => $Pvalue){
            var_dump($Pvalue);

            echo "<td>" ."<p>" . $Pvalue['patient_name'] . " " . $Pvalue['species_description'] .  " " . $Pvalue['client_firstname'] . $Pvalue['client_lastname'] .  "</p>" . "</td>";
        }
        ?>
        </tr>
	</table>
</div>