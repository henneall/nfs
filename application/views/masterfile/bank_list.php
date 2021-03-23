
    
       
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <!-- <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Bank List</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data Table</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <div id="PrimaryModalblbgpro" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header header-color-modal bg-color-1">
                                <h4 class="modal-title">Add Bank</h4>
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <form method = "POST" action="<?php echo base_url();?>index.php/masterfile/insert_bank" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Bank Name:</label>
                                    <input type="text" name = "bank" class="form-control" placeholder="Enter Bank Name" />
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Location:</label>
                                    <textarea name = "location" class="form-control" placeholder="Enter Location"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="button" class="btn btn-custon-rounded-four btn-danger btn-block" data-dismiss="modal" value="Cancel"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="submit" class="btn btn-custon-rounded-four btn-primary btn-block" value="Save"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="edit_user" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header header-color-modal bg-color-1">
                                <h4 class="modal-title">Update Bank</h4>
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <form method = "POST" action="<?php echo base_url();?>index.php/masterfile/update_bank" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Bank Name:</label>
                                    <input type="text" name = "bank" id="bank" class="form-control" placeholder="Enter Bank Name" />
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Location:</label>
                                    <textarea name = "location" id="location" class="form-control" placeholder="Enter Location"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="hidden" name = "bank_id" id="bank_id" class="form-control"/>
                                        <input type="button" class="btn btn-custon-rounded-four btn-danger btn-block" data-dismiss="modal" value="Cancel"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="submit" class="btn btn-custon-rounded-four btn-primary btn-block" value="Update"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Bank <span class="table-project-n">List</span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <?php if($_SESSION['usertype']=='1'){ ?>
                                <div class="sparkline13-graph">
                                    <a class="btn btn-custon-rounded-four btn-primary pull-right" title="Add Bank" data-toggle="modal" data-target="#PrimaryModalblbgpro"><span class="fa fa-plus"></span> Add Bank</a>
                                </div>
                                <?php } ?>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th><center>Bank Name</center></th>
                                                    <th><center>Location</center></th>
                                                    <?php if($_SESSION['usertype']=='1'){ ?>
                                                    <th><center>Action</center></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($bank AS $b){ ?>
                                                <tr>
                                                    <td><?php echo $b->bank_name; ?></td>
                                                    <td><?php echo $b->bank_location; ?></td>
                                                    <?php if($_SESSION['usertype']=='1'){ ?>
                                                    <td colspan="1">
                                                        <center>
                                                        <a id="upBank" class="btn btn-custon-rounded-four btn-primary" title="Edit" data-toggle="modal" data-target="#edit_user" data-id="<?php echo $b->bank_id; ?>" data-name="<?php echo $b->bank_name; ?>" data-location="<?php echo $b->bank_location; ?>"><span class="fa fa-pencil"></span> </a>
                                                        <a href="<?php echo base_url(); ?>index.php/masterfile/delete_bank/<?php echo $b->bank_id; ?>" class="btn btn-custon-rounded-four btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this bank?');"><span class="fa fa-trash"></span> </a>
                                                        </center>
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>
<script type="text/javascript">
    
</script>