    <table border=1px>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Zip Code</th>
                <th>Phone</th>
                <th>City</th>
                <th>Country</th>
                <th>Notes</th>
                <th>SID</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i=0;$i<count($client);$i++)
            { ?>
                <tr>
                    <td> <?php echo $client[$i]['name']; ?></td>
                    <td> <?php echo $client[$i]['address']; ?></td>
                    <td> <?php echo $client[$i]['zip code']; ?></td>
                    <td> <?php echo $client[$i]['phone']; ?></td>
                    <td> <?php echo $client[$i]['city']; ?></td>
                    <td> <?php echo $client[$i]['country']; ?></td>
                    <td> <?php echo $client[$i]['notes']; ?></td>
                    <td> <?php echo $client[$i]['SID']; ?></td>
                    <td><a href="<?php echo(base_url('Traitement_fiche/Traitement/'.$client[$i]['ID'])) ?>"> Aller à la fiche</a></td>
                </tr>
           <?php }
            ?>
        </tbody>
    </table>