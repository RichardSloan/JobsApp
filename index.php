<?php include_once 'config/init.php'; ?>

<?php

$job = new Job;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category) {
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Jobs in ' . $job->getCategory($category) -> name ;
} else {
    $template->title = $job->getNumberOfJobs() . ' Jobs Listed';
    $template->jobs = $job->getAllJobs();
}

$template->categories = $job->getAllCategories();
$template->numberOfJobs = $job->getNumberOfJobs();


echo $template;

