<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box box-solid bg-dark">
            <div class="box-header with-border">
                <h3 class="box-title"><span class="khmer_font"> តារាងឈ្មោះក្រុមនៃពលករនីមួយៗ </span> &#921; Group List for Workers </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>
                            <div class="btn-group mb-5">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Printing</button>
                                <div class="dropdown-menu" style="font-family: 'Khmer OS Battambang';">
                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/Bio/' . $listId) ?>" target="_blank">
                                        <span class="text-success">BiO </span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/BioPrint/' . $listId) ?>" target="_blank">
                                        <span class="text-success">BiO INTERVIEW</span></a>
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/internalFile1/' . $listId) ?>" target="_blank">
                                        <span class="text-info">ពាក្យសុំរបស់ក្រុមហ៊ុន</span>
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/internalFile2/' . $listId) ?>" target="_blank">
                                        <span class="text-info">ទំរងសុំទិដ្ឋាការ</span>
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/app_4visa/' . $listId) ?>" target="_blank">
                                        <span class="text-info">ស្មើរសុំ Visa</span>
                                    </a>


                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/confirm_workers/' . $listId) ?>" target="_blank">
                                        <span class="text-info"> លិខិតទទួលពលករ </span>
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/request_doc/' . $listId) ?>" target="_blank">
                                        <span class="text-info">ឯកសារព្រំដែន</span>
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/card/' . $listId) ?>" target="_blank">
                                        <span class="text-info"> Sticker Card </span>
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/passport/' . $listId) ?>" target="_blank">
                                        <span class="text-info"> Passport ក្រោយ Sticker </span>
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/goOutDoc/' . $listId) ?>" target="_blank">
                                        <span class="text-info">ពាក្យសុំផ្ដល់លិខិតធ្វើដំណើរ</span>
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('NameListPrint/user_form/' . $listId) ?>" target="_blank">
                                        <span class="text-info">ប្រវត្តិរូបសង្ខេប</span>
                                    </a>

                                </div>
                            </div>
                            <tr>
                                <?php $theads = array(
                                    'Cancel' => '',
                                    'Photo' => 'រូបភាព',
                                    'ID' => 'លេខកូដ',
                                    'សាខា' => '',
                                    'តំណាង' => '',
                                    'Group' => 'ក្រុម',
                                    'Khmer First Name' => 'គោត្តនាម',
                                    'Khmer Last name' => 'នាម',
                                    'Latin First Name' => 'គោត្តនាមអក្សរឡាតាំង',
                                    'Latin Last name' => 'នាមអក្សរឡាតាំង',
                                    'Gender' => 'ភេទ',
                                    'Date of Birth' => 'ថ្ងៃខែឆ្នាំកំណើត',
                                    'Age' => 'អាយុ',
                                    'Title' => 'ងារ',
                                    'Nationality' => 'សញ្ជាតិ',
                                    'Marital Status' => 'ស្ថានភាពគ្រួសារ',
                                    'Country' => 'ប្រទេស',
                                    'Job Title' => 'តួនាទីការងារ',
                                    'Job Type' => 'ប្រភេទការងារ',
                                    'Phone Number' => 'លេខទូរស័ព្ទ',
                                    'Place of Birth Province' => 'ខេត្ត',
                                    'District' => 'ស្រុក',
                                    'Commune' => 'ឃុំ',
                                    'Village' => 'ភូមិ',
                                    'Add. Province' => 'អាស័យ. ខេត្ត',
                                    'Add Distr' => 'អាស័យ. ស្រុក',
                                    'Add Comm' => 'អាស័យ. ឃុំ',
                                    'Add Vill' => 'អាស័យ. ភូមិ',
                                    'Document Type' => '',
                                    'Document No' => '',
                                    'Issued Date ' => '',
                                    'Expired Date ' => '',
                                    'Father fName In Khmer ' => '',
                                    'Father lName In Khmer ' => '',
                                    'Father fName In Latin ' => '',
                                    'Father lName In Latin ' => '',
                                    'Mother fName In Khmer ' => '',
                                    'Mother lName In Khmer ' => '',
                                    'Mother fName In Latin ' => '',
                                    'Mother lName In Latin ' => '',
                                    'Parents Current Address ' => '',
                                    'Contact Name in Khmer ' => '',
                                    'Contact Phone ' => '',
                                    'Contact Address ' => '',


                                ) ?>
                                <?php foreach ($theads as $key => $thead) { ?>
                                    <th><span class="khmer_font"><?php echo $thead; ?><br /></span><?php echo $key; ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($nameLists as $worker) {
                            ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url('index.php/NameList/cancel_move/' . $worker['id'] . '/' . $listId) ?>"><button class="btn btn-danger">Cancel</button></a>
                                    </td>
                                    <td>
                                        <?php
                                        if (!empty($worker['worker_photo'])) {
                                        ?>
                                            <div class="box box-default pull-up" style="width: 75">
                                                <a class="dropdown-item" href="<?php echo site_url('Workers/worker_photo/' . $worker['id']); ?>" target="_blank">
                                                    <img src="<?php echo base_url("/images/worker_photo/{$worker['worker_photo']}"); ?>" width="75" alt="<?php echo $worker['worker_photo']; ?>" />
                                                </a>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <a class="dropdown-item" href="<?php echo site_url('Workers/worker_photo/' . $worker['id']); ?>" target="_blank">
                                                <span class="text-info">Add Photo</span>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $worker['id']; ?></td>
                                    <td><?php $aff_id = $worker['affiliate'];
                                        $aff_name = $this->Model_Affiliate->get_affiliate_by($aff_id);
                                        if (!empty($aff_name)) {
                                            echo $aff_name['name'];
                                        }
                                        ?></td>
                                    <td><?php $b_id = $aff_name['branch'];
                                        echo $b_id;
                                        $branch_name = $this->Model_Affiliate->get_affiliate_branch($b_id);
                                        // if (!empty($branch_name)) {
                                        //     echo $branch_name['branch_name '];
                                        // }
                                        ?></td>
                                    <?php $group_id = $worker['group_id']; ?>
                                    <?php $group_name = $this->Model_Group->get_group_by($group_id); ?>
                                    <td><?php if (!empty($group_name['name'])) {
                                            echo $group_name['name'];
                                        } ?></td>



                                    <td><?php echo $worker['k_fname']; ?></td>
                                    <td><?php echo $worker['k_lname']; ?></td>
                                    <td><?php echo $worker['e_fname']; ?></td>
                                    <td><?php echo $worker['e_lname']; ?></td>
                                    <td><?php echo $worker['gender']; ?></td>
                                    <td><?php echo $worker['dob']; ?></td>
                                    <td><?php $y = date('Y', strtotime($worker['dob']));
                                        echo $age = date('Y') - $y; ?></td>
                                    <td><?php echo $worker['title']; ?></td>
                                    <td><?php echo $worker['nationality']; ?></td>
                                    <td><?php echo $worker['marital']; ?></td>
                                    <?php $country_id = $worker['country']; ?>
                                    <?php $countryname = $this->Model_Worker->getcountryname($country_id); ?>
                                    <td><?php if (!empty($countryname['name'])) {
                                            echo $countryname['name'];
                                        } ?></td>



                                    <td><?php echo $worker['job_title']; ?></td>
                                    <td><?php echo $worker['industry']; ?></td>
                                    <td><?php echo $worker['mobile']; ?></td>


                                    <?php if (!isset($worker['birth_province'])) {
                                        $worker['birth_province'] = NULL;
                                    } ?>
                                    <?php $provinc = $worker['birth_province']; ?>
                                    <?php $provinc = $this->Model_Worker->getpname($provinc); ?>
                                    <td><span class="khmer_font"><?php if (!empty($provinc['name'])) {
                                                                        echo $provinc['name'];
                                                                    } ?></span></td>

                                    <?php if (!isset($worker['birth_district'])) {
                                        $worker['birth_district'] = NULL;
                                    } ?>
                                    <?php $district = $worker['birth_district']; ?>
                                    <?php $district = $this->Model_Worker->getdname($district); ?>
                                    <td><span class="khmer_font"><?php if (!empty($district)) {
                                                                        echo $district['name'];
                                                                    } ?></span></td>

                                    <?php if (!isset($worker['birth_commune'])) {
                                        $worker['birth_commune'] = NULL;
                                    } ?>
                                    <?php $commune = $worker['birth_commune']; ?>
                                    <?php $commune = $this->Model_Worker->getcname($commune); ?>
                                    <td><span class="khmer_font"><?php if (!empty($commune)) {
                                                                        echo $commune['name'];
                                                                    } ?></span></td>

                                    <?php if (!isset($worker['birth_village'])) {
                                        $worker['birth_village'] = NULL;
                                    } ?>
                                    <?php $village = $worker['birth_village']; ?>
                                    <?php $village = $this->Model_Worker->getvname($village); ?>
                                    <td><span class="khmer_font"><?php if (!empty($village)) {
                                                                        echo $village['name'];
                                                                    } ?></span></td>

                                    <?php if (!isset($worker['cur_add_province'])) {
                                        $worker['cur_add_province'] = NULL;
                                    } ?>
                                    <?php $cprovinc = $worker['cur_add_province']; ?>
                                    <?php $cprovinc = $this->Model_Worker->getpname($cprovinc); ?>
                                    <td><span class="khmer_font"><?php if (!empty($cprovinc)) {
                                                                        echo $cprovinc['name'];
                                                                    } ?></span></td>

                                    <?php if (!isset($worker['cur_add_district'])) {
                                        $worker['cur_add_district'] = NULL;
                                    } ?>
                                    <?php $cdistrictc = $worker['cur_add_district']; ?>
                                    <?php $cdistrictc = $this->Model_Worker->getdname($cdistrictc); ?>
                                    <td><span class="khmer_font"><?php if (!empty($cdistrictc)) {
                                                                        echo $cdistrictc['name'];
                                                                    } ?></span></td>

                                    <?php if (!isset($worker['cur_add_commune'])) {
                                        $worker['cur_add_commune'] = NULL;
                                    } ?>
                                    <?php $ccommunec = $worker['cur_add_commune']; ?>
                                    <?php $ccommunec = $this->Model_Worker->getcname($ccommunec); ?>
                                    <td><span class="khmer_font"><?php if (!empty($ccommunec)) {
                                                                        echo $ccommunec['name'];
                                                                    } ?></span></td>

                                    <?php if (!isset($worker['cur_add_village'])) {
                                        $worker['cur_add_village'] = NULL;
                                    } ?>
                                    <?php $cvillagec = $worker['cur_add_village']; ?>
                                    <?php $cvillagec = $this->Model_Worker->getvname($cvillagec); ?>
                                    <td><span class="khmer_font"><?php if (!empty($cvillagec)) {
                                                                        echo $cvillagec['name'];
                                                                    } ?></span></td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $type = $this->Model_Worker->getDocType($id);
                                        if (!empty($type)) {
                                            echo $type['doc_type'] == 2 ? "Passport" : "National ID";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $type = $this->Model_Worker->getDocType($id);
                                        if (!empty($type)) {
                                            echo $type['number'];;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $type = $this->Model_Worker->getDocType($id);
                                        if (!empty($type)) {
                                            echo $type['issue_date'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $type = $this->Model_Worker->getDocType($id);
                                        if (!empty($type)) {
                                            echo $type['expired_date'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerParent->get_by($id);
                                        if (!empty($parent)) {
                                            echo $parent['f_k_fname'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerParent->get_by($id);
                                        if (!empty($parent)) {
                                            echo $parent['f_k_lname'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerParent->get_by($id);
                                        if (!empty($parent)) {
                                            echo $parent['f_e_fname'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerParent->get_by($id);
                                        if (!empty($parent)) {
                                            echo $parent['f_e_lname'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerParent->get_by($id);
                                        if (!empty($parent)) {
                                            echo $parent['m_k_fname'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerParent->get_by($id);
                                        if (!empty($parent)) {
                                            echo $parent['m_k_lname'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerParent->get_by($id);
                                        if (!empty($parent)) {
                                            echo $parent['m_e_fname'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerParent->get_by($id);
                                        if (!empty($parent)) {
                                            echo $parent['m_e_lname'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerParent->getAdd($id);
                                        if (!empty($parent)) {
                                            echo 'ភូមិ' . $parent['emvname'] . ' ឃំ/សង្កាត់ ' . $parent['emcname'] . ' ស្រុក/ខណ្ឌ' . $parent['emdname'] . ' ខេត្ត' . $parent['empname'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerEmegency->get_by($id);
                                        if (!empty($parent)) {
                                            echo $parent['sos_fname'] . ' ' . $parent['sos_lname'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerEmegency->get_by($id);
                                        if (!empty($parent)) {
                                            echo $parent['sos_mobile'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $id = $worker['id'];
                                        $parent = $this->Model_WorkerEmegency->get_detail($id);
                                        if (!empty($parent)) {
                                            echo 'ភូមិ' . $parent['emvname'] . ' ឃំ/សង្កាត់ ' . $parent['emcname'] . ' ស្រុក/ខណ្ឌ' . $parent['emdname'] . ' ខេត្ត' . $parent['empname'];
                                        }
                                        ?>
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