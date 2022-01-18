<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->
    <?php foreach ($userDoc as $key => $info) {
    ?>
        <section class="content">
            <div class="box box-solid bg-dark">
                <div class="box-header with-border">
                    <h3 class="box-title"><span class="khmer_font">  </span> &#921; Prining Bio Interview </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

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
                        <div class="row">
                            <div class="col-12">
                                <div class="khmer_font_bio">
                                    <div class="rotate">
                                        <div>
                                            <img src="<?php echo base_url('/images/worker_docs/' . $info->file_name) ?>" alt="" style="max-width: 60%;transform: rotate(90deg);height: 70%;padding: 40px 0; top:0;margin-left: 200px;margin-top: -170px;float: left;">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="box_layout">
                                    <table>
                                        <tr><img src="<?php echo base_url('/images/ARITA _logo.png') ?>" alt=""></tr>
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
                                                <p><?php echo $info->k_fname . ' ' . $info->k_lname ?></p>
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
                                                <p><?php echo $info->name ?></p>
                                            </td>
                                        </tr>

                                    </table>
                                    <h1>INTERVIEWS-INFO</h1>
                                    <h3>Height : </h3>
                                    <h3>Language : </h3>
                                    <h3>Work experience : </h3>
                                    <table class="tbl-bottom">
                                        <tr>
                                            <td>តំណាងឈ្មោះ ៖ </td>
                                            <td><?php echo $info->aname ?></td>
                                        </tr>
                                        <tr>
                                            <td>ទូរស័ព្ទលេខ : </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Code No. : </td>
                                            <td><?php echo $key+1 ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                            </div>
                        </div>
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.box-body -->
            </div>
        </section>
    <?php
    } ?>
</div>
<!-- /.content-wrapper -->