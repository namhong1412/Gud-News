<?php 
    include '../model/session/check_login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'componetns/head.php'; ?>
    <title>Add post</title>
</head>

<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->
    <div class="wrapper theme-1-active pimary-color-pink">
        <?php
            include_once 'componetns/navbar.php';
            include_once 'componetns/sidebar.php';
            include_once 'componetns/right-sidebar.php';
        ?>
        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Title -->
                <div class="row heading-bg">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h5 class="txt-dark">Add News</h5>
                    </div>
                </div>
                <!-- /Title -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Popular Views</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="tab-struct vertical-tab custom-tab-1">
                                        <ul role="tablist" class="nav nav-tabs ver-nav-tab" id="myTabs_8">
                                            <li class="active" role="presentation">
                                                <a aria-expanded="true" data-toggle="tab" role="tab" id="dantri_tab" href="#dantri">Dân trí</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a data-toggle="tab" id="vnexpress_tab" role="tab" href="#vnexpress" aria-expanded="false">Vnexpress</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a data-toggle="tab" id="tuoitre_tab" role="tab" href="#tuoitre" aria-expanded="false">Tuổi trẻ</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a data-toggle="tab" id="vnnet_tab" role="tab" href="#vnnet" aria-expanded="false">VietNamNet</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent_8">
                                            <div id="dantri" class="tab-pane fade active in" role="tabpanel">
                                                Loading...
                                            </div>

                                            <div id="vnexpress" class="tab-pane fade" role="tabpanel">
                                                Loading...
                                            </div>

                                            <div id="tuoitre" class="tab-pane fade" role="tabpanel">
                                                Loading...
                                            </div>

                                            <div id="vnnet" class="tab-pane fade" role="tabpanel">
                                                Loading...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Preview News</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-wrap">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="link">Link news</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="link" placeholder="link">
                                                        <div class="input-group-addon"><i class="icon-direction"></i></div>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="test"></div>
                                                <a href="#" id="add-post" name=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <?php include_once 'componetns/footer.php'; ?>
        </div>
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Fancy Dropdown JS -->
    <script src="assets/dist/js/dropdown-bootstrap-extended.js"></script>
    <!-- Owl JavaScript -->
    <script src="assets/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- Switchery JavaScript -->
    <script src="assets/bower_components/switchery/dist/switchery.min.js"></script>
    <?php include_once 'componetns/script.php'; ?>
    <script>
        $(document).on('click', '.hihi', (obj)=>{
            preview(obj.target.href);
            return false;   
        });
        $(document).on('change', '#link', (obj)=>{
            preview($('#link').val());
            return false;
        });
        function preview(target) {
            $('#test').load('../model/post/preview.php?url='+target);
        }
        $(document).on('click', '#add-post', ()=>{
            $.ajax({
                url: '../processing.php',
                type: 'POST',
                data: {
                    title : window.array_info[0],
                    image : window.array_info[1],
                    time : window.array_info[2],
                    host : window.array_info[3],
                    description : window.array_info[4],
                    link: window.array_info[5]
                }
            })
            .done(function() {
                window.open('../processing.php', '_blank');
            })          
        });
        $('#dantri').load('../model/newspaper/dan-tri.php');
        $('#dantri_tab').click(()=>{
            $('#dantri').load('../model/newspaper/dan-tri.php');
        });
        $('#vnexpress_tab').click(()=>{
            $('#vnexpress').load('../model/newspaper/vnexpress.php');
        });
        $('#tuoitre_tab').click(()=>{
            $('#tuoitre').load('../model/newspaper/tuoi-tre.php');
        });
        $('#vnnet_tab').click(()=>{
            $('#vnnet').load('../model/newspaper/vnnet.php');
        });
    </script>
</body>

</html>