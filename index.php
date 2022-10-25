<?php
session_start();

if ($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}


if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

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
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario']?></span>
        <a href="logout.php">Sair</a>
    </nav>
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

                <div class="modulo roxo">
                    <h3>Módulo 04 - Controle</h3>
                    <ul>
                      <li><a href="exercicio.php?dir=Controle&file=if_else">If Else</a></li> 
                      <li><a href="exercicio.php?dir=Controle&file=operadores_relacionais">Operadores Relacionais</a></li> 
                      <li><a href="exercicio.php?dir=Controle&file=desafio_pi">Desafio PI</a></li> 
                      <li><a href="exercicio.php?dir=Controle&file=operadores_logicos">Operadores Lógicos</a></li> 
                      <li><a href="exercicio.php?dir=Controle&file=operador_ternario">Operador Ternário</a></li> 
                      <li><a href="exercicio.php?dir=Controle&file=switch">Switch</a></li> 
                      <li><a href="exercicio.php?dir=Controle&file=desafio_switch">Desafio Switch</a></li> 
                    </ul>
                </div>

                <div class="modulo laranja">
                    <h3>Módulo 05 - Array</h3>
                    <ul>
                     <li><a href="exercicio.php?dir=Array&file=basico">Introdução</a></li> 
                     <li><a href="exercicio.php?dir=Array&file=mapa">Mapa</a></li> 
                     <li><a href="exercicio.php?dir=Array&file=operacoes">Operações</a></li> 
                     <li><a href="exercicio.php?dir=Array&file=multi">Multidimensionais</a></li> 
                     <li><a href="exercicio.php?dir=Array&file=constantes">Arrays Constantes</a></li> 
                     <li><a href="exercicio.php?dir=Array&file=get">$_GET</a></li> 
                     <li><a href="exercicio.php?dir=Array&file=post">$_POST</a></li> 
                     <li><a href="exercicio.php?dir=Array&file=comparacao">Comparação Arrays</a></li> 
                    </ul>
                </div>

                <div class="modulo verde-escuro">
                    <h3>Módulo 06 - Repetições</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Repeticoes&file=for">Laço For</a></li> 
                        <li><a href="exercicio.php?dir=Repeticoes&file=foreach">Laço Foreach</a></li> 
                        <li><a href="exercicio.php?dir=Repeticoes&file=break_continue">Break/Continue</a></li> 
                        <li><a href="exercicio.php?dir=Repeticoes&file=while">While/Do While</a></li> 
                    </ul>
                </div>

                <div class="modulo vermelho-escuro">
                    <h3>Módulo 07 - Funções</h3>
                    <ul>
                     <li><a href="exercicio.php?dir=Funcoes&file=escopo">Função & Escopo</a></li> 
                     <li><a href="exercicio.php?dir=Funcoes&file=args_retorno">Argumentos e Retorno</a></li> 
                     <li><a href="exercicio.php?dir=Funcoes&file=args_variaveis">Argumentos Variáveis</a></li> 
                     <li><a href="exercicio.php?dir=Funcoes&file=arg_padrao">Argumento Padrão</a></li> 
                     <li><a href="exercicio.php?dir=Funcoes&file=anonimas">Funções Anonimas</a></li> 
                     <li><a href="exercicio.php?dir=Funcoes&file=retornando_funcao">Retornando Função</a></li> 
                    </ul>
                </div>

                <div class="modulo azul-escuro">
                    <h3>Módulo 08 - Paradigma O.O</h3>
                    <ul>
                     <li><a href="exercicio.php?dir=classes_objetos&file=classe">Primeira Classe</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=desafio_classeData">Desafio Classe</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=construtor_destrutor">Construtor e Destrutor</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=heranca">Herança</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=visibilidade">Visibilidade</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=static">Membros Estáticos</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=interface">Interface</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=classe_abstrata">Classe Abstrata</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=final">Final</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=traits_01">Traits #01</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=traits_02">Traits #02</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=metodos_magicos">Métodos Mágicos</a></li> 
                     <li><a href="exercicio.php?dir=classes_objetos&file=polimorfismo">Polimorfismo</a></li> 
                    </ul>
                </div>


                <div class="modulo roxo-escuro">
                    <h3>Módulo 09 - Include</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Includes&file=include">Include</a></li> 
                        <li><a href="exercicio.php?dir=Includes&file=include_funcao">Include Função</a></li> 
                        <li><a href="exercicio.php?dir=Includes&file=include_require">Include vs Require</a></li> 
                    </ul>
                </div> 

                <div class="modulo laranja-escuro">
                    <h3>Módulo 10 - Namespace</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Namespace&file=basico">Básico</a></li> 
                        <li><a href="exercicio.php?dir=Namespace&file=sub_namespaces">Sub Namespaces</a></li> 
                        <li><a href="exercicio.php?dir=Namespace&file=use_as">Use/As</a></li> 
                    </ul>
                </div> 

                <div class="modulo verde">
                    <h3>Módulo 11 - Tratamento de Erros</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Tratamento_erro&file=try_catch">Try/Catch</a></li> 
                        <li><a href="exercicio.php?dir=Tratamento_erro&file=erros_personalizados">Erros Personalizados</a></li> 
                    </ul>
                </div> 

                <div class="modulo vermelho">
                    <h3>Módulo 12 - Sessão</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Sessao&file=basico_sessao">Sessão</a></li> 
                        <li><a href="exercicio.php?dir=Sessao&file=gerenciando_sessao">Gerenciando Sessão</a></li> 
                    </ul>
                </div> 

                <div class="modulo Azul">
                    <h3>Módulo 13 - API</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=API&file=datas_01">Datas #01</a></li> 
                        <li><a href="exercicio.php?dir=API&file=datas_02">Datas #02</a></li> 
                    </ul>
                </div> 

                <div class="modulo Roxo">
                    <h3>Módulo 14 - Formulários</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Formulario&file=formulario">Formulário</a></li> 
                    </ul>
                </div> 

                <div class="modulo Laranja">
                    <h3>Módulo 15 - Banco de Dados</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=db&file=criar_banco">Criar Banco</a></li> 
                        <li><a href="exercicio.php?dir=db&file=criar_tabela">Criar Tabela</a></li> 
                        <li><a href="exercicio.php?dir=db&file=inserir_1">Inserir Registro #01</a></li> 
                        <li><a href="exercicio.php?dir=db&file=consultar">Consultar Registros</a></li> 
                        <li><a href="exercicio.php?dir=db&file=excluir_1">Remover Registros #01</a></li> 
                        <li><a href="exercicio.php?dir=db&file=excluir_2">Remover Registros #02</a></li> 
                        <li><a href="exercicio.php?dir=db&file=inserir_2">Inserir Registro #02</a></li> 
                    </ul>
                </div> 
            </nav>
        </div>
    </main>
    <footer class="rodape">
        MOURA PHP - <?= date('Y'); ?>
    </footer>
</body>
</html>