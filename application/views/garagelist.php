<?php defined('BASEPATH')OR exit('Error');
//block the page unless someone is login in the system
if(!$this->session->userdata('isSessionThere') == true) {
  redirect('go/home');
}?>
<body class="vl-bg-color">
  <section>
    <div class="col-md-10 container">
      <div class="row">
        <div class="col-md-4 vl-2-border">
            <div class="vl-panel-nav-h">
              <h6>GARAGE LIST</h6>
            </div>
            <div class="vl-user-list-holder">
              <?php foreach ($garagelist as $key => $value){?>
                <div class="vl-user-card">
                  <ul>
                    <li><span class="vl-name"><?php echo $value->gname;?></span></li>
                    <li><span><?php echo $value->Pnumber . " , ". $value->email. " ," . $value->district;?></span> </li>
                    <li><div class="badge badge-primary">View More</div>
                    <div class="badge badge-primary">Delete</div>  </li>
                  </ul>
                </div>
              <?php }; ?>
            </div>
        </div>
        <div class="col-md-8 vl-1-border">
          <div class="">
            <div class="vl-panel-nav">
              <h6>GARAGE PANEL</h6>
              <!-- for the panel navi here -->
              <?php $this->load->view('nav');?>
              <!-- for panel nav end here -->
            </div>
            <!-- profile info -->
            <?php $this->load->view('pro_info');?>
            <!-- end here -->
            <div class="vl-panel-body">
              <h6>Garage details</h6>
              <form class="" action="<?php echo base_url('index.php/garage/panel/addGarage');?>" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input placeholder="Garage Name" class="form-control" type="text" name="garage[gname]" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea placeholder="Garage description" name="garage[gdescription]" rows="8" cols="80" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input placeholder="Coutry" class="form-control" type="text" name="garage[country]" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input placeholder="Phone number" class="form-control" type="text" name="garage[Pnumber]" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input placeholder="Email" class="form-control" type="text" name="garage[email]" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input placeholder="Location" class="form-control" type="text" name="garage[location]" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input placeholder="City" class="form-control" type="text" name="garage[city]" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input placeholder="Street" class="form-control" type="text" name="garage[Street]" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input placeholder="district" class="form-control" type="text" name="garage[district]" value="">
                    </div>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input placeholder="Street" class="form-control" type="text" name="garage[street]" value="">
                    </div>
                  </div>
                </div> -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <select class="form-control" name="garage[users_id]">
                        <option value="" selected disabled>Select Owner</option>
                        <?php foreach ($ownerlist as $key => $value){?>
                          <option value="<?php echo $value->id;?>"><?php echo $value->fname." ".$value->lname?></option>
                        <?php }; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" name="button" class="form-control vl-btn-login vl-wt-clr">Save Garage</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
