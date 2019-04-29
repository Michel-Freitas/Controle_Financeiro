    <h3 class="titulos">Subcategoria</h3>
    <hr class="linha-topo">
    <div class="row">
        <div class="col-md-8 table-responsive" id="">
            <h4 class="titulos">Subcategorias Ativos</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Categoria Principal</th>
                        <th>Plano de Contas</th>
                        <th colspan="2">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alimentação</td>
                        <td>Casa</td>
                        <td>Despesa</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                    <tr>
                        <td>Gasolina</td>
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
                <h4 class="titulos">Cadastrar/Alterar Subcategoria</h4>
                <div class="form-group">
                    <label for="tituloSubcategoria">Titulo Subcategoria</label>
                    <input type="text" name="tituloSubcategoria" class="form-control">
                </div>
                <div class="form-group">
                    <label for="categoriaPai">Categoria Principal</label>
                    <select name="categoriaPai" id="categoriaPai" class="form-control">
                        <option value=""></option>
                        <option value="Casa">Casa</option>
                        <option value="Carro">Carro</option>
                    </select>
                </div>
                <div class="form-group container-btn-styles">
                    <button type="submit" class="btn btn-primary">Cadastrar/Atualizar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
            </form>
        </div>
    </div>