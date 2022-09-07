<?php
    $_title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        //Extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob =  $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $speciality = $_POST['speciality'];
        //Call function to insert and track if success or not
        $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $speciality);

        if($isSuccess) {
            echo '<h1 class="text-center text-success">You Have Been Regestered!<h1>';
        }
        else{
            echo '<h1 class="text-center text-danger">There was an error in processing!<h1>';

        }
    }

 ?>
        <!-- <h1 class="text-center text-success">You Have Been Registered!</h1> -->


<!-- This prints out the values that were passed to the action page using='get' -->

    <!-- <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php //echo $_GET['firstname']. ' ' . $_GET['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php //echo $_GET['speciality']; ?>
            </h6>
            <p class="card-text">
                Date of Birth :<?php //echo $_GET['dob']; ?>
            </p>
            <p class="card-text">
               Email Address : <?php //echo $_GET['email']; ?>
            </p>
            <p class="card-text">
                Phone Number : <?php //echo $_GET['phone']; ?>
            </p>

        </div>
    </div> -->

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname']. ' ' . $_POST['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['speciality']; ?>
            </h6>
            <p class="card-text ">
                Date of Birth :<?php echo $_POST['dob']; ?>
            </p>
            <p class="card-text">
               Email Address : <?php echo $_POST['email']; ?>
            </p>
            <p class="card-text">
                Phone Number : <?php echo $_POST['phone']; ?>
            </p>

        </div>
    </div>



<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
    