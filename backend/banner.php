<?php
	SESSION_START();
    include 'header.php';
?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Banner List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Descrip</th>
                                <th>Image</th>
                                <th>Btn Text</th>
                                <th>Btn Url</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

<?php
    $select = "SELECT * FROM tbl_banner";
    $select_result = mysqli_query($db_connection, $select);
?>
<?php
    foreach($select_result AS $sl=>$result_part){
?>

                            <tr>
                                <td><?php echo $sl+1; ?></td>
                                <td><?php echo $result_part['name']; ?></td>
                                <td><?= $result_part['descrip']; ?></td>
                                <td>
                                    <img src="../frontend/img/bg/hero-img.jpg" width="80" alt="">
                                </td>
                                <td>
                                    <p><?= $result_part['btn']; ?></p>
                                </td>
                                <td>
                                    <p><?= $result_part['btn']; ?></p>
                                </td>
                                <td>
                                    <a href="banner_status.php?id=<?= $result_part['id']; ?>" class="btn btn-<?= ($result_part['status'] == 1) ? 'primary' : 'secondary' ?>">
                                        <?= ($result_part['status'] == 1) ? 'Active' : 'Deactive' ?>
                                    </a>
                                </td>
                                <td>
<?php
    if($result_part['status'] == 0){ ?>
        <a href="banner_delete.php?id=<?= $result_part['id']; ?>" class="btn btn-danger">Delete</a>
<?php  } ?> 
                                </td>
                            </tr>
<?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Content</h3>
                    </div>
                    <div class="card-body">
                        <form action="banner_post.php" method="POST">
                            <div class="mb-3">
                                <label for="name">Enter Name</label>
                                <input type="text" name="name" placeholder="Enter Your Neme" class="form-control" id="name">
								
								<strong class="text-danger">
									<?php
										if(isset($_SESSION['name_empty'])){
											echo $_SESSION['name_empty'];
										}
									?>
								</strong>
                            </div>
							
                            <div class="mb-3">
                                <label for="descrip">Enter Description</label>
                                <input type="text" name="descrip" placeholder="Enter Your Description" class="form-control" id="descrip">
								
								<strong class="text-danger">
									<?php
										if(isset($_SESSION['descrip_empty'])){
											echo $_SESSION['descrip_empty'];
										}
									?>
								</strong>
                            </div>

                            <div class="mb-3">
                                <label for="image">Enter Image</label>

                                <input type="file" name="image" class="form-control" id="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">

                                <img src="../frontend/img/bg/hero-img.jpg" alt="" width="80" id="blah">
                            </div>

                            <div class="mb-3">
                                <label for="btn_text">Enter Butten Text</label>
                                <input type="text" name="btn_text" placeholder="Enter Butten Text" class="form-control" id="btn_text">
                            </div>

                            <div class="mb-3">
                                <label for="btn_url">Enter Butten Url</label>

                                <input type="Url" name="btn_url" placeholder="Enter Butten Url" class="form-control" id="btn_url">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" >Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php
    include 'footer.php';
?>
<?php
	UNSET($_SESSION['name_empty']);
	UNSET($_SESSION['descrip_empty']);
	UNSET($_SESSION['name_value']);
?>
