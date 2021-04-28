<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if( ! $_SESSION['u_name']){
    redirect('home', 'refresh');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <!-- dash navbar start-->
    <?php $this->load->view('dash/inc/navbar'); ?>   
  <!-- dash navbar ends -->

    <!--dash start -->
        <div class="container">
            <div class="row">
                    <div class="col-md-3 col-lg-3">
                        
                        <!-- sidebar  -->
                         <?php  $this->load->view('dash/inc/sidebar'); ?> 
                        <!--  sidebar  -->
                        
                    </div>

                    <div class="col-lg-9 col-md-9">
                    <!-- <?php  $this->load->view('dash/inc/sidebar'); ?>  -->
                        <table class="table table-bordered">
                            <tr>
                                <th>ID </th>
                                <th>Name </th>
                                <th>Edit </th>
                                <th>Delete </th>
                            </tr>

                            <?php
                              $job_list = $this->db->get('jobs');
                              foreach($job_list -> result() as $job){
                                ?>
                                <tr>
                                 <td><?php echo $job->j_id ; ?> </td>
                                 <td><?php echo $job->j_name ; ?> </td>
                                 <td><a href="<?php echo site_url(); ?>Jobs/update_job/<?php echo $job->j_id ; ?>" class="btn btn-warning btn-sm btn-block"> Edit</a> </td>
                                 <td><a href="<?php echo site_url(); ?>Jobs/delete_job/<?php echo $job->j_id ; ?>" class="btn btn-danger btn-sm btn-block"> Delete</a> </td>
                                  </tr>
                            <?php
                              }
                            ?>
                        </table>
                    </div>
            </div>
        </div>

  
    <!--dash ends -->


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </body>
</html>