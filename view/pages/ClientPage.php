<div class="container">
    <table>
        <thead>
            <tr>
                <th>
                    Voornaam
                </th>
                <th>
                    Achternaam
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    Telefoon nummer
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $page = 'clients/ClientCreationPage';
            foreach ($clients as $item => $value){
                echo "<tr><td class='td'>" . $value["client_firstname"] . "</td><td class='td'>" . $value["client_lastname"] . "</td><td class='td'>" . $value["Email"] . "</td><td class='td'>" . $value["Phone"] . "</td><td class='td'><a href=" . URL . "clients/delete/". $value["client_id"] . ">Delete</a> <a href=" . URL . "clients/editPage/" . $value["client_id"] . ">Edit</a></td></tr>";
            }


            ?>
        </tbody>
    </table>
</div>
