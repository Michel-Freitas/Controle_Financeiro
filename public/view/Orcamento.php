    <h3 class="titulos">Orçamentos</h3>
    <hr class="linha-topo">
    <div class="row">
        <div class="col-md-8 table-responsive">
            <h4 class="titulos">Orçamentos Ativos</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Valor</th>
                        <th>Data Final</th>
                        <th>Alerta</th>
                        <th colspan="2">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dinheiro</td>
                        <td>R$ 350,00</td>
                        <td>04/04/2019</td>
                        <td>80%</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                    <tr>
                        <td>Estudar</td>
                        <td>R$ 157,00</td>
                        <td>06/05/2019</td>
                        <td>40%</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 container-form-styles">
            <form action="" method="post">
                <h4 class="titulos">Cadastrar/Alterar Orçamentos</h4>
                <div class="form-group">
                    <label for="tituloOrcamento">Titulo do Orçamentos</label>
                    <input type="text" name="tituloOrcamento" class="form-control">
                </div>
                <div class="form-group">
                    <label for="valorOrcamento">Valor do Orçamento</label>
                    <input type="number" class="form-control" min="1" name="valorOrcamento">
                </div>
                <div class="form-group">
                    <label for="alertaOrcamento">Alerta em Porcentagem</label>
                    <input type="number" class="form-control" min="1" max="100" name="alertaOrcamento">
                </div>
                <div class="form-group">
                    <label for="dataFinalOrcamento">Data Final do Orçamento</label>
                    <input type="date" class="form-control" name="dataFinalOrcamento">
                </div>
                <div class="form-group container-btn-styles">
                    <button type="submit" class="btn btn-primary">Cadastrar/Atualizar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
            </form>
        </div>
    </div>