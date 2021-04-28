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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <title>Hello, world!</title>
  </head>
  <body>

  <!-- dash navbar start-->
    <?php $this->load->view('dash/inc/navbar'); ?>   
  <!-- dash navbar ends -->

    <!--dash start -->
        <div class="container">
            <div class="row">
                    <div class="col-sm-3">
                        
                        <!-- sidebar  -->
                         <?php  $this->load->view('dash/inc/sidebar'); ?> 
                        <!--  sidebar  -->
                        
                    </div>

                    <div class="col-sm-9 ">
                        <div class="panel panel-default">
                             <div class="panel-heading"> Add Employee </div>

                             <div class="panel-body">
                               <?php echo form_open('Employees/add_employee_process', 'class="form-horizontal"'); ?>
                                    <div class="row mb-3 form-group ">
                                        <label class="col-sm-2 col-form-label control-label"> Name</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control input-sm" name='e_name' placeholder="Employee Name" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 form-group ">
                                        <label class="col-sm-2 col-form-label control-label"> Email</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control input-sm" name='e_email' placeholder="Employee Email" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 form-group ">
                                        <label class="col-sm-2 col-form-label control-label"> Phone</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control input-sm" name='e_phone' placeholder="Employee Phone" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 form-group ">
                                        <label class="col-sm-2 col-form-label control-label"> Jobs</label>
                                        <div class="col-sm-10">
                                        <select name='e_job' class="form-control">
                                            <option value ="-"> - </option>
                                            <?php
                                                $job_list = $this->db->get('jobs');
                                                foreach($job_list->result() as $job){
                                                    ?>
                                                    <option value="<?php echo $job->j_name ; ?>"> <?php echo $job->j_name ; ?></option>
                                                    <?php
                                                }
                                            ?>
                                         </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" name='add_employee' class="btn btn-primary" value="Add Employee" />
                                   
                                        </div>
                                    </div>
                                    <?php echo form_close(''); ?>
                             </div>
                        </div>
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