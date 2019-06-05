    <h3 class="titulos">Metas</h3>
    <hr class="linha-topo">
    <div class="row">
        <div class="col-md-8 table-responsive">
            <h4 class="titulos">Metas Ativos</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Valor</th>
                        <th>Data Inicio</th>
                        <th>Data Final</th>
                        <th>Descrição</th>
                        <th>Estado</th>
                        <th colspan="2">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dinheiro</td>
                        <td>R$ 350,00</td>
                        <td>04/04/2019</td>
                        <td>29/04/2019</td>
                        <td>Para arrumar o carro</td>
                        <td>Pendente</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                    <tr>
                        <td>Estudar</td>
                        <td>R$ 157,00</td>
                        <td>06/05/2019</td>
                        <td>29/04/2019</td>
                        <td>Para os estudos</td>
                        <td>Concluido</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 container-form-styles">
            <form action="" method="post">
                <h4 class="titulos">Cadastrar/Alterar Metas</h4>
                <div class="form-group">
                    <label for="tituloMeta">Titulo</label>
                    <input type="text" name="tituloMeta" class="form-control">
                </div>
                <div class="form-group">
                    <label for="valorMeta">Valor</label>
                    <input type="number" name="valorMeta" class="form-control" min="1">
                </div>
                <div class="form-group">
                    <label for="dataFinalOrcamento">Data Final</label>
                    <input type="date" class="form-control" name="dataFinalMeta">
                </div>
                <div class="form-group">
                    <label for="descricaoMeta">Descrição</label>
                    <textarea name="descricaoMeta" id="descricao-meta" cols="30" rows="2" class="form-control"></textarea>
                </div>
                <div class="form-group container-btn-styles">
                    <button type="submit" class="btn btn-primary">Cadastrar/Atualizar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
            </form>
        </div>
    </div>