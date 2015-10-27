<!-- Modal -->
<div id="inserirIngredienteSecundario" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Inserir novo ingrediente Secundario?</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" if="form" role="form" >

                    <!--nome do ingrediente com dropdown -->
                     <div class="form-group" >
                        <label class="control-label col-sm-3" for="nomeIngrediente">Nome do ingrediente*:</label>
                        <div class="col-sm-7">
                            <select name="nome">
                                <?php
                                $sql = "SELECT `id_estoque`,`nome` FROM `estoque` WHERE id_usuario = 10";
                                $resultado = mysql_query($sql);
                                mysql_close($con);
                                    while($linha = mysql_fetch_array($resultado)){
                                        echo '<option '.$linha['id_estoque'].'>'.$linha['nome'].'</option>';
                                    }
                                ?>
                            </select> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="qntUtilizada">Quantidade utilizada*:</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="qntUtilizada" name="qntUtilizada" placeholder="quantidade utilizada em ****unidade do ingrediente*** Ex.: 200" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="qntLiquida">Quantidade liquida*:</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="qntLiquida" name="qntLiquida" placeholder="quantidade liquida em ****unidade do ingrediente*** Ex.: 200" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="rendimento">Rendimento/fator de correção (%)*:</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="rendimento" name="rendimento" placeholder="rendimento/fator de correção Ex.: 100" >
                        </div>
                    </div>
                    <div class="form-group">        
                        <div align="center">
                            <button class="btn btn-primary" class="insereInfredienteSecundario" onclick="insereIngredienteSecundario(this.form)">Confirmar</button>
                            <!-- <button id="submit" onclick="insereIngredienteSecundario()" name="submitted" type="submit" value="Send" class="btn btn-primary"  >Confirmar</button>-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>