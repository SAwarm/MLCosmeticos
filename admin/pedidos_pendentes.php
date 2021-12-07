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
                <!-- <a href="https://www.wrappixel.com/templates/ampleadmin/"
                                    class="btn d-grid btn-primary text-white" style="height: 10%; width: 15%; margin-left: 10px; margin-bottom: 10px;" target="_blank">
                                    Adicionar Produto</a> -->
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Pedidos Pendentes</h3>
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Id</th>
                                            <th class="border-top-0">Data pagamento</th>
                                            <th class="border-top-0">Hora pagamento</th>
                                            <th class="border-top-0">Cliente solicitante</th>
                                            <th class="border-top-0">Telefone Cliente</th>
                                            <th class="border-top-0">Opções</th>
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
    <div class="modal fade" id="modal-exclusao" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabe2l">Excluir Compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body message-modal" style="color: black">
                <form>
                    <div class="form-group turma-document-div">
                        <h5 class="modal-title" id="exampleModalLabe2l">Deseja realmente a compra?</h5>
                    </div>
                </form>
                <br>
            </div>
            <div class="modal-footer">
                <br>
                <button type="button" class="btn btn-danger btn-fill btn-exclude-modal" style="cursor: pointer;">Excluir</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalMsg" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabe2l">Compra Pendente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body message-modal" style="color: black">
                <form>
                    <div class="form-group turma-document-div">
                        <h5 class="modal-title" id="exampleModalLabe2l">Deseja realmente aprovar a compra?</h5>
                    </div>
                </form>
                <br>
            </div>
            <div class="modal-footer">
                <br>
                <button type="button" class="btn btn-success btn-fill btn-confirm-produto-modal" style="cursor: pointer;">Sim</button>
                <!-- <button type="button" class="btn btn-default" style="color: black;" data-dismiss="modal" style="cursor: pointer;">Fechar</button> -->
            </div>
            </div>
        </div>
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

<script>

    $(document).ready(function() {
        reloadTable();
    });

    function reloadTable(){
        $.ajax({
            url: 'backend/select_pedidos_pendentes.php',
            method: 'POST',
            success: function(data){
                cols = "";
                 if(data != "null"){

                    jq_json_obj = $.parseJSON(data);
                    cont = jq_json_obj.length
                    for (x = 0; x < cont; x++){
                        cols += '<tr><td scope="row">'+jq_json_obj[x][0]+'</td>';
                        cols += '<td>'+jq_json_obj[x][3]+'</td>';
                        cols += '<td>'+jq_json_obj[x][4]+'</td>';
                        cols += '<td>'+jq_json_obj[x]['telefone']+'</td>';
                        cols += '<td>'+jq_json_obj[x]['nome']+'</td>';
                        cols += '<td>'+
                        '<a type="button" href="#" data-id="'+jq_json_obj[x][0]+'" id="btn-confirm-produto" style="margin-right: 10px;" class="btn btn-success btn-confirm-produto"><i class="far fa-check-circle"></i></a>'+
                       '<a type="button" href="#" data-id="'+jq_json_obj[x][0]+'" id="btn-exclude" style="margin-right: 10px;" class="btn btn-danger btn-exclude"><i class="far fa-times-circle"></i></a>'+
                       '</td></tr>';
                        $(".reloadTable").html(cols);
                    }
                 }else{
                     alert("erro");
                 }
            }
        });
    }

    $(document).on('click','.btn-confirm-produto', function(){
        $('#modalMsg').modal('show');
    })

    $(document).on('click','.btn-confirm-produto-modal', function(){
        $.ajax({
            url: 'backend/confirm_compra.php',
            data: {id:id},
            method: 'POST',
            success: function(data){
                
            }
        });
    })

    $(document).on('click','.btn-exclude', function(){
        $('#modal-exclusao').modal('show');
    })

    $(document).on('click','.btn-exclude-modal', function(){
        $.ajax({
            url: 'backend/exclude_compra.php',
            data: {id:id},
            method: 'POST',
            success: function(data){
                
            }
        });
    })

</script>

</html>