<?php
	require_once("ar/admin/conexao/conecta.php");
	require("ar/admin/functions/limita-texto.php");
    require("ar/admin/functions/quebra-data.php");   
?>

<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Douglas P. Lacerda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <style>
        .blog_area a:hover, .blog_area a :hover{
            -webkit-background-clip: border-box!important;
            -webkit-text-fill-color: aliceblue!important;
        }
    </style>

       
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>Hello, enjoy the Posts, comment and share.</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                    <div class="short_contact_list">
                                            <ul>
                                                <li><a href="blog.php"><i class=""></i> Noticias sobre o que e Novo</a></li>
                                                <li><a href="blog.php"><i class=""></i> Tecnologias em Primeira Ponta</a></li>
                                            </ul>
                                        </div>
                                        <div class="social_media_links">
                                            <a href="http://www.linkedin.com/in/douglaslacerda2020" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            <a href="https://facebook.com/douglas.lacerda.1690" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="https://www.youtube.com/channel/UCOmwaeqakT89btacvObPpzA" target="_blank">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="../index.html">
                                    <font color="#ffffff">Douglas P. Lacerda </font>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            
                                            <li><a href="../index.html">Home</a></li>
                                            <li><a href="#">Páginas<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="../iframe/iframe.html">Projetos concluídos</a></li>
                                                    <li><a href="../curriculo/curriculo.html">Currículo do Autor</a></li>
                                                    <li><a href="ar/admin/index.php">Para Escritores</a></li>
                                                </ul>
                                            </li>
                                           <!-- <li><a href="services.html">Services</a></li>
                                        <li><a href="study.html">Case</a></li>-->
                                            <li><a class="active" href="#">blog<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a class="active" href="blog.php">Publicações</a></li>
                                               <!-- <li><a class="active" href="single-blog.php">single-blog</a></li>-->
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSJu1sVjT1RuXpObnueHMWoXzOyJRmB_I_vwjE0qnVBnaS92etO&usqp=CAU">Minha Fundação</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a  href="https://api.whatsapp.com/send?phone=5561986044709&text=Ol%C3%A1%20Douglas%20P.%20Lacerda%2C%20Estou%20Visitando%20o%20seu%20site%20e%20gostaria%20de%20agendar%20um%20hor%C3%A1rio%20com%20voc%C3%AA%3B" target="_blank">Sugerir Matéria</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    
        <!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text">
                            <h3 style="color: white">Douglas Pereira Lacerda</h3>
                            <h1 style="color: white">Nosso Blog e Baseado em Conhecimento</h1>
                            <h2 style="color: white">Tudo Sobre tecnologia aqui</h2>
                             <hr>
                         
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--/ bradcam_area  -->


    <!--================Blog Area =================-->
    <a name="anchor"></a>
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

<?php
echo "<h1><span style='color:blue;'>POSTS NOVOS AQUI&#9749;</span><h1>";
if(empty($_GET['pg'])){}
else{ 
$pg =$_GET['pg'];
if(!is_numeric($pg)){
	
	echo '<script language= "JavaScript">
		location.href="index.php";
		</script>';
}

}


if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

$quantidade = 3;
$inicio = ($pg*$quantidade) - $quantidade;


	$sql = "SELECT * from tb_postagens WHERE exibir='Sim' ORDER BY id DESC LIMIT $inicio, $quantidade";
	try{
		$resultado = $conexao->prepare($sql);
		$resultado->execute();
		$contar = $resultado->rowCount();
		
		if($contar > 0 ){
			while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
?>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <a href="single.php?id=<?php echo $exibe->id;?>">
                                    <div class="thumb-cover">
                                        <img class="card-img rounded-0 img-fitter" width="400" height="250" data-src="ar/upload/postagens/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>">
                                    </div>
                                </a>
                                <a href="single.php?id=<?php echo $exibe->id;?>" class="blog_item_date">
                                    <h3><?= quebraData($exibe->data,'dia');?></h3>
                                    <p><?= quebraData($exibe->data,'mes_abreviado');?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single.php?id=<?php echo $exibe->id;?>">
                                    <h2><?php echo $exibe->titulo;?></h2>
                                </a>
                                <p><?php echo limitarTexto($exibe->descricao, $limite=380)?></p>
                                <!-- <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul> -->
                            </div>
                        </article><hr>
<?php
            }//while
        }else{
        echo '<li>Não existe post cadastrados no sistema</li>';
        }

    }catch(PDOException $erro){ echo $erro;}
?> 
                    






                        
<!-- inicio botoes -->

<style>
/* paginacao */

.paginas{width:100%;padding:10px 0;text-align:center;background:#fff;height:auto;margin:10px auto;}
.paginas a{width:auto;padding:10px 18px;background:#eee;color:#333;margin:0px 2.5px;text-decoration:none;font-family:tahoma, "Trebuchet Ms", arial;font-size:13px; }
.paginas a:hover{text-decoration:none;background:#5DB2FF; color:#fff!important;-webkit-text-fill-color: aliceblue!important;}

<?php
	if(isset($_GET['pg'])){
		$num_pg = $_GET['pg'];	
	}else{$num_pg = 1;}
?>

.paginas a.ativo<?php echo $num_pg;?>{background:#5DB2FF; color:#fff!important;}

</style>


<?php
	$sql = "SELECT * from tb_postagens";
	try{
			$result = $conexao->prepare($sql);			
			$result->execute();
			$totalRegistros = $result->rowCount();
		}catch(PDOException $e){
			echo $e;
		}
		
		if($totalRegistros <=$quantidade){}
		else{
			$paginas = ceil($totalRegistros/$quantidade);
			if($pg > $paginas){
				echo '<script language= "JavaScript">
					location.href="blog.php";
					</script>';}
			$links = 5;	
			
			if(isset($i)){}
			else{$i = '1';}

?>

<div class="paginas">

	<a href="blog.php?pg=1">Primeira Página</a>
    
    <?php
		if(isset($_GET['pg'])){
			$num_pg = $_GET['pg'];	
		}
		
		for($i = $pg-$links; $i <= $pg-1; $i++){
			if($i<=0){}
			else{ 
	?>
     
    <a href="blog.php?pg=<?php echo $i;?>"  class="ativo<?php echo $i;?>"><?php echo $i;?></a>
     
         
<?php  }} ?>
    
    
    <a href="blog.php?pg=<?php echo $pg;?>" class="ativo<?php echo $i;?>"><?php echo $pg;?></a>
    

<?php
	for($i = $pg+1; $i <= $pg+$links; $i++){
		if($i>$paginas){}
		else{
?>
			
	<a href="blog.php?pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>		
		
<?php
		}
	}
?>

<a href="blog.php?pg=<?php echo $paginas;?>">Última página</a>		

    

</div><!-- paginas -->





<?php
		}
?>

<!-- fim botoes paginacao -->            
        
        














                        <!-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


    
    <!-- footer start -->
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                    <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="https://lh3.googleusercontent.com/sJDkUu9F25c_cWp8N9bOOn271fij1QKc7Y1Am7JW7PCfM9TK0FYhm1Rke3nBYFeM-G-8Bf_FMg-pf075=s1280-p-no-v1" alt="" style="width: 110px; height: 110px; border-radius: 50% " alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4>Douglas Pereira Lacerda</h4>
                        </a>
                        <p> *Tornou-se chocantemente óbvio que a nossa tecnologia excedeu a nossa humanidade. ...
                        <p> *Trocava toda a minha tecnologia por uma tarde com Sócrates. ...
                        <p> *A primeira regra de qualquer tecnologia utilizada nos negócios é que a automação aplicada a uma operação eficiente aumentará a eficiência.</p>
                     </div>
                  </div>
               </div>
                                <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://facebook.com/douglas.lacerda.1690" target=" target="_blank">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/Douglas82801010" target=" target="_blank">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/douglas2020lacerda/" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
    
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Ano em que o site esta sendo apresentado -->
DouglasLacerda.com &copy;<script>document.write(new Date().getFullYear());</script> 
                                <!-- Ano em que o site esta sendo apresentado -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/ footer end  -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

     <!-- wesley souza dev -->
    <script src="https://www.jqueryscript.net/demo/Minimalist-Image-Resize-Crop-Plugin-For-jQuery-imgFitter/src/jquery.imgFitter.js"></script>
     <!-- end wesley souza dev -->

    

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });


        $('.img-fitter').imgFitter({

            // CSS background position
            backgroundPosition: 'center center',

            // for image loading effect
            fadeinDelay: 400,
            fadeinTime: 1200

        });
    </script>


</body>
</html>