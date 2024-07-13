<?php
session_start();
if(isset($_SESSION['username'])){
    // echo $_SESSION['username'];die;
    include('../components/header.php');
    include('../components/sidebar.php');
    // Set the number of records per page
    $records_per_page = 2;

    // Get the current page number from the URL, if not present default to page 1
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    if($current_page < 1) {
        $current_page = 1;
    }

    // Calculate the offset for the SQL query
    $offset = ($current_page - 1) * $records_per_page;

    // Get the filter criteria
    $filter_name = isset($_GET['filter_name']) ? $_GET['filter_name'] : '';

    // Build the query with filters and pagination
    $sql = "SELECT id, name, parent_id, is_active FROM categories WHERE is_deleted = 0";
    if (!empty($filter_name)) {
        $sql .= " AND name LIKE '%$filter_name%'";
    }
    $sql .= " LIMIT $offset, $records_per_page";

    $result = $conn->query($sql);

    // Get the total number of records
    $count_sql = "SELECT COUNT(id) AS total FROM categories WHERE is_deleted = 0";
    if (!empty($filter_name)) {
        $count_sql .= " AND name LIKE '%$filter_name%'";
    }
    $count_result = $conn->query($count_sql);
    $total_records = $count_result->fetch_assoc()['total'];

    // Calculate the total number of pages
    $total_pages = ceil($total_records / $records_per_page);  //5 2 // 2.5 3
?>
<!-- Main Content -->
<div class="page-wrapper" style="min-height: 601px;">
    <div class="content container-fluid">
        <?php
        if (isset($_GET['message']) && isset($_GET['type'])) {
            $message = urldecode($_GET['message']);
            $message_type = urldecode($_GET['type']);
            echo "<p class='notifications notification-{$message_type}'>{$message}</p>";
        }
        ?>
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Category</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://localhost/phpclass/index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a href="smarthr-laravel/light/public/create-invoice" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_category"><i class="fa fa-plus"></i> Create Category</a>
                </div>
            </div>
        </div>
        <div class="row filter-row">
            <form method="GET" action="index.php">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <div class="cal-icon">
                            <input class="form-control floating" type="text" name="filter_name" value="<?= $filter_name ?>">
                        </div>
                        <label class="focus-label">From</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <button class="btn btn-success w-100" type="submit"> Search </button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Parent Category</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td><a href="smarthr-laravel/light/public/invoice-view"><?= $row["id"] ?></a></td>
                                        <td><?= $row["name"] ?></td>
                                        <td>-</td>
                                        <td> <button class="btn btn-toggle-status" data-id="<?= $row['id'] ?>" data-status="<?= $row['is_active'] ?>">
                                                <?= $row['is_active'] == 0 ? "Activate" : "Deactivate" ?>
                                            </button>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item edit-btn" data-id="<?php echo $row["id"] ?>"><i class="fa fa-pencil m-r-5"></i>Edit</button>
                                                    <a class="dropdown-item" href="delete.php?id=<?php echo $row["id"] ?>"><i class="fa fa-eye m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }
                            } else {
                                echo "<tr><td colspan='12'>No Data Found!</td></tr>";
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Pagination Links -->
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php if ($current_page > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $current_page - 1 ?>&filter_name=<?= $filter_name ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php for ($page = 1; $page <= $total_pages; $page++): ?>
                    <li class="page-item <?= $page == $current_page ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $page ?>&filter_name=<?= $filter_name ?>"><?= $page ?></a>
                    </li>
                <?php endfor; ?>
                <?php if ($current_page < $total_pages): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $current_page + 1 ?>&filter_name=<?= $filter_name ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
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
                                <label class="col-form-label">Name <span class="text-danger">*</span></label>
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
<div id="edit_category" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" id="editFormContainer">
        </div>
    </div>
</div>
<?php
include('../components/footer.php');
}else{
    header('Location: http://localhost/phpclass/login.php');
}
?>
