<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font" style="font-family: 'Khmer OS System'"> Passport ក្រោយ Sticker</span> </h3>
                <!-- <h3 class="box-title"><span class="khmer_font"> ពាក្យសុំផ្តល់លិខិតធ្វើដំណើរ ពលករកម្ពុជា ធ្វើការនៅបរទេស </span> &#921; Prining Worker Request </h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <section class="invoice printableArea">
                    <!-- title row -->



                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-12">
                            <button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                        </div>
                    </div>
                    <!-- <div class="space" style="margin-top: 15px;">&nbsp;</div> -->
                    <div class="img" style="position: relative;">

                        <?php foreach ($userDoc as $user) {

                        ?>
                            <div class="img-box1" style="float: right;">
                                <img src="<?php echo base_url('/images/worker_docs/' . $user->file_name); ?>" alt="" width="320px" height="600px" style=" margin:-135px 5px 5px 80px;float: left; position: relative;transform: rotate(-90deg);object-fit: scale-down;">
                                <!-- <h3 style="position: absolute;margin-left: 57px;margin-top: 110px;font-size: 26px;"></h3>
                                <h3 style="position: absolute;margin-left: 40px;margin-top: 195px;"></h3>
                                <p style="position: absolute;margin-left: 160px;margin-top: 183px;"></p>
                                <h5 style="position: absolute;margin-left: 190px;margin-top: 265px; font-size: 19px;"></h5>
                                <h5 style="position: absolute;margin-top: 285px; text-align: center;margin-right: 25px;width: 49%;font-size: 16px; "></h5> -->
                            </div>
                        <?php
                        } ?>




                    </div>


                </section>



                <!-- /.content -->

                <!-- /.box-body -->
            </div>
    </section>

</div>
<!-- /.content-wrapper -->