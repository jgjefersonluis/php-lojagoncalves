<?php
//$to      = Config::EMAIL_USER;
$to = 'jefersonluis.educx@gmail.com';

//echo $to . '<br>';
$subject = 'Contato - Loja Gonçalves';
//echo $subject . '<br>';
$message = 'Email de ' . $_GET['txtinputnome'] . "/r/n" . $_GET['txtinputarea'];
//echo $message;
$dest = $_GET['txtinputemail'];

$headers = "From: " . $dest;

mail($to, $subject, $message, $headers);


?>

<script>
alert('Email enviado com Sucesso!')
</script>
<meta http-equiv="refresh" content="0" ; url="contato">