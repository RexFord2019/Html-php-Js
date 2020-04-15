<?php
	require_once("ar/admin/conexao/conecta.php");
	require("ar/admin/functions/limita-texto.php");
   require("ar/admin/functions/quebra-data.php");   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>DouglasLacerda.com</title>
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
                                                <li><a href="https://gmail.com/mail/help/intl/pt_pt/about.html" target="_blank"><i class="fa fa-envelope"></i> douglaslacerda2020@gmail.com</a></li>
                                                <li><a href="tel:+5561986044709" target="_blank"><i class="fa fa-phone"></i> +55 (61) 9 8604 -4709</a></li>
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
                                            <li><a href="#">pages<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="../iframe/index.html">Finished Projects</a></li>
                                                    <li><a href="../curriculo/index.html">My Curriculum</a></li>
                                                    <li><a href="ar/index.php">Restricted Area</a></li>
                                                </ul>
                                            </li>
                                           <!-- <li><a href="services.html">Services</a></li>
                                        <li><a href="study.html">Case</a></li>-->
                                            <li><a class="active" href="#">blog<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a class="active" href="blog.php">blog</a></li>
                                                    <li><a class="active" href="single.php">single-blog</a></li>
                                                    
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
                                        <a  href="https://api.whatsapp.com/send?phone=5561986044709&text=Ol%C3%A1%20Douglas%20P.%20Lacerda%2C%20Estou%20Visitando%20o%20seu%20site%20e%20gostaria%20de%20agendar%20um%20hor%C3%A1rio%20com%20voc%C3%AA%3B" target="_blank">MEU WHATSAPP</a>
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
                             <h3>Blog</h3>
                             <br>
                                <div class="video_service_btn">
                                    <a href="#anchor" class="boxed-btn3">Detailed posts</a>
                                </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--/ bradcam_area  -->

   <!--================Blog Area =================-->
   <a name="anchor"></a>
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8 posts-list">
               <div class="single-post">


<?php
	if(isset($_GET['id'])){
		$idUrl = $_GET['id'];
	} else {
         exit;
   }
	$sql = "SELECT * from tb_postagens WHERE exibir='Sim' AND id=:id LIMIT 1";
	try{
		$resultado = $conexao->prepare($sql);
		$resultado->bindParam('id',$idUrl, PDO::PARAM_INT);
		$resultado->execute();
		$contar = $resultado->rowCount();
		
		if($contar > 0 ){
			while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
?>    



                  <div class="feature-img">
                     <img class="img-fluid"  src="ar/upload/postagens/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $exibe->titulo;?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="fa fa-calendar"></i> <b>Publicado em:</b> <?php echo $exibe->data;?></li>
                        <li onclick="javascript:history.back()" style="cursor: pointer;"><i class="fa fa-mail-reply"></i> <b>Voltar para página anterior</b></li>
                     </ul>
                     <p><?php echo ($exibe->descricao)?></p> 
                  </div>
               </div>
               
<?php
}//while
	}else{
		//echo '<li>Não existe post cadastrados no sistema</li>';
    echo '<script> location.href="blog.php";</script>';

	}
				
	}catch(PDOException $erro){ echo $erro;}
?>        

<br><br>
<hr>
<br>
<h4><b>Deixe seu comentário:</b></h4>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-comments" data-href="http://douglaslacerda.com/single.php?id=<?php echo $idUrl;?>" data-width="100%" data-numposts="5"></div>        
        




            </div>












         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

    <!-- footer start -->
    <footer class="footer">
         <div class="footer_top">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-3 col-md-6 col-lg-3">
                         <div class="footer_widget">
                             <div class="footer_logo">
                                 <a href="#">
                                     <img src="img/footer_logo.png" alt="">
                                 </a>
                             </div>
                             <p>
                                    <a href="#">douglaslacerda2020@gmail.com</a> <br>
                                    +55 61 9 8604-4709 <br>
                                    108/k, SHPS Por do sol, Brasilia df.
                             </p>
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
                     <div class="col-xl-2 col-md-6 col-lg-3">
                         <div class="footer_widget">
                             <h3 class="footer_title">
                                     Services
                             </h3>
                             <ul>
                                 <li><a href="#">Marketing & SEO</a></li>
                                 <li><a href="#"> Startup</a></li>
                                 <li><a href="#">Finance solution</a></li>
                                 <li><a href="#">Food</a></li>
                                 <li><a href="#">Travel</a></li>
                             </ul>
 
                         </div>
                     </div>
                     <div class="col-xl-2 col-md-6 col-lg-2">
                         <div class="footer_widget">
                             <h3 class="footer_title">
                                     Useful Links
                             </h3>
                             <ul>
                                 <li><a href="#">About</a></li>
                                 <li><a href="#">Blog</a></li>
                                 <li><a href="#"> Contact</a></li>
                                 <li><a href="#">Appointment</a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-xl-4 col-md-6 col-lg-4">
                             <div class="footer_widget">
                                     <h3 class="footer_title">
                                             Subscribe
                                     </h3>
                                     <form action="#" class="newsletter_form">
                                         <input type="text" placeholder="Enter your mail">
                                         <button type="submit">Subscribe</button>
                                     </form>
                                     <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.</p>
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
  </script>
</body>

</html>