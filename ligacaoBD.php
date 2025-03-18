    <?php
    function ligaBD(){
        $con= new Mysqli("localhost", "root","", "PAP");

        if($con->connect_error!=0){
            echo "Ocorreu um erro no acesso à base de dados ". $con->connect_error;
            
            exit;
        }
        return $con;
    }


    ?>
 