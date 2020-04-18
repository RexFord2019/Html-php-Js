<?php
//CHAMA DEFINIÇÕES
require '_config.php';
?>
<!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=0">
        <title>reCAPTCHA em Formulário | Web Creative</title>
        
        <link rel="base" href="<?= SITE; ?>"/>

        <!-- DEFINE ESTILO DA PÁGINA -->
        <link rel="stylesheet" href="_form.css">

        <!-- RECAPTCHA API -->
        <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="form_erro"></div>
            <form name="contactForm" class="form-contact" action="" method="post" enctype="">
                <h1>Formulário de Contato com reCAPTCHA</h1>
                <label>
                    <legend>Seu nome</legend>
                    <input type="text" name="nome" placeholder="Ebrahim" required="required"/>
                </label>
                <label>
                    <legend>E-mail</legend>
                    <input type="text" name="email" placeholder="exemplo@gmail.com" required="required"/>
                </label>
                <label>
                    <legend>Assunto</legend>
                    <input type="text" name="assunto" placeholder="Motivo do contato" required="required"/>
                </label>
                <label>
                    <legend>Mensagem</legend>
                    <textarea name="mensagem" rows="10" placeholder="Escreva aqui sua mensagem" required="required"></textarea>
                </label>
                <div class="g-recaptcha" data-sitekey="<?= reCAPTCHA_SITEKEY; ?>"></div>
                <button>Enviar contato</button>
            </form>
        </div>
        <!-- SCRIPT JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="_form.js"></script>
    </body>
</html>