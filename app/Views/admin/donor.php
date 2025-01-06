<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>

<section class="insert">
    <div class="container">




        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-4 text-center" id="staticBackdropLabel">Project Fund Raise</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="padding:30px">
                        <div class="align-self-center">
                            <form action="<?= base_url('donor_save/') ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-4">
                                    <div class="col-4 ">
                                        <label class="form-label ">Donor name:</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="donor_name" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-4 ">
                                        <label class="form-label ">Description:</label>
                                    </div>
                                    <div class="col">
                                        <textarea name="description" id="" class="form-control" required></textarea>
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="col-4 ">
                                        <label class="form-label ">Job:</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="job" value="" class="form-control" required>
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label class="form-label">Photo</label>
                                    </div>
                                    <div class="col ">
                                        <input type="file" name="image" value="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section>
    <div class="container-fuild p-5 mt-2">
        <div class="d-flex justify-content-center">
            <div class="col">
                <div class="row">
                    <div class="col-11">
                        <h3 class="text-uppercase">Donor Say List</h3>
                    </div>

                    <div class="col d-flex justify-content-end  p-3">
                        <button type="button" class="btn btn-info " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"> Add</button>
                    </div>
                </div>


                <table id="datatable" class="table table-success table-striped h6">
                    <thead class="table table-dark text-center">
                        <tr class="align-self-start">
                            <th>S.No</th>
                            <th>Photo</th>
                            <th>Donor Name</th>
                            <th>Description</th>
                            <th>Job</th>
                            <th style="width:100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($donors) && is_array($donors)): ?>
                        <?php $i=1; foreach ($donors as $row): ?>
                        <tr class=" text-center ">
                            <td class="align-content-center"><?= $i ?></td>
                            <td class="align-content-center">
                                <img src="<?= base_url() ."/uploads/".$row['image']; ?>" alt="Image" width="100"
                                    height="60">
                            </td>
                            <td class="align-content-center align-self-center">
                                <p><?= $row['donor_name']; ?></p>
                            </td>
                            <td class=" text-start align-self-center">
                                <?= $row['experience']; ?>
                            </td>
                            <td class="">
                                <p class="text-start"><?= $row['job']; ?></p>
                            </td>




                            <td class=" align-content-center">
                                <!-- Example actions -->
                                <a href="<?= base_url('donor/edit/' . $row['id']) ?>" class=" text-info fs-4  btn-sm"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="<?= base_url('donor/delete/' . $row['id']) ?>" class=" ps-3 fs-4 text-danger"
                                    onclick="return confirm('Are you sure you want to delete this item?')"><i
                                        class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach; ?>

                        <?php else: ?>
                        <tr>
                            <td colspan="12" class="text-center">No rows found.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>

                </table>

            </div>

        </div>

    </div>
</section>



<?= $this->endSection() ?>