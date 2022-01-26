<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form method="post" action="<?php echo base_url('index.php/NameList/store') ?>">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">ឈ្មោះក្រុម<br /></span> Name List<span class="text-danger">&#9734;</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" placeholder="Name List" id="kdkdk" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label text-right"><span class="khmer_font">កំណត់ចំណាំ<br /></span>Note *</label>
                            <div class="col-sm-10">
                                <textarea name="note" class="form-control" id="kdkdk" placeholder=""></textarea>
                            </div>
                        </div>
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

                </div>
                <!-- /.row -->

                <div class="mx-auto">
                    <button type="submit" class="btn btn-info">Create Name List</button>
                </div>

            </form>

        </div>
        <!-- /.box-body -->
</div>
</section>
</div>
<!-- /.content-wrapper -->