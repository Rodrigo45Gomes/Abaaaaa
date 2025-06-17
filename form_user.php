<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo - FitFlow</title>
    <link rel="stylesheet" href="style/fitflow_sign_up.css">
    <script>
        function validarSenhas(event) {
            const senha = document.getElementsByName("userPass")[0].value;
            const confirmar = document.getElementsByName("pass_confirmar")[0].value;

            if (senha !== confirmar) {
                alert("Insira senhas iguais!");
                event.preventDefault();
            }
        }
    </script>
</head>
<body>

<div class="form-box">
    <h2>Registo - FitFlow</h2>
    <form action="adicionar_user.php" method="post" onsubmit="validarSenhas(event)">
        <table>
            <tr>
                <td><label for="userName">Nome de utilizador:</label></td>
                <td><input type="text" name="userName" required></td>
            </tr>
            <tr>
                <td><label for="name">Primeiro e último nome:</label></td> 
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td><label for="userPass">Password:</label></td>
                <td><input type="password" name="userPass" required></td>
            </tr>
            <tr>
                <td><label for="pass_confirmar">Confirmar Password:</label></td>
                <td><input type="password" name="pass_confirmar" required></td>
            </tr>
            <tr>
                <td><label for="userEmail">Email:</label></td>
                <td><input type="text" name="userEmail" required></td>
            </tr>
            <tr>
                <td><label for="nasc">Data de Nascimento:</label></td>
                <td><input type="date" name="nasc" required></td>
            </tr>
            <tr>
                <td><label for="genero">Género:</label></td>
                <td>
                    <select name="genero">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Nenhum">Prefiro não dizer</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit">Adicionar</button>
    </form>
</div>

</body>
</html>


