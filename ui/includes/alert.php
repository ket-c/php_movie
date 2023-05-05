<?php

if (isset($_SESSION['error'])) { ?>
    <div class="alert alert-danger text-center"> <?php echo $_SESSION['error'];
    if(isset($_SESSION['debug_error'])){
        echo ' ';
        foreach($_SESSION['debug_error'] as $error){
            echo $error;
         }
    }
     
     ?>
    </div>
<?php unset($_SESSION['error']);
unset($_SESSION['debug_error']);
} ?>

<?php if (isset($_SESSION['success'])) { ?>
    <div class=" alert alert-success text-center"> <?php echo $_SESSION['success']; ?> </div>
<?php unset($_SESSION['success']);
} ?>