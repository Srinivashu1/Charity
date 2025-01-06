<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
        a{
            text-decoration:none;
            color: #ffffff;
        }
    </style>
    



</head>


<body>

    <section class="insert">
        <div class="container">
     


      
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <div class="col-10">
                    <div class="row">
                        <div class="col-11"><h1 class="mb-4">Project Fund Raised List</h1></div>
                                    
                        <div class="col d-flex justify-content-end  mb-3">
                            <button type="button" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="bi bi-cloud-upload"></i>   </button>
                            <button type="button" class="btn btn-danger ms-4 " > <a href="/admin"><i class="bi bi-back"></i> </a>  </button>


                        </div>
                    </div>
            
                    
                    <table class="table table-success table-striped h6">
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
                        <tbody >
                            <?php if (!empty($donors) && is_array($donors)): ?>
                                <?php $i=1; foreach ($donors as $row): ?>
                                    <tr class=" text-center ">
                                        <td  class="align-content-center"><?= $i ?></td>
                                        <td  class="align-content-center">         
                                            <img src="<?= base_url() ."/uploads/".$row['image']; ?>" alt="Image" width="100" height="60">
                                        </td>
                                        <td class="align-content-center"><p><?= $row['donor_name']; ?></p></td>
                                        <td class="align-content-center text-start"><p><?= $row['experience']; ?></p></td>
                                        <td  class="align-content-center"><p class="text-center">Rs.<?= $row['job']; ?></p></td>

                                        
                        
                                    
                                        <td class =" align-content-center">
                                            <!-- Example actions -->
                                            <a href="<?= base_url('donor/edit/' . $row['id']) ?>" class=" text-info fs-4  btn-sm"><i class="bi bi-pencil-square"></i></a>
                                            <a href="<?= base_url('donor/delete/' . $row['id']) ?>"class=" ps-3 fs-4 text-danger" onclick="return confirm('Are you sure you want to delete this item?')"><i class="bi bi-trash3-fill"></i></a>
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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

   
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>