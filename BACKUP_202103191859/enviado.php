<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mensagem Enviada</title>
</head>

<body>
<?php
	if(!empty($_POST)){
	
	$cab = "Form: ".$_POST['nome']."<".$_POST['email'].">\n";
	
	$mensagem = "Pedido de Orçamento - Enviado pelo site\n";
	$mensagem = "Nome: ".$_POST['textfield27']."\n";
	$mensagem = "Email: ".$_POST['textfield28']."\n";
	$mensagem = "Telefone: ".$_POST['textfield29']."\n";	
	$mensagem = "textfield: ".$_POST['textfield']."\n";	
	$mensagem = "textfield1: ".$_POST['textfield1']."\n";
	$mensagem = "textfield2: ".$_POST['textfield2']."\n";
	$mensagem = "textfield3: ".$_POST['textfield3']."\n";	
	$mensagem = "textfield4: ".$_POST['textfield4']."\n";	
	$mensagem = "textfield5: ".$_POST['textfield5']."\n";
	$mensagem = "textfield6: ".$_POST['textfield6']."\n";
	$mensagem = "textfield7: ".$_POST['textfield7']."\n";	
	$mensagem = "textfield8: ".$_POST['textfield8']."\n";	
	$mensagem = "textfield9: ".$_POST['textfield9']."\n";
	$mensagem = "textfield10: ".$_POST['textfield10']."\n";
	$mensagem = "textfield11: ".$_POST['textfield11']."\n";	
	$mensagem = "textfield12: ".$_POST['textfield12']."\n";	
	$mensagem = "textfield13: ".$_POST['textfield13']."\n";
	$mensagem = "textfield14: ".$_POST['textfield14']."\n";
	$mensagem = "textfield15: ".$_POST['textfield15']."\n";	
	$mensagem = "textfield16: ".$_POST['textfield16']."\n";	
	$mensagem = "textfield17: ".$_POST['textfield17']."\n";
	$mensagem = "textfield18: ".$_POST['textfield18']."\n";
	$mensagem = "textfield19: ".$_POST['textfield19']."\n";	
	$mensagem = "textfield20: ".$_POST['textfield20']."\n";	
	$mensagem = "textfield21: ".$_POST['textfield21']."\n";
	$mensagem = "textfield22: ".$_POST['textfield22']."\n";
	$mensagem = "textfield23: ".$_POST['textfield23']."\n";	
	$mensagem = "textfield24: ".$_POST['textfield24']."\n";	
	$mensagem = "textfield25: ".$_POST['textfield25']."\n";
	$mensagem = "textfield26: ".$_POST['textfield26'];
	
	if (mail("alexandre@allrox.com.br", "Pedido de Orçamento do Site", $mensagem, $cab)) {
		echo "<script type=\"text/javascript\">alert(\"Sua mensagem foi enviada com sucesso.\"); history.go(-1); </script>\n";
	}
	
	else {
		echo "<script type=\"text/javascript\">alert(\"Ocorreu um erro ao tentar enviar.\"); history.go(-1); </script>\n";
	}
}
	else {
		header("Location:orcamento.php");
	}

?>

</body>
</html>