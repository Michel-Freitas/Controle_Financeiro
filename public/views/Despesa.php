    <h3 class="titulos">Despesas</h3>
    <hr class="linha-topo">
    <div class="row">
        <div class="col-md-8 table-responsive">
            <h4 class="titulos">Despesas Ativos</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Categoria</th>
                        <th>Data Pagamento</th>
                        <th>valor</th>
                        <th>Parcelas</th>
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
                <h4 class="titulos">Cadastrar/Alterar Despesas</h4>
                <div class="form-group">
                    <label for="tituloDespesa">Titulo</label>
                    <input type="text" name="tituloDespesa" class="form-control">
                </div>
                <div class="form-group">
                    <label for="categoriaDespesa">Categoria</label>
                    <select name="categoriaDespesa" id="categoria-despesa" class="form-control">
                        <option value="">Carro</option>
                        <option value="">Casa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dataDespesa">Data</label>
                    <input type="date" name="dataDespesa" class="form-control" min="1">
                </div>
                <div class="form-group">
                    <label for="dataPagamento">Data Pagamento</label>
                    <input type="date" name="dataPagamento" class="form-control">
                </div>
                <div class="form-group">
                    <label for="formaPagamentoDespesa">Forma de Pagamento</label>
                    <select name="formaPagamentoDespesa" id="forma-pagamento" class="form-control">
                        <option value="">Avista</option>
                        <option value="">Nubank</option>
                        <option value="">Digio</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="valorDespesa">Valor</label>
                    <input type="text" name="valorDespesa" class="form-control">
                </div>
                <div class="form-group">
                    <label for="quantParcelasDespesa">Quantidade de Parcelas</label>
                    <select name="quantParcelasDespesa" id="" class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipoDespesa">Tipo</label>
                    <input type="text" name="tipoDespesa" class="form-control">
                </div>
                <div class="form-group container-btn-styles">
                    <button type="submit" class="btn btn-primary">Cadastrar/Atualizar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
            </form>
        </div>
    </div>