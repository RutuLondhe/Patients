<html>

<head>
    <title>Registration</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!---CSS for font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
    .form-group {
        margin-left: 10%;
    }

    .h {
        background-color: lightblue;
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
        margin-left: 11%;
        padding-right: 100px;
    }


    .btn {
        align: center;
    }

    .tab1 {
        margin: 10px;
        font-size: 18px;
    }

    btn-default {
        background-color: black;
        color: white;
        border: 2px;

    }
    </style>
</head>

<body>


    <div class="container-fluid out ml-10">
        <div class="container reg pl-5 pr-0">
            <div class="col-sm-10 heading">
                <b>'Register New Patient'</b>
            </div>
            <form class="form-horizontal" action="#">
                <!---Patient Reference ID --->
                <div class="form-group">
                    <b><label class="control-label" for="pid">Patient Reference ID:</label></b>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pid" placeholder="PatientID" name="pid">
                    </div>
                </div>
                <!---Patient Name --->
                <div class="form-group">
                    <label class="control-label" for="pname">Pateint'S Full Name:</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="pname" placeholder="Name" name="pname">
                    </div>
                </div>

                <!---Patient Adhar No --->
                <div class="form-group">
                    <label class="control-label" for="adhar">Pateint's Adhar No:</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="adhar" placeholder="Adhar No" name="adhar">
                    </div>
                </div>


                <!---Patient DOB --->
                <div class="form-group">
                    <label class="control-label" for="dob">Date of Birth:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="dob" placeholder="DD-MM-YYYY" name="dob">
                    </div>
                </div>



                <!---Patient Gender --->
                <div class="form-group">
                    <label class="control-label" for="gender">Gender:</label>
                    <div class="col-sm-10">

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
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="rname" placeholder="Name" name="rname">
                    </div>
                </div>


                <!---Relation with Patient --->
                <div class="form-group">
                    <label class="control-label" for="relation">Relation with Patient:</label>
                    <div class="col-sm-10">
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
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="contactno" placeholder="Mobile Number"
                            name="contactno">
                    </div>
                </div>


                <!---Alternate Contact No --->
                <div class="form-group">
                    <label class="control-label" for="acontactno">Alternate Contact Number:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="acontactno" placeholder="Mobile Number"
                            name="acontactno">
                    </div>
                </div>


                <!---Email ID --->
                <div class="form-group">
                    <label class="control-label" for="email">Email ID: (If available)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                </div>


                <!---Address --->
                <div class="form-group">
                    <label class="control-label">Address:</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            <label class="control-label" for="streetline1">Street Address Line 1:</label>
                            <input type="text" class="form-control" id="streetline1" name="streetline1">

                            <label class="control-label" for="streetline2">Street Address Line 2:</label>
                            <input type="text" class="form-control" id="streetline2" name="streetline2">

                            <label class="control-label" for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="city">

                            <label class="control-label" for="state">State:</label>
                            <input type="text" class="form-control" id="state" name="state">

                            <label class="control-label" for="nation">Nationality:</label>
                            <input type="text" class="form-control" id="nation" name="nation">
                        </div>
                    </div>
                </div>





                <!---Submit--->
                <div class="form-group">
                    <div class="container btn">
                        <button type="button" class="tab1" data-toggle="modal"
                            data-target="#mymodal"><b>Submit</b></button>
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

</html>