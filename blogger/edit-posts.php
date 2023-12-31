<?php 
if (!isset($_GET['post_id'])) {
    header('location: posts.php');
}

$title = 'Edit Post';
include('components/header.php');
$data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM posts WHERE id='$_GET[post_id]' "));
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h4 class="text-primary">Edit post</h4>
            <a href="posts.php" class="btn btn-light">Go Back</a>
        </div>
        <form action="php/posts.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?= $_GET ['post_id'] ?>">
            <div class="form-group mb-3">
                <label for="title">Title Post</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title post" value="<?= $data['title'] ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control" required><?= $data['body'] ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" accept="image/*" name="image" id="image" class="form-control" accept="image/*">
                <span class="form-text">Jangan diisi jika tidak ingin mengganti gambar</span>
            </div>
            <button type="submit" class="btn btn-primary px-4">Submit</button>
        </form>
    </div>
</section>
<?php include('components/footer.php') ?>