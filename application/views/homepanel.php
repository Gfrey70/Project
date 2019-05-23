<?php defined('BASEPATH')OR exit('Error'); ?>
<section>
  <?php
    $error_message= $this->session->flashdata('error_message');
    if($error_message){
      echo "<h6 class='vl-Error'>".$error_message."</h6>";
    }
  ?>
  <div class="vl-map-container-fluid">
    <div class="vl-map-holder" id="vl-map-container"></div>
  </div>
  <div class="container-fluid vl-tips-holder">
    <div class="col-md-8 container">
      <div class="row">
        <div class="col-md-4">
          <div class="vl-card-holder">
            <div class="vl-card">
              <h6>How to driver?</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                 in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="vl-card-holder">
            <div class="vl-card">
              <h6>How to driver?</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                 in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="vl-card-holder">
            <div class="vl-card">
              <h6>How to driver?</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                 in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="vl-account-pane" id="vl-account-pane">
    <div class="vl-close-btn-pane" id="vl-open-btn-holder">
      <button id="vl-open-btn" type="button" name="button" class="btn vl-btn-outline"><i class="fa fa-bars"></i> </button>
    </div>
    <div class="vl-content" id="vl-pane-control">
      <div class="container-fluid vl-hader-bar">
        <div class="row">
          <div class="col-md-2">
            <ul>
              <li><button id="vl-signup-open" type="button" name="button" class="btn vl-btn-outline">Sign Up</button> </li>
            </ul>
          </div>
          <div class="col-md-10">
            <div class="vl-info-list">
              <ul>
                <li><button id="vl-signin-open" type="button" name="button" class="btn vl-btn-outline">Sign In</button> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 container vl-form-wrapper" id="vl-form">

        <form id="vl-login-form" class="vl-all-open-form" action="<?php echo base_url('index.php/user/login');?>" method="post">
          <h5>LOGIN</h5>
          <div class="form-group">
            <input required placeholder="Email" type="text" class="form-control vl-input-underline" name="email" value="">
          </div>
          <div class="form-group">
            <input required placeholder="Password" type="password" class="form-control vl-input-underline" name="password" value="">
          </div>
          <div class="form-group">
            <button type="submit" name="button" class="form-control vl-btn-login">Login</button>
          </div>
        </form>
        <form id="vl-signup-form" class="vl-all-form" action="index.html" method="post">
          <h5>SIGN UP</h5>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input placeholder="First Name" type="text" class="form-control vl-input-underline" name="" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input placeholder="Last Name" type="text" class="form-control vl-input-underline" name="" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input placeholder="Address" type="text" class="form-control vl-input-underline" name="" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <select class="form-control vl-input-underline" name="">
                <option value="" selected disabled>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input placeholder="Email" type="text" class="form-control vl-input-underline" name="" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input placeholder="Mobile" type="text" class="form-control vl-input-underline" name="" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input placeholder="Password" type="password" class="form-control vl-input-underline" name="" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input placeholder="Re-type Password" type="password" class="form-control vl-input-underline" name="" value="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" name="button" class="form-control vl-btn-login">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
