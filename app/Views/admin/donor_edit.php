<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>

<section class="edit">
    <div class="container">
        <div class="align-self-center">
            <form action="<?= base_url('donor/update/'. $row['id']); ?>" method="post" enctype="multipart/form-data">
                <h3 class="mb-3">Donor Say Edit</h3>

                <div class="row mb-4">
                    <div class="col-2 ">
                        <label class="form-label ">Donor name:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="donor_name" value="<?= $row['donor_name']?>"
                            class="form-control" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-2 ">
                        <label class="form-label ">Description:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="description" value="<?= $row['experience']?>" class="form-control"
                            required>
                    </div>
                </div>


            
                <div class="row mb-4">
                    <div class="col-2 ">
                        <label class="form-label ">Job:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="job" value="<?= $row['job']?>" class="form-control"
                            required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-2">
                        <label class="form-label">Photo</label>
                    </div>
                    <div class="col-2">
                        <img src="<?= base_url() ."/uploads/".$row['image']; ?>" alt="Image" width="100" height="60">

                    </div>
                    <div class="col mt-3">
                        <input type="file" name="image" value="<?= $row['image']?>" class="form-control">
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
            </form>

        </div>
    </div>
</section>




<?= $this->endSection() ?>