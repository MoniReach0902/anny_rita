<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> </span> &#921; Prining Bio Interview </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- this row will not appear when printing -->
                <div class=" row no-print">
                    <div class="col-12">
                        <button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                    </div>
                </div>
                <?php foreach ($userDoc as $key => $info) {
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
                        <div class="area" style="width: 100%; height: 100%; margin: 0;padding: 0;">
                            <div class="row">
                                <div class="col-12">

                                    <div class="rotate">
                                        <div style="height: 50%;margin: 0;padding: 0; background-color: red;">
                                            <img src="<?php echo base_url('/images/worker_docs/' . $info->file_name) ?>" alt="" style="width: 18cm;transform: rotate(90deg);height: 22cm;margin-left: 200px;float: left;border: 2px solid black;">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <br><br><br><br><br><br><br><br>
                            <div class="row">
                                <div class="col-12">
                                    <div class="box_layout" style="float: left;">
                                        <table id="bio">
                                            <tr><img src="<?php echo base_url('/images/1.png') ?>" alt=""></tr>
                                            <tr>
                                                <td>
                                                    <h2>Passport No. : </h2>
                                                </td>
                                                <td>
                                                    <p><?php echo $info->number ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Name (KH) : </h2>
                                                </td>
                                                <td>
                                                    <p style="font-family: 'Khmer OS System';"><?php echo $info->k_fname . ' ' . $info->k_lname ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Name (ENG) : </h2>
                                                </td>
                                                <td>
                                                    <p><?php echo $info->e_fname . ' ' . $info->e_lname ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Name (TH) : </h2>
                                                </td>
                                                <td>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Gender : </h2>
                                                </td>
                                                <td>
                                                    <p><?php echo $info->gender ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Date of Birth : </h2>
                                                </td>
                                                <td>
                                                    <p><?php echo $info->dob ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Place of Birth : </h2>
                                                </td>
                                                <td>
                                                    <p style="font-family: 'Khmer OS System';"><?php echo $info->name ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Code No. :</h2>
                                                </td>
                                                <td>
                                                    <p><?php echo $key + 1 ?></p>
                                                </td>
                                            </tr>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- this row will not appear when printing -->

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