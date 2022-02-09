<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font" style="font-family: 'Khmer OS System'"> ប្រវត្តិរូបសង្ខេប</span> </h3>
                <!-- <h3 class="box-title"><span  style="font-family: 'Khmer OS System';"> </span> &#921; ប្រវត្តិរូបសង្ខេប </h3> -->

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- this row will not appear when printing -->
                <div class=" row no-print">
                    <div class="col-12">
                        <button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                    </div>
                </div>

                <?php foreach ($userInfo as $key => $user) {
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
                            <div class="col-xl-12 col-lg-12" style="margin-top: 35px;">
                                <div class="page-headers">
                                    <div class="text-center">
                                        <span class="khmer_os_header">ព្រះរាជាណាចក្រកម្ពុជា<br /><br />ជាតិ&#9;សាសនា&#9;ព្រះមហាក្សត្រ</span><br /><br /><br />
                                        <img src="<?php echo base_url('/images/tactieng.png') ?>" alt="" style="width: 200px;">


                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo base_url('/images/arm_logo.png') ?>" alt="" style="width: 200px;">
                        <div class="content-box1" style="margin-top: -100px; text-align: start;">
                            <div class="top" style="margin-top: 50px;margin-bottom: 50px;">
                                <h2 style="margin: auto; font-family: 'Khmer OS Muol Light';">ប្រវត្តិរូបសង្ខេប</h2>

                            </div>
                            <div class="row" style="display: flex;">
                                <p>គោត្តនាម-នាម ៖ </p>

                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->k_fname . '  ' . $user->k_lname ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h5>

                                <p>ជាអក្សរឡាតាំង៖ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->e_fname . '  ' . $user->e_lname ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                <p>ភេទ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $gender = $user->gender;
                                                                                            $gender == 'Male' ? $g = 'ប្រុស' : $g = 'ស្រី';
                                                                                            echo $g; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
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
                                <h5>&nbsp;&nbsp;&nbsp;ខ្មែរ&nbsp;&nbsp;&nbsp;</h5>
                                <p>កាន់សាសនា </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <?php $xdata=json_decode($user->xtra); ?>
                            <div class="row" style="display: flex;">
                                <p>ទីកន្លែងកំណើតនៅ៖ភូមិ ៖ </p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php if(!empty($xdata->{'c_village'})){echo $xdata->{'c_village'};}else{ echo $user->v_name;}  ?>&nbsp;&nbsp;&nbsp; </h5>
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
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo date('d', strtotime($user->issue_date)) ?>&nbsp;&nbsp;&nbsp;</h5>
                                <p> ខែ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('m', strtotime($user->issue_date)) ?>&nbsp;&nbsp;&nbsp;</h5>
                                <p>ឆ្នាំ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('Y', strtotime($user->issue_date)) ?>&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="row" style="display: flex;">
                                <p>មុខរបរ </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->name ?>&nbsp;&nbsp;&nbsp;&nbsp; </h5>
                                <p>លេខទូរស័ព្ទទំនាក់ទំនង </p>
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->mobile ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="row" style="display: flex;">

                                <p><?php $lang = $user->flanguage ?>អាចប្រើប្រាស់ភាសាបានក្រៅពីភាសាខ្មែរ &nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <i class="fa fa-<?php echo ($lang == 'th') ? 'check-' : ''; ?>square-o" aria-hidden="true" style="font-size: 25px;"></i>
                                <p>ថៃ &nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <i class="fa fa-<?php echo ($lang == 'ch') ? 'check-' : ''; ?>square-o" aria-hidden="true" style="font-size: 25px;"></i>
                                <p>ចិន &nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <i class="fa fa-<?php echo ($lang == 'en') ? 'check-' : ''; ?>square-o" aria-hidden="true" style="font-size: 25px;"></i>
                                <p>អង់គ្លេស &nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <i class="fa fa-<?php echo ($lang == '') ? 'check-' : ''; ?>square-o" aria-hidden="true" style="font-size: 25px;"></i>
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

                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->cur_add_village ?>&nbsp;&nbsp;&nbsp; </h5>

                                <p>ឃុំ </p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->cur_add_commune ?>&nbsp;&nbsp;&nbsp; </h5>
                                <p>ស្រុក </p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->cur_add_district ?>&nbsp;&nbsp;&nbsp; </h5>
                                <p>ខេត្ត</p>
                                <h5>&nbsp;&nbsp;&nbsp;<?php echo $user->cur_add_province ?>&nbsp;&nbsp;&nbsp; </h5>
                            </div>
                            <div class="row" style="display: flex;">

                                <p>លេខទូរស័ព្ទទំនាក់ទំនង គ្រួសារ</p>

                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user->f_mobile ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>


                            </div>

                            <div class="top" style="margin-right: 150px; float: right; margin-top: 60px;">
                                <p> </p>
                                <p>រាជធានីភ្នំពេញ ថ្ងៃទី
                                <h5>&nbsp;&nbsp;<?php echo date('d'); ?>&nbsp;&nbsp;</h5>
                                </p>
                                <p>ខែ</p>
                                <h5>&nbsp;&nbsp;<?php echo date('m'); ?>&nbsp;&nbsp;</h5>
                                </p>
                                <p>ឆ្នាំ</p>
                                <h5>&nbsp;&nbsp;<?php echo date('Y'); ?>&nbsp;&nbsp;</h5>
                            </div>
                            <br>
                            <div class="top" style="margin-right: -240px; margin-top: 80px; float: right;">
                                <p> </p>

                                <p>ស្នាមមេដៃសាមីខ្លួន</p>
                            </div>
                            <div class="top" style="margin-right: -240px; margin-top: 265px; float: right;">
                                <p> </p>

                                <p><?php echo $user->k_fname . '  ' . $user->k_lname ?></p>
                            </div>
                            <div class="top" style="margin-right: -260px; margin-top: 290px; float: right;">
                                <p> </p>

                                <p><?php echo $user->e_fname . '  ' . $user->e_lname ?></p>
                            </div>
                            <div class="top" style="margin-right: -520px; margin-top: 450px; float: right;">
                                <p> </p>

                                <p><?php if (!empty($company['e_name'])) {
                                        echo $company['e_name'];
                                    } ?><?php echo ' -' . $totalCount['total'] . ' -  ' . ($key + 1) ?></p>
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