<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>

<div class="col">
    <h3 class="text-center">Gallery Edit</h3>
    <form action="<?= base_url('gallery/update/' . $row['id']) ?>" method="POST" enctype="multipart/form-data">

        <h3>Change Photos</h3>
        <img src="<?= base_url() ."/uploads/".$row['image']; ?>" alt="Image" width="100" height="60">

        <div class="col mt-4 ">
            <input type="file" name="image" value="" class="form-control" required>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
</div>


<?= $this->endSection() ?>