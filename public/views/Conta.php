    <h3 class="titulos">Contas</h3>
    <hr class="linha-topo">
    <div class="row">
        <div class="col-md-8 table-responsive">
            <h4 class="titulos">Contas</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Banco</th>
                        <th>Tipo</th>
                        <th>Saldo</th>
                        <th>Ultima Alteração</th>
                        <th colspan="2">Editar</th>
                    </tr>
                </thead>
                <tbody>
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
                <h4 class="titulos">Cadastrar/Alterar Contas</h4>
                <div class="form-group">
                    <label for="tituloConta">Titulo</label>
                    <input type="text" name="tituloConta" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bancoCartao">Bandeira do Cartão</label>
                    <select name="bancoCartao" id="banco-cartao" class="form-control">
                        <option value=""></option>
                        <option value="Banco do Brasil">Banco do Brasil</option>
                        <option value="Bradesco">Bradesco</option>
                        <option value="Itaul">Itaul</option>
                        <option value="Nubank">Nubank</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipoConta">Tipo da Conta</label>
                    <select name="tipoConta" id="tipo-conta" class="form-control">
                        <option value=""></option>
                        <option value="Corrente">Corrente</option>
                        <option value="Poupanca">Poupança</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="saldoConta">Saldo da Conta</label>
                    <input type="number" name="saldoConta" class="form-control" min="1">
                </div>
                <div class="form-group container-btn-styles">
                    <button type="submit" class="btn btn-primary">Cadastrar/Atualizar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
            </form>
        </div>
    </div>