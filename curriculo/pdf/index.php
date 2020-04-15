<?php	

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML
	$dompdf->load_html_file('C:\xampp\htdocs\2099_scenic\curriculo\pdf\curriculo.php');
			
    // (Opcional) Configure o tamanho e a orientação do papel 
    $dompdf -> setPaper ( 'A4' ,  'portrait' ); 
     
	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"Currículo de Douglas Pereira Lacerda.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>