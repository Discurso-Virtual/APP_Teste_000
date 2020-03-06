<?php

include_once './common/connectDB.php';


include_once './common/cabeçalho.php';

?>
<body class="text-center">
    <form class="form-signin" action="login.php" method="POST" >
        <label class="sr-only" for="userN">Username</label>
        <input class="form-control" type="text" id="userN" name="userN" placeholder="Username" required autofocus>

        <label class="sr-only" for="pass">Password</label>
        <input class="form-control" type="password" id="pass" name="pass" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>

    </form>
    <button class="btn btn-lg btn-primary btn-block" onclick="window.location.href ='./forms/formUtilizador.php';" name="registar">Registar</button>




    <?php include_once './common/rodape.php'; ?>
</body>
</html>

