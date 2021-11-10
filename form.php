
<form action="cookie.php" method="post">

    <input type="email" name="email" value="<?php if(isset($_COOKIE['email'])) echo($_COOKIE['email']); ?>" placeholder="Email Id">
    <br><br>
    <input type="password" name="pass" value="<?php if(isset($_COOKIE['pass'])) echo($_COOKIE['pass']); ?>" placeholder="password">
    <br><br>
    <input type="checkbox" name="rem" <?php if(isset($_COOKIE['email'])) echo("checked='checked'"); ?> value="1">Remember me
    <br><br>
    <input type="submit" name="btn" value="Login">
    <br>
</form>