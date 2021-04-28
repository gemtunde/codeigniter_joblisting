<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if( ! $_SESSION['u_name']){
    redirect('home', 'refresh');
}

$id = $this->uri->segment(3);
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
                             <div class="panel-heading"> Edit Employee </div>

                             <?php 
                             $update_employee = $this->db->get_where('employees', array('e_id'=> $id));
                             foreach($update_employee->result() as $employee){

                                ?>
                             

                             <div class="panel-body">
                               <?php echo form_open('employees/update_employee_process/'.$id, 'class="form-horizontal"'); ?>
                                    <div class="row mb-3 form-group ">
                                        <label class="col-sm-2 col-form-label control-label"> Name</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control input-sm" name='e_name' placeholder="Employee Name" value="<?php echo $employee->e_name ; ?>" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 form-group ">
                                        <label class="col-sm-2 col-form-label control-label"> Email</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control input-sm" name='e_email' value="<?php echo $employee->e_email ; ?>" placeholder="Employee Email" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 form-group ">
                                        <label class="col-sm-2 col-form-label control-label"> Phone</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control input-sm" name='e_phone' value="<?php echo $employee->e_phone ; ?>" placeholder="Employee Phone" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 form-group ">
                                        <label class="col-sm-2 col-form-label control-label"> Jobs</label>
                                        <div class="col-sm-10">
                                        <select name='e_job' class="form-control">
                                            <option value=""> <?php echo $employee->e_job ; ?> </option>
                                            
                                         </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" name='update_employee' class="btn btn-primary" value="Edit Employee" />
                                   
                                        </div>
                                    </div>
                                    <?php echo form_close(''); ?>
                             </div>
                            <?php
                            }
                             
                             ?>
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