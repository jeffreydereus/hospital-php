<?php
    foreach ($clients as $item => $value) {
     echo '<form method="post" action="' . URL . 'clients/edit/' . $value['client_id'] . '">';
     echo '<p>Voornaam<input type="text" name="firstname" value="' . $value["client_firstname"] . '"</p>';
     echo '<p>Achternaam<input type="text" name="lastname" value="' . $value["client_lastname"] . '"</p>';
     echo '<p>Email<input type="email" name="email" value="' . $value["Email"] . '"></p>';
     echo '<p>telefoon nummer<input type="tel" name="phone" value="' . $value["Phone"] . '"></p>';
     echo '<p><input type="submit"></p>';
     echo '</form>';
    }
?>




