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
                            From date <input type="date" name="from_date" id="from_date"> To date <input type="date" name="to_date" id="to_date"> <a href="<?php echo base_url('index.php/Workers_reports/search') ?>" style="margin-left: 10px;"><button class="btn btn-primary" style="padding: 2px 4px;">Search</button></a>
                            <tr>
                                <?php $theads = array(
                                    '' => 'ល.រ',
                                    '' => 'ឈ្មោះ',
                                    '' => 'Latin Name',
                                    '  ' => 'ភេទ',
                                    '' => 'ថ្ងៃខែឆ្នាំកំណើត',
                                    '  ' => 'សាខា/តំណាង', '  
                                   ' => 'ឈ្មោះរោងចក្រ',
                                    '  ' => 'ថ្ងៃឡើងចុះឈ្មោះ', '  ' => 'ប្រភេទប៉ាស្ព័រ', '  ' => 'លេខកាត', '  ' => 'លេខប៉ាស្ព័រ',
                                ) ?>
                                <?php foreach ($theads as $key => $thead) { ?>
                                    <th><span class="khmer_font"><?php echo $thead; ?><br /></span><?php echo $key; ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                                <?php foreach($results as $result){
                                    ?>
                                        <tr>aa</tr>
                                    <?php
                                } ?>
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
   
    
</script>