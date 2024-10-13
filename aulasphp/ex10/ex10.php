<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais do PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "Funcionou";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);
                //Query String: É uma solicitação pela URL
                echo "<h1>Superglobal Post</h1>";
                var_dump($_POST);
                //REQUEST
                echo "<h1>Superglobal Request</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal Cokkie</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal Section</h1>";
                var_dump($_SESSION);

                echo"<h1>Superglobal Server</h1>";
                var_dump($_SERVER);

                echo"<h1>Superglobal Globals</h1>";
                var_dump($GLOBALS);

            ?>
        </pre>
    </main>
</body>
</html>