<?php
include('front-partials/sessions.php');
include('front-partials/log.php');
?>

<html>
    
    <head>
        <title>User Profile - Mr. Tea Truck</title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
      
    <div class="login">
        <h1 class="text-center">User Profile</h1>
        <form action="" method="POST" class="text-center">
        <br><br>
       <table>
       <tr>
            <div class="txt_field">
            <input type="text" name="full_name" value="<?php echo $row['full_name'];?>">
            <span></span>
            <label>Full Name</label>
           </tr>
           <tr>
           <div class="txt_field">
                <input type="text" name="address" value="<?php echo  $row['address'];?>">
                <span></span>
                <label>Address</label>
           </tr>
           <tr>
           <div class="txt_field">
                <input type="text" name="user" value="<?php echo  $row['user'];?>">
                <span></span>
                <label>Username</label>
           </tr>
           <tr>
           <div class="txt_field">
                <input type="text" name="contact" value="<?php echo $row['contact']; ?>">
                <span></span>
                <label>Contact</label>
       </table>


        
        <br><br><br>
        <a href="<?php echo SITEURL;?>update-profile.php" class="btn-front">Update Profile</a>
        <br><br>
        </form>
    </div>
    