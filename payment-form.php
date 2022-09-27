<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <style>
    a {
        text-decoration: none;
    }

    .login-page {
        width: 100%;
        height: 100vh;
        display: inline-block;
        display: flex;
        align-items: center;
    }

    .form-right i {
        font-size: 100px;
    }
    </style>
</head>

<body>
    <!-- <form action="pay.php" method="post">
        Price: <input type="text" name="price"><br>
        Name: <input type="text" name="customername"><br>
        Email: <input type="email" name="email"><br>
        Contact No: <input type="text" name="contactno"><br>
        <input type="submit" name="submit" value="Proceed To Pay">
    </form> -->
    <h3 style="text-align:center;margin:20px;">Payment Form</h3>

    <!-- <div class="container"style="margin-top:50px;border:2px solid black;border-radius:10px;padding:40px">
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="customername"/>
                    <label class="form-label" for="form3Example1">Name</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" name="price"/>
                    <label class="form-label" for="form3Example2">Price</label>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="email" id="form3Example1" class="form-control" name="email"/>
                    <label class="form-label" for="form3Example1">Email</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" name="contactno"/>
                    <label class="form-label" for="form3Example2">Contact no</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">PAY</button>

        </div>
         -->
    <div class="login-page bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="pay.php" method="post" class="row g-4">
                                        <div class="col-12">
                                            <label>FullName<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                </div>
                                                <input type="text" name="customername" class="form-control"
                                                    placeholder="Enter Full Name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Mobile<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                </div>
                                                <input type="text" name="contactno" class="form-control"
                                                    placeholder="Enter Mobile Number">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                </div>
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Enter Email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label>Gender<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="form-check" style="margin-right:30px;">
                                                    <input name="gender" value="Male" class="form-check-input"
                                                        type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="gender" class="form-check-input" value="Female"
                                                        type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                                        checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Fees<span class="text-danger"></span></label>
                                            <div class="input-group">
                                                <div class="input-group-text">₹
                                                    <i class="bi bi-lock-fill"></i>
                                                </div>
                                                <input type="text" name="price" value="100" class="form-control"
                                                    placeholder="" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">Remember
                                                    me</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary px-4 float-end mt-4">Continue</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                    <i class="bi bi-bootstrap"></i>
                                    <h2 class="fs-1">Welcome Back!!!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>