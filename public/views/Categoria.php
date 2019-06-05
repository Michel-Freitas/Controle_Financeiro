    <h3 class="titulos">Categorias</h3>
    <hr class="linha-topo">
    <div class="row">
        <div class="col-md-8 table-responsive" id="">
            <h4 class="titulos">Categorias Ativos</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Plano de Contas</th>
                        <th colspan="2">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Casa</td>
                        <td>Despesa</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                    <tr>
                        <td>Carro</td>
                        <td>Despesa</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 container-form-styles">
            <form action="" method="post">
                <h4 class="titulos">Cadastrar/Alterar Categoria</h4>
                <div class="form-group">
                    <label for="tituloCategoria">Titulo Categoria</label>
                    <input type="text" name="tituloCategoria" class="form-control">
                </div>
                <div class="form-group">
                    <label for="planoContasCategoria">Plano de Contas</label>
                    <select name="planoContasCategoria" id="plano-contas-categoria" class="form-control">
                        <option value=""></option>
                        <option value="Despesa">Despesa</option>
                        <option value="Receita">Receita</option>
                    </select>
                </div>
                <div class="form-group container-btn-styles">
                    <button type="submit" class="btn btn-primary">Cadastrar/Atualizar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
            </form>
        </div>
    </div>