<?php
include("conexao.php");

$sql = "select * from produtos";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Produtos | KM </title>
<style>
    body {
background: linear-gradient(#E5D9B6,#A4BE7B,#5F8D4E,#285430);
background-size: cover;
width:100%;
align-items: baseline;
justify-content: center;
padding: 10px;
min-height: 100vh;
margin:0;
}
#tabela{

}
table, th,td {
  border-collapse: collapse;
  padding: 10px 10px;
  table-layout: auto;
  font-family: secular;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);


}

table {
  width: 80%;

}

th{
  background-color: #A4BE7B;
    color: #fff;
    opacity: 80%;
    font-family: secular;
    font-weight: 400;
    
 
}

td{
  background-color:#fff  ;
    color: #285430;
    opacity: 70%;
    font-family:secular;
    font-family:Mulish;
    
}


caption {
  caption-side: bottom ;
  
}

h1 {
  font-weight: 500;
  font-family: Mulish;
  color:#5F8D4E;

}

#botao{
  background-color:#5F8D4E;
}
</style>
</head>

<body>
<?php
if(mysqli_fetch_array($query) < 1) {
  $mysqli->close();
}
?>

<h1><center> PRODUTOS </center></h1>
<table width="500" border="1" align="center">
<thead> 
<tr>
    <th>ID</th>
    <th>PRODUTO</th>
    <th>PRECO</th>
    <th>DISPONIBILIDADE</th>
    <th>CODIGO</th>


    <th>EDITAR/EXCLUIR</th>
  </tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
  $id        = $L["id"];
  $produto      = $L["Produto"];
  $preco     = $L["Preco"];
  $disponibilidade     = $L["Disponibilidade"];
  $codigo     = $L["Codigo"];

    echo"
<tbody>
  <tr>
    <td>$id</td>
    <td>$produto</td>
    <td>$preco</td>
    <td>$disponibilidade</td>
    <td>$codigo</td>

 <td><button><a href=\"editarproduto.php?id=$id\">EDITAR</a></button> |
 <button> <a href=\"excluirproduto.php?id=$id\">EXCLUIR</a></button></td>

  </tr>
  </tbody>\n";
}  
?> 
</table>
</body>
</html>