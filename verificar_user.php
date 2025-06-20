
    <?php
    require_once 'ligacaoBD.php';
    $con=ligaBD();

    if($con==TRUE){
   
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];

        $query = $con->query ("select * from utilizadores where userEmail = '$mail' and userPass = '$pass'");
        $linhas=mysqli_num_rows($query);

        if($linhas >0)
         { 
            echo "Login efetuado com sucesso";      
            echo "<meta http-equiv=\"refresh\" content=\"2; url=http://localhost/PAP/fitflow_store.html\">";
            
        }
        else
        {    
        echo"Email ou Password errado!";
        echo "<meta http-equiv=\"refresh\" content=\"2; url=http://localhost/PAP/form_login.php\">";
        } 
    }
    $con->close();
    ?>  