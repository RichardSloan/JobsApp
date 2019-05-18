<?php include 'inc/header.php'; ?>
<h2 class="page-header">Create New Category Listing</h2>
<form method="post" action="createcategory.php">
    <div class="form-group">
        <label>Category</label>
        <input type="text" class="form-control" id="validation" name="name" required>
    </div>
    <input type="submit" class="btn btn btn-success" value="Submit" name="submit">
    <br><br>
</form>

<h2 align="center">Manage Categories</h2>
<div class="row">
    
    <?php foreach ($categories as $category) : ?>


        <div class="col-md-2">
            <h3><?php echo $category->name; ?></h3>
        </div>
        <div class="col-md-2">
            <form style="display:inline;" method="post" action="createcategory.php">
                <input type="hidden" name="del_id" value="<?php echo $category->id; ?>">
                <input type="submit" class="btn btn-danger " value="Delete">
                <br><br>
            </form>
        </div>
    <?php endforeach ?>
</div>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Manage Users</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email Address</th>
                            <th>Frist Name</th>
                            <th>Last Name</th>
                            <th>Date Joined</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email Address</th>
                            <th>Frist Name</th>
                            <th>Last Name</th>
                            <th>Date Joined</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?php echo $user->idUsers; ?></td>
                                <td><?php echo $user->uidUsers; ?></td>
                                <td><?php echo $user->emailUsers; ?></td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td><?php echo $user->date_joined; ?></td>
                                <td>
                                    <form style="display:inline;" method="post" action="createcategory.php">
                                        <input type="hidden" name="delUser_id" value="<?php echo $user->idUsers; ?>">
                                <input type="submit" class="btn btn-danger" value="Delete"></td>
                                </form>
                                </td>
                                </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Manage Job Listings</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Job TitLE</th>
                            <th>Category</th>
                            <th>Company</th>
                            <th>Salary</th>
                            <th>Location</th>
                            <th>Contact User</th>
                            <th>Contact Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Job TitLE</th>
                            <th>Category</th>
                            <th>Company</th>
                            <th>Salary</th>
                            <th>Location</th>
                            <th>Contact User</th>
                            <th>Contact Email</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($jobs as $job) : ?>
                            <tr>
                                <td><?php echo $job->id; ?></td>
                                <td><?php echo $job->job_title; ?></td>
                                <td><?php echo $job->cname; ?></td>
                                <td><?php echo $job->company; ?></td>
                                <td><?php echo $job->salary; ?></td>
                                <td><?php echo $job->location; ?></td>
                                <td><?php echo $job->contact_user; ?></td>
                                <td><?php echo $job->contact_email; ?></td>
                                <td>
                                    <form style="display:inline;" method="post" action="createcategory.php"><input type="hidden" name="delJob_id" value="<?php echo $job->id; ?>">
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                </td>
                                </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>


    <?php include 'inc/footer.php'; ?>