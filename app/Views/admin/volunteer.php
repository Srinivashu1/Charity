<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>

<section class="insert">
    <div class="container">
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-4 text-center" id="staticBackdropLabel">Volunteer Insert</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="padding:30px">
                        <div class="align-self-center">
                            <form action="<?= base_url('volunteer_save/') ?>" method="POST"
                                enctype="multipart/form-data">
                                <div class="row mb-4">
                                    <div class="col-4 ">
                                        <label class="form-label ">Volunter Name:</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="volunteer_name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label class="form-label">Role</label>
                                    </div>
                                    <div class="col">
                                        <select class="form-select" name="volunteer_role"
                                            aria-label="Default select example">
                                            <option selected>Select for Role</option>
                                            <option value="Senior Advisor">Senior Advisor</option>
                                            <option value="Event Direction">Event Direction</option>
                                            <option value="Event Planner">Event Planner</option>
                                            <option value="Event Planner">Event Planner</option>
                                            <option value="Communication">Communication</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label class="form-label">Image</label>
                                    </div>
                                    <div class="col ">
                                        <input type="file" name="vol_image" value="" class="form-control">
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
            <div class="col-8">
                <div class="row">
                    <div class="col-11">
                        <h1 class="mb-4">Volunteers List</h1>
                    </div>

                    <div class="col ">
                        <button type="button" class="btn btn-info " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"> <i class="bi bi-cloud-upload"></i> </button>
                    </div>
                </div>


                <table class="table table-success table-striped h6">
                    <thead class="table table-dark text-center">
                        <tr>
                            <th>S.No</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($volunteers) && is_array($volunteers)): ?>
                        <?php $i=1; foreach ($volunteers as $row): ?>
                        <tr class=" text-center ">
                            <td class="align-content-center"><?= $i ?></td>
                            <td class="align-content-center">
                                <img src="<?= base_url() ."/uploads/".$row['image']; ?>" alt="row Image" width="100"
                                    height="60">
                            </td>
                            <td class="align-content-center">
                                <p><?= $row['volunteer_name']; ?></p>
                            </td>
                            <td class="align-content-center">
                                <p class="text-center"><?= $row['role']; ?></p>
                            </td>



                            <td class=" align-content-center  btnac ">
                                <!-- Example actions -->
                                <a href="<?= base_url('volunteer/edit/' . $row['id']) ?>"
                                    class=" text-info fs-4  btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?= base_url('delete/' . $row['id']) ?>" class=" ps-3 fs-4 text-danger"
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