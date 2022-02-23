<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font" style="font-family: 'Khmer OS System'"> BiO INTERVIEW</span> </h3>
                <!-- <h3 class="box-title"><span class="khmer_font"> </span> &#921; Prining Bio Interview </h3> -->
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
                                    <?php $user_id = $info->id;
                                    $image = $this->Model_NameList->getDocImage($user_id);
                                    ?>
                                    <div class="rotate">
                                        <div style="height: 50%;margin: 0;padding: 0; background-color: red;">
                                            <img src="<?php if (!empty($image['file_name'])) {
                                                            echo base_url('/images/worker_docs/' . $image['file_name']);
                                                        } ?>" alt="" style="width: 25.6cm;transform: rotate(90deg);height: 36cm;margin-left: 200px;float: left;border: 2px solid black;margin-top: -4cm;">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <br><br><br><br><br><br><br>
                            <div class="row">
                                <div class="col-12">
                                    <div class="box_layout" style="float: left;width: 50%;">
                                        <table>
                                            <tr><img src="<?php echo base_url('/images/1.png') ?>" alt="" style="width: 90%;"></tr>
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
                                                <?php $xdata = json_decode($info->xtra); ?>
                                                <td>
                                                    <p style="font-family: 'Khmer OS System';"><?php
                                                                                                echo $info->en_name; ?></p>
                                                </td>
                                            </tr>

                                        </table>
                                        <h1>INTERVIEWS-INFO</h1>
                                        <h3>Height : </h3>
                                        <h3>Language : </h3>
                                        <h3>Work experience : </h3>
                                        <table class="tbl-bottom">
                                            <tr>
                                                <td style="font-family: 'Khmer OS System';">តំណាងឈ្មោះ ៖ </td>
                                                <td style="font-family: 'Khmer OS System';"><?php $id = $info->affiliate;
                                                                                            $aff = $this->Model_NameList->getAff($id);
                                                                                            if (!empty($aff['name'])) {
                                                                                                echo $aff['name'];
                                                                                            } else {
                                                                                                echo "";
                                                                                            }
                                                                                            ?></td>
                                            </tr>
                                            <tr width="150px">
                                                <td style="font-family: 'Khmer OS System';">ទូរស័ព្ទលេខ : </td>
                                                <td>
                                                    <p style="font-size: 18px;">
                                                        Tel: (855)88 756 7777, (855)76 756 7777 <br>
                                                        (855)69 46 7777 ,
                                                        (+66)83 10 77770 <br>Facebook: Chamnan Sok
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Code No. : </td>
                                                <td><?php echo $key + 1 ?></td>
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