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
                  <form method="post" action="<?=base_url('index.php/garage/feedback/save')?>">
                    <small>Enter feedback</small>
                    <input value="<?=$garagedata['id']?>" type="hidden" name="feedback[cargarageid]">
                    <textarea placeholder="enter feedback here..." class="form-control" name="feedback[description]" id="" cols="20" rows="6"></textarea>
                   <div class="row">
                   <div class="col-md-6">
                    <a href="<?=base_url('index.php/garage/list')?>" class="btn btn-primary btn-block">Back</a>
                     </div>
                     <div class="col-md-6">
                     <button class="btn btn-primary btn-block" type="submit">Submit</button>
                     </div>
                   </div>
                  </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
</body>
