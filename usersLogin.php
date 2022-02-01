<?php
   session_start();
   if(isset($_SESSION['unique_id'])){
       header("location: usersList.php");
   }
?>
<?php
include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Log In</header>
            <form action="#" autocomplete="off">
                <div class="error-text"></div>


                <div class="field input">
                    <label for="">Email id</label>
                    <input type="email" name="email" placeholder="abc@gmil.com">
                </div>
                <div class="field input">
                    <label for="">Pasword</label>
                    <input type="password" name="password" placeholder="********">
                    <i class="fa fa-eye"></i>
                </div>


                <div class="field btn">

                    <input type="submit" value="LogIn">
                </div>


            </form>
            <div class="link">Not yet singned up ?<a href="index.php">Signup Now</a></div>
        </section>

    </div>
    <script src="javaScript/pass-show-hide.js"></script>
    <script src="javaScript/userslogin.js"></script>
</body>

</html>