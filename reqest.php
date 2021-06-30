<!doctype html>
<html lang="en">

<head>
    <title>ask for appointment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .heading {
        text-align: center;
        background-color: black;
        min-height: 30px;
        font-size: 30px;
        color: white;
        width: auto;

    }

    .btn {
        align: center;

    }

    .tab1 {
        margin: 10px;
        font-size: 18px;
        float: left;
    }

    .tab2 {
        margin: 10px;
        font-size: 18px;
        float: left;
    }

    .tab3 {
        margin: 10px;
        font-size: 18px;
        float: left;
    }


    btn-default {
        background-color: black;
        color: white;
        border: 2px;

    }
    </style>

</head>

<body>


    <div class="container">
        <form method="POST">
            <div class="container-fluid out">
                <div class="container reg">
                    <div class="col-sm-10 heading">
                        <b>REQUEST FOR APPOINTMENT</b>
                    </div>

                    <form class="form-horizontal" action="/action_page.php">
                        <!---Patient Reference ID --->
                        <div class="form-group">
                            <b><label class="control-label" for="pid">Patient Reference ID:</label></b>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pid" placeholder="PatientID" name="pid">
                            </div>
                        </div>
                        <div class="form-group">
                            <b><label class="control-label" for="relation">Choose Doctor :</label></b>
                            <div class="col-sm-10">
                                <select class="form-control" id="relation" placeholder="doctor1" name="relation">
                                    <option value="doctor1">doctor1</option>
                                    <option value="doctor2">doctor2</option>
                                    <option value="doctor3">doctor3</option>
                                    <option value="doctor4">doctor4</option>


                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <b> <label class="control-label" for="dob">Choose Date:</label></b>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="dob" placeholder="DD-MM-YYYY" name="dob">
                            </div>
                        </div>
                        <div class="form-group">
                            <b> <label class="control-label" for="time">Select Time For Appointment</label></b>
                            <div class="col-sm-10">
                                <input type="time" class="form-control" id="dob" placeholder="" name="dob">
                                <label for="">*choose time between 11:00AM to 3:00PM</label>

                            </div>
                        </div>



                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="container btn">
                                        <button type="submit" class="tab1"><b>Send Request</b></button>
                                        <button type="reset" class="tab2"><b>Reset</b></button>
                                        <button type="button" class="tab3"><b>Cancel</b></button>
                                    </div>
                                </div>
                    </form>
                </div>






            </div>
    </div>

    </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>