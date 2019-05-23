<span class="vl-profile-tab">
  <ul>
    <li>
      <span class="badge badge-success">
        <i class="fa fa-user"></i>
        <?php echo $this->session->userdata['dataprofile']['fname'].' '.$this->session->userdata['dataprofile']['lname'];?>
      </span>
    </li>
    <li>
      <span class="badge badge-success"><?php echo $this->session->userdata['dataprofile']['rolename'];?></span>
    </li>
    <li><a href="<?php echo base_url('index.php/user/logout');?>" class="badge badge-danger"><i class="fa fa-sign-out"></i> Logout</a></li>
  </ul>
</span>
