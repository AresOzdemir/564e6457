<?php
$customCSS = array('<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
'<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>',
    '<script src="../assets/plugins/jquery.toast/jquery.toast.js"></script>'

);

$page_title = 'Aile Sorgu';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

error_reporting(0);

?>
<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">
                        Aile Sorgu
                    </h4>
                    <p style="color: #fff">Sorgulanacak kişinin tcsini giriniz.</p>
                    <form action="admin/aileData/check.php" method="get">
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tc" role="tabpanel">
                            <input require maxlength="30" class="form-control" type="text" name="persoAile" id="tcText" placeholder="TC"><br>

                            <center>
                              
                                <button class="btn waves-effect waves-light btn-rounded btn-danger btn-new" style="width: 180px; height: 45px; outline: none; margin-left: 5px;">
                                    <span><i class="fas fa-search"></i> Sorgula </span></button>
                            </center>
</form>
</div>
                </div>
            </div>
        </div>
    </div>


   <!-- Javascripts -->
   <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
<script src="../../assets/plugins/pace/pace.min.js"></script>
<script src="../../assets/plugins/jquery.toast/jquery.toast.js"></script>
<script src="../../assets/plugins/sweetalert/sweetalert2@8"></script>
<?php
foreach ($customJAVA as $java) {
    echo $java . "\n";
} ?>
</body>

</html>