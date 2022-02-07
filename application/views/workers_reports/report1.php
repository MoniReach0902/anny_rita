<script src="<?php echo base_url('assets/vendor_components/jquery/dist/jquery-3.6.0.js'); ?>"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font">  </span> &#921;  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>
                            <input type="text" name="f_date" id="">
                            <input type="text" name="t_date" id="">
                            From date <input type="date" name="from_date" id="from_date"> To date <input type="date" name="to_date" id="to_date"> <a href="<?php echo base_url('index.php/Workers_reports/search') ?>" style="margin-left: 10px;"><button class="btn btn-primary" style="padding: 2px 4px;">Search</button></a>
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
                            <?php foreach ($results as $result) {
                            ?>
                                <tr>
                                    <td><?php echo $result->e_fname ?></td>
                                    <td><?php echo $result->e_lname ?></td>
                                    <td><?php echo $result->e_fname ?></td>

                                </tr>
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