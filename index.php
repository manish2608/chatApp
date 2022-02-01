<?php
   session_start();
   if(isset($_SESSION['unique_id'])){
       header("location:usersList.php");
   }
?>
<?php
include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>User Registration</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="first name" required>
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="last name" required>
                    </div>
                </div>

                <div class="field input">
                    <label for="">Email id</label>
                    <input type="email" name="email" placeholder="abc@gmil.com" required>
                </div>
                <div class="field input">
                    <label for="">Pasword</label>
                    <input type="password" name="password" placeholder="********" required>
                    <i class="fa fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="">Select Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field btn">

                    <input type="submit" value="signup">
                </div>


            </form>
            <div class="link">Already singned up ?<a href="usersLogin.php">Login Now</a></div>
        </section>

    </div>
    <script src="javaScript/pass-show-hide.js"></script>
    <script src="javaScript/userssignup.js"></script>
</body>

</html>