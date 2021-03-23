<div class="row">
        <div class="col-lg-12">
            <div class="sparkline12-list shadow-reset mg-t-30">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>Brand New Form</h1>
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
                                    <form action="<?php echo base_url(); ?>index.php/encode/insert_brandnew" method="POST" enctype="multipart/form-data">
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Client Name</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="client" class="form-control" placeholder="Enter Client Name"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Insurer</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="insurer" class="form-control" placeholder="Enter Insurer"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Insurer</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <select class="form-control select2_insurer" name="insurer">
                                                            <option value="">--Select Insurer--</option>
                                                            <?php foreach($insurer AS $i){ ?>
                                                            <option value="<?php echo $i->insurer_id; ?>"><?php echo $i->insurer_name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Insurance Coverage</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="insurance" class="form-control" placeholder="Enter Insurance Coverage"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Delivery Date</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="date" name="delivery_date" class="form-control" placeholder="Enter Delivery Date"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Conduction Sticker</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="conduction" class="form-control" placeholder="Enter Conduction Sticker"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Unit</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="unit" class="form-control" placeholder="Enter Unit"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Bank</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <select class="form-control select2_bank" name="bank">
                                                            <option value="">--Select Bank--</option>
                                                            <?php foreach($bank AS $b){ ?>
                                                            <option value="<?php echo $b->bank_id; ?>"><?php echo $b->bank_name." - ".$b->bank_location; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Policy No.</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="policy" class="form-control" placeholder="Enter Policy No."/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Amount</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="amount" class="form-control" placeholder="Enter Amount"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Date Paid</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="date" name="date_paid" class="form-control" placeholder="Enter Date Paid"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border-class shadow" >
                                            <div>
                                                <div class="col-lg-4">
                                                    <label for="pic1">Picture 1:</label>
                                                    <input class="form-control"  type="file" name="pic1" id="img1" onchange="readPic1(this);">
                                                    <div class="thumbnail">
                                                        <img id="pic1" class="pictures" src="<?php echo base_url() ?>assets/img/default-img.jpg" alt="your image" />
                                                    </div>
                                                    <span id="img1-check" class='img-check'></span>
                                                </div> 
                                                <div class="col-lg-4">
                                                    <label for="pic1">Picture 2:</label>
                                                    <input class="form-control"  type="file" name="pic2" id="img2" onchange="readPic2(this);">
                                                    <div class="thumbnail">
                                                        <img id="pic2" class="pictures" src="<?php echo base_url() ?>assets/img/default-img.jpg" alt="your image" />
                                                    </div>
                                                    <span id="img2-check" class='img-check'></span>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="pic1">Picture 3:</label>
                                                    <input class="form-control"  type="file" name="pic3" id="img3" onchange="readPic3(this);">
                                                    <div class="thumbnail">
                                                        <img id="pic3" class="pictures" src="<?php echo base_url() ?>assets/img/default-img.jpg" alt="your image" />
                                                    </div>
                                                    <span id="img3-check" class='img-check'></span>
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