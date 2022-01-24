<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form method="post" action="<?php echo base_url('index.php/NameListPrint/storeForm1/' . $listId) ?>">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">លេខ​ ARM ៖<br /></span> ARM Number<span class="text-danger">&#9734;</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" value="<?php echo $vals['arm_num'] ?>" type="text" name="arm_num" placeholder="ARM Number" id="kdkdk" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ថ្ងៃទី​​​ ៖ <br /></span> Date <span class="text-danger">&#9734;</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" value="<?php echo $vals['day'] ?>" type="text" name="date" placeholder="Name List" id="kdkdk" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label text-right"><span class="khmer_font"> ខែ ៖​ <br /></span> Month <span class="text-danger">&#9734;</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" value="<?php echo $vals['month'] ?>" type="text" name="month" placeholder="Name List" id="kdkdk" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឆ្នាំ ៖ <br /></span> Year<span class="text-danger">&#9734;</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" value="<?php echo $vals['year'] ?>" type="text" name="year" placeholder="Name List" id="kdkdk" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះក្រុមហ៊ុន<br /></span> Company Name <span class="text-danger">&#9734;</span></label>
                            <div class="col-sm-10">
                                <select name="company_name" id="" class="form-control">
                                    <option value="<?php echo $vals['company_name'] ?>"><?php if (!empty($company['e_name'])) {
                                                                                            echo $company['e_name'];
                                                                                        } ?></option>
                                    <?php foreach ($company as $name) {
                                    ?>
                                        <option value="<?php echo $name->id ?>"><?php echo $name->e_name ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
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