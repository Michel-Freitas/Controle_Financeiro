    <h3 class="titulos">Transações Bancarias</h3>
    <hr class="linha-topo">
    <div class="row">
        <div class="col-md-8 table-responsive">
            <h4 class="titulos">Transações</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Conta Origim</th>
                        <th>Conta Destino</th>
                        <th>Tipo</th>
                        <th>Valor</th>
                        <th colspan="2">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dinheiro</td>
                        <td>Casa</td>
                        <td>04/04/2019</td>
                        <td>R$ 140,00</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                    <tr>
                        <td>Estudar</td>
                        <td>Carro</td>
                        <td>06/05/2019</td>
                        <td>R$ 30,00</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 container-form-styles">
            <form action="" method="post">
                <h4 class="titulos">Efetuar Transações Bancarias</h4>
                <div class="form-group">
                    <label for="contaOrigim">Conta Origim</label>
                    <input type="text" name="contaOrigim" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contaDestino">Conta Destino</label>
                    <input type="text" name="contaDestino" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tipoTransacao">Tipo Transação</label>
                    <select name="tipoTransacao" id="categoria-despesa" class="form-control">
                        <option value=""></option>
                        <option value="Saque">Saque</option>
                        <option value="Deposito">Deposito</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="valorTransacao">Valor</label>
                    <input type="number" name="valorTransacao" class="form-control">
                </div>
                <div class="form-group container-btn-styles">
                    <button type="submit" class="btn btn-primary">Cadastrar/Atualizar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
            </form>
        </div>
    </div>