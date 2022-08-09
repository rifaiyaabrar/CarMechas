<?php include 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/42c7407e68.js" crossorigin="anonymous"></script>

</head>

<body class="container-main">

    <!-- navbar -->
    <div class="topnav">
        <a class="brand" href="#home">Car <br>Service</a>
        <a class="nav-link" href="#news">Logout</a>
        <a class="nav-link" href="#contact">Schedule</a>
        <a class="nav-link" href="#about">Appointments</a>
    </div>

    <section class="header-section">
        <div class="header-div">

            <div class="header-img">
                <img style="width: 100%;filter: grayscale(100%);" src="images/mechanic.jpg" alt="mechanic image">
            </div>
            <div class="header">
                <h1 class="title-header">ADMIN <br> PANEL</h1>
            </div>
        </div>
    </section>
     

    <?php 
        $sql= 'SELECT * FROM appointments_list';
        $result = mysqli_query($conn, $sql);
        $appointments_list=mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>


    <section class="appointmentList-section">
        <div>
            <h2 class="section-header">
                APPOINTMENTS LIST
            </h2>
            <hr>

            <?php if(empty($appointments_list)): ?>
                <p style="color:white">There is no value</p>
            <?php endif; ?>


            <table class="list-table">
                <tr>
                    <th>Serial No</th>
                    <th>Client Name</th>
                    <th>Phone Number</th>
                    <th>Car Registration Number</th>
                    <th>Appointment Date</th>
                    <th>Mechanic Name</th>
                </tr>
                
                <?php foreach($appointments_list as $client): ?>
                <tr>
                    <td><?php echo $client['id']; ?></td>
                    <td><?php echo $client['name']; ?></td>
                    <td><?php echo $client['phone']; ?></td>
                    <td><?php echo $client['car_license_number']; ?></td>
                    <td class="normal"><?php echo $client["date"]; ?><button class="work-button cngDate" onclick="change(this.parentElement); status_update('<?php echo $client['id']?>');">Change</button></td>
                    <td class="normal2"><?php echo $client['mechanic']; ?> <button class="work-button cngMech" onclick="change2(this.parentElement); status_update2('<?php echo $client['id']?>');">Change</button></td>
                </tr>
                <?php endforeach; ?>

                <!-- <script>alert(update_ID)</script> -->
                <!-- '<script>alert(update_ID);document.write(update_ID)</script> ' -->


            <!-- for date -->


               <?php 
                $id_chnge= $_COOKIE["IDD"];
                // echo $id_chnge;
                if(isset($_POST['submit'])){
                    $date=$dateErr='';
                    if(empty($_POST['date'])){
                        echo $dateErr='date is required';
                      }else{
                        // $date = preg_replace("([^0-9/])", "", $_POST['date']);
                          $date = filter_input(INPUT_POST,'date',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        //   echo $date;
                        //   echo $dateErr;
                      }
                    if(empty($dateErr)){
                        $sql='';
                        $sql="UPDATE appointments_list 
                        SET date = '$date' 
                        WHERE appointments_list.id = '$id_chnge'";
                        echo "<meta http-equiv='refresh' content='0'>";
                    }
                    if(mysqli_query($conn, $sql)){
                        //success
                        // header("Location: admin.php");
                        
                        // echo 'lessgoo';
                      }else{
                        echo 'Error: '. mysqli_error($conn);
                      }
                }

               
               ?>

              <!-- for mechanic -->


               <?php 
                $id_chnge2= $_COOKIE["IDD2"];
                // echo $id_chnge2;
                if(isset($_POST['submit'])){
                    $mechanic=$mechanicErr='';
                    if(empty($_POST['mechanic'])){
                        echo $mechanicErr='mechanic is required';
                      }else{
                        // $date = preg_replace("([^0-9/])", "", $_POST['date']);
                          $mechanic = filter_input(INPUT_POST,'mechanic',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        //   echo $mechanic;
                        //   echo $mechanicErr;
                      }
                    if(empty($mechanicErr)){
                        $sql='';
                        $sql="UPDATE appointments_list 
                        SET mechanic = '$mechanic' 
                        WHERE appointments_list.id = '$id_chnge2'";
                        echo "<meta http-equiv='refresh' content='0'>";
                    }
                    if(mysqli_query($conn, $sql)){
                        //success
                        // header("Location: admin.php");
                        
                        // echo 'lessgoo';
                      }else{
                        echo 'Error: '. mysqli_error($conn);
                      }
                }

               
               ?>

            </table>
        </div>
    </section>
    <section class="footer-section">
        <div class="footer-row">
            <div class="footer-left">
                <p class="footer-text">Car Service &copy; 2022 • Privacy Policy </p>
                <div class="footer-icons-div">
                    <i class="fa-brands fa-facebook-f footer-icons"></i>
                    <i class="fa-solid fa-envelope footer-icons-f"></i>
                    <i class="fa-brands fa-github footer-icons-f"></i>
                    <i class="fa-brands fa-twitter footer-icons-f"></i>

                </div>
            </div>
            <div class="footer-right">
                <p>
                    Toyota Motors And Car Servicing Center <br>
                    New lake road, gulshan ,<br> south badda, holding no. B 117/4 <br> Jhil park, Dhaka 1212
                </p>
                <p>Phone: <span style="color: #f85b5b;"> 01705478925</span> <br> Office: <span style="color: #f85b5b;">
                        01633528794</span></p>
            </div>
        </div>

        <div class="mapp">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7302.269749664342!2d90.41833001593788!3d23.77821101594866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c784fb2d1903%3A0xf969554f8ea777ab!2sToyota%20Motors%20And%20Car%20Servicing%20Center!5e0!3m2!1sen!2sbd!4v1656061966678!5m2!1sen!2sbd"
                width="400" height="300" style="border:0;float:right" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>

    <script>
        
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <script src="js/script.js"></script>
</body>

</html>




<!-- <form method="POST" action="/php-lab3/admin.php"><select class="custom-select" name="custom-select" id="custom-select" required><option value="" disabled selected hidden>Choose Your Mechanic</option><option id="as" value="1">Shaktiman</option><option value="2">Riyadh</option><option value="3">Ejaz</option><option value="4">Aosaf</option></select><button class="work-button cngMech" onclick="change2(this.parentElement);">Confirm</button></form> -->
                <!-- <tr>
                    <td>2</td>
                    <td>Nushin</td>
                    <td>01748989282</td>
                    <td>8840398234248023</td>
                    <td>2nd July,2022 <button class="work-button">Change</button></td>
                    <td>Riyadh <button class="work-button">Change</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Shiba</td>
                    <td>01839221282</td>
                    <td>98403348239048325</td>
                    <td>4th July,2022 <button class="work-button">Change</button></td>
                    <td><select class="custom-select" name="custom-select" id="custom-select" required>
                            <option value="" disabled selected hidden>Choose Your Mechanic</option>
                            <option id="as" value="1">Shaktiman</option>
                            <option value="2">Riyadh</option>
                            <option value="3">Ejaz</option>
                            <option value="4">Aosaf</option>
                        </select> <button class="work-button">Confirm</button><button
                            class="work-button">Cancel</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Nowzin</td>
                    <td>01839399282</td>
                    <td>98403348239048325</td>
                    <td>3rd July,2022 <button class="work-button">Change</button></td>
                    <td>Aosaf <button class="work-button">Change</button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Tanni</td>
                    <td>01662989282</td>
                    <td>9840398239048023</td>
                    <td><input type="date" id="userDate" placeholder="Select Date"> <button
                            class="work-button">Confirm</button><button class="work-button">Cancel</button></td>
                    <td>Ejaz <button class="work-button">Change</button></td>
                </tr> -->