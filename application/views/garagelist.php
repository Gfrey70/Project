<?php defined('BASEPATH')OR exit('Error');
//block the page unless someone is login in the system
if(!$this->session->userdata('isSessionThere') == true) {
  redirect('go/home');
}?>
<body class="vl-bg-color">
  <section>
    <div class="col-md-10 container">
      <div class="row">
        <div class="col-md-12 vl-2-border">
            <div class="vl-panel-nav-h">
              <h6>GARAGE LIST</h6>
              <div class="profileholder">
                <?php $this->load->view('pro_info');?>
              </div>
            </div>
            <div class="vl-user-list-holder-list">
              <?php foreach ($garagelist as $key => $value){?>
                <div class="vl-garage-card">
                  <ul>
                    <li><span class="vl-name"><?php echo $value->gname;?></span></li>
                    <li><span><?php echo $value->Pnumber . " , ". $value->email. " ," . $value->district;?></span> </li>
                    <li><a href="<?=base_url('index.php/garage/list/viewer/').$value->id?>" class="badge badge-primary">View More</a>
                    <!-- <div class="badge badge-primary">Delete</div>  </li> -->
                  </ul>
                </div>
              <?php }; ?>
              <div class="vl-garage-card">
                  <ul>
                    <li><span class="vl-name"><?php echo $value->gname;?></span></li>
                    <li><span><?php echo $value->Pnumber . " , ". $value->email. " ," . $value->district;?></span> </li>
                    <li><div class="badge badge-primary">View More</div>
                    <div class="badge badge-primary">Delete</div>  </li>
                  </ul>
                </div>
                <div class="vl-garage-card">
                  <ul>
                    <li><span class="vl-name"><?php echo $value->gname;?></span></li>
                    <li><span><?php echo $value->Pnumber . " , ". $value->email. " ," . $value->district;?></span> </li>
                    <li><div class="badge badge-primary">View More</div>
                    <div class="badge badge-primary">Delete</div>  </li>
                  </ul>
                </div>
                <div class="vl-garage-card">
                  <ul>
                    <li><span class="vl-name"><?php echo $value->gname;?></span></li>
                    <li><span><?php echo $value->Pnumber . " , ". $value->email. " ," . $value->district;?></span> </li>
                    <li><div class="badge badge-primary">View More</div>
                    <div class="badge badge-primary">Delete</div>  </li>
                  </ul>
                </div>
                <div class="vl-garage-card">
                  <ul>
                    <li><span class="vl-name"><?php echo $value->gname;?></span></li>
                    <li><span><?php echo $value->Pnumber . " , ". $value->email. " ," . $value->district;?></span> </li>
                    <li><div class="badge badge-primary">View More</div>
                    <div class="badge badge-primary">Delete</div>  </li>
                  </ul>
                </div>
                <div class="vl-garage-card">
                  <ul>
                    <li><span class="vl-name"><?php echo $value->gname;?></span></li>
                    <li><span><?php echo $value->Pnumber . " , ". $value->email. " ," . $value->district;?></span> </li>
                    <li><div class="badge badge-primary">View More</div>
                    <div class="badge badge-primary">Delete</div>  </li>
                  </ul>
                </div>
                <div class="vl-garage-card">
                  <ul>
                    <li><span class="vl-name"><?php echo $value->gname;?></span></li>
                    <li><span><?php echo $value->Pnumber . " , ". $value->email. " ," . $value->district;?></span> </li>
                    <li><div class="badge badge-primary">View More</div>
                    <div class="badge badge-primary">Delete</div>  </li>
                  </ul>
                </div>
                <div class="vl-garage-card">
                  <ul>
                    <li><span class="vl-name"><?php echo $value->gname;?></span></li>
                    <li><span><?php echo $value->Pnumber . " , ". $value->email. " ," . $value->district;?></span> </li>
                    <li><div class="badge badge-primary">View More</div>
                    <div class="badge badge-primary">Delete</div>  </li>
                  </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
</body>
