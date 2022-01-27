<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form method="post" action="<?php echo base_url('index.php/NameListPrint/store_c_form/' . $listId) ?>">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">

                        <div class="input-group mb-3">
                            <span class="input-group-text">លេខ ARm *</span>
                            <input type="text" class="form-control" value="<?php echo $vals['c_arm_num'] ?>" placeholder="លេខ​ ៖" aria-label="Username" name="c_arm_num">

                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">កាលបរិច្ឆេទ បញ្ជូនពលករ*</span>
                            <input type="text" class="form-control" value="<?php echo $vals['r_date1'] ?>" placeholder="ថ្ងៃទី" aria-label="Username" name="date1">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" value="<?php echo $vals['r_month1'] ?>" placeholder="ខែ" aria-label="Server" name="month1">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" value="<?php echo $vals['r_year1'] ?>" placeholder="ឆ្នាំ" aria-label="Server" name="year1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">កាលបរិច្ឆេទ ធ្វើឯកសារ*</span>
                            <input type="text" class="form-control" value="<?php echo $vals['r_date2'] ?>" placeholder="ថ្ងៃទី" aria-label="Username" name="date2">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" value="<?php echo $vals['r_month2'] ?>" placeholder="ខែ" aria-label="Server" name="month2">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" value="<?php echo $vals['r_year2'] ?>" placeholder="ឆ្នាំ" aria-label="Server" name="year2">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">ចំនួនពលករ *</span>
                            <input type="text" class="form-control" value="<?php echo $vals['k_total'] ?>" placeholder="ចំនួនពលករ" aria-label="Username" name="people">

                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">ចំនួនពលករ ជាអក្សរខ្មែរ *</span>
                            <input type="text" class="form-control" value="<?php echo $vals['ct_arm_num'] ?>" placeholder="លេខ​ ៖" aria-label="Username" name="ct_arm_num">

                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Thai Date *</span>
                            <input type="text" class="form-control" value="<?php echo $vals['ct_date1'] ?>" placeholder="ថ្ងៃទី" aria-label="Username" name="ct_date1">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" value="<?php echo $vals['ct_month1'] ?>" placeholder="ខែ" aria-label="Server" name="ct_month1">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" value="<?php echo $vals['ct_year1'] ?>" placeholder="ឆ្នាំ" aria-label="Server" name="ct_year1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Thai Date*</span>
                            <input type="text" class="form-control" value="<?php echo $vals['ct_date2'] ?>" placeholder="ថ្ងៃទី" aria-label="Username" name="ct_date2">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" value="<?php echo $vals['ct_month2'] ?>" placeholder="ខែ" aria-label="Server" name="ct_month2">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" value="<?php echo $vals['ct_year2'] ?>" placeholder="ឆ្នាំ" aria-label="Server" name="ct_year2">
                        </div>
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-info" style="float: right;">Save</button>
                        </div>
                    </div>


                </div>
                <!-- /.row -->



            </form>

        </div>
        <!-- /.box-body -->
</div>
</section>
</div>
<!-- /.content-wrapper -->