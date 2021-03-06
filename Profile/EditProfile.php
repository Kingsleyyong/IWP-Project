<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" href="../assets/style2.css"/>
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
                                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
                                crossorigin="anonymous">
        <!-- NAV UI Import here -->
        <?php require("../Navigation Bar and Footer/navbar.php"); ?> 
        <script>
            function changeImage( ) {
                dp.src=URL.createObjectURL(event.target.files[0]);
            }
        </script>
    </head>

    <?php 
        include("data_connection.php");

        if(isset($_GET['view'])) {
            $uID = $_GET['uid'];
            $result = mysqli_query($conn, "SELECT * FROM user WHERE userID=$uID");
            $userData = mysqli_fetch_assoc($result);

            $uname = $user_data["userName"];
            $ugender = $user_data["gender"];
            $udob = $user_data["dateOfBirth"];
            $ucontact = $user_data["userContact"];
            $uemail = $user_data["userEmail"];
            $uaddress = $user_data["residentialAddress"];
        }

        if(isset($_POST['savebtn'])){
            
            $username = $_POST['username'];
            $gender = $_POST['gender'];
            $birthday = $_POST['dob'];
            $contactNumber = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $pass = $_POST['confirmPass'];

            $query =    "UPDATE user SET userName = '$username', userEmail = '$email', userContact = '$contactNumber',
                        userPassword = '$pass', gender = '$gender', dateOfBirth = '$birthday', residentialAddress = '$address'
                        WHERE userID = '$uID' ";

            mysqli_query($conn, $query);

            ?>
	        <script>alert("Successfully updated!!"); </script>
	        <?php 
            header("Location: ViewProfile.php?view&uid=$uID");
        }
    ?>
    
    <body class="bg-dark text-light">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col">
                    <form name="profileForm" id="profileForm" method="post">
                        <div class="container form-group">
                            <div class="row my-2">
                                <div class="col">
                                    <label>Username : </label>
                                    <input type="text" name="username" class="form-control" maxlength="24" size="48px" required
                                            value="<?php echo $uname?>"/>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label class="mr-4 pr-4">Gender : </label>
                                    <?php 
                                    if($ugender == "Male") {
                                    ?>
                                        <input type="radio" class="ml-4 mr-2" id="m" name="gender" value="Male" required checked/> Male
                                        <input type="radio" class="ml-4 mr-2" id="m" name="gender" value="Female" required/> Female
                                    <?php   
                                    }
                                    else if($ugender == "Female")
                                    {
                                    ?>
                                        <input type="radio" class="ml-4 mr-2" id="m" name="gender" value="Male" required/> Male
                                        <input type="radio" class="ml-4 mr-2" id="m" name="gender" value="Female" required checked/> Female
                                        <?php   
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label>Date of Birth : </label>
                                    <input type="date" class="form-control" name="dob" min="1941-01-01" max="2009-12-31" required
                                    value="<?php echo $udob?>"/>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label>Contact Number : </label>
                                    <input type="tel" name="phone" class="form-control" 
                                        pattern="([0]{1}[1]{1}[0-9]{8})|([0]{1}[1]{1}[0-9]{9})" size="48px" 
                                        placeholder="Contact eg: 0123456789" required   value="<?php echo $ucontact?>"/>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label>Email Address : </label>
                                    <input type="email" class="form-control" name="email" size="48px" required
                                        value="<?php echo $uemail?>"/>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label>Residential Address : </label>
                                    <textarea name="address" class="form-control" rows="6" cols="51"><?php echo $uaddress?></textarea>                             
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label class="pr-4">Update Password : </label>
                                    <input type="password" class="form-control-lg" name="pass" size="48px" required/>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label class="pr-4">Confirm Password : </label>
                                    <input type="password" class="form-control-lg" name="confirmPass" id="confirmPass" size="48px" required/>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <button type="submit" name="savebtn" id="savebtn" class="btn btn-primary m-auto" value="SAVE" onclick="checkPW();">SAVE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script style="text/javascript">
            function checkPW( ) {
                var PW = document.profileForm.pass.value;
                var confirmPW = document.profileForm.confirmPass.value;

                if(confirmPW!=0 && PW!=confirmPW) {
                    document.getElementById("confirmPass").setCustomValidity("Passwords Don't Match!!!");
                }
                else {
                    document.getElementById("confirmPass").setCustomValidity("");
                }
            }
        </script>

        <!-- Footer UI Import Here -->
        <?php require("../Navigation Bar and Footer/footer.html"); ?> 
    </body>
</html>