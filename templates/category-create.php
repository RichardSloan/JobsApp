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

<div class="row">
<div class="col-md-6">
    <h2 align="center">Manage Users</h2>
    <div class="table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Date Joined</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php foreach ($users as $user) : ?>
                <tbody>
                    <tr>
                        <th class="scope"><?php echo $user->uidUsers; ?></th>
                        <td><?php echo $user->emailUsers; ?></td>
                        <td><?php echo $user->date_joined; ?></td>
                        <form style="display:inline;" method="post" action="createcategory.php">
                            <input type="hidden" name="delUser_id" value="<?php echo $user->idUsers; ?>">
                            <td><input type="submit" class="btn btn-danger" value="Delete"></td>
                        </form>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>

<div class="col-md-6">
    <h2 align="center">Manage Jobs</h2>
    <div class="table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Date Joined</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php foreach ($users as $user) : ?>
                <tbody>
                    <tr>
                        <th class="scope"><?php echo $user->uidUsers; ?></th>
                        <td><?php echo $user->emailUsers; ?></td>
                        <td><?php echo $user->date_joined; ?></td>
                        <form style="display:inline;" method="post" action="createcategory.php">
                            <input type="hidden" name="delUser_id" value="<?php echo $user->idUsers; ?>">
                            <td><input type="submit" class="btn btn-danger" value="Delete"></td>
                        </form>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>
</div>



<?php include 'inc/footer.php'; ?>