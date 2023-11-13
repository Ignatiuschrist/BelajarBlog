<?php 
$title = 'Profile';
include('components/header.php');
?>

<section class="py-5">
    <div class="container">
        <div class="d-flex align-itemscenter justify-content-between mb-3">
            <h4 class="text-primary fw-bold">Your Profile</h4>
            <a href="posts.php" class="btn btn-light">Go Dashboard</a>
        </div>

        <form action="php/profile.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?= $user_logged ['name'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $user_logged ['email'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="password">Your Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
                        <span class="form-text">Diisi jika ingin mengubah password</span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" id="photo" class="form-control">
                        <span class="form-text">Diisi jika ingin mengubah photo</span>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary px-4" name="action">Submit</button>
        </form>
    </div>
</section>

<?php include('components/footer.php')?>