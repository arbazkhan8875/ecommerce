<?php 
include '../components/dbconnection.php';
// echo $_POST['name'];
// echo $_POST['id'];die;
if(isset($_POST['name']) && isset($_POST['id'])){
    $id = $_POST['id'];
    $name = $_POST['name'];

    // SQL क्वेरी
    $sql = "UPDATE categories SET name='$name' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // सफलतापूर्वक डेटा अपडेट हो गया
        $message = "Category updated successfully";
        $message_type = "success"; // सफलतापूर्वक का प्रकार
    } else {
        // डेटा अपडेट नहीं हो पाया
        $message = "Error: " . $sql . "<br>" . $conn->error;
        $message_type = "error"; // त्रुटि का प्रकार
    }
    header('Location: http://localhost/phpclass/categories/index.php?message=' . urlencode($message) . '&type=' . urlencode($message_type));
    exit();
}


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT id, name FROM categories WHERE id = $id";
    $result = $conn->query($sql);
    // echo $id;
    // print_r($result);die;
    if ($result->num_rows > 0) {
        // डेटा प्राप्त करें
        $row = $result->fetch_assoc();
    } else {
        $message = "Category Not Found";
        $message_type = "error"; // त्रुटि का प्रकार
        header('Location: http://localhost/phpclass/categories/index.php?message=' . urlencode($message) . '&type=' . urlencode($message_type));
    }




?>
<div class="modal-header">
    <h5 class="modal-title">Edit Category</h5>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <form action="edit.php" method="post" id="editForm">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Name <span
                            class="text-danger">*</span></label>
                            <input type="hidden" name="id" value="<?=  $row['id']?>">
                    <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>">
                </div>
            </div>
            
            
        
        <div class="submit-section">
            <button class="btn btn-primary submit-btn" type="submit">Submit</button>
        </div>
    </form>
</div>

<?php } ?>
            