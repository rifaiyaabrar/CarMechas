<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'config/database.php'; ?>
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
        <a class="brand" href="#header-section">Car <br>Service</a>
        href="#contact">Contact
        <a class="nav-link" href="#contact">Contact</a>
        <a class="nav-link" href="#appo">Appointment</a>
        <a class="nav-link" href="#about">About</a>
    </div>

    <section class="header-section" id="header-section">
        <div class="header-div">

            <div class="header-img">
                <img style="width: 100%;filter: grayscale(100%);" src="images/mechanic.jpg" alt="mechanic image">
            </div>
            <div class="header">
                <h1 class="title-header">COMPLETE AUTO <br> SERVICE</h1>
            </div>
        </div>
    </section>
    <div class="work">
        <div class="work-card work-card-first">
            <h3 class="work-header">OIL CHANGE</h3>
            <hr>
            <div class="icon"><i class="fa-solid fa-droplet fa-2xl"></i></div>
            <p class="work-p">
                Need to refill your oil? We got your back! Just come by to our shop and we will refill it for you.
            </p>
            <button class="work-button">Location</button>
        </div>
        <div class="work-card">
            <h3 class="work-header">ENGINE REPAIR</h3>
            <hr>
            <div class="icon"><i class="fa-solid fa-gears fa-2xl"></i></div>
            <p class="work-p">
                Some engines giving your trouble? no worries when our engineers are right outside your doorsteps.
            </p>
            <button class="work-button">Appointment</button>
        </div>
        <div class="work-card work-card-last">
            <h3 class="work-header">SCHEDULED MAINTAINCE</h3>
            <hr>
            <div class="icon"><i class="fa-solid fa-wrench fa-2xl"></i></div>
            <p class="work-p">
                Your car is bugging you and you don't know what is the problem? Schedule a appointment and get it fixed!
            </p>
            <button class="work-button">Appointment</button>
        </div>

    </div>

    <section class="about-us" id="about">
        <div class="us-container">
            <div class="activities us-sub">
                <h2 class="section-header">
                    WHAT WE DO
                </h2>
                <hr>
                <p class="us-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
            <div class="why-us us-sub">
                <h2 class="section-header">
                    WHY US
                </h2>
                <hr>
                <p class="us-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </section>

    <section class="appointment-section" id="appo">
        <h2 class="section-header">MAKE AN APPOINTMENT</h2>
        <hr>
        <?php
           $name = $phone = $address = $car_license_number = $car_engine_number = $date =$mechanic ='';
           $nameErr = $phoneErr = $addressErr = $car_license_numberErr = $car_engine_numberErr = $dateErr=$mechanicErr='';
           
        //    form submit
          if(isset($_POST['submit'])){
            // validate name
            // echo 'lalaa';
            if(empty($_POST['name'])){
              $nameErr='Name is required';
            }else{
                $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                // $name='aaaaa';
            }
             // validate phone
            if(empty($_POST['phone'])){
                $phoneErr='phone is required';
              }else{
                  $phone = filter_input(INPUT_POST,'phone',FILTER_SANITIZE_NUMBER_INT);
              }
               // validate address
            if(empty($_POST['address'])){
                $addressErr='address is required';
              }else{
                  $address = filter_input(INPUT_POST,'address',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
              }
               // validate car_license
            if(empty($_POST['car_license_number'])){
                $car_license_numberErr='car_license_number is required';
              }else{
                  $car_license_number = filter_input(INPUT_POST,'car_license_number',FILTER_SANITIZE_NUMBER_INT);
              }
               // validate car_engine
            if(empty($_POST['car_engine_number'])){
                $car_engine_numberErr='car_engine_number is required';
              }else{
                  $car_engine_number = filter_input(INPUT_POST,'car_engine_number',FILTER_SANITIZE_NUMBER_INT);
              }
               // validate date
            if(empty($_POST['date'])){
                $dateErr='date is required';
              }else{
                // $date = preg_replace("([^0-9/])", "", $_POST['date']);
                  $date = filter_input(INPUT_POST,'date',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
              }
               // validate mechanic
            if(empty($_POST['mechanic'])){
                $mechanicErr='mechanic is required';
              }else{
                  $mechanic = filter_input(INPUT_POST,'mechanic',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
              }

              if(empty($nameErr) && empty($phoneErr) && empty($addressErr) && empty($car_license_numberErr) && empty($car_engine_numberErr) && empty($dateErr) && empty($mechanicErr)){
                // add to data base
                $sql= "INSERT INTO appointments_list (name, phone, address, car_license_number, car_engine_number, date, mechanic) VALUES ('$name', '$phone', '$address', '$car_license_number', '$car_engine_number', '$date', '$mechanic')";
                if(mysqli_query($conn, $sql)){
                    //success
                    // header("Location: admin.php");
                    // echo 'lessgoo';
                  }else{
                    echo 'Error: '. mysqli_error($conn);
                  }
              }
              
          }
        //   echo $dateErr;
        //   echo $date;
          

        ?>


        <div class="appointment-form">


   <!-- temporary figuring out slots          -->
<?php  
        $shakti;
        $Ejaz;
        $Aosaf;
        function slots($number){
            return 3-$number;
         }
        $sql='';
        $sql= 'SELECT COUNT(mechanic) AS Appointments FROM appointments_list WHERE mechanic="Shaktiman";';
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
            $shakti=(int)$row["Appointments"];
            
        }
        $sql='';
        $sql= 'SELECT COUNT(mechanic) AS Appointments FROM appointments_list WHERE mechanic="Ejaz";';
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
            $Ejaz=(int)$row["Appointments"];
        }
        $sql='';
        $sql= 'SELECT COUNT(mechanic) AS Appointments FROM appointments_list WHERE mechanic="Aosaf";';
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
            $Aosaf=(int)$row["Appointments"];
        }
        $sql='';
        $sql= 'SELECT COUNT(mechanic) AS Appointments FROM appointments_list WHERE mechanic="Riyadh";';
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
            $Riyadh=(int)$row["Appointments"];
        }
        $sql='';
        $sql= 'SELECT COUNT(mechanic) AS Appointments FROM appointments_list WHERE mechanic="Meshal";';
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
            $Meshal=(int)$row["Appointments"];
        }
    
    ?>
         <!-- ******************* -->


            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="myForm" method="POST" autocomplete="off">
                <div class="inline-formcell">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="inline-formcell">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="formcell-wholeline">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="inline-formcell third">
                    <label for="car-license">Car License Number</label>
                    <input type="text" id="car-license" name="car_license_number" required>
                </div>
                <div class="inline-formcell third">
                    <label for="car-engine">Car Engine Number</label>
                    <input type="text" id="car-engine" name="car_engine_number" required>
                </div>
                <div class="date-mechanic">
                    <div class="inline-formcell">
                        <label for="car-engine">Date</label>
                        <input type="date" id="userDate" name="date"placeholder="Select Date" required>
                    </div>
                    <div class="inline-formcell">
                        <label for="custom-select">Mechanic</label>
                        <select class="custom-select" name="mechanic" id="custom-select" required>
                            <option value="" disabled selected hidden>Choose Your Mechanic</option>
                            <option value="Shaktiman">Shaktiman  &nbsp;(slots remaining <?php echo slots($shakti)?>)</option>
                            <option value="Riyadh">Riyadh  &nbsp;(slots remaining <?php echo slots($Riyadh)?>)</option>
                            <option value="Ejaz">Ejaz  &nbsp;(slots remaining <?php echo slots($Ejaz)?>)</option>
                            <option value="Aosaf">Aosaf  &nbsp;(slots remaining <?php echo slots($Aosaf)?>)</option>
                            <option value="Meshal">Meshal  &nbsp;(slots remaining <?php echo slots($Meshal)?>)</option>
                        </select>
                    </div>

                </div>
                <input type="submit" class="Submitbtn" value="Submit" name='submit'>


            </form>
        </div>


    </section>

    <section class="banner-section">
        <div class="banner">
            <h1 class="banner-header">NO BETTER CAR SERVICE ANYWHERE</h1>
            <!-- <button class="banner-btn">Contact Us</button> -->
            <button class="banner-btn">Make An Appointment Now</button>
        </div>
    </section>

    <section class="footer-section" id="contact">
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




<script type="text/javascript">
    // querySelector('.Submitbtn').addEventListener("click",function(){
    //     document.getElementById("myForm").reset();
    // })

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    
</script>


</body>

</html>