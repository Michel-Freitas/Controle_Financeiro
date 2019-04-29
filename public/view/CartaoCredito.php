    <h3 class="titulos">Cartões de Crédito</h3>
    <hr class="linha-topo">
    <div class="row">
        <div class="col-md-8 table-responsive">
            <h4 class="titulos">Cartões de Credito Ativos</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Data Vencimento</th>
                        <th>Data Fechamento</th>
                        <th>Limite Total</th>
                        <th>Limite Disponivel</th>
                        <th colspan="2">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nubank</td>
                        <td>Dia 25</td>
                        <td>Dia 18</td>
                        <td>R$ 700,00</td>
                        <td>R$ 160,00</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                    <tr>
                        <td>Digio</td>
                        <td>Dia 15</td>
                        <td>Dia 06</td>
                        <td>R$ 700,00</td>
                        <td>R$ 30,00</td>
                        <td>editar</td>
                        <td>excluir</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 container-form-styles">
            <form action="" method="post">
                <h4 class="titulos">Cadastrar/Alterar Cartão</h4>
                <div class="form-group">
                    <label for="tituloCartao">Titulo Cartão</label>
                    <input type="text" name="tituloCartao" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bandeiraCartao">Bandeira do Cartão</label>
                    <select name="bandeiraCartao" id="bandeira-cartao" class="form-control">
                        <option value=""></option>
                        <option value="Visa">Visa</option>
                        <option value="Mastercard">Mastercard</option>
                        <option value="Elo">Elo</option>
                        <option value="American Express">American Express</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="limiteCartao">Limite do Cartão</label>
                    <input type="number" name="limireCartao" class="form-control" min="1">
                </div>
                <div class="form-group">
                    <label for="dataVencimento">Data de Vencimento</label>
                    <input type="number" name="dataVencimento" class="form-control" max="30" min="1">
                </div>
                <div class="form-group">
                    <label for="dataFechamentoFatura">Data de Fechamento da Fatura</label>
                    <input type="number" name="dataFechamentoFatura" class="form-control" max="30" min="1">
                </div>
                <div class="form-group container-btn-styles">
                    <button type="submit" class="btn btn-primary">Cadastrar/Atualizar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
            </form>
        </div>
    </div>