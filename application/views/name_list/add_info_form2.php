<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form method="post" action="<?php echo base_url('index.php/NameListPrint/storeForm2/'.$listId) ?>">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label text-right"><span class="khmer_font">លេខ​ ARM ៖<br /></span> ARM Number<span class="text-danger">&#9734;</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" value="<?php echo $vals['arm_num2'] ?>" type="text" name="arm_num" placeholder="ARM Number" id="kdkdk" value="">
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