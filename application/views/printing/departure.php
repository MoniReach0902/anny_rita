<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url('public/css/print_layout.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('public/css/all.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('public/css/fontawesome.min.css') ?>">
<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font" style="font-family: 'Khmer OS System'"> Departure Card</span> </h3>
                <!-- <h3 class="box-title"><span class="khmer_font"> </span> &#921; </h3> -->

                <!-- /.box-header -->
                <div class="box-body">
                    <!-- this row will not appear when printing -->
                    <div class=" row no-print">
                        <div class="col-12">
                            <button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                        </div>
                    </div>
                    <?php foreach ($userDoc as $user) {
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
                            <div class="area" style="width: 100%; height: 100%; margin: 0;padding: 0; position: relative;">
                                <img src="<?php echo base_url('images/dp.png') ?>" alt="" style="height: 1172px;margin-left: 10px;border: 2px solid black;margin-top: 10px;position: relative;visibility: hidden;">
                                <p style="position: absolute;color: black;margin-left: -25px;margin-top: -230px;font-size: 22px;transform: rotate(-90deg);width: 200px; background: none;"><?php echo $user->e_fname ?></p>
                                <p style="position: absolute;color: black;margin-left: 10px;margin-top: -250px;font-size: 22px;transform: rotate(-90deg);width: 200px; background: none;"><?php echo $user->e_lname ?></p>
                                <p style="position: absolute;color: black;margin-left: 140px;margin-top: -170px;font-size: 20px;transform: rotate(-90deg);letter-spacing: 4px;"><?php echo date('d', strtotime($user->dob)) ?></p>
                                <p style="position: absolute;color: black;margin-left: 140px;margin-top: -220px;font-size: 20px;transform: rotate(-90deg);letter-spacing: 4px;"><?php echo date('m', strtotime($user->dob)) ?></p>
                                <p style="position: absolute;color: black;margin-left: 125px;margin-top: -300px;font-size: 20px;transform: rotate(-90deg);letter-spacing: 4px;"><?php echo date('Y', strtotime($user->dob)) ?></p>
                                <p style="position: absolute;color: black;margin-left: 135px;margin-top: -510px;font-size: 20px;transform: rotate(-90deg);letter-spacing: 4px;"><?php echo date('d', strtotime($user->dob)) ?></p>
                                <p style="position: absolute;color: black;margin-left: 135px;margin-top: -555px;font-size: 20px;transform: rotate(-90deg);letter-spacing: 4px;"><?php echo date('m', strtotime($user->dob)) ?></p>
                                <p style="position: absolute;color: black;margin-left: 120px;margin-top: -630px;font-size: 20px;transform: rotate(-90deg);letter-spacing: 4px;"><?php echo date('Y', strtotime($user->dob)) ?></p>
                                <p style="position: absolute;color: black;margin-left: 90px;margin-top: -240px;font-size: 20px;transform: rotate(-90deg);width: 200px; background: none;"><?php echo $user->number ?></p>
                                <p style="position: absolute;color: black;margin-left: 165px;margin-top: -160px;font-size: 20px;transform: rotate(-90deg);">Cambodia</p>
                                <p style="position: absolute;color: black;margin-left: 240px;margin-top: -230px;font-size: 20px;transform: rotate(-90deg);">Car</p>
                                <p style="position: absolute;color: black;margin-left: 140px;margin-top: -240px;font-size: 20px;transform: rotate(-90deg);width: 300px;background: none;"><?php echo $user->e_fname . ' ' . $user->e_lname  ?></p>
                                <p style="position: absolute;color: black;margin-left: -30px;margin-top: -680px;font-size: 20px;transform: rotate(-90Deg);width: 200px; background: none;"><?php echo $user->e_fname ?> </p>
                                <p style="position: absolute;color: black;margin-left: -30px;margin-top: -860px;font-size: 20px;transform: rotate(-90deg);width: 200px;background: none;"><?php echo $user->e_lname ?> </p>
                                <p style="position: absolute;color: black;margin-left: 55px;margin-top: -780px;font-size: 17px;transform: rotate(-90deg);">CAMBODIAN </p>
                                <p style="position: absolute;color: black;margin-left: 125px;margin-top: -860px;font-size: 20px;transform: rotate(-90deg);">CAR </p>
                                <p style="position: absolute;color: black;margin-left: 130px;margin-top: -850px;font-size: 17px;transform: rotate(-90deg);">CAMBODIAN </p>
                                <p style="position: absolute;color: black;margin-left: 140px;margin-top: -550px;font-size: 18px;transform: rotate(-90deg);">WORKERS </p>
                                <p style="position: absolute;color: black;margin-left: 190px;margin-top: -600px;font-size: 18px;transform: rotate(-90deg);">WORK </p>
                                <p style="position: absolute;color: black;margin-left: 185px;margin-top: -810px;font-size: 17px;transform: rotate(-90deg);">2 YEARS </p>
                                <p style="position: absolute;color: black;margin-left: 110px;margin-top: -600px;font-size: 12px;transform: rotate(-90deg);width: 300px;background: none;"><?php if (!empty($company['e_name'])) {
                                                                                                                                                                                                echo $company['e_name'];
                                                                                                                                                                                            } ?> </p>
                                <p style="position: absolute;color: black;margin-left: -10px;margin-top: -740px;font-size: 10px;transform: rotate(-90deg);width: 600px;"><?php if (!empty($company['add1'])) {
                                                                                                                                                                                echo $company['add1'];
                                                                                                                                                                            } ?> </p>
                                <p style="position: absolute;color: black;margin-left: 285px;margin-top: -520px;font-size: 12px;transform: rotate(-90deg);"><?php if (!empty($company['mobile'])) {
                                                                                                                                                                echo $company['mobile'];
                                                                                                                                                            } ?> </p>
                                <!-- <p style="position: absolute;color: black;margin-left: 285px;margin-top: -520px;font-size: 12px;transform: rotate(-90deg);">+8550000000 </p> -->
                                <p style="position: absolute;color: black;margin-left: 255px;margin-top: -690px;font-size: 20px;transform: rotate(-90deg);width: 200px; background: none;"> <?php echo $user->e_fname . ' ' . $user->e_lname  ?></p>
                                <p style="position: absolute;color: black;margin-left: 9px;margin-top: -1110px;font-size: 20px;transform: rotate(-90deg);width: 200px; background: none;"><?php echo $user->number ?> </p>
                                <p style="position: absolute;color: black;margin-left: 97px;margin-top: -540px;font-size: 20px;transform: rotate(-90deg);"><?php if ($user->gender == 'Male') {
                                                                                                                                                                echo '<i class="fas fa-check"></i>';
                                                                                                                                                            } ?> </p>
                                <p style="position: absolute;color: black;margin-left: 97px;margin-top: -645px;font-size: 20px;transform: rotate(-90deg);"> <?php if ($user->gender == 'Female') {
                                                                                                                                                                echo '<i class="fas fa-check"></i>';
                                                                                                                                                            } ?> </p>
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