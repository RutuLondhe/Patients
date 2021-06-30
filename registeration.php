<!doctype html>
<html lang="en">

<head>
    <title>Patient Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .container {
        margin-top: 10px;
        padding-left: 10%;
        padding-right: 10%;
    }

    .control-label {
        padding-left: 15px;
    }

    .heading {
        text-align: center;
        background-color: purple;
        min-height: 30px;
        font-size: 40px;
        color: white;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="col heading">
            <b>Register New Patient</b>
        </div>
        <form class="form-horizontal" action="#">
            <!---Patient Reference ID --->
            <div class="form-group">
                <b><label class="control-label" for="pid">Patient Reference ID:</label></b>
                <div class="col">
                    <input type="text" class="form-control" id="pid" placeholder="PatientID" name="pid">
                </div>
            </div>
            <!---Patient Name --->
            <div class="form-group">
                <label class="control-label" for="pname">Pateint'S Full Name:</label>
                <div class="col">
                    <input type="text" class="form-control" id="pname" placeholder="Name" name="pname">
                </div>
            </div>

            <!---Patient Adhar No --->
            <div class="form-group">
                <label class="control-label" for="adhar">Pateint's Adhar No:</label>
                <div class="col">
                    <input type="text" class="form-control" id="adhar" placeholder="Adhar No" name="adhar">
                </div>
            </div>


            <!---Patient DOB --->
            <div class="form-group">
                <label class="control-label" for="dob">Date of Birth:</label>
                <div class="col">
                    <input type="date" class="form-control" id="dob" placeholder="DD-MM-YYYY" name="dob">
                </div>
            </div>



            <!---Patient Gender --->
            <div class="form-group">
                <label class="control-label" for="gender">Gender:</label>
                <div class="col">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="option1">
                        <label class="form-check-label" for="gender1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="option2">
                        <label class="form-check-label" for="gender2">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender3" value="option3">
                        <label class="form-check-label" for="gender3">
                            Other
                        </label>
                    </div>
                </div>
            </div>

            <!---Relative with patient --->
            <div class="form-group">
                <label class="control-label" for="rname">Name of Relative:</label>
                <div class="col">
                    <input type="text" class="form-control" id="rname" placeholder="Name" name="rname">
                </div>
            </div>


            <!---Relation with Patient --->
            <div class="form-group">
                <label class="control-label" for="relation">Relation with Patient:</label>
                <div class="col">
                    <select class="form-control" id="relation" placeholder="Son" name="relation">
                        <option value="Son">Son</option>
                        <option value="Daughter">Daughter</option>
                        <option value="Mother">Mother</option>
                        <option value="Father">Father</option>
                        <option value="Aunt">Aunt</option>
                        <option value="Uncle">Uncle</option>
                        <option value="Other">Other</option>
                    </select>

                </div>
            </div>

            <!---Contact No --->
            <div class="form-group">
                <label class="control-label" for="contactno">Contact Number:</label>
                <div class="col">
                    <input type="text" class="form-control" id="contactno" placeholder="Mobile Number" name="contactno">
                </div>
            </div>


            <!---Alternate Contact No --->
            <div class="form-group">
                <label class="control-label" for="acontactno">Alternate Contact Number:</label>
                <div class="col">
                    <input type="text" class="form-control" id="acontactno" placeholder="Mobile Number"
                        name="acontactno">
                </div>
            </div>


            <!---Email ID --->
            <div class="form-group">
                <label class="control-label" for="email">Email ID: (If available)</label>
                <div class="col">
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                </div>
            </div>


            <!---Address --->
            <div class="form-group">
                <label class="control-label">Address:</label>
                <div class="row">
                    <div class="col">
                        <label class="control-label" for="streetline1">Street Address Line 1:</label>
                        <input type="text" class="form-control" id="streetline1" name="streetline1"
                            style="padding-left: 15px">
                    </div>
                </div>
                <label class="control-label" for="streetline2">Street Address Line 2:</label>
                <input type="text" class="form-control" id="streetline2" name="streetline2" style="padding-left: 15px;">

                <label class="control-label" for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" style="padding-left: 15px;">

                <label class="control-label" for="state">State:</label>
                <input type="text" class="form-control" id="state" name="state" style="padding-left: 15px;">

                <label class="control-label" for="nation">Nationality:</label>
                <input type="text" class="form-control" id="nation" name="nation" style="padding-left: 15px;">
            </div>





            <!---Submit--->
            <div class="form-group">
                <div class="container btn">
                    <button type="button" class="tab1" data-toggle="modal" data-target="#mymodal"><b>Submit</b></button>
                    <div id="mymodal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Are you sure to submit this form?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>

                                </div>
                            </div>

                        </div>
                    </div>

                    <button type="reset" class="tab1"><b>Reset</b></button>
                    <button type="button" class="tab1"><b>Cancel</b></button>
                </div>
            </div>
        </form>
    </div>
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