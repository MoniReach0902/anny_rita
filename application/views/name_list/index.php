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
                            <tr>
                                <?php $theads = array('ID' => 'លេខកូដ', 'Name' => 'ឈ្មោះ', 'Note' => 'កំណត់ចំណាំ', 'View Name List' => '', 'Action' => '') ?>
                                <?php foreach ($theads as $key => $thead) { ?>
                                    <th><span class="khmer_font"><?php echo $thead; ?><br /></span><?php echo $key; ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($nameLists as $nameList) {
                            ?>
                                <tr>
                                    <td><?php echo $nameList->id ?></td>
                                    <td><?php echo $nameList->name ?></td>
                                    <td><?php echo $nameList->note ?></td>
                                    <td><a href="<?php echo base_url('index.php/NameList/view_detail/' . $nameList->id) ?>">View Detail Name List</a></td>
                                    <td>
                                        <a href="<?php echo base_url('index.php/NameList/add_worker/' . $nameList->id) ?>"><button class="btn btn-info">Add Workers</button></a>
                                        <a href="<?php echo base_url('index.php/NameList/edit/'.$nameList->id) ?>"><button type="button" class="btn btn-primary">Edit Name List</button></a>
                                    </td>
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