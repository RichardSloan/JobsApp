<?php include 'inc/header.php'; ?>

<div class="jumbotron">
    <h1>Find A Job</h1>
    <form method="GET" action="index.php">
        <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <input type="submit" class="btn btn-lg btn-success" value="Find">
    </form>
</div>

<h3><?php echo $title ?></h3>
<?php foreach ($jobs as $job) : ?>
    <div class="row marketing p-4">
        <div class="col-md-10">
            <ul class="list-inline">
                <p></p>
                <li class="list-inline-item"><a href="job.php?id=<?php echo $job->id ?>">
                        <h3><?php echo $job->job_title; ?></h3>
                    </a></li>
                <li class="list-inline-item"><span class="bg-primary text-white badge py-2 px-3"><?php echo $job->cname ?></span></li>
                <li class="list-inline-item"><span class="bg-success text-white badge py-2 px-3"><?php echo $job->salary ?></span></li>
            </ul>
            <hr>
            <span><strong><?php echo $job->company ?></strong>, <?php echo $job->location ?></span>
            <p><?php echo $job->description ?></p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-lg btn-primary" href="job.php?id=<?php echo $job->id ?>">View</a>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php' ?>