<?php
require "controllers/Utilisateurs.php";
if (!isset($u)) {
    $u = new Utilisateurs();
}
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <?php
    include "views/header.php";
    ?>
    <div class="container">
    <?php
    if (isset($_GET['page'])) {
        if ($_GET['page'] == "addUser") {
            include "views/add-user.php";
        } else {
            include "views/list-users.php";
        }
    } else {
        include "views/list-users.php";
    }

    ?>

    </div>
    <?php
    include "views/footer.php";
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>