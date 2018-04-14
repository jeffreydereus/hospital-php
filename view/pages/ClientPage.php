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
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $page = 'clients/ClientCreationPage';
            foreach ($clients as $item => $value){
                echo "<tr><td class='td'>" . $value["client_firstname"] . "</td><td class='td'>" . $value["client_lastname"] . "</td></tr>";
            }


            ?>
        </tbody>
    </table>
</div>
