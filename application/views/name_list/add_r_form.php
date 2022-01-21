<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form method="post" action="<?php echo base_url('index.php/NameListPrint/store_r_form/' . $listId) ?>">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">

                        <div class="input-group mb-3">
                            <span class="input-group-text">លេខ ARm *</span>
                            <input type="text" class="form-control" placeholder="លេខ​ ៖" aria-label="Username" name="arm_num">

                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">កាលបរិច្ឆេទ បញ្ជូនពលករ​*</span>
                            <input type="text" class="form-control" placeholder="ថ្ងៃទី" aria-label="Username" name="date1">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" placeholder="ខែ" aria-label="Server" name="month1">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" placeholder="ឆ្នាំ" aria-label="Server" name="year1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">កាលបរិច្ឆេទ ធ្វើឯកសារ*</span>
                            <input type="text" class="form-control" placeholder="ថ្ងៃទី" aria-label="Username" name="date2">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" placeholder="ខែ" aria-label="Server" name="month2">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control" placeholder="ឆ្នាំ" aria-label="Server" name="year2">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">ចំនួនពលករ *</span>
                            <input type="text" class="form-control" placeholder="ចំនួនពលករ" aria-label="Username" name="people">

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