<html>
<head><title>Variáveis, tipos de dados e comentários</title></head>
<body>
<?php
	//Isso é um comentário feito no código php
	//agora eu vou começar a escrever os tipos de dados suportados
	
	$nascimento = 1983; //variável do tipo inteiro
	$flutuante = 10.56; //variável do tipo flutuante
	$string = "Váriavel do tipo string"; //variável do tipo string
	$booleana = TRUE; //variavel do tipo booleana
	$vetor = array('Santos FC','Palmeiras','Corinthians','São Paulo'); // variavel do tipo array
	$objeto = (object) 'Meu Objeto'; //variavel do tipo object
	$nula = null; //variável do tipo null
	
	/*
	 Exemplo de um comentário com o PHP em várias linhas
	 Isso é bem legal né?
	 */

	 //agora vamos brincar com as variáveis
	 
	 echo '<pre>';
	 
	 print_r(var_dump($nascimento));
	 print_r(var_dump($flutuante));
	 print_r(var_dump($string));
	 print_r(var_dump($booleana));
	 print_r(var_dump($vetor));
	 print_r(var_dump($objeto));
	 print_r(var_dump($nula));
	 
	 echo '</pre>';
?>
<p><strong>Tipo inteiro:</strong> <?php echo $nascimento; ?></p>
<p><strong>Tipo flutuante:</strong> <?php echo $flutuante; ?></p>
<p><strong>Tipo string:</strong> <?php echo $string; ?></p>
<p><strong>Tipo booleana:</strong> <?php echo $booleana; ?></p>
<p><strong>Tipo array:</strong> <?php echo $vetor[0]; ?></p>
<p><strong>Tipo nula:</strong> <?php echo $nula; ?></p>
</body>
</html>
