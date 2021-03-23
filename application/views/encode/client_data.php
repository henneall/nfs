<div class="row">
        <div class="col-lg-12">
            <div class="sparkline12-list shadow-reset mg-t-30">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>Client Data Form</h1>
                        <div class="sparkline12-outline-icon">
                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                            <span><i class="fa fa-wrench"></i></span>
                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="all-form-element-inner">
                                    <form action="<?php echo base_url(); ?>index.php/encode/insert_client" method="POST" enctype="multipart/form-data">
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Client Name</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="chosen-select-single mg-b-20">
                                                        <select class="form-control select2_client" name="client">
                                                            <option value="">--Select Client Name--</option>
                                                            <?php foreach($brand_new AS $b){ ?>
                                                            <option value="<?php echo $b->brand_id; ?>"><?php echo $b->client_name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Brand</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="brand" class="form-control" placeholder="Enter Brand" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Unit</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="unit" class="form-control" placeholder="Enter Unit" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Plate Number</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="plate_no" class="form-control" placeholder="Enter Plate Number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Contact</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="contact" class="form-control" placeholder="Enter Contact" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Insurance</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="insurance" class="form-control" placeholder="Enter Insurance" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Expiry</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="date" name="expiry" class="form-control" placeholder="Enter Expiry" />
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group-inner">
                                            <div class="login-btn-inner">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="submit" class="btn btn-custon-rounded-four btn-primary btn-block" value="Save"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Basic Form End-->