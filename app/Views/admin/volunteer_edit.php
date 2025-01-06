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

    



</head>


<body>

    <section class="edit">
        <div class="container">
            <div class="align-self-center">
                <form action="<?= base_url('volunteer_edit/'. $row['id']);?>" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
                        <div class="col-4 ">
                            <label class="form-label ">Volunter Name:</label>
                        </div>
                        <div class="col">
                            <input type="text" name="volunteer_name" value="<?= esc($row['volunteer_name']); ?>" class="form-control">
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
                            <label for ="" class="form-label">Image</label>
                        </div>
                        <div class="col-2">
                            <img src="<?= base_url() ."/uploads/".$row['image']; ?>" alt="row Image" width="100" height="60">

                        </div>
                        <div class="col ">
                            <input type="file" id ="upload" name="vol_image" value="<?= esc($row['image']); ?>" class="form-control">
                        </div>
                    </div>                              
                    <div class="">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>



        
    
        </div>
    </section>






    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>







