<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> </span> &#921; ពាក្យសុំរបស់ក្រុមហ៊ុន </h3>
                <a href="<?php echo site_url('NameListPrint/add_c_form/' . $listId) ?>" style="float: right;"><button class="btn btn-info">Add Infomation</button></a>
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
                            <p>លេខ៖ <?php echo $vals['c_arm_num'] ?> .ARM </p>
                            <p></p>
                        </div>
                        <div class="header">

                            <h5 style="margin-bottom: 25px;">
                                គោរពជូន <br>
                                លោកប្រធានគណៈកម្មការក្រុមហ៊ុន/រោងចក្រ <br>
                            </h5>
                        </div>
                        <div class="content-center">
                            <p style="margin: 0 55px; width: 100px;">កម្មវត្តុ ៖</p>

                            <p style="text-align: justify; margin-left: 80px;">សំណើសុំការអនុញ្ញាតជាគោលការណ៍ ទទួលយកពលករខ្មែរឱ្យចូលធ្វើការងារ </p>
                        </div>

                        <div class="content-center">
                            <p style="margin: 0 55px; width: 100px; "> យោង ៖ </p>
                            <p style="text-align: justify; margin-left: 75px;">- លិខិតតម្រូវការពលករ <b style="font-weight: bold;">(Demand Letter)</b></p>

                        </div>
                        <p style="text-align: justify; margin-left: 285px;">- លិខិតតម្រូវការពលករ <b style="font-weight: bold;">(Demand Letter)</b></p>
                        <p style="text-align: justify; margin-left: 285px;">- លិខិតតម្រូវការពលករ <b style="font-weight: bold;">(Demand Letter)</b></p>
                        <div class="content-center">
                            <p style="margin: 0 40 0 0; width: 295px; margin-left: 45px;"> ភ្ជាប់មកជាមួយនូវ៖</p>
                            <p style=" ">បញ្ជីឈ្មោះ ពលករ-ពលការិនីខ្មែររបស់រោងចក្រ <b style="font-weight: bold;"><?php echo $company['e_name'] ?> </b> ចំនួន <strong style="font-weight: bold;"><?php echo $totalCount['total'] ?> នាក់ <?php echo ' ( ' . $vals['k_total'] . ' ) '; ?></strong></p>

                        </div>

                        <p style="margin-left:55px;">សេចក្តីដូចមានចែងក្នុងកម្មវត្ថុ និងយោងតាម លិខិតតម្រូវការពលករ <b style="font-weight: bold;">(Demand Letter)</b> របស់ក្រុមហ៊ុន / </p>
                        <p>រោងចក្រ <b style="font-weight: bold;"><?php echo $company['e_name'] ?> </b>មានខ្លឹមសារសំខាន់ ដែលបានស្នើសុំឱ្យក្រុមហ៊ុន <strong style="font-weight: bold;">អាន់នី រីតា បេស មេនផៅវ័រ (ANNY RITA BEST MANPOWER CO., LTD)</strong> ធ្វើការជ្រើសរើស និងរៀបចំបញ្ជូន ពលករ-ពលការិនីខ្មែរ ដើម្បីចូលបម្រើការងាររយៈពេល២ឆ្នាំ ។ ។</p>



                        <p style="text-align: justify;margin: 0 55px;"><b style="font-weight: bold;">ក្រុមហ៊ុន អាន់នី រីតា បេស មេនផៅវ័រ (ANNY RITA BEST MANPOWER CO.,LTD)</b> មានកិត្តិយស </p>
                        <p>សូមជម្រាបជូនថាៈ នៅថ្ងៃទី<b style="font-weight: bold;"> <?php echo $vals['r_date1'] ?> ខែ<?php echo $vals['r_month1'] ?> ឆ្នាំ <?php echo $vals['r_year1'] ?></b> ក្រុមហ៊ុនយើងខ្ញុំបានបញ្ជូន ពលករ-ពលការិនីខ្មែរចំនួន <strong style="font-weight: bold;"><?php echo $totalCount['total'] ?> នាក់ <?php echo ' ( ' . $vals['k_total'] . ' ) '; ?></strong> ដើម្បីចូលបម្រើការងារនៅក្នុង ក្រុមហ៊ុន/រោងចក្រ
                            <b style="font-weight: bold;"><?php echo $company['e_name'] ?> </b>
                        </p>
                        <p style="text-align: justify;margin: 0 55px;">អាស្រ័យហេតុនេះសូមលោកប្រធានគណៈកម្មការក្រុមហ៊ុន/រោងចក្រ មេត្តាជួយសម្រួល </p>
                        <p>និង ចុះហត្ថលេខាដើម្បី បញ្ជាក់នូវការទទួលបានយកពលកររបស់ក្រុមហ៊ុនយើងខ្ញុំ ដោយក្តីអនុគ្រោះ ។
                        </p>
                        <p style="text-align: justify;margin: 0 55px;">សូម លោកប្រធានគណៈកម្មការក្រុមហ៊ុន/រោងចក្រ មេត្តាទទួលនូវការរាប់អានដ៏ខ្ពង់ខ្ពស់អំពី</p>
                        <p>យើងខ្ញុំ ។</p>

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
                    <div class="content-box" style="margin-top: 160px;">
                        <div class="top" style="margin-bottom: 40px;">
                            <p>เลขที่…0294/20…ARM</p>
                            <p>วันที่ 16 มีนาคม 2020</p>
                        </div>

                        <div class="content-center">
                            <p style="margin: 0 55px; width: 100px;">เรื่อง </p>

                            <p style="text-align: justify; margin-left: 80px;">ขออนุญาตให้แรงงานกัมพูชาเข้าไปทำงานโดยถูกต้องตามกฎหมายในระบบ MOU </p>
                        </div>

                        <div class="content-center">
                            <p style="margin: 0 55px; width: 100px; "> เรียน </p>
                            <p style="text-align: justify; margin-left: 75px;">กรรมการผู้จัดการ</p>

                        </div>
                        <div class="content-center">
                            <p style="margin: 0 55px; width: 100px; "> อ้างถึง </p>
                            <p style="text-align: justify; margin-left: 75px;">- หนังสือแสดงความต้องการแรงงาน (Demand Letter)</p>

                        </div>
                        <p style="text-align: justify; margin-left: 285px;">- หนังสือแต่งตั้ง (Power of Attorney)</p>
                        <p style="text-align: justify; margin-left: 285px;">- สัญญาจ้างแรงงาน (Labor Contract)</p>
                        <p>สิ่งที่ส่งมาด้วย บัญชีรายชื่อแรงงานกัมพูชา ของบริษัท THAI FOODS SWINE INTERNATIONAL CO.,LTD. จำนวน 17 คน</p>
                        <div class="content-center">
                            <p style="margin: 0 55 0 0; width: 205px; margin-left: 55px;"> </p>
                            <p style="text-align: justify; ">จากการที่บริษัทของท่านได้ทำ หนังสือความต้องการแรงงาน (Demand Letter)</p>

                        </div>
                        <p>ผ่านกรมจัดหางานของไทย และกระทรวงแรงงานของกัมพูชา ของบริษัท THAI FOODS SWINE INTERNATIONAL CO.,LTD. โดยมีเนื้อหาให้ บริษัท ANNY RITA BEST MANPOWER CO., LTD. จัดหาแรงงาน ตามกฎหมาย MOU ซึ่งแรงงานสามารถทำงานในประเทศไทย ด้วยมีอายุการทำงาน 2 ปี นั้น</p>

                        <p style="margin-left:55px;">บริษัท ANNY RITA BEST MANPOWER CO., LTD จึงมีการจัดส่งแรงงานสัญชาติ กัมพูชาให้เข้าไปทำงาน</p>
                        <p>ที่ บริษัท THAI FOODS SWINE INTERNATIONAL CO.,LTD. ในวันที่ 17 มีนาคม 2020 จำนวน 17 คน และเมื่อแรงงานเดินทางเข้าถึงบริษัทของท่านแล้ว ทางกระผม ขอให้ท่านยืนยันว่าแรงงานดังกล่าวนั้นได้เข้าทำงานในบริษัทของท่านเป็นที่เรียบร้อยแล้ว</p>




                        <p style="text-align: justify;margin: 0 55px;">จึงเรียนมาเพื่อโปรดพิจารณา </p>


                        <div class="top">
                            <p> </p>
                            <p style="margin: 5px 180px 100px 0;"><span>ขอแสดงความนับถือ</span></p>
                        </div>
                        <div class="top">
                            <p></p>



                            <p style="margin: 55px 160px 220px 50px; margin-left: 50px;"><span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mr. CHAMNAN SOK <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กรรมการผู้จัดการ
                                </span></p>
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