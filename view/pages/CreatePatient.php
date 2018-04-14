<form method="post" action="<?=URL?>Patients/CreatePatient">
    <p><input type="text" name="PatientName" placeholder="Patient naam"></p>
    <p><input type="text" name="PatientStatus" placeholder="Wat is er mis?"></p>
    <p>Geslacht: Man<input type="radio" name="Gender" value="Male">Vrouw<input type="radio" name="Gender" value="Female"></p>
    <p>Dier soort:
        <select name="Specie">
            <?php
                foreach ($species as $item => $value){
                    echo "<option value=" . $value["species_id"] . ">" . $value["species_description"];
                }
            ?>
        </select>
    </p>
    <p>Cliënt:
        <select name="Client">
            <?php

            foreach ($clients as $item => $value){
                    echo "<option value=" . $value["client_id"] . ">" . $value["client_firstname"] . " " . $value["client_lastname"];
                }

            ?>
        </select>
    </p>
    <p><input type="submit"></p>
</form>