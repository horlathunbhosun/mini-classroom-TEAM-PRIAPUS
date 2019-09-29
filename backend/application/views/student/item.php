<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Items</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Item</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">List Items</li>
                            </ol>
                        </div>
                    </div>
                       <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-scrollable">
                                        <table
                                            class="table table-striped table-bordered table-hover table-checkable order-column"
                                            style="width: 100%" id="example4">
                                            <thead>
                                                <tr>
                                                   
                                                    
                                                    <th width="50%"> Item Name</th>
                                                    <th> Item Content</th>
                                                    <th> File </th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                           
                                                <tr class="odd gradeX">
                                                   
                                                    
                                                    <?php foreach($student as $key => $student):?>
                                                    <td><?= $student->item_name ?></td>
                                                    <td><?= substr($student->item_content,0, 500)?>
                                                    <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal">
                                                                Read More
                                                    </a>

                                                    </td>
                                                    <?php if (empty($student->file)): ?>
                                                        ''
                                        
                                                        <?php else: ?>
                                                    <td> 
                                         <a href="<?= base_url() ?>public/assets/img/<?= $student->file ?>" target="_blank">
                                                                Download</a></td>
                                                    <?php endif ?>
                                                   
                                                    <?php endforeach;?>
                                                </tr>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?= $student->item_name ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <?=$student->item_content;?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                         <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?= $student->item_name ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->

            <!-- Modal -->

        </div>
        <!-- end page container -->