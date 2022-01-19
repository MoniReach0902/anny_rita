<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> </span> &#921; ពាក្យសុំរបស់ក្រុមហ៊ុន </h3>
                <a href="<?php echo site_url('NameListPrint/add_info_form1/' . $listId) ?>" style="float: right;"><button class="btn btn-info">Add Infomation</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php foreach ($userDoc as $user) {
                ?>
                    <section class="invoice printableArea">
                        <!-- title row -->
                        <!-- <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="page-header">
                                    <div class="text-center">
                                        <span class="khmer_os_header">ព្រះរាជាណាចក្រកម្ពុជា<br /><br />ជាតិ&#9;សាសនា&#9;ព្រះមហាក្សត្រ</span><br /><br /><br />
                                        <span class="khmer_os_header"><b>ពាក្យសុំផ្តល់លិខិតធ្វើដំណើរ ពលករកម្ពុជា ធ្វើការនៅបរទេស</span></b><br />
                                        <span class="khmer_os_header"><b>សូមគោរពជូន</span></b><br />
                                        <span class="khmer_os_header"><b>រដ្ឋមន្ត្រីក្រសួងមហាផ្ទៃ</span></b>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="image-passport" style="position: relative;">
                            <img src="<?php echo base_url('images/alert/app_4visa.png') ?>" alt="" style="width: 100%; height: 100%; position: relative;">
                            <h5 style=" top: 322px; left: 290px;"><?php echo $user->e_lname . ' ' . $user->e_fname ?></h5>
                            <p style=" top: 490px; left: 150px;"><?php echo $user->en_name ?></p>
                            <p style=" top: 534px; left: 200px;"><?php echo $user->dob ?></p>
                            <p style=" top: 618px; left: 105px;"><?php echo $user->number ?></p>
                            <p style=" top: 660px; left: 145px;"><?php echo $user->issue_date ?></p>
                            <p style=" top: 660px; left: 385px;"><?php echo $user->expired_date ?></p>
                            <div class="address-box" style="position: absolute; top: 840px;  left: 45px; text-transform: uppercase; ;">
                                <i>
                                    <p style="width: 465px; word-break: break-all; line-height: 30px; "><?php echo "PH." . $user->c_village . ",  KH." . $user->c_communes.",  DIS.".$user->c_districts.",  PRO.".$user->c_provinces ?></p>
                                </i>
                            </div>
                            <h5 style=" top: 1036px; left: 620px; font-size: 32px;"><?php echo $user->e_lname . ' ' . $user->e_fname ?></h5>
                        </div>
                        <div class="visa-box">1</div>

                        <!-- this row will not appear when printing -->
                        <div class=" row no-print">
                            <div class="col-12">
                                <button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                            </div>
                        </div>
                    </section>
                <?php
                } ?>
                <!-- /.content -->
            </div>
            <!-- /.box-body -->
        </div>
    </section>


</div>
<!-- /.content-wrapper -->