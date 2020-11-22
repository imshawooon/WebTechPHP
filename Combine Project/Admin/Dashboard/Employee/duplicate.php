<!DOCTYPE html>
<html>
<title>Employee Info. </title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
   .mySlides {display:none;}
</style>

<link rel="stylesheet" type="text/css" href="style.css">

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../about.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="about.css">
</head>



<body>



  <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div id="logo">
            <img src="../Logo.png">
            
          </div>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="../Home/index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Services/services.html">Services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../About Us/about us.html">About us</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link " href="../Contact Us/contact us page.html">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../Services/services.html">Logout</a>
                    </li>
                </ul>

            </div>
        </nav>
    </section>
    <br><br><br><br>


    <?php
        if(isset($_GET['action']))
        {
            $employees = simplexml_load_file('employee.xml');
            $id = $_GET['id'];
            $index = 0;
            $i = 0;

            foreach ($employees->employee as $employee) {
                if($employee['id'] == $id)
                {
                    $index = $i;
                    break;
                }

                $i++;
            }

            unset($employees->employee[$index]);
            file_put_contents('employee.xml', $employees->asXML());

        }
    ?>

    <h2>Employee Information</h2>


    <a href="add.php">Add New Employee</a> <br>

    <?php

        

        $xml = simplexml_load_file('employee.xml');

        echo 'No. of Employees: '.count($xml);

        echo "<table border='1' width='100%'>

        <tr>
        <th>Employee ID</th>

        <th>Name</th>

        <th>Email</th>

        <th>Password</th>

        <th>Salary</th>

        <th>Action</th>

        </tr>";


    ?>



   <?php 
     foreach($xml->employee as $employee)
        {  ?>

         <tr>

            <td><?php echo $employee->id ?></td>

            <td><?php echo $employee->name ?></td>
            <td><?php echo $employee->email ?></td>
            <td><?php echo $employee->password ?></td>
            <td><?php echo $employee->salary ?></td>
            <td>Edit | 
            <a href="duplicate.php?action=delete&id=<?php echo $employee['id']; ?>" onclick="return confirm('Are you sure?')"> Delete </a></td>

             


         </tr>



    <?php   } ?>

    



</body>

</html>

   
