<?php
 
if (isset($_POST['nome_cad'])) {
   $texto = "nome = ".$_POST['nome_cad'].PHP_EOL. "email = ".$_POST['email_cad'].PHP_EOL. "senha = ".$_POST['senha_cad'].PHP_EOL. "cpf = ".$_POST['cpf_cad'].PHP_EOL;
   $arquivo = fopen('dados.py', 'w');
   fwrite($arquivo, $texto);
   fclose($arquivo);
   echo '<script>alert("Cadastro efetuado com sucesso!!"); </script>';
}
function redireciona($link){
     if ($link==-1){
     echo" <script>history.go(-1);</script>";
     }else{
     echo" <script>document.location.href='$link'</script>";
     }
 };
$link = '1.html';
redireciona($link); 

?>