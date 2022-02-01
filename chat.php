<?php
   session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: usersList.php");
    }
?>

<?php
   include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
             <?php
               include_once "php/config.php";
               $user_id=mysqli_real_escape_string($conn,$_GET['users_id']);
               $sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id={$user_id}");
               if(mysqli_num_rows($sql) > 0){
                 $row=mysqli_fetch_assoc($sql);
                }    
             ?>

                <a href="usersList.php" class="back-icon"><i class="fas fa-arrow-circle-left"></i></a>
                <img src="php/images/<?php echo $row['img'] ?>" alt="">
                    <div class="detail">
                        <span><?php echo $row['fname'] ." ".$row['lname'] ?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>

            </header>
            <div class="chat-box">
               

            </div>

            <form action="" class="typing-area">
                <!--<button><i class="fas fa-file"></i></button>
                <button><i class="fas fa-file-image"></i></button>-->
                <input type="text" name="outgoing-id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming-id" value="<?php echo  $user_id; ?>" hidden>
                <input type="text" class="input-field" name="message" placeholder="type a message here....">
                <button>send</button>
            </form>
        </section>

    </div>
    <script src="javaScript/chat.js"></script>
</body>

</html>