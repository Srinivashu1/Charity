<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>

<section class="edit">
    <div class="container">
        <div class="align-self-center">
            <form action="<?= base_url('volunteer_edit/'. $row['id']);?>" method="post" enctype="multipart/form-data">
                <div class="row mb-4">
                    <div class="col-4 ">
                        <label class="form-label ">Volunter Name:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="volunteer_name" value="<?= esc($row['volunteer_name']); ?>"
                            class="form-control">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <label class="form-label">Role</label>
                    </div>
                    <div class="col">
                        <select class="form-select" name="volunteer_role" aria-label="Default select example">
                            <option value="<?= esc($row['role']); ?>" selected><?= esc($row['role']); ?></option>
                            <option value="Senior Advisor">Senior Advisor</option>
                            <option value="Event Direction">Event Direction</option>
                            <option value="Event Planner">Event Planner</option>
                            <option value="Communication">Communication</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <label for="" class="form-label">Image</label>
                    </div>
                    <div class="col-2">
                        <img src="<?= base_url() ."/uploads/".$row['image']; ?>" alt="row Image" width="100"
                            height="60">

                    </div>
                    <div class="col ">
                        <input type="file" id="upload" name="vol_image" value="<?= esc($row['image']); ?>"
                            class="form-control">
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