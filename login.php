<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Karoline Marques- Entrar</title>
		<meta charset="UTF-8" />
		<style>

			@font-face {
				font-family:Mulish;
				src: url(fonte/Mulish);
			}
	body{
    background: linear-gradient(#557153,#7D8F69,#557153,#557153);
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    min-height: 100vh;
}
.w50{
    width: 30%;
    float: left;
    padding-right: 15px;
}

.w50 value {
    margin-top:-10%;
}
.box{
    display: flex;
    width: 930px;
}
.img-box{
    background-color: rgba(255, 255, 255, 0.5);
    width: 50%;
    display: flex;
    align-items: center;
    padding: 20px;
    border-radius: 20px  0 0 20px;
}
.img-box img{
    width: 100%;
    opacity:80%;
}
.form-box{
    background-color: rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(40px);
    padding: 30px 40px;
    width: 50%;
    border-radius: 0 20px 20px 0;
}

.form-box form{
    margin: 20px 0;
}
form .input-group{
    margin-bottom: 15px;
}
form .input-group label{
    color: #fff;
    font-weight: 20px;
    display: block;
    margin-bottom: 5px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
} 

form .input-group input{
    width: 100%;
    height: 5px;
    background-color: rgba(255, 255, 255, 0.32);
    margin-left:-15px;
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    padding: 15px;
    font-size: 15px;
    color: #fff;
    transition: all 0.4s ease;
}
form .input-group input:focus{
    border-color: #90EE90;
}

form .input-group p {
    margin-left:12%;
    margin-top:-5%;
}
@media (max-width:930px) {
    .img-box{
        display: none;
    }
    .box{
        width: 700px;
    }
    .form-box{
        width: 100%;
        border-radius: 20px;
    }
}
@media (max-width:500px) {
    .w50{
        width: 40%;
        padding: 0;
    }
}
		</style>
	</head>
	<body>
	<body>
    <div class="box">
        <div class="img-box">
            <img src="imagem/iconform.png">
        </div>
   
        <div class="form-box">
                 <form action="#">
                <div class="input-group">
                    <label for="nome"> USUÁRIO</label>
                    <input type="text" name="user" >
                </div>

                <div class="input-group">
                    <label for="senha">SENHA</label>
                    <input type="password" name="pass">
                </div>


                <div class="input-group w50">
                <input type="submit" name="submit" value="ENTRAR" /> 
                </div>
        </div>
    
</body>
</html>
			<?php
				/* Declaração de Variáveis */
				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];
				
				/* Declaração das variáveis que possuem os usuarios e as senhas */
				$user1 = 'teste@teste.com';
				$pass1 = 'teste';
				
				$user2 = 'teste1';
				$pass2 = '1';
				
				/* Testa se o botão submit foi ativado */
				if($submit){
					
					/* Se o campo usuário ou senha estiverem vazios geramos um alerta */
					if($user == "" || $pass == ""){
						echo "<script>alert('Por favor, preencha todos os campos!');</script>";
					}
					/* Caso o campo usuario e senha não 
						*estejam vazios vamos testar se o usuário e a senha batem 
					*iniciamos uma sessão e redirecionamos o usuário para o painel */
					else{
						if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
							session_start();
							$_SESSION['usuario']=$user;
							$_SESSION['senha']=$pass;
							header("Location: painel.html");
						}
						/* Se o usuario ou a senha não batem alertamos o usuario */
						else{
							echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
						}
					}
				}
			?>

		</div>
	</body>
</html>			