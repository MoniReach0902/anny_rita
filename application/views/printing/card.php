<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font" style="font-family: 'Khmer OS System'"> Sticker Card</span> </h3>
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
                    <!-- <div class="space" style="margin-top: 30px;">&nbsp;</div> -->
                    <div class="img" style="position: relative;">

                        <?php foreach ($userDoc as $key => $user) {
                        ?>
                            <div class="img-box" style="position: relative;">
                                <img src="<?php echo base_url('/images/stickernew.png'); ?>" alt="" width="100%" height="330px" style="border: 3px solid black; margin:0 5px 5px 0;float: left; position: relative;">
                                <h3 style="position: absolute;margin-left: 57px;margin-top: 110px;font-size: 26px;"><?php echo $totalCount['total'] ?></h3>
                                <h3 style="position: absolute;margin-left: 40px;margin-top: 195px;"><?php echo ($key + 1) ?></h3>
                                <p style="position: absolute;margin-left: 160px;margin-top: 183px;"><?php echo $user->k_fname . ' ' . $user->k_lname . '   ' . $user->e_fname . ' ' . $user->e_lname ?></p>
                                <h5 style="position: absolute;margin-left: 190px;margin-top: 258px; font-size: 19px;"><?php echo $company['e_name'] ?></h5>
                                <h5 style="position: absolute;margin-top: 280px; text-align: center;margin-right: 25px;width: 98%;font-size: 16px;"><?php echo $company['add1'] ?></h5>
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