<script src="<?php echo base_url('assets/vendor_components/jquery/dist/jquery-3.6.0.js'); ?>"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> តារាងឈ្មោះក្រុមនៃពលករនីមួយៗ </span> &#921; Name List for Workers </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>

                            <label for="">From Date</label>
                            <input type="date" name="from_date" id="f_date" class="f_date">
                            <label for="">To Date</label>
                            <input type="date" name="to_date" id="">

                            <button class="btn">search</button>


                            <tr>
                                <?php $theads = array(
                                    '1' => 'ល.រ',
                                    '2' => 'ឈ្មោះ',
                                    '3' => 'Latin Name',
                                    '4' => 'ភេទ',
                                    '5' => 'ថ្ងៃខែឆ្នាំកំណើត',
                                    '6' => 'សាខា/តំណាង',
                                    '7' => 'ឈ្មោះរោងចក្រ',
                                    '8' => 'ថ្ងៃឡើងចុះឈ្មោះ',
                                    '9' => 'ប្រភេទប៉ាស្ព័រ',
                                    '10' => 'លេខកាត',
                                    '11' => 'លេខប៉ាស្ព័រ',
                                ) ?>
                                <?php foreach ($theads as $key => $thead) { ?>
                                    <th><span class="khmer_font"><?php echo $thead; ?><br /></span><?php echo $key; ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <?php foreach ($theads as $key => $thead) { ?>
                                    <th><span class="khmer_font"><?php echo $thead; ?><br /></span><?php echo $key; ?></th>
                                <?php } ?>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        // var f_date = $('.f_date').getdate();
        // var day = f_date.getMonth() + 1;
        $('.btn').click(function() {
            alert(1);
        });

    });
</script>