    <h3 class="titulos"> Relatórios de Pagamentos </h3>
    <hr class="linha-topo">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-5 relatorios">
                <form action="" method="get">
                    <label for="determinadoPeriodo">Determinado Período</label>
                    <select name="categoriaPeriodo" id="categoriaPeriodo" class="form-control">
                        <option value="todas">todas categorias</option>
                        <option value="casa">casa</option>
                        <option value="carro">carro</option>
                    </select>
                    <input type="date" name="dataInicio" class="form-control">
                    <label for="ate">Até</label>
                    <input type="date" name="dataFim" class="form-control">
                    <button type="submit" name="gerarRelatioTransacoes" class="btn btn-primary" value="periodo">Gerar Relatório</button>
                </form>
            </div>
            <div class="col-md-5 relatorios">
                <form action="" method="get">
                    <label for="dataDespesa">Data do Processamento</label>
                    <select name="categoriaDia" id="categoriaDia" class="form-control">
                        <option value="todas">todas categorias</option>
                        <option value="casa">casa</option>
                        <option value="carro">carro</option>
                    </select>
                    <input type="date" name="tipoProcessamento" class="form-control">
                    <button type="submit" name="gerarRelatioTransacoes" class="btn btn-primary" value="processamento">Gerar Relatório</button>
                </form>
            </div>
        </div>
    </div>