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
              <h6>FEEDBACK LIST</h6>
             <div class="holder-v">
                  <!-- profile info -->
            <?php $this->load->view('pro_info');?>
            <!-- end here -->
             </div>
            </div>
            <div class="vl-user-list-holder">
              <?php foreach ($feedbacklist as $key => $value){?>
                <div class="vl-user-card">
                  <ul>
                    <li><span><?php echo $value->description;?></span> </li>
                    <!-- <li><div class="badge badge-primary">View More</div>
                    <a href="<?php echo base_url('index.php/garage/feedback/list');?>" class="badge badge-primary">feedback</a>  </li> -->
                  </ul>
                </div>
              <?php }; ?>
            </div>
        </div>
      </div>
    </div>
  </section>
</body>
