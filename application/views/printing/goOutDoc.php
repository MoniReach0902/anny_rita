<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font" style="font-family: 'Khmer OS System'"> ពាក្យសុំផ្ដល់លិខិតធ្វើដំណើរ</span> </h3>
                <!-- <h3 class="box-title"><span class="khmer_font"> </span> &#921; </h3> -->

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
                            <?php $xdata = json_decode($user->xtra); ?>
                            <div class="outDoc" style="position: relative; ">
                                <img src="<?php echo base_url('images/Scan.png') ?>" alt="" style="width: 110%; height: 100%; position: relative;margin: 0;padding: 0;margin-top: -90px;margin-left: -50px;visibility: hidden;">
                                <p style=" top: 270px; left: 240px;"><?php echo $user->k_fname . ' ' . $user->k_lname ?></p>
                                <p style=" top: 270px; left: 725px;"><?php echo $user->e_fname . ' ' . $user->e_lname ?></p>
                                <p style=" top: 310px; left: 230px;"><?php echo $date = date('d', strtotime($user->dob)); ?></p>
                                <p style=" top: 310px; left: 300px;"><?php echo $date = date('m', strtotime($user->dob)); ?></p>
                                <p style=" top: 310px; left: 380px;"><?php echo $date = date('Y', strtotime($user->dob)); ?></p>
                                <p style=" top: 310px; left: 505px;"><?php $gender = $user->gender;
                                                                        $gender == 'Male' ? $g = 'ប្រុស' : $g = 'ស្រី';
                                                                        echo $g; ?></p>
                                <p style=" top: 310px; left: 690px;">ខ្មែរ</p>
                                <p style=" top: 310px; left: 860px;">ខ្មែរ</p>
                                <p style=" top: 355px; left: 320px;"><?php if (!empty($xdata->{'b_commune'})) {
                                                                            echo $xdata->{'b_commune'};
                                                                        } else {
                                                                            echo $user->c_name;
                                                                        }  ?></p>
                                <p style=" top: 355px; left: 575px;"><?php if (!empty($xdata->{'b_district'})) {
                                                                            echo $xdata->{'b_district'};
                                                                        } else {
                                                                            echo $user->d_name;
                                                                        }  ?></p>
                                <p style=" top: 355px; left: 895px;"><?php if (!empty($xdata->{'b_province'})) {
                                                                            echo $xdata->{'b_province'};
                                                                        } else {
                                                                            echo $user->p_name;
                                                                        }  ?></p>
                                <p style=" top: 390px; left: 540px;"><?php $cur_village = $user->cur_add_village;
                                                                        $cur_add_village = $this->Model_NameList->getCurAddVillage($cur_village);
                                                                        if (!empty($xdata->{'c_village'})) {
                                                                            echo $xdata->{'c_village'};
                                                                        } else {
                                                                            if (!empty($cur_add_village['name'])) {
                                                                                echo $cur_add_village['name'];
                                                                            }
                                                                        }

                                                                        ?></p>
                                <p style=" top: 390px; left: 895px;"><?php $cur_village = $user->cur_add_commune;
                                                                        $cur_add_village = $this->Model_NameList->getCurAddCommune($cur_village);
                                                                        if (!empty($xdata->{'c_commune'})) {
                                                                            echo $xdata->{'c_commune'};
                                                                        } else {
                                                                            if (!empty($cur_add_village['name'])) {
                                                                                echo $cur_add_village['name'];
                                                                            }
                                                                        }
                                                                        ?></p>
                                <p style=" top: 435px; left: 200px;"><?php $cur_village = $user->cur_add_district;
                                                                        $cur_add_village = $this->Model_NameList->getCurAddDistrict($cur_village);
                                                                        if (!empty($xdata->{'c_district'})) {
                                                                            echo $xdata->{'c_district'};
                                                                        } else {
                                                                            if (!empty($cur_add_village['name'])) {
                                                                                echo $cur_add_village['name'];
                                                                            }
                                                                        }
                                                                        ?></p>
                                <p style=" top: 435px; left: 570px;"><?php $cur_village = $user->cur_add_province;
                                                                        $cur_add_village = $this->Model_NameList->getCurAddProvince($cur_village);
                                                                        if (!empty($xdata->{'c_province'})) {
                                                                            echo $xdata->{'c_province'};
                                                                        } else {
                                                                            if (!empty($cur_add_village['name'])) {
                                                                                echo $cur_add_village['name'];
                                                                            }
                                                                        }
                                                                        ?></p>
                                <p style=" top: 475px; left: 180px;"><?php echo $user->name ?></p>
                                <p style=" top: 475px; left: 890px;"><?php echo $user->mobile ?></p>
                                <p style=" top: 595px; left: 280px;"><?php echo $user->marital == 'single' ? 'នៅលីវ' : '' ?></p>
                                <p style=" top: 640px; left: 190px;"><?php echo $user->f_k_fname . ' ' . $user->f_k_lname ?></p>
                                <p style=" top: 685px; left: 190px;"><?php echo $user->m_k_fname . ' ' . $user->m_k_lname ?></p>
                                <p style=" top: 765px; left: 490px;"><?php echo $user->sos_fname . ' ' . $user->sos_lname ?></p>
                                <p style=" top: 807px; left: 880px;"><?php echo $user->contact ?></p>

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