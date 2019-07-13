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
                <div class="col-md-8 container viewerholder">
                    <h4><?=$garagedata['gname'];?></h4>
                    <ul>
                        <li><span><?=$garagedata['country'];?></span></li>
                        <li><span><?=$garagedata['location'];?></span></li>
                        <li><span><?=$garagedata['city'];?></span></li>
                        <li><span><?=$garagedata['district'];?></span></li>
                        <li><span><?=$garagedata['street'];?></span></li>
                    </ul>
                    <p><?=$garagedata['gdescription'];?></p>
                    <p><strong>Mobile:</strong> <?=$garagedata['Pnumber'];?></p>
                    <p><strong>Email:</strong> <?=$garagedata['email'];?></p>
                    <a href="<?=base_url('index.php/garage/list')?>" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
</body>
