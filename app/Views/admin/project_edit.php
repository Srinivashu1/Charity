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
                <form action="<?= base_url('project/update/'. $fund['id']); ?>" method="post" enctype="multipart/form-data">
              
                    <div class="row mb-4">
                        <div class="col-2 ">
                            <label class="form-label ">Title:</label>
                        </div>
                        <div class="col">
                            <input type="text" name="project_title" value="<?= $fund['project_title']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-2 ">
                            <label class="form-label ">Title:</label>
                        </div>
                        <div class="col">
                            <input type="text" name="sub_title" value="<?= $fund['sub_title']?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-2 ">
                            <label class="form-label ">Description:</label>
                        </div>
                        <div class="col">
                            <input type="text" name="description"  value="<?= $fund['description']?>" class="form-control" required>
                        </div>
                    </div>


                    <div class="row mb-4">
                        <div class="col-2 ">
                            <label class="form-label ">Goal fund:</label>
                        </div>
                        <div class="col">
                            <input type="text" name="goal_fund" value="<?= $fund['goal_fund']?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-2 ">
                            <label class="form-label ">Fund raised:</label>
                        </div>
                        <div class="col">
                            <input type="text" name="fund_raised" value="<?= $fund['fund_raised']?>" class="form-control" required>
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
                            <input type="file" name="image" value="<?= $fund['image']?>" class="form-control" >
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
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>