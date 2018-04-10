<?php
    $page = "edit";
    $patientId = $pid;
?>
<form action="<?=URL?>edit/EditInDB/<?=$patientId?>" method="post">
    <?php
        foreach ($Sorted as $EditInfo => $value){
            echo "<p><input type='text' name='pName' value='" . $value["patient_name"] . "'></p>";
            echo "<p><input type='text' name='pStatus' value='" . $value['patient_status'] . "'></p>";
            echo "<p><input type='text' name='SDesc' value='" . $value["species_description"] . "'></p>";
        }
    ?>
    <p>
        <select name='pGender'>
            <?php
            foreach ($Sorted as $EditInfo => $value) {
                if ($value["Gender"] <> 'Male'){
                    echo "<option  value='" . $value["Gender"]. "'>" . $value["Gender"] . '</option>';
                    echo "<option value='male'>Male</option>";
                } else
                    if($value["Gender"] <> 'Female'){
                    echo "<option  value='" . $value["Gender"]. "'>" . $value["Gender"] . '</option>';
                    echo "<option value='female'>Female</option>";
                }

            }
            ?>
        </select>
    </p>
    <p>
        <select name="form_client_id">
            <?php
            foreach ($clients as $C => $Cvalue){
            echo "<option value='" . $Cvalue['client_id'] . "'>" . $Cvalue["client_firstname"] . " ". $Cvalue["client_lastname"] . "</option>";
        }
        ?>
        </select>
    </p>
    <input type="submit">
</form>