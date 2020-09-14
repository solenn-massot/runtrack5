<?php
?>
<table class="highlight">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $list = $u->getUsers();
        foreach ($list as $l) {
        ?>
            <tr>
                <td><?php echo $l['firstname'] ?></td>
                <td><?php echo $l['lastname'] ?></td>
                <td><?php echo $l['email'] ?></td>
            </tr>
        <?php
        }
        ?></tbody>
</table>
<?php

?>