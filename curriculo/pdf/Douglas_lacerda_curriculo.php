<?php

require 'pdf/vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

 //define o estilo da página pdf
$style='';


$dompdf->loadHtml('

            <h1 style="text-align: center;">Douglas Pereira Lacerda</h1>
            <p style="text-align: center;">SHPS, Setor Habitacional – Por do Sol, Quadra108 conjunto K Casa 01 / Distrito Federal- DF
            <p style="text-align: center;">Cep: 72,238-100<h2><p style="text-align: center;"> +55 (61) 9 8604 - 4709<p style="text-align: center;"> douglaslacerda2023@gmail.com / Data de nascimento: 11/Junho/1991</p></p>
            
            <br>
            <h3>Qualificações Profissionais 1 e 2.</h3>
            <hr>
            <p>1- Soluções de Problemas, Gestão de Equipe, Recrutamento, Administração de Empresas, Gestão de Pessoas, Registros de Marcas e Patentes, Suporte Técnico, Desenvolvimento de sistemas Web com Linguagens e técnicas Básicas, auxíliar de excritório, Redação e análize de contratos e outros Documentos, Liderar e Trabalhar com Marketing e Vendas em equipe, Desenvolvimento e criação de Startup e Mei, Consultoria e soluções em Tecnologia da Informação</p>

            <p>2- Técnico em Polissonografia, Técnico em análises de exames de Polissonografia, muito estudo e muito trabalho aperfeiçoando a prática e as técnicas em laboratório, Habilidade em identificar aos eventos ocorridos no exame em procedimento, Titulação de Cpap/ Bipap, Split Night- Noite Partida, Atendimento profissional ao paciente, qualidade na realização de cada exame devido ao conhecimento técnico de eventos de artefatos, e possivelmente Solucionando-os, Facilidade para trabalhar em plantões Noturnos. Resultando em Qualidade Técnica e gestão, melhores exames, qualidade nos laudos mais pacientes e melhor faturamento.</p>

            <h3>Idiomas</h3>
                <hr>
                <p>Língua Portuguesa.
                <p>Língua Inglesa Americana Intermediário.
                <p>Língua Espanhola Intermediário</p>

                <h3>Iformática</h3>
                <hr>
                <p>Microsoft Word, Microsoft Excel, Microsoft PowerPoint, Microsoft Access.
                <p>Informática de básica á Avançada.
                <p>PHP-7 Intermediário.
                <p>MySQL 4.1 (database software) Intermediário.
                <p>Html-5.
                <p>Css-3.


            <h3>Experiências Profissionais</h3>
                <hr>
                <p>DIRETOR ADMINISTRATIVO E ORGANIZACIONAL / MYZZY TECNOLOGIA.
                <p>Setembro 2019 - Atual</p>
                <p>Trabalhando a parte administrativa e organizacional da Companhia, visando o bem-estar de todos os membros presentes, Gerenciando os controles que dizem respeito à função administrativa, Buscando competitividade no mercado, visualizando o crescimento financeiro da empresa e atraindo novos investidores e clientes.</p>

            <p>EMPREENDEDOR DIGITAL
                <p>01/10/2019 - Atual
                <p>Vendas de e-books, livros, cursos, videoaulas, ministrando cursos e palestras on-line.
                TÉCNICO EM ANÁLISE DE EXAMES DE POLISONOGRAFIA / CLINICA DE POLISONOGRAFIA MULTMED SONO
                15 de maio de 2019 - Atual
                Realize o acesso remoto, acesse o exame a ser analisado, identifique e marque todos os eventos ocorridos durante a coleta de dados, gere relatório de palavras editáveis ​​para o médico escrever o diagnóstico final.</p>

            <p>PORTEIRO / GMA ADMINISTRACAO E SERVICOS LTDA.
                <p>14 de maio de 2018 - Atual
                <p>Porteiro é o funcionário que deve controlar o ingresso de pessoas, bens, correspondência no edifício, isto é, limita-se a observar e monitorar a entrada, não sendo responsável pela segurança do patrimônio.</p>

            <p>SÓCIO / DIRETOR ORGANIZACIONAL / CENTRO DE COMPRAS DE EQUIPAMENTOS MEDICO-HOSPITALAR LTDA.
                <p>01/03/2016 - 28/11/2017
                <p>Organize o ambiente de trabalho, lide com os problemas do dia-a-dia, atenda às demandas do dia-a-dia, folgue o trabalho, prepare planilhas de contabilidade, monitore de perto a cobrança da clínica, pague os funcionários, cubra a assistência técnica, recepcionista, limpeza e atendimento telefônico. Gerencie as agendas de exames e suas confirmações de data e hora e o endereço do lacal onde está agendado, gerencie o departamento de compras ou realize-as listando os materiais ausentes e até mesmo prevendo prazos, lidando com todas as tarefas do dia e se preparando para os outros com baixo capital e mantenha a produtividade no serviço e em várias tarefas.</p>


            <p>SUPERVISOR / TÉCNICO EM POLISSONOGRAFIA / TÉCNICO ANALISTA / CENTRO DE COMPRAS DE EQUIPAMENTOS MEDICO-HOSPITALAR LTDA.
                <p>01/08/2015 - 01/04/2016
                <p>Receba pacientes que permanecerão na clínica a noite toda, registre-se, se necessário, verifique o sistema de agendamento da clínica, prepare os dispositivos para realizar exames polissonográficos de noite inteira, atenda e prepare cada paciente para o exame noturno, observe as solicitações médicas que determinam o tipo de exames, como exames de titulação Cpap, Bipap ou CO2, faça o acompanhamento durante a noite e atenda às necessidades de cada indivíduo hospitalizado exclusivamente para realizar o exame. Procedimento de polissonografia.</p>


            <p>TÉCNICO EM POLISSONOGRAFIA / BIOCARDIOS INSTITUTO DE CARDIOLOGIA LTDA.
                <p>01/06/2013 - 25/07/2015
                Receba pacientes que permanecerão na clínica a noite toda, registre-se, se necessário, verifique o sistema de agendamento da clínica, prepare os dispositivos para realizar exames polissonográficos de noite inteira, atenda e prepare cada paciente para o exame noturno, observe as solicitações médicas que determinam o tipo de exames, como exames de titulação Cpap, Bipap ou CO2, faça o acompanhamento durante a noite e atenda às necessidades de cada indivíduo hospitalizado exclusivamente para realizar o exame. Procedimento de polissonografia, liste dispositivos defeituosos, entre em contato com o suporte sobre problemas, ajude o gerente a resolver, se possível, ou entre em contato com a TI.</p>


            <p>TTÉCNICO EM POLISSONOGRAFIA/ FUNDO DE APOIO AO DESENVOLVIMENTO CIENTIFICO E TECNOLÓGICO DO HOSPITAL DA UNIVERSIDADE DE BRASILIA-FAHUB.
                <p>01/05/2011 - 31/05/2011
                <p>Participação em pesquisa do Dr. Paulo Sergio Azeredo Henriques Filho no Hospital Universitário de Brasília -HUB, realiza o exame de Polissonografia em Crianças para decidir a taxa de evasão nos mesmos entrevistados, onde o resultado terminaria publicado em um artigo. Com o Neonatal, realizando o exame polissonográfico de até 3 horas, realizando vários testes em resposta ao estresse induzido pela dor, pesquisadores médicos e residentes estimulam esse recém-nascido durante o exame com choques objetivos pontuais em miliamperes, onde esse resultado seria pulsado um artigo e usado para o resultado de uma enfermeira também da unidade.</p>


            <p>TÉCNICO EM ELETROENCEFALOGRAMA JUNIOR / PRONTONEURO- SINAPSE SERVICOS MEDICOS LTDA.
                <p>11/03/03 - 20/01/2012
                <p>Realização de eletroencefalogramas, potenciais evocados gerais (todos os exames de potenciais evocados), assistência a médicos em exames de eletroneurografia, realização de eletromiografia, auxílio no controle de exames, gerenciamento dos exames realizados e organização das datas de entrega dos relatórios. aos seus proprietários, atender as ligações telefônicas, auxiliando na grande demanda de consultas e exames, trabalhando nas análises dos exames de polissonografia já realizados, auxiliando nas consultas médicas.</p>


            <p>ATENDENTE DE TELEFONE / CLINICA GERAL E ORTOPEDICA SUDOESTE EIRELI.
                </p>01/11/2009 - 10/03/03
                <p>Atender telefonemas para agendar exames, consultas, sessões de fisioterapia, Pilates e todas as necessidades presentes durante o meu dia de trabalho, mantendo o ambiente organizado e limpo, pois as próprias ferramentas de trabalho eram excepcionais, sempre cuidando dos horários dos médicos e direcionando as cirurgias de Dr. Henry Greidinger Campos, a sua assistente Madame. Naura Rejane Pinheiro da Silva.</p>


            <p>EMPACOTADOR / ATENDENTE DE PADARIA / FORTES COMERCIO DE ALIMENTOS LTDA.
                <p>01/04/2009 - OUTUBRO 21/10/2009
                <p>EMBALADOR: Cuidar da frente de caixa de toda á loja ou Supermercado, selecionar as compras para embalá-las e acomode-as adequadamente conforme solicitado pelas agências de saúde, como sempre separar os alimentos dos produtos de limpeza. CLIENTE DE PADARIA: atenda a todos os clientes atendendo a pedidos específicos, sempre cuidando da higiene dos produtos, inspecionando insetos como moscas, rastreando datas de produtos expostos e bloqueando produtos vencidos. para sua validade, auxiliar o padeiro e encarregado do setor na produção de pão e outros produtos produzidos no estabelecimento.</p>

            <br><br>    
            <h3>Formação Acadêmica</h3>
                <hr>
                <p>Escola Estadual Darci Ribeiro</b>
                    <h3>Finalizado em: 2008</h3>
                    <p>Ensino Médio Completo.</p>
                __________________________________________
                <br>
                <h3>Ensino Superior</h3>
                <p><h3>UNIC SUL / Universidade Cruzeiro do Sul</h3>
                    <p>Engenharia de Computação.</p>
                    <p>Curso Paralizado</p>        
                    

            <br><br>
            <h3>Atividades Extracurriculares</h3>
               <hr>
               <p>Informática Básica <b>Concluído em 14/12/2007 na Estação Digital em Arinos-MG.</b>
                    <p>Curso de Métodos Eletrográficos e Estudos do Sono<b> De 03/2010 a 04/2011.</b>
                    <p>II Curso de Polissonografia<b> Realizado em 26 e 27 de Novembro de 2010.</b>
                    <p>Curso Suporte Básico de Vida<b> Realizado no período de 16/11/2011.</b> 
                    <p>Memorando/ Coordenador em<b>Estudos do Sono De 01/08/2015 a 01/04/2016.</b>
                    <p>Semana de Gestão- Uni. Cesumar<b> De 10/06/2013 a 12/06/2013.</b>
                    <p>Semana de Conhecimentos Gerais- Uni. Cesumar<b> De 18/10/2013 a 22/10/2013.</b>
            

            <h3>Realizações Pessoais</h3>
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

