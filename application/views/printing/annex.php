<style>
    span {
        font-family: 'Khmer OS Muol Light';
        font-size: 21px;
        text-decoration-style: dotted;

    }
</style>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> </span> &#921;</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class=" row no-print">
                    <div class="col-12">
                        <button id="print" class="btn btn-rounded btn-primary pull-right" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                    </div>
                </div>
                <section class="invoice printableArea">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="area_side" style="position: relative;">
                                <img src="<?php echo base_url('images/c1.png') ?>" alt="" width="100%">
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 40px;margin-top:-1371px;margin-left: 110px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php
                                                                                                                                            $emp = $this->Model_NameList->getEmp($worker['id']);
                                                                                                                                            if (!empty($emp['employer_id'])) {
                                                                                                                                                $emp_id = $emp['employer_id'];
                                                                                                                                                // echo $emp_id;
                                                                                                                                                $company = $this->Model_NameList->getEmpList($emp_id);
                                                                                                                                                if (!empty($company['e_name'])) {
                                                                                                                                                    echo $company['e_name'];
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                            ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 80px;margin-top:-1344px;margin-left: 110px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php
                                                                                                                                            $emp = $this->Model_NameList->getEmp($worker['id']);
                                                                                                                                            if (!empty($emp['employer_id'])) {
                                                                                                                                                $emp_id = $emp['employer_id'];
                                                                                                                                                // echo $emp_id;
                                                                                                                                                $company = $this->Model_NameList->getEmpList($emp_id);
                                                                                                                                                if (!empty($company['add1'])) {
                                                                                                                                                    echo $company['add1'];
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                            ?> </p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 40px;margin-top:-1258px;margin-left: 110px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php if (!empty($worker['k_fname'])) {
                                                                                                                                                echo $worker['k_fname'] . ' ' . $worker['k_lname'];
                                                                                                                                            } ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 40px;margin-top:-1258px;margin-left: 320px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php $gender = $worker['gender'];
                                                                                                                                            if ($gender == 'Male') {
                                                                                                                                                echo 'ប្រុស';
                                                                                                                                            } else {
                                                                                                                                                echo 'ស្រី';
                                                                                                                                            } ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 40px;margin-top:-1258px;margin-left: 423px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php if (!empty($worker['dob'])) {
                                                                                                                                                echo date('Y') - date('Y', strtotime($worker['dob']));
                                                                                                                                            } ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 40px;margin-top:-1230px;margin-left: 113px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php $village = $this->Model_Gazeetteer->village_name($worker['cur_add_village']);
                                                                                                                                            if (!empty($village['name'])) {
                                                                                                                                                echo $village['name'] . ', ';
                                                                                                                                            } ?>
                                        <?php $c_commune = $this->Model_Gazeetteer->commune_name($worker['cur_add_commune']);
                                        if (!empty($c_commune['name'])) {
                                            echo $c_commune['name'] . ', ';
                                        } ?>
                                        <?php $c_district = $this->Model_Gazeetteer->district_name($worker['cur_add_district']);
                                        if (!empty($c_district['name'])) {
                                            echo $c_district['name'] . ', ';
                                        } ?>
                                        <?php $c_province = $this->Model_Gazeetteer->province_name($worker['cur_add_province']);
                                        if (!empty($c_province['name'])) {
                                            echo $c_province['name'];
                                        } ?>

                                    </p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 40px;margin-top:-971px;margin-left: 110px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php
                                                                                                                                            $emp = $this->Model_NameList->getEmp($worker['id']);
                                                                                                                                            if (!empty($emp['employer_id'])) {
                                                                                                                                                $emp_id = $emp['employer_id'];
                                                                                                                                                // echo $emp_id;
                                                                                                                                                $company = $this->Model_NameList->getEmpList($emp_id);
                                                                                                                                                if (!empty($company['e_name'])) {
                                                                                                                                                    echo $company['e_name'];
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                            ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 80px;margin-top:-946px;margin-left: 115px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php
                                                                                                                                            $emp = $this->Model_NameList->getEmp($worker['id']);
                                                                                                                                            if (!empty($emp['employer_id'])) {
                                                                                                                                                $emp_id = $emp['employer_id'];
                                                                                                                                                // echo $emp_id;
                                                                                                                                                $company = $this->Model_NameList->getEmpList($emp_id);
                                                                                                                                                if (!empty($company['add1'])) {
                                                                                                                                                    echo $company['add1'];
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                            ?> </p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 40px;margin-top:-1364px;margin-left: 675px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php
                                                                                                                                            $emp = $this->Model_NameList->getEmp($worker['id']);
                                                                                                                                            if (!empty($emp['employer_id'])) {
                                                                                                                                                $emp_id = $emp['employer_id'];
                                                                                                                                                // echo $emp_id;
                                                                                                                                                $company = $this->Model_NameList->getEmpList($emp_id);
                                                                                                                                                if (!empty($company['e_name'])) {
                                                                                                                                                    echo $company['e_name'];
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                            ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 80px;margin-top:-1336px;margin-left: 675px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php
                                                                                                                                            $emp = $this->Model_NameList->getEmp($worker['id']);
                                                                                                                                            if (!empty($emp['employer_id'])) {
                                                                                                                                                $emp_id = $emp['employer_id'];
                                                                                                                                                // echo $emp_id;
                                                                                                                                                $company = $this->Model_NameList->getEmpList($emp_id);
                                                                                                                                                if (!empty($company['add1'])) {
                                                                                                                                                    echo $company['add1'];
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                            ?> </p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 40px;margin-top:-1250px;margin-left: 680px;">
                                    <p style="ffont-family: 'Khmer OS system';ont-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php if (!empty($worker['e_fname'])) {
                                                                                                                                                echo $worker['e_fname'] . ' ' . $worker['e_lname'];
                                                                                                                                            } ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 80px;height: 40px;margin-top:-1250px;margin-left: 840px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php $gender = $worker['gender'];
                                                                                                                                            if ($gender == 'Male') {
                                                                                                                                                echo 'M';
                                                                                                                                            } else {
                                                                                                                                                echo 'F';
                                                                                                                                            } ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 80px;height: 40px;margin-top:-1250px;margin-left: 930px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php if (!empty($worker['dob'])) {
                                                                                                                                                echo date('Y') - date('Y', strtotime($worker['dob']));
                                                                                                                                            } ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 40px;margin-top:-1220px;margin-left: 680px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php $c_province = $this->Model_Gazeetteer->province_name($worker['cur_add_province']);
                                                                                                                                            if (!empty($c_province['en_name'])) {
                                                                                                                                                echo $c_province['en_name'];
                                                                                                                                            } ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 40px;margin-top:-913px;margin-left: 650px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php
                                                                                                                                            $emp = $this->Model_NameList->getEmp($worker['id']);
                                                                                                                                            if (!empty($emp['employer_id'])) {
                                                                                                                                                $emp_id = $emp['employer_id'];
                                                                                                                                                // echo $emp_id;
                                                                                                                                                $company = $this->Model_NameList->getEmpList($emp_id);
                                                                                                                                                if (!empty($company['e_name'])) {
                                                                                                                                                    echo $company['e_name'];
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                            ?></p>
                                </div>
                                <div class="box_side" style=" z-index: 15;position: absolute;text-align: left; width: 360px;height: 80px;margin-top:-885px;margin-left: 640px;">
                                    <p style="font-family: 'Khmer OS system';font-size: 15px;  z-index: 10 ;text-align: left;color: black;"><?php
                                                                                                                                            $emp = $this->Model_NameList->getEmp($worker['id']);
                                                                                                                                            if (!empty($emp['employer_id'])) {
                                                                                                                                                $emp_id = $emp['employer_id'];
                                                                                                                                                // echo $emp_id;
                                                                                                                                                $company = $this->Model_NameList->getEmpList($emp_id);
                                                                                                                                                if (!empty($company['add1'])) {
                                                                                                                                                    echo $company['add1'];
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                            ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="position: relative;">
                            <img src="<?php echo base_url('images/c2.png') ?>" alt="" width="100%">
                            <p style="font-size: 17px;  z-index: 10 ;text-align: left;color: black;font-family: 'Khmer OS system';margin-top: -476px;margin-left: 160px;position: absolute;"><?php if (!empty($worker['e_fname'])) {
                                                                                                                                                                                                    echo $worker['e_fname'] . ' ' . $worker['e_lname'];
                                                                                                                                                                                                } ?></p><br>
                            <p style="font-size: 17px;  z-index: 12 ;text-align: left;color: black;font-family: 'Khmer OS system';margin-top: -430px;margin-left: 230px;position: absolute;"><?php if (!empty($worker['k_fname'])) {
                                                                                                                                                                                                    echo $worker['k_fname'] . ' ' . $worker['k_lname'];
                                                                                                                                                                                                } ?></p>


                        </div>

                    </div>



                </section>
                <!-- /.content -->
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>