<form action="<?= $SignUpURL ?>" method="POST" class="text-center border border-light p-5 ">
    <p>Name:</p>
    <input type="text" name="name" id="" required value="<?= $newSignUpDate['name'] ?? '' ?>">
    <p>Surname:</p>
    <input type="text" name="surname" id="" required value="<?= $newSignUpDate['surname'] ?? '' ?>">
    <p>Login:</p>
    <input type="text" name="login" id="" required value="<?= $newSignUpDate['login'] ?? '' ?>">
    <p>Password:</p>
    <input type="password" name="pass" id="" required>
    <p>Repeat Password:</p>
    <input type="password" name="passrepeat" id="" required><br><br>
    <input type="submit" value="Регистрация">
</form>
<div>
    <?=$_SESSION['SignUpError']?>
</div>