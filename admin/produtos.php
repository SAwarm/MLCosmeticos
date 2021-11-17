<?php
    include_once("menu.php");
    ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                <a href="#"
                                    class="btn d-grid btn-primary text-white btn-cadastro" style="height: 10%; width: 15%; margin-left: 10px; margin-bottom: 10px;">
                                    Adicionar Produto</a>
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Basic Table</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">First Name</th>
                                            <th class="border-top-0">Last Name</th>
                                            <th class="border-top-0">Username</th>
                                            <th class="border-top-0">Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Deshmukh</td>
                                            <td>Prohaska</td>
                                            <td>@Genelia</td>
                                            <td>admin</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Deshmukh</td>
                                            <td>Gaylord</td>
                                            <td>@Ritesh</td>
                                            <td>member</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sanghani</td>
                                            <td>Gusikowski</td>
                                            <td>@Govinda</td>
                                            <td>developer</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Roshan</td>
                                            <td>Rogahn</td>
                                            <td>@Hritik</td>
                                            <td>supporter</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Joshi</td>
                                            <td>Hickle</td>
                                            <td>@Maruti</td>
                                            <td>member</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Nigam</td>
                                            <td>Eichmann</td>
                                            <td>@Sonu</td>
                                            <td>supporter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    <div class="modal fade" id="modal-produtos" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabe2l">Cadastro Novo Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body message-modal" style="color: black">
                <form>
                    <div class="form-group nome-document-div">
                        <label for="turma-document" class="col-form-label">Nome:</label>
                        <input type="text" class="form-control nome" id="nome">
                    </div>
                    <div class="form-group nome-document-div">
                        <label for="turma-document" class="col-form-label">Descrição:</label>
                        <input type="text" class="form-control descricao" id="descricao">
                    </div>
                    <div class="form-group nome-document-div">
                        <label for="turma-document" class="col-form-label">Preço:</label>
                        <input type="text" class="form-control preco" id="preco">
                    </div>
                    <div class="form-group nome-document-div">
                        <label for="turma-document" class="col-form-label">Imagem:</label>
                        <input type="file" class="form-control imagem" id="imagem">
                    </div>
                    <div class="form-group nome-document-div">
                        <label for="turma-document" class="col-form-label">Tipo:</label>
                        <select class="form-control tipo" id="tipo">
                            <option value="rosto">Rosto</option>
                            <option value="labios">Lábios</option>
                            <option value="olhos">Olhos</option>
                            <option value="sombrancelhas">Sombrancelhas</option>
                            <option value="linha_facial">Linha facial</option>
                            <option value="kits_acessorios">Kits e Acessórios</option>
                        </select>
                    </div>
                    <div class="form-group nome-document-div">
                        <label for="turma-document" class="col-form-label">Cor:</label>
                        <input type="text" class="form-control cor" id="cor">
                    </div>
                    <div class="form-group nome-document-div">
                        <label for="turma-document" class="col-form-label">Marca:</label>
                        <input type="text" class="form-control marca" id="marca">
                    </div>
                    <div class="form-group nome-document-div">
                        <label for="turma-document" class="col-form-label">Observação:</label>
                        <input type="text" class="form-control observacao" id="observacao">
                    </div>
                    <div class="form-group nome-document-div">
                        <label for="turma-document" class="col-form-label">Dimensões:</label>
                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Altura:</label>
                                            <input type="text" class="form-control altura" id="altura">
                                        </div>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Largura:</label>
                                            <input type="text" class="form-control largura" id="largura">
                                        </div>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Peso:</label>
                                            <input type="text" class="form-control peso" id="peso">
                                        </div>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Profundidade:</label>
                                            <input type="text" class="form-control profundidade" id="profundidade">
                                        </div>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Observação da Dimensão:</label>
                                            <input type="text" class="form-control observacao-dimensao" id="observacao-dimensao">
                                        </div>
                    </div>
                </form>
                <br>
            </div>
            <div class="modal-footer">
                <br>
                <button type="button" class="btn btn-primary btn-fill btn-add-produto" style="cursor: pointer;">Adicionar</button>
            </div>
            </div>
        </div>
    </div>

                        <!--div class="modal fade" id="modal-dimensoes" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabe2l">Cadastro Nova Dimensão</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body message-modal" style="color: black">
                                    <form>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Altura:</label>
                                            <input type="text" class="form-control altura" id="altura">
                                        </div>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Largura:</label>
                                            <input type="text" class="form-control largura" id="largura">
                                        </div>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Peso:</label>
                                            <input type="text" class="form-control peso" id="peso">
                                        </div>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Profundidade:</label>
                                            <input type="text" class="form-control profundidade" id="profundidade">
                                        </div>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Observação:</label>
                                            <input type="text" class="form-control observacao-dimensao" id="observacao-dimensao">
                                        </div>
                                    </form>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <br>
                                    <button type="button" class="btn btn-primary btn-fill" style="cursor: pointer;">Adicionar</button>
                                </div>
                                </div>
                            </div>
                        </div-->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>

<script>
    $(".btn-cadastro").click(function(e){
        $('#modal-produtos').modal('show');
    })
    $(".dimensoes").click(function(e){
        $('#modal-dimensoes').modal('show');
    })

    $(".btn-add-produto").click(function(e){
        nome = $('.nome').val();
        imagem = $('.imagem').val();
        preco = $('.preco').val();
        descricao = $('.descricao').val();
        cor = $('.cor').val();
        marca = $('.marca').val();
        observacao = $('.observacao').val();
        altura = $('.altura').val();
        largura = $('.largura').val();
        profundidade = $('.profundidade').val();
        peso = $('.peso').val();
        observacao_dimensao = $('.observacao-dimensao').val();

        tipo = $('.tipo').val();


        msg = "Digite os campos: ";
        if(nome == ""){
            msg+= "Nome ";
        }
        if(imagem == ""){
            msg+= "Imagem "
        }
        if(preco == ""){
            msg+= "Preço ";
        }
        if(descricao == ""){
            msg+="Descrição ";
        }
        if(msg != "Digite os campos: "){
            e.preventDefault();
            alert(msg)
        }

        var data = new FormData();
            jQuery.each(jQuery('.imagem')[0].files, function(i, file) {
            data.append('file-'+i, file);
        });

        data.append('nome', nome);
        data.append('preco', preco);
        data.append('descricao', descricao);

        data.append('cor', cor);
        data.append('altura', altura);
        data.append('largura', largura);

        data.append('observacao', observacao);
        data.append('observacao_dimensao', observacao_dimensao);
        data.append('marca', marca);

        data.append('profundidade', profundidade);
        data.append('peso', peso);
        data.append('tipo', tipo);

        jQuery.ajax({
            url: 'backend/cadastro_produto_dimensao.php',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            success: function(data){
                // alert(data);
            }
        });
        
    })
</script>