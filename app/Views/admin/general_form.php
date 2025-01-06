<?= $this->extend('admin/index') ?>

<?= $this->section('content') ?>

<style>
.upcoming-event {
    max-width: 700px;
    /* margin: 30px auto; */
    background-color: #fff;
    justify-content: start;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.event-header {
    background-color: #2A3F54;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 24px;
}

.event-details {
    display: flex;
    flex-wrap: wrap;
    padding: 20px;
}

.event-photo {
    flex: 1 1 40%;
    max-width: 40%;
}

.event-photo img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.event-info {
    flex: 1 1 60%;
    max-width: 60%;
    padding: 0 20px;
}

.event-info h3 {
    margin-top: 0;
    color: #333;
}

.event-info p {
    margin: 8px 0;
    color: #555;
    font-size: 16px;
}
</style>

<section>
    <div class="container">
        <h1 class="">General form </h1>
        <h3 class="text-primary">Our Next Event will Launch</h3>
        <div class="upcoming-event">
            <?php
            $dateString =  $event['event_date']; // Input date in dd/mm/yyyy format
            $date = DateTime::createFromFormat('Y-m-d', $dateString); // Parse the date
            ?>

            <div class="event-header">Upcoming Event</div>
            
            <div class="event-details">
                <div class="event-photo">
                    <img src="<?= base_url() ."/uploads/".$event['image']; ?>" alt="Event Photo" width="100"
                        height="60">


                </div>
                <div class="event-info">
                    <h3 class="event-name">Event Name: <?= $event['event_name']?></h3>
                    <p class="event-date">Date: <?= $date->format('M d-Y')?> </p>
                    <p class="event-time">Time: <?= $event['start_time']?> - <?= $event['end_time']?></p>
                    <p class="event-location">Location: <?= $event['location']?></p>
                </div>
                <div class="col d-flex justify-content-center mt-4">
                    <button type="button" class="btn btn-info " data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Change
                    </button>
                </div>
            </div>
        </div>




    </div>
</section>

<div class="container">



    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4 text-center" id="staticBackdropLabel">Up Coming Event</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding:30px">
                    <div class="align-self-center">
                        <form action="<?= base_url('event/update/'. $event['id']); ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="row mb-4">
                                <div class="col-4 ">
                                    <label class="form-label ">Event name</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="event_name" value="<?= $event['event_name']?>"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-4 ">
                                    <label class="form-label ">Date:</label>
                                </div>
                                <div class="col">
                                    <input type="date" name="event_date" value="<?= $event['event_date']?>"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="row mb-4">
                                <div class="col-4 ">
                                    <label class="form-label ">Starting Time :</label>
                                </div>
                                <div class="col">
                                    <input type="time" name="start_time" value="<?= $event['start_time']?>"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-4 ">
                                    <label class="form-label ">End Time :</label>
                                </div>
                                <div class="col">
                                    <input type="time" name="end_time" value="<?= $event['end_time']?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4 ">
                                    <label class="form-label ">Location :</label>
                                </div>
                                <div class="col">
                                    <select name="location" id="" class="form-select" value="<?= $event['location']?>"
                                        aria-label="Default select example">
                                        <option value="<?= $event['location']?>" selected><?= $event['location']?>
                                        </option>
                                        <option value="Ariyalur">Ariyalur</option>
                                        <option value="Chengalpattu">Chengalpattu</option>
                                        <option value="Chennai">Chennai</option>
                                        <option value="Coimbatore">Coimbatore</option>
                                        <option value="Cuddalore">Cuddalore</option>
                                        <option value="Dharmapuri">Dharmapuri</option>
                                        <option value="Dindigul">Dindigul</option>
                                        <option value="Erode">Erode</option>
                                        <option value="Kallakurichi">Kallakurichi</option>
                                        <option value="Kanchipuram">Kanchipuram</option>
                                        <option value="Kanyakumari">Kanyakumari</option>
                                        <option value="Karur">Karur</option>
                                        <option value="Krishnagiri">Krishnagiri</option>
                                        <option value="Madurai">Madurai</option>
                                        <option value="Mayiladuthurai">Mayiladuthurai</option>
                                        <option value="Nagapattinam">Nagapattinam</option>
                                        <option value="Namakkal">Namakkal</option>
                                        <option value="Nilgiris">Nilgiris</option>
                                        <option value="Perambalur">Perambalur</option>
                                        <option value="Pudukkottai">Pudukkottai</option>
                                        <option value="Ramanathapuram">Ramanathapuram</option>
                                        <option value="Ranipet">Ranipet</option>
                                        <option value="Salem">Salem</option>
                                        <option value="Sivaganga">Sivaganga</option>
                                        <option value="Tenkasi">Tenkasi</option>
                                        <option value="Thanjavur">Thanjavur</option>
                                        <option value="Theni">Theni</option>
                                        <option value="Thoothukudi">Thoothukudi</option>
                                        <option value="Tiruchirappalli">Tiruchirappalli</option>
                                        <option value="Tirunelveli">Tirunelveli</option>
                                        <option value="Tirupathur">Tirupathur</option>
                                        <option value="Tiruppur">Tiruppur</option>
                                        <option value="Tiruvallur">Tiruvallur</option>
                                        <option value="Tiruvannamalai">Tiruvannamalai</option>
                                        <option value="Tiruvarur">Tiruvarur</option>
                                        <option value="Vellore">Vellore</option>
                                        <option value="Viluppuram">Viluppuram</option>
                                        <option value="Virudhunagar">Virudhunagar</option>


                                    </select>
                                </div>
                            </div>


                            <div class="row mb-4">
                                <div class="col-4">
                                    <label class="form-label">Photo</label>
                                </div>
                                <div class="col">
                                    <img src="<?= base_url() ."/uploads/".$event['image']; ?>" alt="Image" width="100"
                                        height="60">


                                </div>
                                <div class="col-2">
                                    <label for="photo1">Change</label>
                                </div>
                                <div class="d-none ">
                                    <input type="file" id="photo1" name="image" class="form-control" hidden>
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





<?= $this->endSection() ?>