<?php
include "../controllers/grafico/consulta.php";
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
    if(!$pagina == ''){
        include($pagina.'.php');
    }
}else {
?>
    <!doctype html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FinançasP</title>
<!--          Styles  -->
        <link rel="stylesheet" href="../../framework/fontawesome-free-5.8.1-web/css/all.css">
        <link rel="stylesheet" href="../../framework/bootstrap-4.3.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="../recursos/styles/Style.css">
        <link rel="stylesheet" href="../recursos/styles/gráfico-antigo/nv.d3.css">
<!--          Scripts  -->
        <script src="../recursos/scripts/jquery-1.5.1.min.js"></script>
        <script src="../recursos/scripts/grafico-antigo/d3.min.js"></script>
        <script src="../recursos/scripts/grafico-antigo/nv.d3.js"></script>

<!--        Script para carregar as páginas dentro da div #container-corpo -->
        <script type='text/javascript'>
            $(document).ready(function () {
                $('#sub_menu a').live('click', function () {
                    $('#container-corpo').load($(this).attr('href'));
                    return false;
                });
            });
        </script>
<!--        Script dos gŕaficos-->
        <style>
            text {
                font: 12px sans-serif;
            }
            svg {
                display: block;
            }
            html, body, #chart1, #chart2, svg {
                margin: 0px;
                padding: 0px;
                height: 100%;
                width: 100%;
            }
        </style>


        <script>
            historicalBarChart = [
                {
                    key: "Cumulative Return",
                    values: [
                        <?php
                        // Instancia a classe "Consulta" e chama o metodo "Buscar()" da classe
                        $consulta = new Consulta;
                        $arrayDados = $consulta->Buscar();

                        // Laço de repetição para percorrer o a array retornado do metodo 'Bucar()'
                        for ($i=0; $i < count($arrayDados['nomes']); $i++) {
                        ?>
                        <!-- Linha de código responsavel por criar as colunas do gráfico -->
                        {
                            <!-- Nome da coluna do gráfico -->
                            "label" : "<?php echo $arrayDados['nomes'][$i]?>" ,
                            <!-- Valor da coluna do gráfico -->
                            "value" : <?php echo $arrayDados['quant'][$i]?>
                        },

                        <?php
                        }
                        // Fim do laço
                        ?>

                    ]
                }
            ];
            nv.addGraph(function() {
                var chart = nv.models.discreteBarChart()
                    .x(function(d) { return d.label })
                    .y(function(d) { return d.value })
                    .staggerLabels(true)
                    //.staggerLabels(historicalBarChart[0].values.length > 8)
                    .showValues(true)
                    .duration(250)
                ;
                d3.select('#chart1 svg')
                    .datum(historicalBarChart)
                    .call(chart);
                nv.utils.windowResize(chart.update);
                return chart;
            });

            nv.addGraph(function() {
                var chart = nv.models.discreteBarChart()
                    .x(function(d) { return d.label })
                    .y(function(d) { return d.value })
                    .staggerLabels(true)
                    //.staggerLabels(historicalBarChart[0].values.length > 8)
                    .showValues(true)
                    .duration(250)
                ;
                d3.select('#chart2 svg')
                    .datum(historicalBarChart)
                    .call(chart);
                nv.utils.windowResize(chart.update);
                return chart;
            });
        </script>
    </head>
    <body>
    <div class="container-fluid">
        <input type="checkbox" id="bt_menu"/>
        <div id="lbl_responsivel">
            <label for="bt_menu">&#9776;</label>
        </div>
        <nav id="container-menu" class="col-md-12">
            <div class="col-md-2 img-fluid" id="container-img-log">
                <a href="Home.php"><img src="../recursos/img/logo-1.png" alt="logo"></a>
            </div>
            <ul class="col-md-8">
                <li><a href="#">Movimentação</a>
                    <ul id="sub_menu">
                        <li><a href="?pagina=Despesa">Despesas</a></li>
                        <li><a href="?pagina=Receita">Receita</a></li>
                        <li><a href="?pagina=Pagamentos">Pagamentos</a></li>
                        <li><a href="?pagina=Recebimentos">Recebimentos</a></li>
                        <li><a href="?pagina=TransacaoBancaria">Transações Bancarias</a></li>
                    </ul>
                </li>
                <li><a href="#">Plano de Contas</a>
                    <ul id="sub_menu">
                        <li><a href="?pagina=Categoria">Categorias</a></li>
                        <li><a href="?pagina=Subcategoria">Subcategorias</a></li>
                    </ul>
                </li>
                <li><a href="#">Planejamento</a>
                    <ul id="sub_menu">
                        <li><a href="?pagina=Orcamento">Orçamentos</a></li>
                        <li><a href="?pagina=Meta">Metas</a></li>
                    </ul>
                </li>
                <li><a href="#">Relatórios</a>
                    <ul id="sub_menu">
                        <li><a href="?pagina=RelatorioPagamentos">Relatório de Pagamentos</a></li>
                        <li><a href="?pagina=RelatorioDespesas">Relatório de Despesas</a></li>
                        <li><a href="?pagina=RelarioRecebimentos">Relatório de Recebimentos</a></li>
                        <li><a href="?pagina=RelatorioReceitas">Relatório de Receitas</a></li>
                        <li><a href="?pagina=RelatorioTransacoes">Relatório de Transações</a></li>
                    </ul>
                </li>
                <li id="sub_menu"><a href="?pagina=CartaoCredito">Cartão de Crédito</a></li>
                <li id="sub_menu"><a href="?pagina=Conta">Contas</a></li>
            </ul>
            <div class="col-md-2" id="container-usuario" id="sub_menu">
                <i class="fas fa-user fa-3x"></i>
                <a href="?pagina=">Configurações</a>
                <label for="|">|</label>
                <a href="#">Sair</a>
            </div>
        </nav>
        <div id="container-corpo">
            <h1></h1>
            <div class="row">
                <div class="col-md-4 table-responsive" style="padding: 0 10px 0 10px; border: 1px solid red">
                    <h5 style="text-align: center">Despesas do Mês</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ola</td>
                            </tr>
                            <tr>
                                <td>ola</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 table-responsive" style="padding: 0 10px 0 10px; border: 1px solid red">
                    <h5 style="text-align: center">Receitas do Mês</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>ola</td>
                        </tr>
                        <tr>
                            <td>ola</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 table-responsive" style="padding: 0 10px 0 10px; border: 1px solid red">
                    <h5 style="text-align: center">Conta</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>ola</td>
                        </tr>
                        <tr>
                            <td>ola</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="height: 350px;">
                    <h5 style="text-align: center">Despesas</h5>
                    <!-- Gráfico -->
                    <div id="chart1">
                        <svg></svg>
                    </div>
                </div>
                <div class="col-md-6" style="height: 350px; float: left;">
                    <h5 style="text-align: center">Receitas</h5>
                    <!-- Gráfico -->
                    <div id="chart2">
                        <svg></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
<?php
}
?>