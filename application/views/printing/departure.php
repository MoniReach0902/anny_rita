<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> </span> &#921; </h3>

                <!-- /.box-header -->
                <div class="box-body">
                    <!-- this row will not appear when printing -->
                    <div class=" row no-print">
                        <div class="col-12">
                            <button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                        </div>
                    </div>


                    <?php foreach ($users as $user) {
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
                            <div class="area" style="width: 100%; height: 100%; margin: 0;padding: 0; "><img src="<?php echo base_url('images/dp.png') ?>" alt="" style="height: 1172px;margin-left: 10px;border: 2px solid black;margin-top: 10px;"></div>
                          
                            <!-- /.box-body -->
                        </section>
                    <?php
                    } ?>

                </div>
            </div>
    </section>


</div>
<!-- /.content-wrapper -->