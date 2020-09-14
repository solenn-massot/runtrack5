<form action="" method="post" class="form-example">
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname">
    <label for="lastname">Nom</label>
    <input type="text" name="lastname">
    <label for="mail">Email</label>
    <input type="email" name="mail">
    <button class="btn waves-effect waves-light" type="submit" name="action">Ajoutez cet utilisateur
        <i class="material-icons right">send</i>
    </button>
</form>
<?php
if (isset($_POST['action'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['mail'];
    $post = $u->addUser($firstname, $lastname, $email);
    if($post == "ok")
    {
        header('Location:index.php');
    }
    else if($post == "exist")
    {
        ?>
        <h3>Cet utilisateur existe déjà</h3>
        <?php
    }
}
?>