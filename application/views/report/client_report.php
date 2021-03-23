
    
       
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
                                            <li><a href="#">Clien Data List</a> <span class="bread-slash">/</span>
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
            <div id="filter" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header header-color-modal bg-color-1">
                                <h4 class="modal-title">Search in Client List</h4>
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <form method = "POST" action="<?php echo base_url();?>index.php/report/filter_client" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Client Name:</label>
                                    <select class="form-control select2_client" style="width:100%" name="client">
                                        <option value="">--Select Client Name--</option>
                                        <?php foreach($client_list AS $c){ ?>
                                        <option value="<?php echo $c->brand_id; ?>"><?php echo $c->client_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label style="color:#fff" class="pull-left">Expiry Date From:</label>
                                            <input type="date" name = "exp_from" class="form-control" placeholder="Enter Expiry Date From" />
                                        </div>
                                        <div class="col-lg-6">
                                            <label style="color:#fff" class="pull-left">Expiry Date To:</label> 
                                            <input type="date" name = "exp_to" class="form-control" placeholder="Enter Expiry Date To" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Brand:</label>
                                    <input type="text" name = "brand" class="form-control" placeholder="Enter Brand" />
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Unit:</label>
                                    <input type="text" name = "unit" class="form-control" placeholder="Enter Unit" />
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Plate Number:</label>
                                    <input type="text" name = "plate_no" class="form-control" placeholder="Enter Plate Number" />
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Contact:</label>
                                    <input type="text" name = "contact" class="form-control" placeholder="Enter Contact" />
                                </div>
                                <div class="form-group-inner">
                                    <label style="color:#fff" class="pull-left">Insurance:</label>
                                    <input type="text" name = "insurance" class="form-control" placeholder="Enter Insurance" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" class="btn btn-custon-rounded-four btn-primary btn-block" value="Filter"/>
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
                                        <h1>Client Data <span class="table-project-n">List</span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <?php if($_SESSION['usertype']=='1'){ ?>
                                        <a href="<?php echo base_url(); ?>index.php/encode/client_data" class="btn btn-custon-rounded-four btn-primary pull-right" title="Add New"><span class="fa fa-plus"></span> Add New</a>
                                    <?php } ?>
                                    <?php if(!empty($filt)){ ?> 
                                        <a href="<?php echo base_url(); ?>index.php/report/export_client/<?php echo $clients; ?>/<?php echo $exp_from; ?>/<?php echo $exp_to; ?>/<?php echo $brand; ?>/<?php echo $unit; ?>/<?php echo $plate_no; ?>/<?php echo $contact; ?>/<?php echo $insurance; ?>" class="btn btn-custon-rounded-four btn-warning pull-right" title="Export"><span class="fa fa-download"></span> Export</a>
                                    <?php }else{ ?>
                                        <a href="<?php echo base_url(); ?>index.php/report/export_client" class="btn btn-custon-rounded-four btn-warning pull-right" title="Export"><span class="fa fa-download"></span> Export</a>
                                    <?php } ?>
                                    <a href="#" data-toggle="modal" data-target="#filter" class="btn btn-custon-rounded-four btn-success pull-right" title="Filter"><span class="fa fa-search"></span> Filter</a>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <?php if(!empty($filt)){ ?> 
                                            <div  class="pull-left">
                                                <span class='btn btn-success disabled'>Filter Applied</span> <?php echo $filt ?>, <a href='<?php echo base_url(); ?>index.php/report/client_report' class='pull-right btn' style="color:#d55151"><span class="fa fa-times"></span></a>      
                                            </div>   
                                            <br><br>          
                                        <?php } ?>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th><center>Expiry Date</center></th>
                                                    <th><center>Client Name</center></th>
                                                    <th><center>Brand</center></th>
                                                    <th><center>Unit</center></th>
                                                    <th><center>Plate Number</center></th>
                                                    <th><center>Contact</center></th>
                                                    <th><center>Insurance</center></th>
                                                    <?php if($_SESSION['usertype']=='1'){ ?>
                                                    <th><center>Action</center></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($client AS $b){ ?>
                                                <tr>
                                                    <td><center><?php echo date("F d, Y", strtotime($b['expiry'])); ?></center></td>
                                                    <td><?php echo $b['client_name']; ?></td>
                                                    <td><?php echo $b['brand']; ?></td>
                                                    <td><?php echo $b['unit']; ?></td>
                                                    <td><?php echo $b['plate_no']; ?></td>
                                                    <td><?php echo $b['contact']; ?></td>
                                                    <td><?php echo $b['insurance']; ?></td>
                                                    <?php if($_SESSION['usertype']=='1'){ ?>
                                                    <td>
                                                        <center>
                                                            <a href="<?php echo base_url(); ?>index.php/encode/client_data_update/<?php echo $b['client_id']; ?>" class="btn btn-custon-rounded-four btn-primary" title="View"><span class="fa fa-pencil"></span> </a>
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