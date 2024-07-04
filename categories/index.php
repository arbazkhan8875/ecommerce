<?php

session_start();
// echo $_SESSION['username'];die;
if(isset($_SESSION['username']) ){
  // session_destroy();
  include('../components/header.php');
include('../components/sidebar.php');
  // die;
  
?>
<!-- // Main Content -->
<div class="page-wrapper" style="min-height: 601px;">
        <div class="content container-fluid">
        <?php
if (isset($_GET['message']) && isset($_GET['type'])) {
  $message = urldecode($_GET['message']);
  $message_type = urldecode($_GET['type']);
  echo "<p class='notifications notification-{$message_type}'>{$message}</p>";
}

$sql = "SELECT id, name, parent_id, is_active FROM categories WHERE is_deleted = 0";
    $result = $conn->query($sql);

   
?>


        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Category</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://localhost/phpclass/index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Category</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a href="smarthr-laravel/light/public/create-invoice" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_category"><i
                            class="fa fa-plus"></i> Create Category</a>
                </div>
            </div>
        </div>


        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">From</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">To</label>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-3">
                <a href="#" class="btn btn-success w-100"> Search </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Parant Category</th>
                                <th>Status</th>
                                
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result->num_rows > 0) {
    
                        while($row = $result->fetch_assoc()) {?>
                            <tr>
                            
                                <td><a href="smarthr-laravel/light/public/invoice-view"><?= $row["id"]?></a></td>
                                <td><?= $row["name"]?></td>
                                <td>-</td>
                                <td><?php 
                                $staus = "";
                                if($row["is_active"] == 0){
                                    $staus = "Active";     
                                }else{
                                    $staus = "DeActive";     
                                }
                                echo  $staus;
                                ?></td>
                                
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            
                                                    <button class="dropdown-item edit-btn" data-id="<?php echo $row["id"] ?>"><i
                                                    class="fa fa-pencil m-r-5"></i>Edit</button>
                                            <!-- <a class="dropdown-item"
                                                href="https://smarthr.dreamguystech.com/smarthr-laravel/light/public/invoice-view"><i
                                                    class="fa fa-eye m-r-5"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i>
                                                Download</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a> -->
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                            
                        } else {
                            echo "<tr><td colspan='12'>No Data Found!</td></tr>";
                        }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <div id="add_category" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="store.php" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Name <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Parent Category</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            
                    </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div id="edit_category" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" id="editFormContainer">
               
            </div>
        </div>
    </div>
   
<?php
include('../components/footer.php');
}else{
  // echo 'sdkjhasfdj';die;
  header('Location: http://localhost/phpclass/login.php');
}