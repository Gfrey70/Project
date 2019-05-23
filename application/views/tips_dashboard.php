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
              <h6>TIPS LIST</h6>
            </div>
            <div class="vl-user-list-holder">
              <?php foreach ($tipslist as $key => $value){?>
                <div class="vl-user-card">
                  <ul>
                    <li><span class="vl-name"><?php echo $value->TipsTitle;?></span></li>
                    <li><span class="vl-tip-span"><?php echo $value->TipsDesc;?></span> </li>
                    <li><div class="badge badge-primary">View More</div> </li>
                  </ul>
                </div>
              <?php }; ?>
            </div>
        </div>
        <div class="col-md-8 vl-1-border">
          <div class="">
            <div class="vl-panel-nav">
              <h6>TIPS PANEL</h6>
              <!-- for the panel navi here -->
              <?php $this->load->view('nav');?>
              <!-- for panel nav end here -->
            </div>
            <!-- profile info -->
            <?php $this->load->view('pro_info');?>
            <!-- end here -->
            <div class="vl-panel-body">
              <h6>Tips details</h6>
              <form class="" action="<?php echo base_url('index.php/tips/panel/add');?>" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input required placeholder="Tips title" class="form-control" type="text" name="tips[TipsTitle]" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea placeholder="Tips description" name="tips[TipsDesc]" rows="8" cols="80" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" name="button" class="form-control vl-btn-login vl-wt-clr">Save Tips</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
