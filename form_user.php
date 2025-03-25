<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adicionar_user.php" method="post">
        <table>
            <tr>
                <td> <label for="uname" value=""><b>Nome de utilizador: </b></label></td>
                <td><input type="text" name="userName" required></td>
            <tr>
                <td> <label for="uname" value=""><b>Primeiro e ultimo nome: </b></label></td> 
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td> <label for="uname" value=""><b>Password: </b></label></td>
                <td><input type="text" name="userPass" required></td>
            </tr>
            <tr>
                <td> <label for="uname" value=""><b>Confirmar Password </b></label></td>
                <td><input type="text" name="pass_confirmar" required></td>
            </tr>
            
            <tr>
                <td> <label for="uname" value=""><b>Email: </b></label></td>
                <td><input type="text" name="userEmail" required></td>
            </tr>
            <tr>
                <td><label for="psw" value =""><b>Data de Nascimento</b></label></td>
                <td><input type="date" name="nasc" required></td>
            </tr>
            <tr>
                <td> <label for="uname" value=""><b>Género </b></label></td>
                <td><select name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Nenhum">Prefiro não dizer</option>
                </select></td>
            </tr>
            
            <tr>
                <td><button type="submit">Adicionar</button></td>
            </tr>
        </table>
    </div>
</form>

</body>
</html>


