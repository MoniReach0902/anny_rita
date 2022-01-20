<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> </span> &#921; ទំរងសុំទិដ្ឋាការ </h3>
                <a href="" style="float: right;"><button class="btn btn-info">Add Infomation</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php foreach ($userInfo as $key=> $user) {
                ?>
                    <section class="invoice printableArea">
                        <!-- title row -->
                        <!-- <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="page-header">
                                    <div class="text-center">
                                        <span class="khmer_os_header">ព្រះរាជាណាចក្រកម្ពុជា<br /><br />ជាតិ&#9;សាសនា&#9;ព្រះមហាក្សត្រ</span><br /><br /><br />
                                       
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12" style="margin-top: 15px;">
                                <div class="page-headers">
                                    <div class="text-center">
                                        <span class="khmer_os_header">ព្រះរាជាណាចក្រកម្ពុជា<br /><br />ជាតិ&#9;សាសនា&#9;ព្រះមហាក្សត្រ</span><br /><br /><br />
                                        <img src="<?php echo base_url('/images/tactieng.png') ?>" alt="" style="width: 200px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box1" style="margin-top: 10px; text-align: start;">
                            <div class="top" style="margin-top: 110px;margin-bottom: 50px;">
                                <h2 style="margin: auto; font-family: 'Khmer OS Muol Light';">ប្រវត្តិរូបសង្ខេប</h2>

                            </div>
                            <div class="row" style="display: flex;">
                                <p>គោត្តនាម-នាម ៖ </p>

                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->k_fname . '  ' . $user->k_lname ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>

                                <p>ជាអក្សរឡាតាំង៖ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->e_fname . '  ' . $user->e_lname ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                <p>ភេទ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $gender = $user->gender;
                                                                    $gender == 'Male' ? $g = 'ប្រុស' : $g = 'ស្រី';
                                                                    echo $g; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="row" style="display: flex;">
                                <p>ថ្ងៃ-ខែ-ឆ្នាំកំណើត៖</p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $date = $user->dob;
                                                                        echo $date = date('d', strtotime($date)) . ' / ' . $date = date('m', strtotime($date)) . ' / ' . $y = $date = date('Y', strtotime($date)); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>
                                <p>អាយុ ៖ </p>
                                <h5>&nbsp;&nbsp;<?php echo date('Y') - $y; ?> &nbsp;</h5>
                                <p>ឆ្នាំ&nbsp;&nbsp;&nbsp; </p>
                                <p>ជនជាតិ </p>
                                <h5>&nbsp;&nbsp;&nbsp;ខ្មែរ&nbsp;&nbsp;&nbsp;</h5>
                                <p>សញ្ជាតិ </p>
                                <h5>&nbsp;&nbsp;&nbsp;ខ្មែរ&nbsp;;&nbsp;&nbsp;</h5>
                                <p>កាន់សាសនា </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="row" style="display: flex;">
                                <p>ទីកន្លែងកំណើតនៅ៖ភូមិ ៖ </p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->v_name ?>&nbsp;&nbsp;&nbsp; </h5>
                                <p>ឃុំ </p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->c_name ?>&nbsp;&nbsp;&nbsp; </h5>
                                <p>ស្រុក </p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->d_name ?>&nbsp;&nbsp;&nbsp; </h5>
                                <p>ខេត្ត</p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->p_name ?>&nbsp;&nbsp;&nbsp; </h5>
                            </div>
                            <div class="row" style="display: flex;">
                                <p>សៀវភៅគ្រួសារ/អត្តសញ្ញាណប័ណ្ណ/លិខិតឆ្លងដែនលេខ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->number ?>&nbsp;&nbsp;&nbsp; </h5>
                                <p>ចុះថ្ងៃទី </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                <p> ខែ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                <p>ឆ្នាំ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="row" style="display: flex;">
                                <p>មុខរបរ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->name ?>&nbsp;&nbsp;&nbsp;&nbsp;​&nbsp;&nbsp;&nbsp; </h5>
                                <p>លេខទូរស័ព្ទទំនាក់ទំនង </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->mobile ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="row" style="display: flex;">
                                <?php $lang = $user->race ?>
                                <p>អាចប្រើប្រាស់ភាសាបានក្រៅពីភាសាខ្មែរ </p>
                                <i class="fa fa-check-square-o" style="font-size: 25px;"></i>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10-10-2021&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>
                                <p>ភាសាផ្សេងៗ ៖ </p>

                            </div>
                            <div class="row" style="display: flex;">
                                <i class="fa fa-<?php $materail = $user->marital;
                                                echo ($materail == 'single') ? 'check-' : ''; ?>square-o" aria-hidden="true" style="font-size: 25px;"></i>

                                <p>នៅលីវ ឬមានប្ដី/ប្រពន្ធឈ្មោះ </p>

                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>
                                <p>អាយុ ៖ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>
                                <p>ឆ្នាំ ៖ </p>
                                <p>ថ្ងៃខែឆ្នាំកំណើតថ្ងៃទី </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>
                                <p>ខែ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>
                                <p>ឆ្នាំ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>

                            </div>
                            <div class="row" style="display: flex;">

                                <p>មុខរបរ កសិករ លេខទូរស័ព្ទទំនាក់ទំនង </p>

                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>


                            </div>
                            <div class="row" style="display: flex;">
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="row" style="display: flex;">
                                <p>ឪពុកឈ្មោះ </p>

                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->f_k_fname . '  ' . $user->f_k_lname ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>

                                <p>អាយុ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                <p> ឆ្នាំ </p>

                                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- មុខរបរ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;កសិករ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>

                            </div>
                            <div class="row" style="display: flex;">
                                <p>ម្ដាយឈ្មោះ </p>

                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->m_k_fname . '  ' . $user->m_k_lname ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>

                                <p>អាយុ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                <p> ឆ្នាំ </p>

                                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- មុខរបរ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;កសិករ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>

                            </div>
                            <div class="row" style="display: flex;">
                                <p>អាសយដ្ឋានបច្ចុប្បន្ន៖ ភូមិ </p>

                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->cv_name ?>&nbsp;&nbsp;&nbsp; </h5>

                                <p>ឃុំ </p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->cc_name ?>&nbsp;&nbsp;&nbsp; </h5>
                                <p>ស្រុក </p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->cd_name ?>&nbsp;&nbsp;&nbsp; </h5>
                                <p>ខេត្ត</p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->cp_name ?>&nbsp;&nbsp;&nbsp; </h5>
                            </div>
                            <div class="row" style="display: flex;">

                                <p>លេខទូរស័ព្ទទំនាក់ទំនង គ្រួសារ</p>

                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->f_mobile ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>


                            </div>
                            <div class="row" style="display: flex;">
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="top" ​ style="margin-right: 150px; float: right; margin-top: 60px;">
                                <p> </p>
                                <p>រាជធានីភ្នំពេញ ថ្ងៃទី
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                </p>
                                <p>ខែ</p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                </p>
                                <p>ឆ្នាំ</p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <br>
                            <div class="top" ​ style="margin-right: -240px; margin-top: 80px; float: right;">
                                <p> </p>

                                <p>ស្នាមមេដៃសាមីខ្លួន</p>
                            </div>
                            <div class="top" ​ style="margin-right: -240px; margin-top: 170px; float: right;">
                                <p> </p>

                                <p><?php echo $user->k_fname . '  ' . $user->k_lname ?></p>
                            </div>
                            <div class="top" ​ style="margin-right: -240px; margin-top: 220px; float: right;">
                                <p> </p>

                                <p><?php echo $user->e_fname . '  ' . $user->e_lname ?></p>
                            </div>
                            <div class="top" ​ style="margin-right: -220px; margin-top: 500px; float: right;">
                                <p> </p>
                                
                                <p><?php echo $company['e_name'].' - '.$totalCount['total'].' -  '. ($key+1) ?></p>
                            </div>
                        </div>

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