<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->    
    <head>
        <meta charset="utf-8" />
        <title>VolenTech | Portfolio <?php echo ($ID == 0 ? 'Add' : 'Edit');?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL STYLES -->
        <?php $this->load->view('be/layout/styles'); ?>
        <!-- END GLOBAL STYLES -->

        <link href="<?php echo base_url('assets/css/pages/be/what-we-do.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/pages/be/about-us.css');?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url('favicon.png');?>" />
     </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed">     
        <!-- BEGIN HEADER -->           
        <?php             
            $menu['current'] = 'portfolios';
            $this->load->view('be/layout/header', $menu);
            ?>
        <!-- END HEADER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><?php echo ($ID == 0 ? "Add" : "Edit");?> Portfolio</h1>
                        </div>
                        <!-- END PAGE TITLE -->                       
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="#">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span href="#">Portfolios</span>  
                            </li>                            
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PORTLET-->
                                    <div class="portlet light form-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-social-dribbble font-green"></i>
                                                <span class="caption-subject font-green bold uppercase">Portfolio Content</span>
                                            </div>                                         
                                        </div>
                                        <div class="portlet-body form"> 
                                            <form action="#" class="form-horizontal form-bordered " id='jobForm'>
                                                <input type='hidden' name='ID' id='ID' value='<?php echo $ID;?>'>
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">Title</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class='form-control' id='Title' name='Title' value='<?php echo $Title;?>' required>
                                                        </div>
                                                    </div>  
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">Date</label>
                                                        <div class="col-md-10">                                                            
                                                            <input class="form-control" type='date' id='Date' name='Date' value='<?php echo $Date;?>' required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">Location</label>
                                                        <div class="col-md-10">                                                            
                                                            <input class="form-control" type='text' id='Location' name='Location' value='<?php echo $Location;?>' required>
                                                        </div>
                                                    </div>    
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-offset-2 col-md-10" style="text-align: right">
                                                                <button type="button" class="btn green" id='btnUpdatePortfolio'>
                                                                    <i class="fa fa-check"></i> <?php echo ($ID == 0 ? "Save" : "Update");?>
                                                                </button>
                                                                <a href="<?php echo base_url('admin/portfolios');?>" class="btn default" id="btnCancel"><i class='fa fa-mail-reply-all'></i> Cancel</a>
                                                            </div>                                                        
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">Descriptions</label>
                                                        <div class="col-md-10">
                                                            <div class='new-core-value'>
                                                                <button type="button" class="btn green btn-sm" id='btnAddNewDescriptionModal' <?php echo ($ID == 0 ? 'disabled': "")?>><i class='icon-plus'></i>&nbsp;&nbsp;ADD NEW</button>                                                                   
                                                            </div>
                                                            <?php 
                                                                foreach ($descriptions as $description) {
                                                                    ?>
                                                                        <div class='core-value'>                                                                
                                                                            <span><?php echo $description['Title'];?></span>
                                                                            <div class='core-value-buttons'>                                                                    
                                                                                <button type="button" class="btn blue btn-sm btn-circle" onclick='editValue(<?php echo $description["ID"];?>)'><i class='icon-pencil'></i></button>&nbsp;
                                                                                <button type="button" class="btn red btn-sm btn-circle" onclick='deleteDescription(<?php echo $description["ID"];?>)'><i class='icon-trash'></i></button>
                                                                            </div>
                                                                        </div>
                                                                    <?php
                                                                }
                                                            ?>                                                            
                                                        </div>
                                                    </div>        
                                                    <div class="form-group last">
                                                        <label class="control-label col-md-2">Slides</label>
                                                        <div class="col-md-10">                                                            
                                                            <div class='row'>
                                                                <?php 
                                                                    foreach($Images as $image) {
                                                                        ?>
                                                                        <div class='col-md-4 col-sm-6 col-xs-12'>
                                                                            <!-- PORTLET MAIN -->
                                                                            <div class="portlet light profile-portlet">
                                                                                <!-- SIDEBAR USERPIC -->
                                                                                <div class="profile-pic">
                                                                                    <img src="<?php echo base_url('assets/images/slides/'.$image['Attach']);?>" class="img-responsive" alt="">
                                                                                </div>
                                                                                    
                                                                                <!-- END SIDEBAR USERPIC -->
                                                                                <!-- SIDEBAR BUTTONS -->
                                                                                <div class="profile-buttons">
                                                                                    <button type="button" class="btn btn-circle green btn-sm" onclick='editSlide(<?php echo $image["ID"];?>)'>EDIT</button>
                                                                                    <button type="button" class="btn btn-circle red btn-sm" onclick="deleteSlide(<?php echo $image['ID'];?>)">DELETE</button>
                                                                                </div>
                                                                                <!-- END SIDEBAR BUTTONS -->
                                                                            </div>
                                                                            <!-- END PORTLET MAIN -->  
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                
                
                                                                <div class='col-md-4 col-sm-6 col-xs-12'>
                                                                    <!-- PORTLET MAIN -->
                                                                    <div class="portlet light profile-portlet-new">
                                                                        <button type="button" class="btn green" id='btnAddNewModal' <?php echo ($ID == 0 ? 'disabled': "")?>><i class='icon-plus'></i> &nbsp;Add new</button>                                                        
                                                                    </div>
                                                                    <!-- END PORTLET MAIN -->  
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                            
                                        </div>
                                    </div>
                                    <!-- END PORTLET-->
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->

                <!-- BEGIN MODAL CONTENT BODY -->
                <!-- BEGIN ADD DESCRIPTION MODAL CONTENT BODY -->
                <div class="modal fade" id="AddNewDescriptionModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Add New</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='addNewDescriptionForm'>
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <input type='text' id='Description' class='form-control' />
                                            </div>
                                        </div>                                                                                    
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnAddNewDescription'>Add</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END ADD DESCRIPTION MODAL CONTENT BODY -->

                <!-- BEGIN EDIT DESCRIPTION MODAL CONTENT BODY -->
                <div class="modal fade" id="EditDescriptionModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Edit</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='addNewForm'>
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <input type='text' id='DescriptionEdit' class='form-control' />
                                            </div>
                                        </div>                                            
                                    </div>                                                                                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnUpdateDescription'>Update</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END EDIT DESCRIPTION MODAL CONTENT BODY -->

                <!-- BEGIN DEELTE DESCRIPTION MODAL CONTENT BODY -->
                <div class="modal fade" id="deleteDescriptionModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Delete</h4>
                            </div>
                            <div class="modal-body">
                                Are  you really going to delete this?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">NO</button>
                                <button type="button" class="btn green" id='btnDeleteDescription'>YES</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END DELETE DESCRIPTION MODAL CONTETN BODY -->

                <!-- BEGIN ADD SLIDE MODAL CONTENT BODY -->
                <div class="modal fade" id="AddNewModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Add New</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='newPortfolioForm' enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <input type="hidden" name="PortfolioID" value="<?php echo $ID;?>" />
                                            <label class="control-label col-md-3">Slide</label>
                                            <div class='col-md-9'>                                                
                                                <input type='file' name='resource' id='resource' accept=".jpg,.png,.bmp,.gif"required>
                                            </div>
                                        </div>                                                                                               
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnAddNew'>Add</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END ADD SLIDE MODAL CONTENT BODY -->

                <!-- BEGIN EDIT SLIDE MODAL CONTENT BODY -->
                <div class="modal fade" id="editModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Edit</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='updateServiceForm' enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Portfolio</label>
                                            <div class='col-md-9'>
                                                <div class='portfolio-box'>                                                                
                                                    <img class='portfolio img-thumbnail' id='imgPortfolio'>
                                                    <img class='portfolio-camera' src='<?php echo base_url('assets/images/camera.png');?>'>
                                                    <input type='file' style='display:none' id='Portfolio_Edit' name='resource' accept=".jpg,.png,.jpeg,.gif">
                                                </div>
                                            </div>
                                        </div>           
                                        <div class="form-group">
                                            <input type='hidden' id='ID_Edit' name='ID'>
                                        </div>                                                                                               
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnUpdate'>Update</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END EDIT SLIDE MODAL CONTENT BODY -->

                <!-- BEGIN DEELTE SLIDE MODAL CONTENT BODY -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Delete</h4>
                            </div>
                            <div class="modal-body">
                                Are  you really going to delete this?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">NO</button>
                                <button type="button" class="btn green" id='btnDelete'>YES</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END DELETE SLIDE MODAL CONTETN BODY -->
                <!-- END MODAL CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('be/layout/footer'); ?>
        <!-- END FOOTER -->
        <!-- BEGIN GLOBAL SCRIPTS -->
        <?php $this->load->view('be/layout/scripts'); ?>
        <!-- END GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url('assets/layouts/layout3/scripts/pages/home/portfolios.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    </body>

</html>