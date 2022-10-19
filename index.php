<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=Basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=Basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=Basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=Basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>Módulo 02 - Tipos</h3>
                    <ul>
                    <li><a href="exercicio.php?dir=Tipos&file=int">Tipo Inteiro</a></li> 
                    <li><a href="exercicio.php?dir=Tipos&file=float">Tipo Float</a></li> 
                    <li><a href="exercicio.php?dir=Tipos&file=aritmeticas">Op. Aritméticas</a></li> 
                    <li><a href="exercicio.php?dir=Tipos&file=desafio_precedencia">Desafio Precedência</a></li> 
                    <li><a href="exercicio.php?dir=Tipos&file=string">Tipo String</a></li> 
                    <li><a href="exercicio.php?dir=Tipos&file=desafio_string">Desafio String</a></li> 
                    <li><a href="exercicio.php?dir=Tipos&file=booleano">Tipo Booleano</a></li> 
                    <li><a href="exercicio.php?dir=Tipos&file=conversoes">Conversões</a></li> 
                    </ul>
                </div>
 
                <div class="modulo azul">
                    <h3>Módulo 03 - Variáveis</h3>
                    <ul>
                     <li><a href="exercicio.php?dir=Variaveis&file=basico">Variáveis</a></li> 
                     <li><a href="exercicio.php?dir=Variaveis&file=desafio_equacao">Desafio Equação</a></li> 
                     <li><a href="exercicio.php?dir=Variaveis&file=atribuicoes">Atribuições</a></li> 
                     <li><a href="exercicio.php?dir=Variaveis&file=interpolacao">Interpolação</a></li> 
                     <li><a href="exercicio.php?dir=Variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li> 
                     <li><a href="exercicio.php?dir=Variaveis&file=desafio_variaveis">Desafio Variáveis</a></li> 
                     <li><a href="exercicio.php?dir=Variaveis&file=valor_referencia">Valor vs Referência</a></li> 
                     <li><a href="exercicio.php?dir=Variaveis&file=constantes">Constantes</a></li> 
                    </ul>
                </div>
<!--
                <div class="modulo roxo">
                    <h3>Módulo 04 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                        <li><a href="#">Exercício D</a></li>
                    </ul>
                </div>

                <div class="modulo laranja">
                    <h3>Módulo 05 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                        <li><a href="#">Exercício D</a></li>
                    </ul>
                </div>

                <div class="modulo verde-escuro">
                    <h3>Módulo 06 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                        <li><a href="#">Exercício D</a></li>
                    </ul>
                </div>

                <div class="modulo vermelho-escuro">
                    <h3>Módulo 07 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                        <li><a href="#">Exercício D</a></li>
                    </ul>
                </div>

                <div class="modulo azul-escuro">
                    <h3>Módulo 08 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                        <li><a href="#">Exercício D</a></li>
                    </ul>
                </div>


                <div class="modulo roxo-escuro">
                    <h3>Módulo 09 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                        <li><a href="#">Exercício D</a></li>
                    </ul>
                </div> -->
            </nav>
        </div>
    </main>
    <footer class="rodape">
        MOURA PHP - <?= date('Y'); ?>
    </footer>
</body>
</html>