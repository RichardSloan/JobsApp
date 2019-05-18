<?php include_once 'config/init.php'; ?>

<?php

$job = new Job;
$user = new User;

$template = new Template('templates/category-create.php');

if (isset($_POST['submit'])) {
    $data = array();
    $data['name'] = $_POST['name'];

    if ($job->createNewCategory($data)) {
        redirect('createcategory.php', 'A new category has been listed', 'success');
    } else {
        redirect('createcategory.php', 'Something went wrong', 'error');
    }
}

if(isset($_POST['del_id'])) {
    $del_id = $_POST['del_id'];
    if($job->deleteCategory($del_id)) {
        redirect('createcategory.php', 'Category Deleted', 'success');
    } else {
        redirect('createcategory.php', 'Category Not Deleted', 'error');
    }
}

if(isset($_POST['delUser_id'])) {
    $delUser_id = $_POST['delUser_id'];
    if($user->deleteUser($delUser_id)) {
        redirect('createcategory.php', 'User Deleted', 'success');
    } else {
        redirect('createcategory.php', 'User Not Deleted', 'error');
    }
}

if(isset($_POST['delJob_id'])) {
    $delJob_id = $_POST['delJob_id'];
    if($job->delete($delJob_id)) {
        redirect('createcategory.php', 'Job Deleted', 'success');
    } else {
        redirect('createcategory.php', 'Job Not Deleted', 'error');
    }
}


$template->jobs = $job->getAllJobs();
$template->categories = $job->getAllCategories();
$template->users = $user->getAllUsers();

echo $template;
