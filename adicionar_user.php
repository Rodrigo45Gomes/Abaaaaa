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
    $dbname="pap";

    $conn= new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("connection failed: ". $conn-> connect_error);
        } else {
            $add = "INSERT INTO users (userName, userPass, userEmail, nome, nasc, genero) VALUES (\"".$_POST["userName"]."\",\"".($_POST
            ["nome"])."\",\"".$_POST["userPass"]."\",\"".$_POST["userEmail"]."\",\"".$_POST["nasc"]."\",\"".$_POST["genero"]."\")";
            if($conn->query($add)===TRUE){
                echo"</br></br></br><h2 align=center>Dados registados com sucesso!<h2/>";
                echo "<meta http-equiv=\"refresh\" content=\"2; url=lista.php\">";
            } else{
                echo "Erro; Não foi possível inserir dados na tabela users ". $conn->error. "<p />";

            }
            }
      
    ?>
</body>
</html>