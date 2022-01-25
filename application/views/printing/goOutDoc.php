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
                        <div class="outDoc" style="position: relative; ">
                            <img src="<?php echo base_url('images/Scan.png') ?>" alt="" style="width: 110%; height: 100%; position: relative;margin: 0;padding: 0;margin-top: -90px;margin-left: -50px;visibility: hidden;">
                            <p style=" top: 280px; left: 230px;"><?php echo $user->k_fname . ' ' . $user->k_lname ?></p>
                            <p style=" top: 275px; left: 705px;"><?php echo $user->e_fname . ' ' . $user->e_lname ?></p>
                            <p style=" top: 320px; left: 230px;"><?php echo $date = date('d', strtotime($user->dob)); ?></p>
                            <p style=" top: 320px; left: 290px;"><?php echo $date = date('m', strtotime($user->dob)); ?></p>
                            <p style=" top: 320px; left: 370px;"><?php echo $date = date('Y', strtotime($user->dob)); ?></p>
                            <p style=" top: 320px; left: 505px;"><?php $gender = $user->gender;
                                                                    $gender == 'Male' ? $g = 'ប្រុស' : $g = 'ស្រី';
                                                                    echo $g; ?></p>
                            <p style=" top: 320px; left: 675px;">ខ្មែរ</p>
                            <p style=" top: 320px; left: 845px;">ខ្មែរ</p>
                            <p style=" top: 365px; left: 320px;"><?php echo $user->d_name ?></p>
                            <p style=" top: 365px; left: 575px;"><?php echo $user->c_name ?></p>
                            <p style=" top: 365px; left: 895px;"><?php echo $user->p_name ?></p>
                            <p style=" top: 400px; left: 540px;"><?php echo $user->cv_name ?></p>
                            <p style=" top: 400px; left: 895px;"><?php echo $user->cd_name ?></p>
                            <p style=" top: 445px; left: 200px;"><?php echo $user->cc_name ?></p>
                            <p style=" top: 445px; left: 570px;"><?php echo $user->cp_name ?></p>
                            <p style=" top: 475px; left: 180px;"><?php echo $user->name ?></p>
                            <p style=" top: 485px; left: 890px;"><?php echo $user->mobile ?></p>
                            <p style=" top: 610px; left: 280px;"><?php echo $user->marital ?></p>
                            <p style=" top: 647px; left: 190px;"><?php echo $user->f_k_fname.' '.$user->f_k_lname ?></p>
                            <p style=" top: 690px; left: 190px;"><?php echo $user->m_k_fname . ' ' . $user->m_k_lname ?></p>
                            <p style=" top: 778px; left: 490px;"><?php echo $user->sos_fname.' '.$user->sos_lname ?></p>
                            <p style=" top: 815px; left: 880px;"><?php echo $user->contact ?></p>

                            <!-- this row will not appear when printing -->


                            <!-- /.content -->
                        </div>
                        <!-- /.box-body -->
                    </section>
                <?php
                } ?>

            </div>
        </div>
    </section>


</div>
<!-- /.content-wrapper -->