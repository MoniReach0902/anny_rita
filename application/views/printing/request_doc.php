<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> </span> &#921; ពាក្យសុំរបស់ក្រុមហ៊ុន </h3>
                <a href="<?php echo site_url('NameListPrint/add_r_form/' . $listId) ?>" style="float: right;"><button class="btn btn-info">Add Infomation</button></a>
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
                    <div class="content-box" style="margin-top: 220px;">
                        <div class="top">
                            <p>លេខ៖ <?php echo $num_date['r_arm_num'] ?> .ARM </p>
                            <p></p>
                        </div>
                        <div class="header">

                            <h5 style="margin-bottom: 25px;">
                                គោរពជូន <br>
                                លោកប្រធាន ប៉ុស្តិ៍ត្រួតពិនិត្យច្រកទ្វារព្រំដែនអន្ដរជាតិប៉ោយប៉ែត <br>
                            </h5>
                        </div>
                        <div class="content-center">
                            <p style="margin: 0 55px; width: 130px;">កម្មវត្តុ ៖</p>

                            <p style="text-align: justify;">សំណើសុំការអនុញ្ញាតជាគោលការណ៍ឱ្យពលករខ្មែរចំនួន <strong style="font-weight: bold;"><?php echo $totalCount['total']  ?>នាក់ <?php if (!empty($num_date['k_total'])) {
                                                                                                                                                                                            echo ' ( ' . $num_date['k_total'] . ' ) ';
                                                                                                                                                                                        } ?> </strong> ឱ្យធ្វើការក្នុងរោង <?php echo $company['e_name'] ?> នៃព្រះរាជាណាចក្រថៃឡង់ដ៍</p>
                        </div>

                        <div class="content-center">
                            <p style="margin: 0 55px; width: 100px; "> យោង ៖ </p>
                            <p style="text-align: justify;">ប្រកាសលេខៈ ០១៣ / ១៥ ក.ប ប្រ.ក ចុះថ្ងៃទី ១៣ ខែ មករា ឆ្នាំ ២០១៥ របស់ ក្រសួងការងារ និង បណ្តុះបណ្តាលវិជ្ជាជីវៈ</p>
                        </div>
                        <p style="margin-left:55px;">សេចក្តីដូចមានចែងក្នុងកម្មវត្ថុ និងយោងខាងលើ ខ្ញុំមានកិត្តិយសដ៍ខ្ពង់ខ្ពស់ សូមគោរពជម្រាបជូន </p>
                        <p><span>លោកប្រធាន ប៉ុស្តិ៍ត្រួតពិនិត្យច្រកទ្វារព្រំដែនអន្ដរជាតិប៉ោយប៉ែត</span> មេត្តាជ្រាបថាៈ នៅ <strong style="font-weight: bold;">ថ្ងៃទី <?php echo $num_date['r_date1'] ?> ខែ <?php echo $num_date['r_month1'] ?> ឆ្នាំ <?php echo $num_date['r_year1'] ?></strong> ប្រកាសក្រុមហ៊ុន យើងខ្ញុំត្រូវបញ្ជូនពលករចំនួន <strong style="font-weight: bold;"><?php echo $totalCount['total']  ?>នាក់ <?php if (!empty($num_date['k_total'])) {
                                                                                                                                                                                                                                                                                                                                                                                                                            echo '( ' . $num_date['k_total'] . ' )';
                                                                                                                                                                                                                                                                                                                                                                                                                        } ?> </strong> ទៅធ្វើការនៅ ព្រះរាជាណាចក្រថៃឡង់ដ៍ តាមច្រកទ្វារអន្តរជាតិព្រំដែនប៉ោយប៉ែត ។ សូមភ្ជាប់មកជាមួយនូវបញ្ជីរាយនាមពលករខ្មែរចំនួន ០១ ច្បាប់ ។</p>
                        <p style="margin-left:55px;">អាស្រ័យហេតុនេះសូម <span>លោកប្រធាន ប៉ុស្តិ៍ត្រួតពិនិត្យច្រកទ្វារព្រំដែនអន្ដរជាតិប៉ោយប៉ែត </span> </p>
                        <p>មេត្តាជ្រាប និង ជួយសម្រួលដោយក្តីអនុគ្រោះ ។</p>



                        <p style="text-align: justify;margin: 0 55px;">សូម <span>លោកប្រធាន ប៉ុស្តិ៍ត្រួតពិនិត្យច្រកទ្វារព្រំដែនអន្ដរជាតិប៉ោយប៉ែត </span> មេត្តាទទួលនូវការ </p>
                        <p>គោរពដ៏ខ្ពង់ខ្ពស់ អំពីខ្ញុំបាទ ។ </p>
                        <div class="top">
                            <p> </p>
                            <p style="margin: 55px 40px 20px 0;"><span>ធ្វើនៅរាជធានីភ្នំពេញ ថ្ងៃទី <?php echo $num_date['r_date2'] ?> ខែ <?php echo $num_date['r_month2'] ?> ឆ្នាំ <?php echo $num_date['r_year2'] ?> </span></p>
                        </div>
                        <div class="top">
                            <p> </p>
                            <p style="margin: 5px 180px 100px 0;"><span>អគ្គនាយកក្រុមហ៊ុន</span></p>
                        </div>
                        <div class="top">
                            <p></p>



                            <p style="margin: 55px 210px 120px 0;"><span>សុខ ចំណាន</span></p>
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