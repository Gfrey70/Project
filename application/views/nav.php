
<?php 
$profile = $this->session->userdata('dataprofile');
if($profile['rolename'] == 'admin'){?>

<ul>
  <li><a href="<?php echo base_url('index.php/user/panel');?>"><i class="fa fa-user"></i> User</a> </li>
  <li><a href="<?php echo base_url('index.php/garage/panel');?>"><i class="fa fa-user"></i> Garage</a> </li>
  <li><a href="<?php echo base_url('index.php/garage/ownerpanel');?>"><i class="fa fa-user"></i> Owner</a></li>
  <li><a href="<?php echo base_url('index.php/garage/driverpanel');?>"><i class="fa fa-user"></i> Driver</a></li>
  <li><a href="<?php echo base_url('index.php/tips/panel');?>"><i class="fa fa-user"></i> Tips</a> </li>
</ul>

<?php } else if($profile['rolename'] == 'driver'){?>

  <ul>
      <!-- <li><a href="<?php //echo base_url('index.php/user/panel');?>"><i class="fa fa-user"></i> User</a> </li>
      <li><a href="<?php //cho base_url('index.php/garage/panel');?>"><i class="fa fa-user"></i> Garage</a> </li>
      <li><a href="<?php //echo base_url('index.php/garage/ownerpanel');?>"><i class="fa fa-user"></i> Owner</a></li>
      <li><a href="<?php //echo base_url('index.php/garage/driverpanel');?>"><i class="fa fa-user"></i> Driver</a></li> -->

      <!-- <li><a href="<?php //echo base_url('index.php/garage/panel');?>"><i class="fa fa-user"></i> Garage</a> </li> -->
      <!-- <li><a href="<?php echo base_url('index.php/tips/panel');?>"><i class="fa fa-user"></i> Tips</a> </li> -->
  </ul>

<?php } else {?>

  <ul>
      <!-- <li><a href="<?php //echo base_url('index.php/user/panel');?>"><i class="fa fa-user"></i> User</a> </li>
      <li><a href="<?php //cho base_url('index.php/garage/panel');?>"><i class="fa fa-user"></i> Garage</a> </li>
      <li><a href="<?php //echo base_url('index.php/garage/ownerpanel');?>"><i class="fa fa-user"></i> Owner</a></li>
      <li><a href="<?php //echo base_url('index.php/garage/driverpanel');?>"><i class="fa fa-user"></i> Driver</a></li> -->

      <li><a href="<?php echo base_url('index.php/garage/panel');?>"><i class="fa fa-user"></i> Garage</a> </li>
      <li><a href="<?php echo base_url('index.php/tips/panel');?>"><i class="fa fa-user"></i> Tips</a> </li>
      <!-- <li><a href="<?php echo base_url('index.php/garage/feedback/list');?>"><i class="fa fa-comment"></i> Feedback</a> </li> -->
  </ul>

<?php }?>
