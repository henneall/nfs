
    
       
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
                                            <li><a href="#">Users List</a> <span class="bread-slash">/</span>
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
                                <h4 class="modal-title">Add User</h4>
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <form method = "POST" action="<?php echo base_url();?>index.php/masterfile/insert_user" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Fullname:</label>
                                    <input type="text" name = "fullname" class="form-control" placeholder="Enter Fullname" />
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Username:</label>
                                    <input type="text" name = "username" class="form-control" placeholder="Enter Username" />
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Usertype:</label>
                                    <select  name = "usertype" class="form-control" required="">
                                        <option value="">--Select Usertype--</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Staff</option>
                                    </select>
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
                                <h4 class="modal-title">Update User</h4>
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <form method = "POST" action="<?php echo base_url();?>index.php/masterfile/update_user" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Fullname:</label>
                                    <input type="text" name = "fullname" id="fullname" class="form-control" placeholder="Enter Fullname" />
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Username:</label>
                                    <input type="text" name = "username" id="username" class="form-control" placeholder="Enter Username" />
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Usertype:</label>
                                    <select  name = "usertype" id="usertype" class="form-control" required="">
                                        <option value="">--Select Usertype--</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="hidden" name = "user_id" id="user_id" class="form-control"/>
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
                                        <h1>Users <span class="table-project-n">List</span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <?php if($_SESSION['usertype']=='1'){ ?>
                                <div class="sparkline13-graph">
                                    <a class="btn btn-custon-rounded-four btn-primary pull-right" title="Add User" data-toggle="modal" data-target="#PrimaryModalblbgpro"><span class="fa fa-plus"></span> Add User</a>
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
                                                    <th><center>Fullname</center></th>
                                                    <th><center>Username</center></th>
                                                    <th><center>Usertype</center></th>
                                                    <?php if($_SESSION['usertype']=='1'){ ?>
                                                    <th><center>Action</center></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($users AS $u){ ?>
                                                <tr>
                                                    <td><center><?php echo $u->fullname; ?></center></td>
                                                    <td><center><?php echo $u->username; ?></center></td>
                                                    <td><center><?php echo ($u->usertype==1) ? 'Admin' : 'Staff'; ?></center></td>
                                                    <?php if($_SESSION['usertype']=='1'){ ?>
                                                    <td colspan="1">
                                                        <center>
                                                        <a id="upUser" class="btn btn-custon-rounded-four btn-primary" title="Edit" data-toggle="modal" data-target="#edit_user" data-id="<?php echo $u->user_id; ?>" data-name="<?php echo $u->fullname; ?>" data-username="<?php echo $u->username; ?>" data-usertype="<?php echo $u->usertype; ?>"><span class="fa fa-pencil"></span> </a>
                                                        <a href="<?php echo base_url(); ?>index.php/masterfile/delete_user/<?php echo $u->user_id; ?>" class="btn btn-custon-rounded-four btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this user?');"><span class="fa fa-trash"></span> </a>
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