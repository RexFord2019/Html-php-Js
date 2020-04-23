<?php

require 'pdf/vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

 //define o estilo da página pdf
$style='';


$dompdf->loadHtml('
        
           
            <h1 style="text-align: center;" font size="4" face="arial">Douglas Pereira Lacerda</h1>
            <p style="text-align: center;" font size="4" face="arial">SHPS, Setor Habitacional – Por do Sol, Quadra108 conjunto K Casa 01 / Distrito Federal- DF
            <p style="text-align: center;" font size="4" face="arial">Cep: 72,238-100<h2><p style="text-align: center;"> +55 (61) 9 8604 - 4709<p style="text-align: center;"> douglaslacerda2023@gmail.com / Data de nascimento: 11/Junho/1991</p>
            <p style="text-align: center;" font size="4" face="arial">https://douglaspereiralacerda.com.br/curriculo/curriculo.html</p>
            <br><br><br>
            <font size="4" face="arial">
            <h3>OBJETIVO</h3>
               <hr>
               <p>Trabalhar e terminar á faculdade de Engenharia de Computação.</p>     
            
            
            <br>
            <h3>QUALIFICAÇÕES PROFISSIONAIS</h3>
            <hr>
            <p>Atividades e Rotinas de Escritório, atividades comerciais, atendimento ao público atráves de callcenter ou recepção, atendimento ao telefone,
               cobranças, manuseio de sistemas internos, envio e recebimento de e-mails, postura profissional, busca, perseverança, facil aprendizado, ótimo relacionamento,
               diferencial em trabalho de equipe, liderança e ser liderado.

            <h3>IDIOMAS</h3>
                <hr>
                <p>Língua -Portuguesa.
                <p>Língua -Inglesa -Americana -Intermediário.
                <p>Língua -Espanhola -Intermediário</p>

                <h3>INFORMÁTICA</h3>
                <hr>
                <p>Pacote Office 2007 á 2019 (Microsoft Word, Microsoft Excel, Microsoft PowerPoint, Microsoft Access).
                <p>Informática - Nível Básico e Avançado.
                <p>GitHub - Nível Intermediário.
                <p>PHP-7 - Nível Básico.
                <p>MySQL 4.1 (database software) - Nível Básico.
                <p>Html-5 - Nível Intermediário.
                <p>Css-3 - Nível Intermediário.
                


            <h3>EXPERIÊNCIAS PROFISSIONAIS</h3>
                <hr>
                <p>DIRETOR ADMINISTRATIVO E ORGANIZACIONAL / MYZZY TECNOLOGIA.
                <p>Setembro 2019 - Atual</p>
                <p>Trabalhando e gerenciando o setor administrativo da empresa, zelando pelo bem-estar de todos os membros presentes,
                        organizando as rotinas da administração, brabalhando e gerenciando o setor administrativo da empresa,uscando competitividade de mercado, visualizando 
                        o crescimento financeiro da empresa e atraindo novos investidores e clientes.</p>

            <p>EMPREENDEDOR DIGITAL
                <p>01/10/2019 - Atual
                <p>Vendas de e-books, livros, cursos, videoaulas, ministrando cursos e palestras on-line.
                
            <p>TÉCNICO EM ANÁLISE DE EXAMES DE POLISONOGRAFIA / CLINICA DE POLISONOGRAFIA MULTMED SONO
                <p>15 de maio de 2019 - Atual
                <p>Realizar o acesso remoto, acessar aos exames realizados, identificar e marcar á todos os eventos ocorridos durante a coleta dos dados no plantão, gerar o relatório em arquivo Word (editável) ​​para o médico escrever o diagnóstico final.</p>

            <p>PORTEIRO / GMA ADMINISTRACAO E SERVICOS LTDA.
                <p>14 de maio de 2018 - Atual
                <p>O Porteiro é o funcionário que deve controlar a entrada de pessoas, mercadorias e correspondências no edifício, ou seja, ele se limita a observar e monitorar a entrada, e zelar pelo bem estar do patrimônio.</p>

            <p>SÓCIO / DIRETOR ORGANIZACIONAL / CENTRO DE COMPRAS DE EQUIPAMENTOS MEDICO-HOSPITALAR LTDA.
                <p>01/03/2016 - 28/11/2017
                <p>Organizar o ambiente de trabalho, lidar com os problemas do dia-a-dia, atender as demandas exigidas, preparar planilhas e gerar relatórios, Checar contas a Pagar e á receber, realizar aos pagamentos, e organizar os arquivos físicos e digitais de todos os documentos pertinentes á empresa, dar assistência técnica, fazer atividade de  recepcionista, limpeza e atendimento telefônico. Gerenciar as agendas de exames e suas confirmações de data e hora e o endereço do lacal onde está agendado, gerenciar o departamento de compras, listando os materiais ausentes e até mesmo prevendo prazos, trabalhar com baixo capital e manter a produtividade no serviço de todas as tarefas.</p>


            <p>SUPERVISOR / TÉCNICO EM POLISSONOGRAFIA / TÉCNICO ANALISTA / CENTRO DE COMPRAS DE EQUIPAMENTOS MEDICO-HOSPITALAR LTDA.
                <p>01/08/2015 - 01/04/2016
                <p>Receber aos pacientes que permanecerão na clínica a noite toda para o exame de Polissonografia, verifique o sistema de agendamento da clínica, preparar os dispositivos para realizar exames polissonográficos de noite inteira, preparar cada paciente para o se respectivo exame, observar as solicitações médicas que determinam o tipo de exame a ser realizado, como exames de titulação Cpap, Bipap ou CO2, faça o acompanhamento durante a noite e atender às necessidades de cada indivíduo hospitalizado exclusivamente para realizar o exame de polissonografia, e listar dispositivos defeituosos, escrever quais os defeitos apresentados, entrar em contato com o suporte técnico noturno, ou entrar em contato com a equipe TI da empresa.</p>


            <p>TÉCNICO EM POLISSONOGRAFIA / BIOCARDIOS INSTITUTO DE CARDIOLOGIA LTDA.
                <p>01/06/2013 - 25/07/2015
                <p>Receber aos pacientes que permanecerão na clínica a noite toda, fazer su registro se necessário, verifique o sistema de agendamento da clínica, prepare os dispositivos para realizar exames polissonográficos de noite inteira, atenda e prepare cada paciente para o exame noturno, observe as solicitações médicas que determinam o tipo de exames, como exames de titulação Cpap, Bipap ou CO2, faça o acompanhamento durante a noite e atenda às necessidades de cada indivíduo hospitalizado exclusivamente para realizar o exame de Polissonografia, listar os equipamentos defeituosos, escrever quais os defeitos apresentados, entrar em contato com o suporte técnico noturno, caso nao resolvido durante o plantão, ajudar o gerente a resolver no dia seguinte possivelmente, ou entrar em contato diretamente com a equipe de TI da empresa.</p>


            <p>TTÉCNICO EM POLISSONOGRAFIA/ FUNDO DE APOIO AO DESENVOLVIMENTO CIENTIFICO E TECNOLÓGICO DO HOSPITAL DA UNIVERSIDADE DE BRASILIA-FAHUB.
                <p>01/05/2011 - 31/05/2011
                <p>COM CRIANÇAS; Participei da pesquisa do Médico Neurofisiologista o senhor Dr. Paulo Sergio Azeredo Henriques Filho no Hospital Universitário de Brasília -HUB, realiza o exame de Polissonografia em Crianças para decidir a taxa de evasão escolar, nos mesmos entrevistados, onde o resultado terminou publicado em um artigo cientifico</p>
                        <p>COM LACTENTES, realizando o exame polissonográfico de até três horas, fisemos vários testes em busca de respostas ao estresse induzido pela dor, pesquisadores médicos e residentes estimulam esse recém-nascido durante o exame com choques em Miliamperes, onde esse resultado seria descrito e um artigo de uma enfermeira também da unidade.</p>


            <p>TÉCNICO EM ELETROENCEFALOGRAMA JUNIOR / PRONTONEURO- SINAPSE SERVICOS MEDICOS LTDA.
                <p>11/03/03 - 20/01/2012
                <p>Exercer atividades técnicas, eletroencefalograma, potenciais evocados gerais (todos os exames de potenciais evocados), assistência aos  médicos em exames de eletroneurografia, realização de eletroneurografia, auxílio no controle de exames, gerenciamento dos exames realizados e organização das datas de entrega dos relatórios aos seus proprietários, atender as ligações telefônicas, auxiliando na grande demanda de consultas e exames, trabalhando nas análises dos exames de polissonografia já realizados, auxiliando nas consultas médicas.</p>


            <p>ATENDENTE DE TELEFONE / CLINICA GERAL E ORTOPEDICA SUDOESTE EIRELI.
                </p>01/11/2009 - 10/03/03
                <p>Atender aos telefonemas para agendar exames consultas, e as sessões de fisioterapia, Pilates e todas as necessidades presentes durante o dia de trabalho, mantendo o ambiente organizado e limpo, sempre cuidar dos horários dos médicos e direcionando as cirurgias do Dr. Henry Greidinger Campos, a sua assistente, a senhora Naura Rejane Pinheiro da Silva.</p>


            <p>EMPACOTADOR / ATENDENTE DE PADARIA / FORTES COMERCIO DE ALIMENTOS LTDA.
                <p>01/04/2009 - 21/10/2009
                <p>EPACOTADOR, Cuidar da frente de caixa de toda a loja, selecionar as compras para embalá-las e acomodar adequadamente conforme solicitado pelas agências de saúde, como sempre, separar os alimentos dos produtos de limpeza.</p> 
                        <p>ATENDENTE DE PADARIA: atender á todos os clientes e á seus pedidos específicos, sempre cuidar da higiene dos produtos e datas de validade, inspecionando insetos como moscas, rastreando datas de produtos expostos e descartando produtos á vencer ou vencidos. tsmbém auxiliar o padeiro e encarregado do setor de padaria na produção de pães e outros produtos produzidos no estabelecimento.</p>

            <br><br>    
            <h3>FORMAÇÃO ACADEMICA</h3>
                <hr>
                <h3>Ensino Superior</h3>
                <p>UNIC SUL / Universidade Cruzeiro do Sul
                <p>Engenharia de Computação.</p>
                    <p><strong>Status:</strong>
                    <p>Curso Paralizado atualmente.</p>  
                __________________________________
                <br>
                <p>Escola Estadual Darci Ribeiro</b>
                    <p><strong>Status:</strong>
                    <h3>Conclusão em: 2008</h3>
                    <p>Ensino Médio Completo.</p>     
                    

            <br><br>
            <h3>ATIVIDADES EXTRACURRICULARES</h3>
               <hr>
               <p>Informática Básica <b>Concluído em 14/12/2007 na Estação Digital em Arinos-MG.</b>
                    <p>Curso de Métodos Eletrográficos e Estudos do Sono<b> De 03/2010 a 04/2011.</b>
                    <p>II Curso de Polissonografia<b> Realizado em 26 e 27 de Novembro de 2010.</b>
                    <p>Curso Suporte Básico de Vida<b> Realizado no período de 16/11/2011.</b> 
                    <p>Memorando/ Coordenador em<b>Estudos do Sono De 01/08/2015 a 01/04/2016.</b>
                    <p>Semana de Gestão- Uni. Cesumar<b> De 10/06/2013 a 12/06/2013.</b>
                    <p>Semana de Conhecimentos Gerais- Uni. Cesumar<b> De 18/10/2013 a 22/10/2013.</b>
            
            <br><br>
            <h3>REALIZAÇÕES PESSOAIS</h3>
               <hr>
               <p>Membro e fundador da Empresa e sua "Marca" Myzzy Tecnologia Em Setembro 2019 - Atual.
                    <p>Registro e Concessão da "Marca" Myzzy Tecnologia 1º Decênio apartir de 2020 - Atual.
                    <p> Criei a Fundação Lacerda sem Fins Lucrativos para ajuda Humanitária á todos que necessitam.
                    <p>Ocupar ao cargo de Administrador e Diretor Organizacional da empresa Myzzy Tecnologia.
                    <p>Técnico em Análises de exames de Polissonografia, Trabalho 100% a Home-Office.
                    <p>Programador iniciante em "html-5, CSS-3, Php-7, MySQL 4.1 (database software)-{ Ainda sem ir á Faculdade}.
                    
                    
    ');


$dompdf->setPaper('A4', 'landscape');
$dompdf->render();

//Exibibir a página
$dompdf->stream('Curriculo Profissional de Douglas Pereira Lacerda.pdf .pdf', array( 'Attachment' => 0 ));

//Pra prevenir espaçamentos no final
exit;

   
?>

