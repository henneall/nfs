
            <br>
            <?php foreach($brandnew AS $b){ ?>
            <div id="image1_modal" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                <div class="modal-dialog" style="width:70%">
                    <div class="modal-content">
                            <div class="modal-header header-color-modal bg-color-1">
                                <center><h4 class="modal-title"><?php echo $b['image1']; ?></h4></center>
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <form>
                            <div class="modal-body">
                                <img id="pic1" class="pictures" src="<?php echo (empty($b['image1']) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$b['image1']); ?>" alt="your image"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="image2_modal" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                <div class="modal-dialog" style="width:70%">
                    <div class="modal-content">
                            <div class="modal-header header-color-modal bg-color-1">
                                <center><h4 class="modal-title"><?php echo $b['image2']; ?></h4></center>
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <form>
                            <div class="modal-body">
                                <img id="pic1" class="pictures" src="<?php echo (empty($b['image2']) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$b['image2']); ?>" alt="your image"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="image3_modal" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                <div class="modal-dialog" style="width:70%">
                    <div class="modal-content">
                            <div class="modal-header header-color-modal bg-color-1">
                                <center><h4 class="modal-title"><?php echo $b['image3']; ?></h4></center>
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <form>
                            <div class="modal-body">
                                <img id="pic1" class="pictures" src="<?php echo (empty($b['image3']) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$b['image3']); ?>" alt="your image"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="project-details-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="project-details-wrap shadow-reset">
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="project-details-title">
                                            <h1><span class="profile-details-name-nn" style="font-weight:900"><?php echo $b['client_name'];?></span></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Delivery Date:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo date("F d, Y", strtotime($b['delivery_date'])); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Bank:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo $b['bank']." - ".$b['bank_location'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Insurer:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo $b['insurer'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Insurance Coverage:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo $b['ins_coverage'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Unit:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo $b['unit'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Date Paid:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo date("F d, Y", strtotime($b['date_paid'])); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Policy Number:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo $b['policy_no'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Conduction Sticker:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo $b['conduction_sticker'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Amount:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo number_format($b['amount'],2);?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-class shadow" >
                                    <div>
                                        <div class="col-lg-4">
                                            <label for="pic1">Picture 1:</label>
                                            <div class="thumbnail">
                                                <a data-toggle="modal" data-target="#image1_modal" id="modalbutton"> 
                                                    <img id="pic1" class="pictures" src="<?php echo (empty($b['image1']) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$b['image1']); ?>" alt="your image"/>
                                                </a>
                                            </div>
                                            <span id="img1-check" class='img-check'></span>
                                        </div> 
                                        <div class="col-lg-4">
                                            <label for="pic1">Picture 2:</label>
                                            <div class="thumbnail">
                                                <a data-toggle="modal" data-target="#image2_modal" id="modalbutton"> 
                                                    <img id="pic2" class="pictures" src="<?php echo (empty($b['image2']) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$b['image2']); ?>" alt="your image"/>
                                                </a>
                                            </div>
                                            <span id="img2-check" class='img-check'></span>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="pic1">Picture 3:</label>
                                            <div class="thumbnail">
                                                <a data-toggle="modal" data-target="#image3_modal" id="modalbutton"> 
                                                    <img id="pic3" class="pictures" src="<?php echo (empty($b['image3']) ? base_url().'assets/img/default-img.jpg' : base_url().'uploads/'.$b['image3']); ?>" alt="your image" />
                                                </a>
                                            </div>
                                            <span id="img3-check" class='img-check'></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>