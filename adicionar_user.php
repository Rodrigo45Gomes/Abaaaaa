<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    $servername= "localhost";
    $username="root";
    $password="";
    $dbname="trabalho_final_t2(rg)";

    $conn= new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("connection failed: ". $conn-> connect_error);
        } else {
            $add = "INSERT INTO utilizadores (user, nome, pass, mail, nasc, genero) VALUES (\"".$_POST["user"]."\",\"".($_POST
            ["nome"])."\",\"".$_POST["pass"]."\",\"".$_POST["mail"]."\",\"".$_POST["nasc"]."\",\"".$_POST["genero"]."\")";
            if($conn->query($add)===TRUE){
                echo"</br></br></br><h2 align=center>Dados registados com sucesso!<h2/>";
                echo "<meta http-equiv=\"refresh\" content=\"2; url=lista.php\">";
            } else{
                echo "Erro; Não foi possível inserir dados na tabela Utilizadores ". $conn->error. "<p />";

            }
            }
      
    ?>
</body>
</html>