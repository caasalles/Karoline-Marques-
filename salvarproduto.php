<?php
    include_once("conexao.php");
   
    $produto = $_POST["Produto"];
    $preco = $_POST["Preco"];
    $disponibilidade = $_POST["Disponibilidade"];
    $codigo = $_POST["Codigo"];

    
    $result_produtos= "INSERT INTO produtos(Produto, Preco, Disponibilidade, Codigo)
                    VALUES ('$produto','$preco', '$disponibilidade', '$codigo')";
    $resultado_produtos= mysqli_query($conn, $result_produtos);
   
    if(mysqli_affected_rows($conn) != 0){
        echo "<script>alert('Produto cadastrado com sucesso');</script>";
    }

      
      

        else{
                echo "Erro ao cadastrar";
                   
                 
            }
            return(mysqli_affected_rows($conn) != 0)
?>