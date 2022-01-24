<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> ពាក្យសុំផ្តល់លិខិតធ្វើដំណើរ ពលករកម្ពុជា ធ្វើការនៅបរទេស </span> &#921; Prining Worker Request </h3>
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
                    <div class="space" style="margin-top: 100px;">&nbsp;</div>
                    <div class="img">

                        <?php foreach ($userDoc as $key => $user) {
                        ?>
                          
                                <img src="<?php echo base_url('/images/worker_docs/'.$user->file_name)?>" width="" height="500px"   style="transform: rotate(90deg);float: left;margin: 0; padding: 0; border: 3px solid black;" >                               
                           
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