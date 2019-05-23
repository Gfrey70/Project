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
              <h6>GARAGE OWNER LIST</h6>
            </div>
            <div class="vl-user-list-holder">
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
              <div class="vl-user-card">
                <ul>
                  <li><span class="vl-name">Mustapha kassam</span></li>
                  <li><span>07156256978, mustapha@gmail.com, p.o.box ilala</span> </li>
                  <li><div class="badge badge-primary">ADMIN</div> </li>
                </ul>
              </div>
            </div>
        </div>
        <div class="col-md-8 vl-1-border">
          <div class="">
            <div class="vl-panel-nav">
              <h6>GARAGE OWNER PANEL</h6>
              <!-- for the panel navi here -->
              <?php $this->load->view('nav');?>
              <!-- for panel nav end here -->
            </div>
            <!-- profile info -->
            <?php $this->load->view('pro_info');?>
            <!-- end here -->
            <div class="vl-panel-body">
              <h6>Owner details</h6>
              <form class="" action="index.html" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input placeholder="First Name" class="form-control" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input placeholder="Last Name" class="form-control" type="text" name="" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <select class="form-control" name="">
                        <option value="" selected disabled>Select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input placeholder="Address" class="form-control" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input placeholder="Email" class="form-control" type="text" name="" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input placeholder="Mobile" class="form-control" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" name="" readonly>
                        <option value="owner" selected>Owner</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" name="button" class="form-control vl-btn-login vl-wt-clr">Save owner</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
