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
              <h6> How to Get your Tires Rotated and Balanced</h6>
              <p>This is the easiest trick in the book to prevent wearing of tires and make them last longer. The trick is to get them rotated once every 5,000-8,000 miles. Tires do not wear at the same amount in each location on the car. So by rotating the front and rear tires, you balance the wear and extend the life of your tires.

Ensure that the tires of your car are balanced and aligned as well. Non-aligned tires can wear tires and may cause you to lose control of your car in certain conditions.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="vl-card-holder">
            <div class="vl-card">
              <h6>How to Clean your Windshields and Replace the Wipers</h6>
              <p>The dirty windshield can prove to be a lot of hassle if they are not cleaned regularly and might cause accidents too. It is very important for the driver to have a clear view of the road to ensure safety while driving. If you don't clean them, the dirt can be accumulated and this can cause blurred views and possible scratched glass.

If the rainy season is approaching, check your wipers and get them replaced whenever needed. Using damaged wipers can cause scratches to the glass and blur your view in the rain. Replacing your wipers ensures your safety. </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="vl-card-holder">
            <div class="vl-card">
              <h6>How to  Ensure the Working of the Cooling System</h6>
              <p>The hoses, which carry the engine coolant can damage very quickly as they transport high-pressure fluids, which can break if the pressure is too high. Also, the heater hoses face the same problem as they carry hot coolant to the passenger compartment.

The best way to achieve an efficiently working AC is to check the parts regularly. And how do you do this? Inspect the fan, the compressor, the condenser, the hoses, and lines.

If you don't see any cuts or leaks, the parts are moving freely, and your AC blows cold air, then your probably fine. If you suspect a problem the smart choice would be to inspect the AC system and get help when needed.</p>
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
            <button type="submit" name="button" class="form-control vl-btn-login">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
