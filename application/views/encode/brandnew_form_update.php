<div class="row">
        <div class="col-lg-12">
            <div class="sparkline12-list shadow-reset mg-t-30">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>Brand New Update Form</h1>
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
                                    <?php foreach($brandnew AS $br){ ?>
                                    <div id="image1_modal" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                                        <div class="modal-dialog" style="width:70%">
                                            <div class="modal-content">
                                                    <div class="modal-header header-color-modal bg-color-1">
                                                        <h4 class="modal-title"><?php echo $br->image1; ?></h4>
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                    </div>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                </div>
                                                <form>
                                                    <div class="modal-body">
                                                        <img id="pic1" class="pictures" src="<?php echo (empty($br->image1) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$br->image1); ?>" alt="your image"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image2_modal" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                                        <div class="modal-dialog" style="width:70%">
                                            <div class="modal-content">
                                                    <div class="modal-header header-color-modal bg-color-1">
                                                        <h4 class="modal-title"><?php echo $br->image2; ?></h4>
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                    </div>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                </div>
                                                <form>
                                                    <div class="modal-body">
                                                        <img id="pic1" class="pictures" src="<?php echo (empty($br->image2) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$br->image2); ?>" alt="your image"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image3_modal" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                                        <div class="modal-dialog" style="width:70%">
                                            <div class="modal-content">
                                                    <div class="modal-header header-color-modal bg-color-1">
                                                        <h4 class="modal-title"><?php echo $br->image3; ?></h4>
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                    </div>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                </div>
                                                <form>
                                                    <div class="modal-body">
                                                        <img id="pic1" class="pictures" src="<?php echo (empty($br->image3) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$br->image3); ?>" alt="your image"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="<?php echo base_url(); ?>index.php/encode/update_brandnew" method="POST" enctype="multipart/form-data">
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Client Name</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="client" class="form-control" placeholder="Enter Client Name" value="<?php echo $br->client_name; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Insurer</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="insurer" class="form-control" placeholder="Enter Insurer" value="<?php echo $br->insurer; ?>"/>
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
                                                    <input type="text" name="insurance" class="form-control" placeholder="Enter Insurance Coverage" value="<?php echo $br->ins_coverage; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Delivery Date</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="date" name="delivery_date" class="form-control" placeholder="Enter Delivery Date" value="<?php echo $br->delivery_date; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Conduction Sticker</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="conduction" class="form-control" placeholder="Enter Conduction Sticker" value="<?php echo $br->conduction_sticker; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Unit</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="unit" class="form-control" placeholder="Enter Unit" value="<?php echo $br->unit; ?>"/>
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
                                                            <option value="<?php echo $b->bank_id; ?>" <?php echo ($b->bank_id == $br->bank_id) ? 'selected' : ''?>><?php echo $b->bank_name." - ".$b->bank_location; ?></option>
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
                                                    <input type="text" name="policy" class="form-control" placeholder="Enter Policy No." value="<?php echo $br->policy_no; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Amount</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" name="amount" class="form-control" placeholder="Enter Amount" value="<?php echo $br->amount; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-right pull-right-pro">Date Paid</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="date" name="date_paid" class="form-control" placeholder="Enter Date Paid" value="<?php echo $br->date_paid; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border-class shadow" >
                                            <div>
                                                <div class="col-lg-4">
                                                    <label for="pic1">Picture 1:</label>
                                                    <input class="form-control"  type="file" name="pic1" id="img1" onchange="readPic1(this);">
                                                    <div class="thumbnail">
                                                        <a data-toggle="modal" data-target="#image1_modal" id="modalbutton">
                                                            <img id="pic1" class="pictures1" src="<?php echo (empty($br->image1) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$br->image1); ?>" alt="your image" />
                                                        </a>
                                                    </div>
                                                    <span id="img1-check" class='img-check'></span>
                                                </div> 
                                                <div class="col-lg-4">
                                                    <label for="pic1">Picture 2:</label>
                                                    <input class="form-control"  type="file" name="pic2" id="img2" onchange="readPic2(this);">
                                                    <div class="thumbnail">
                                                        <a data-toggle="modal" data-target="#image2_modal" id="modalbutton">
                                                            <img id="pic2" class="pictures2" src="<?php echo (empty($br->image2) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$br->image2); ?>" alt="your image" />
                                                        </a>
                                                    </div>
                                                    <span id="img2-check" class='img-check'></span>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="pic1">Picture 3:</label>
                                                    <input class="form-control"  type="file" name="pic3" id="img3" onchange="readPic3(this);">
                                                    <div class="thumbnail">
                                                        <a data-toggle="modal" data-target="#image3_modal" id="modalbutton">
                                                            <img id="pic3" class="pictures3" src="<?php echo (empty($br->image3) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$br->image3); ?>" alt="your image" />
                                                        </a>
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
                                                        <input type="hidden" name="brand_id" value="<?php echo $br->brand_id; ?>"/>
                                                        <input type="submit" class="btn btn-custon-rounded-four btn-primary btn-block" value="Update"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
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