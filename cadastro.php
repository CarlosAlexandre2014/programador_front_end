<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>form1</title>
</head>
	<body>
		<?php
			$nome = $POST['nome'];
			$tel = $POST['tel'];
			$email = $POST['email'];
			$sexo = $POST ['sexo'];
			$idioma = $POST ['idioma'];
			
			$corpo  = "nome: ".$nome."<BR>\n";
			$corpo  = "tel: ".$tel."<BR>\n";
			$corpo .= "email: ".$email."<BR>\n";
			$corpo .= "sexo: ".$sexo."<BR>\n";
			$corpo  = "idioma: ".$idioma."<BR>\n";
			
			if(mail("seuemail@site.com.br","Assunto",$corpo)){
				echo("email enviado com sucesso");
				echo ("Obrigado pela informações.");
			} else {
				echo("Erro ao enviar e-mail");
			}	
		
		?>
	</body>
</html>	
