<div class="container">

    <h1>CONTATO</h1>

        <form class="form-horizontal" role="form">

            <div class="form-group">

                <label class="col-md-4 control-label">Nome:</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>

            </div>

            <div class="form-group">

                <label class="col-md-4 control-label">E-mail:</label>

                <div class="col-md-6">
                    <input type="email" class="form-control" id="email" name="email">
                </div>

            </div>

            <div class="form-group">

                <label class="col-md-4 control-label">Assunto:</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" id="assunto" name="assunto">
                </div>

            </div>

            <div class="form-group">

                <label class="col-md-4 control-label">Mensagem:</label>

                <div class="col-md-6">
                    <textarea type="text" class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
                </div>

            </div>

            <div class="form-group">

                <label class="col-md-4 control-label"></label>

                <div class="col-md-6">
                    <button type="button" id="btnEnviarContato" class="btn btn-primary" role="button">Enviar</button>
                </div>

            </div>

        </form>

        <!-- INICIO DAS DIVS COM MSG -->
        <div class="modal fade" id="myModalContato">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Contato:</h4>
                    </div>
                    <div class="modal-body">
                        <p id="alert-content">&hellip;</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnFecharContato" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



</div>