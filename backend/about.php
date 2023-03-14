<?php
	include 'header.php';
?>
<?php
    $select = "SELECT * FROM tbl_about";
    $select_reqult = mysqli_query($db_connection, $select);
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
						<thead class="thead-dark">
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>country</th>
								<th>Freelance</th>
								<th>University</th>
								<th>Languages</th>
								<th>Image</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
<?php
    foreach($select_reqult AS $haa=>$reqult_tokra){
?>
                        <tr>
                                <td><?= $haa+1; ?></td>
                                <td><?= $reqult_tokra['name']; ?></td>
                                <td><?= $reqult_tokra['country']; ?></td>
                                <td>
                                    <img src="../frontend/img/bg/about-img.jpg" width="80" alt="">
                                </td>
                                <td>
                                    <p><?= $reqult_tokra['freelance']; ?></p>
                                </td>
                                <td>
                                    <p><?= $reqult_tokra['university']; ?></p>
                                </td>
                                <td>
                                    <p><?= $reqult_tokra['languages']; ?></p>
                                </td>
                                <td>
                                    <a href="about_status.php?id=<?= $reqult_tokra['id']; ?>" class="btn btn-<?= ($reqult_tokra['status'] == 1) ? 'primary' : 'secondary' ?>">
                                        <?= ($reqult_tokra['status'] == 1) ? 'Active' : 'Deactive' ?>
                                    </a>
                                </td>
                                <td>
<?php
    if($reqult_tokra['status'] == 0){ ?>
        <a href="about_delete.php?id=<?= $reqult_tokra['id']; ?>" class="btn btn-danger">Delete</a>
<?php  } ?> 
                                </td>
                            </tr>
<?php } ?>       
                    </table>
                </div>
              </div>
            </div>
        </div>
        <!--end row-->
        
        <div class="rpw">
            <div class="col-lg12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Content</h3>
                    </div>
                    <div>
                        <form action="about_post.php" method="POST">
                            <div class="mb-3">
                                <label for="name">Enter Name</label>
                                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" id="name">
                            </div>

                            <div class="mb-3">
                                <label for="country">Enter Country</label>
                                <input type="text" name="country" placeholder="Enter Your Country" class="form-control" id="country">
                            </div>
                            <div class="mb-3">
                                <label for="freelance">Enter Freelance</label>
                                <input type="text" name="freelance" placeholder="Enter Your Freelance" class="form-control" id="freelance">
                            </div>
                            <div class="mb-3">
                                <label for="university">Enter University</label>
                                <input type="text" name="university" placeholder="Enter Your University" class="form-control" id="university">
                            </div>
                            <div class="mb-3">
                                <label for="languages">Enter Languages :</label>
                                <input type="text" name="languages" placeholder="Enter Your languages" class="form-control" id="languages">
                            </div>
                            <div class="mb-3">
                                <label for="address">Enter Address :</label>
                                <input type="text" name="address" placeholder="Enter Your Address" class="form-control" id="address">
                            </div>
                            <div class="mb-3">
                                <label for="image">Enter Image</label>
                                <input type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="name">

                                <img src="../frontend/img/bg/hero-img.jpg" id="blah" alt="" width="80" id="Blah">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
	include'footer.php';
?>