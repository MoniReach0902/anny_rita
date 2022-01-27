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
                    <div class="content-box">
                        <div class="top">
                            <p>លេខ៖ <?php echo $num_date['arm_num'] ?> ARM </p>
                            <p>រាជធានីភ្នំពេញ ថ្ងៃទី<?php echo $num_date['day'] ?> ខែ<?php echo $num_date['month'] ?> ឆ្នាំ<?php echo $num_date['year'] ?></p>
                        </div>
                        <div class="header">

                            <h5>
                                អគ្គនាយកក្រុមហ៊ុន អាន់នី រីតា បេស មេនផៅវ័រ <br>
                                សូមគោរពជូន <br>
                                ឯកឧត្តមប្រតិភូរាជរដ្ឋាភិបាលទទួលបន្ទុកជា <br>
                                អគ្គនាយក នៃអគ្គនាយកដ្ឋានការងារ <br>

                            </h5>
                        </div>
                        <div class="content-center">
                            <p style="margin: 0 55px; width: 120px;">កម្មវត្តុ ៖</p>
                            <?php $female = $totalFemale['total'] ?>
                            <p style="text-align: justify;">សំណើសុំការឯកភាពបញ្ជូនឈ្មោះពលករខ្មែរចំនួន <b style="font-weight: bold;"><?php echo $total = $totalCount['total'] ?></b> នាក់ (ប្រុស <b style="font-weight: bold;"><?php echo $male = $total - $female ?></b> នាក់ <b style="font-weight: bold;"><?php echo $female ?></b> នាក់) ដើម្បីធ្វើប័ណ្ណការងារនៅ ព្រះរាជាណាចក្រថៃឡង់ដ៏</p>
                        </div>

                        <div class="content-center">
                            <p style="margin: 0 55px; width: 240px; "> យោង ៖ </p>
                            <p style="text-align: justify;">ប្រកាសលេខ ១២៦/២០ ក.ប/ប្រ.ក ចុះថៃ្ងទី៣០ ខែមីនា ឆ្នាំ២០២២ របស់ក្រសួងការងារ និងបណ្តុះបណ្តាលវិជ្ជាជីវៈ ស្តីពីការអនុញ្ញាតឱ្យក្រុមហ៊ុន អាន់នី រីតា បេស មេនផៅវ័រ ធ្វើការជ្រើសរើស បណ្តុះបណ្តាល បញ្ជូន និងគ្រប់គ្រងពលករខ្មែរទៅធ្វើការនៅ ព្រះរាជាណាចក្រថៃឡង់ដ៏</p>
                        </div>
                        <p style="margin-left:55px;">សេចក្តីដូចមានចែងក្នុងកម្មវត្ថុ និងយោងខាងលើ ខ្ញុំមានកិត្តិយសដ៏ខ្ពង់ខ្ពស់ សូមគោរពជម្រាបជូន </p>
                        <p><span>ឯកឧត្តមប្រតិភូរាជរដ្ឋាភិបាល</span> មេត្តាជ្រាបថា <span>ក្រុមហ៊ុន អាន់នី រីតា បេស មេនផៅវ័រ</span> បានជ្រើសរើសពលករខ្មែរចំនួន <b style="font-weight: bold;"><?php echo $total ?> នាក់</b> ដូចមានបញ្ជីរាយនាមភ្ជាប់ជូនទៅធ្វើការងារនៅព្រះរាជាណាចក្រថៃឡង់ដ៏ដោយឆ្លងកាត់ តាមរយៈក្រសួងការងារ និងបណ្តុះបណ្តាលវិជ្ជាជីវៈ។</p>
                        <p style="margin-left:55px;">អាស្រ័យដូចបានគោរពជម្រាបជូនខាងលើ ខ្ញុំមានកិត្តិយសសុំការអនុញ្ញាត <span>ឯកឧត្តមប្រតិភូរាជ</span> </p>
                        <p><span>រដ្ឋាភិបាល </span>មេត្តាពិនិត្យ និង អនុញ្ញាតឱ្យ ក្រុមហ៊ុន <span>អាន់នី រីតា បេស មេនផៅវ័រ</span> បានបញ្ជូនឈ្មោះពលករខ្មែរទាំង <b style="font-weight: bold;"><?php echo $total ?> នាក់</b> ទៅធ្វើប័ណ្ណការងារនៅព្រះរាជាណាចក្រថៃឡង់ដ៏ ដើម្បីបម្រើការងារនៅក្រុមហ៊ុនដូចខាងក្រោម៖</p>
                        <div class="content-center">
                            <?php
                                
                            ?>
                            <p style="margin: 0 55px; width: 110px;">ក្រុមហ៊ុន ៖</p>
                            <p style="text-align: justify; font-weight: bold;font-family: 'Times New Roman', Times, serif;font-size: 25px;"><?php if (empty($companyName['e_name'])) {
                                                                echo 0;
                                                            } else {
                                                                echo $companyName['e_name'].' (ផ្នែក  '.$companyName['name'].')';
                                                            } ?></p>
                        </div>

                        <div class="content-center">
                            <p style="margin: 0 55px; width: 160px; "> អាសយដ្ឋាន ៖ </p>
                            <p style="text-align: justify; width: 650px;font-family: 'Times New Roman', Times, serif;font-weight: bold;font-size: 24px;"><?php if (empty($companyName['add1'])) {
                                                                                echo 0;
                                                                            } else {
                                                                                echo $companyName['add1'];
                                                                            } ?></p>
                        </div>
                        <p style="text-align: justify;margin: 0 55px;">សូម <span>ឯកឧត្តមប្រតិភូរាជរដ្ឋាភិបាល</span> មេត្តាទទួលនូវសេក្តីគោរពដ៏ខ្ពង់ខ្ពស់អំពីខ្ញុំ៕</p>
                        <div class="top">
                            <p> </p>
                            <p style="margin: 55px 80px 100px 0;"><span>អគ្គនាយកក្រុមហ៊ុន</span></p>
                        </div>
                        <div class="top">

                            <div class="small-txt">
                                <p><u>សូមជូនភ្ជាប់មកជាមួយនូវ៖</u></p>
                                <p>បញ្ជីរាយនាមពលករខ្មែរដែលត្រូវធ្វើប័ណ្ណការងារនៅ<br>
                                    ព្រះរាជាណាចក្រថៃឡង់ដ៏</p>
                            </div>

                            <p style="margin: 55px 110px 120px 0;"><span>សុខ ចំណាន</span></p>
                        </div>
                    </div>

                    <!-- this row will not appear when printing -->
                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.box-body -->
        </div>
    </section>


</div>
<!-- /.content-wrapper -->