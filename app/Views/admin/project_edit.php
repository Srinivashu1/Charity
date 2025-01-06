<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>

<section class="edit">
    <div class="container">
        <div class="align-self-center">
            <form action="<?= base_url('project/update/'. $fund['id']); ?>" method="post" enctype="multipart/form-data">

                <div class="row mb-4">
                    <div class="col-2 ">
                        <label class="form-label ">Title:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="project_title" value="<?= $fund['project_title']?>"
                            class="form-control" required>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2 ">
                        <label class="form-label ">Title:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="sub_title" value="<?= $fund['sub_title']?>" class="form-control"
                            required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-2 ">
                        <label class="form-label ">Description:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="description" value="<?= $fund['description']?>" class="form-control"
                            required>
                    </div>
                </div>


                <div class="row mb-4">
                    <div class="col-2 ">
                        <label class="form-label ">Goal fund:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="goal_fund" value="<?= $fund['goal_fund']?>" class="form-control"
                            required>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2 ">
                        <label class="form-label ">Fund raised:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="fund_raised" value="<?= $fund['fund_raised']?>" class="form-control"
                            required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-2">
                        <label class="form-label">Image</label>
                    </div>
                    <div class="col-2">
                        <img src="<?= base_url() ."/uploads/".$fund['image']; ?>" alt="Image" width="100" height="60">

                    </div>
                    <div class="col mt-3">
                        <input type="file" name="image" value="<?= $fund['image']?>" class="form-control">
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