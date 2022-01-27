<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> </span> &#921; ទំរងសុំទិដ្ឋាការ </h3>
                <a href="<?php echo site_url('NameListPrint/add_info_form2/' . $listId) ?>" style="float: right;"><button class="btn btn-info">Add Infomation</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- this row will not appear when printing -->
                <div class=" row no-print">
                    <div class="col-12">
                        <button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                    </div>
                </div>

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
                    <div class="content-box" style="margin-top: 10px;">

                        <div class="top">
                            <p>លេខ៖ <?php echo $num_date['arm_num2'] ?> ARM </p>
                            <p>រាជធានីភ្នំពេញ ថ្ងៃទី<?php echo $num_date['day'] ?> ខែ<?php echo $num_date['month'] ?> ឆ្នាំ<?php echo $num_date['year'] ?></p>
                        </div>
                        <div class="header" style="width: 800px;">
                            <h5>
                                អគ្គនាយកក្រុមហ៊ុនអាន់នី រីតា បេស មេនផៅវ័រ <br>
                                សូមគោរពជូន <br>
                                ឯកឧត្តមរដ្ឋមន្ត្រីក្រសួងការងារ និងបណ្តុះបណ្តាលវិជ្ជាជីវៈ
                            </h5>
                        </div>
                        <div class="content-center">
                            <p style="margin: 0 55px; width: 180px;">កម្មវត្តុ ៖</p>
                            <?php $female = $totalFemale['total'] ?>
                            <p style="text-align: justify;">សំណើសុំទិដ្ឋាការជូនពលករ-ពលការិនីខ្មែរ ចំនួន <b style="font-weight: bold;"><?php echo $total = $totalCount['total'] ?></b> នាក់ (ប្រុស <b style="font-weight: bold;"><?php echo $male = $total - $female ?></b> នាក់ <b style="font-weight: bold;"><?php echo $female ?></b> នាក់) ទៅបម្រើការងារនៅក្រុមហ៊ុន <b style="font-weight: bold;"><?php if (empty($companyName['e_name'])) {
                                                                                                                                                                                                                                                                                                                                                                                                            echo 0;
                                                                                                                                                                                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                                                                                                                                                                                            echo $companyName['e_name'];
                                                                                                                                                                                                                                                                                                                                                                                                        } ?></b> នៃព្រះរាជាណាចក្រថៃឡង់ដ៏។</p>
                        </div>

                        <div class="content-center">
                            <p style="margin: 0 55px; width: 240px; "> យោង ៖ </p>
                            <p style="text-align: justify;">ប្រកាសលេខ ១២៦/២០ ក.ប/ប្រ.ក ចុះថ្ងៃទី៣០ ខែមីនា ឆ្នាំ២០២២ របស់ក្រសួងការងារ និងបណ្តុះបណ្តាលវិជ្ជាជីវៈ ស្តីពីការអនុញ្ញាតឱ្យក្រុមហ៊ុន <span>អាន់នី រីតា បេស មេនផៅវ័រ</span> ធ្វើការជ្រើសរើស បណ្តុះបណ្តាល បញ្ជូន និងគ្រប់គ្រងពលករ-ពលការិនីខ្មែរទៅធ្វើការនៅព្រះរាជាណាចក្រថៃឡង់ដ៏។</p>
                        </div>
                        <p style="margin-left:55px;">សេចក្តីដូចមានចែងក្នុងកម្មវត្ថុខាងលើ និងយោងខាងលើ ខ្ញុំបាទមានកិតិ្តយស សូមគោរពជម្រាបជូន </p>
                        <p><span>ឯកឧត្តមរដ្ឋមន្ត្រី</span> មេត្តាជួយផ្តល់ទិដ្ឋាការជូនពលករ-ពលការិនីខ្មែរចំនួន <b style="font-weight: bold;"><?php echo $total = $totalCount['total'] ?></b> នាក់ ដែល ក្រុមហ៊ុនបានជ្រើសរើស បណ្តុះបណ្តាល ចុះកិច្ចសន្យាសេវារកការងារឱ្យធ្វើ និងកិច្ចសន្យាការងារ ដើម្បីបញ្ជូនឱ្យទៅធ្វើការងារនៅព្រះរាជាណាចក្រថៃឡង់ដ៏ ក្នុងពេលឆាប់ៗខាងមុខនេះ។ (សូមភ្ជាប់ជូនជាមួយនូវបញ្ជីរាយនាមលេខ <b style="font-weight: bold;"><?php echo $num_date['arm_num2'] ?> ARM</b> របស់ពលករ-ពលការិនីខ្មែរចំនួន ០២ច្បាប់ សម្រាប់ក្រសួងចុះហត្ថលេខាបញ្ជាក់)។</p>



                        <p style="margin: 0 55px; ">អាស្រ័យដូចបានជម្រាបជូនខាងលើ សូម <span>ឯកឧត្តមរដ្ឋមន្ត្រី</span> មេត្តាពិនិត្យ និងសម្រេចអនុញ្ញាត </p>
                        <p>ដោយក្តី អនុគ្រោះ។</p>



                        <p style="text-align: justify;margin: 0 55px;">សូម <span>ឯកឧត្តមរដ្ឋមន្ត្រី</span> មេត្តាទទួលនូវការគោរពដ៏ខ្ពង់ខ្ពស់អំពីខ្ញុំបាទ។</p>
                        <div class="top">
                            <p> </p>
                            <p style="margin: 55px 80px 100px 0;"><span>អគ្គនាយកក្រុមហ៊ុន</span></p>
                        </div>
                        <div class="top">

                            <div class="small-txt">

                            </div>

                            <p style="margin: 55px 110px 120px 0;"><span>សុខ ចំណាន</span></p>
                        </div>
                    </div>


                </section>
                <!-- /.content -->
            </div>
            <!-- /.box-body -->
        </div>
    </section>


</div>
<!-- /.content-wrapper -->