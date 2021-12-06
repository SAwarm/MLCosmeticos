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
                            <h3 class="box-title">Clientes Cadastrados</h3>
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Id</th>
                                            <th class="border-top-0">Nome</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Telefone</th>
                                            <th class="border-top-0">Cidade</th>
                                            <th class="border-top-0">Bairro</th>
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
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

<script>

    $(document).ready(function() {
        reloadTable();
    });

    function reloadTable(){
        $.ajax({
            url: 'backend/select_clientes.php',
            method: 'POST',
            success: function(data){
                cols = "";
                 if(data != "null"){

                    jq_json_obj = $.parseJSON(data);
                    cont = jq_json_obj.length
                    for (x = 0; x < cont; x++){
                        cols += '<tr><td scope="row">'+jq_json_obj[x][0]+'</td>';
                        cols += '<td>'+jq_json_obj[x]['nome']+'</td>';
                        cols += '<td>'+jq_json_obj[x]['email']+'</td>';
                        cols += '<td>'+jq_json_obj[x]['telefone']+'</td>';
                        cols += '<td>'+jq_json_obj[x]['cidade']+'</td>';
                        cols += '<td>'+jq_json_obj[x]['bairro']+'</td></tr>';
                        $(".reloadTable").html(cols);
                    }
                 }else{
                     alert("erro");
                 }
            }
        });
    }

</script>

</html>