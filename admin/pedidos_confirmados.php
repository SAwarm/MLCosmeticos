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
                <!-- <a href="#"
                                    class="btn d-grid btn-primary text-white btn-cadastro" style="height: 10%; width: 15%; margin-left: 10px; margin-bottom: 10px;">
                                    Adicionar Produto</a> -->
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Pedidos Confirmados</h3>
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Id Compra</th>
                                            <th class="border-top-0">Data Pedido</th>
                                            <th class="border-top-0">Hora Pedido</th>
                                            <th class="border-top-0">Nome Cliente</th>
                                            <th class="border-top-0">Telefone</th>
                                            <th class="border-top-0">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody class="reloadTable">
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

            <div class="modal fade" id="modal-turmas" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabe2l">Cadastro Nova Turma</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body message-modal" style="color: black">
                                    <form>
                                        <div class="form-group turma-document-div">
                                            <label for="turma-document" class="col-form-label">Turma:</label>
                                            <input type="text" class="form-control turma" id="turma">
                                        </div>
                                    </form>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <br>
                                    <button type="button" class="btn btn-primary btn-fill btn-add-turma" style="cursor: pointer;">Adicionar</button>
                                </div>
                                </div>
                            </div>
                        </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © ML-Cosméticos <a
                    href=""> </a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
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
    <!-- google maps api -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="plugins/bower_components/gmaps/gmaps.min.js"></script>
    <script src="plugins/bower_components/gmaps/jquery.gmaps.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>
<script>

    $(document).ready(function() {
        reloadTable();
    });

    function reloadTable(){
        $.ajax({
            url: 'backend/select_pedidos_confirmados.php',
            method: 'POST',
            success: function(data){
                cols = "";
                 if(data != "null"){
                    var number = 0;
                    var preco = 0;
                    jq_json_obj = $.parseJSON(data);
                    cont = jq_json_obj.length
                    for (x = 0; x < cont; x++){
                        cols += '<tr><td scope="row">'+jq_json_obj[x][0]+'</td>';
                        cols += '<td>'+jq_json_obj[x][4]+'</td>';
                        cols += '<td>'+jq_json_obj[x][3]+'</td>';
                        cols += '<td>'+jq_json_obj[x][16]+'</td>';
                        cols += '<td>'+jq_json_obj[x]['telefone']+'</td>';
                        number = jq_json_obj[x][31];

                        if(number.indexOf(",") != -1){
                            number = number.split(',');

                            for(i = 0; i<number.length; i++){
                                preco += parseInt(number[i]);
                            }
                            cols += '<td>'+preco+'.00</td></tr>';
                        }else{
                            cols += '<td>'+number+'</td></tr>';
                        }
                        
                        // cols += '<td>'+jq_json_obj[x]['bairro']+'</td></tr>';
                        $(".reloadTable").html(cols);
                    }
                   
                 }else{
                     alert("Nenhum registro retornado");
                 }
            }
        });
    }

</script>