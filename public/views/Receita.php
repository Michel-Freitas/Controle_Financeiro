    <h3 class="titulos">Receitas</h3>
    <hr class="linha-topo">
    <div class="row">
        <div class="col-md-8 table-responsive">
            <h4 class="titulos">Receitas Ativos</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Categoria</th>
                        <th>Data P/ Receber</th>
                        <th>Data Recebimento</th>
                        <th>Valor</th>
                        <th colspan="2">Editar</th>
                    </tr>
                </thead>
                <tbody>s
                    <tr>
                        <td>Dinheiro</td>
                        <td>Casa</td>
                        <td>04/04/2019</td>
                        <td>R$ 140,00</td>
                        <td>2/5</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                    <tr>
                        <td>Estudar</td>
                        <td>Carro</td>
                        <td>06/05/2019</td>
                        <td>R$ 30,00</td>
                        <td>1</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 container-form-styles">
            <form action="" method="post">
                <h4 class="titulos">Cadastrar/Alterar Receitas</h4>
                    <div class="form-group">
                    <label for="tituloReceita">Titulo</label>
                    <input type="text" name="tituloReceita" class="form-control">
                </div>
                <div class="form-group">
                    <label for="categoriaReceita">Categoria</label>
                    <select name="categoriaReceita" id="categoria-despesa" class="form-control">
                        <option value=""></option>
                        <option value="">Carro</option>
                        <option value="">Casa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contaBancaria">conta Bancaria</label>
                    <input type="text" name="contaBancaria" class="form-control">
                </div>
                <div class="form-group">
                    <label for="dataReceber">Data para Receber</label>
                    <input type="date" name="dataReceber" class="form-control" min="1">
                </div>
                <div class="form-group">
                    <label for="valorReceita">Valor</label>
                    <input type="number" name="valorReceita" class="form-control">
                </div>
                <div class="form-group container-btn-styles">
                    <button type="submit" class="btn btn-primary">Cadastrar/Atualizar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
            </form>
        </div>
    </div>