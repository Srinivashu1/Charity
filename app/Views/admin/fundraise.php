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
                        <h1 class="modal-title fs-4 text-center" id="staticBackdropLabel">Fund Raise</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="padding:30px">
                        <div class="align-self-center">
                            <form action="<?= base_url('fund_raise_save/') ?>" method="POST"
                                enctype="multipart/form-data">
                                <div class="row mb-4">
                                    <div class="col-4 ">
                                        <label class="form-label ">Title:</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="fund_title" value="" class="form-control" required>
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
                                        <label class="form-label ">Goal fund:</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="goal_fund" value="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-4 ">
                                        <label class="form-label ">Fund raised:</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="fund_raised" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label class="form-label">Image</label>
                                    </div>
                                    <div class="col ">
                                        <input type="file" name="fund_image" value="" class="form-control" required>
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
            <div class="col-10">
                <div class="row">
                    <div class="col-11">
                        <h1 class="mb-4">Fund Raised List</h1>
                    </div>

                    <div class="col d-flex justify-content-end  mb-3">
                        <button type="button" class="btn btn-info " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"> Add</i> </button>
                      

                    </div>
                </div>


                <table id="datatable" class="table table-success table-striped h6">
                    <thead class="table table-dark text-center">
                        <tr class="align-self-start">
                            <th>S.No</th>
                            <th>Photo</th>
                            <th>Fund Title</th>
                            <th>Description</th>
                            <th>Goal Fund</th>
                            <th>Fund Raised</th>
                            <th style="width:100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($fundcard) && is_array($fundcard)): ?>
                        <?php $i=1; foreach ($fundcard as $fund): ?>
                        <tr class=" text-center ">
                            <td class="align-content-center"><?= $i ?></td>
                            <td class="align-content-center">
                                <img src="<?= base_url() ."/uploads/".$fund['image']; ?>" alt="Image" width="100"
                                    height="60">
                            </td>
                            <td class="align-content-center">
                                <p><?= $fund['fund_title']; ?></p>
                            </td>
                            <td class="align-content-center text-start">
                                <p><?= $fund['description']; ?></p>
                            </td>
                            <td class="align-content-center">
                                <p class="text-center">Rs.<?= $fund['goal_fund']; ?></p>
                            </td>
                            <td class="align-content-center">
                                <p class="text-center">Rs.<?= $fund['fund_raised']; ?></p>
                            </td>




                            <td class=" align-content-center">
                                <!-- Example actions -->
                                <a href="<?= base_url('fund_raise/edit/' . $fund['id']) ?>"
                                    class=" text-info fs-4  btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?= base_url('fund_raise/delete/' . $fund['id']) ?>"
                                    class=" ps-3 fs-4 text-danger"
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