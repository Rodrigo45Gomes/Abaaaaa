
    <?php
    require_once 'ligacaoBD.php';
    $con=ligaBD();

    if($con==TRUE){
   
        $mail=$_POST['userEmail'];
        $pass=$_POST['userPass'];

        $query = $con->query ("select * from users where userEmail = '$mail' and userPass = '$pass'");
        $linhas=mysqli_num_rows($query);

        if($linhas >0)
         { 
            echo "Login efetuado com sucesso";      
            echo "<meta http-equiv=\"refresh\" content=\"2; url=lista.php\">";
            
        }
        else
        {    
        echo"Email ou Password errado!";
        echo "<meta http-equiv=\"refresh\" content=\"2; url=form_login.php\">";
        } 
    }
    $con->close();
    ?>  