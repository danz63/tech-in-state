        <!-- MENU -->
        <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
             <div class="container">

                  <div class="navbar-header">
                       <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon icon-bar"></span>
                            <span class="icon icon-bar"></span>
                            <span class="icon icon-bar"></span>
                       </button>

                       <!-- lOGO TEXT HERE -->
                       <a href="<?php echo base_url() ?>home/" class="navbar-brand"><img src="<?= base_url() ?>/assets/img/icons/LogoText.png" style="width:130px;height:35px;padding-buttom:px;" alt="..."></a>
                  </div>

                  <!-- MENU LINKS -->
                  <div class="collapse navbar-collapse">
                       <ul class="nav navbar-nav navbar-nav-first">
                            <li><a href="<?php echo base_url() ?>home/" class="smoothScroll">Home</a></li>
                            <li><a href="#about" class="smoothScroll">Shop</a></li>
                            <li><a href="<?php echo base_url() ?>Blog/" class="smoothScroll">Blog</a></li>
                            <li><a href="#work" class="smoothScroll">Our Work</a></li>
                            <li><a href="#contact" class="smoothScroll">Contacts</a></li>
                       </ul>

                       <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Sign in / Join</a></li>
                       </ul>
                  </div>

             </div>
        </section>

        <!-- MODAL -->
        <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-lg">
                  <div class="modal-content modal-popup">

                       <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                       </div>

                       <div class="modal-body">
                            <div class="container-fluid">
                                 <div class="row">

                                      <div class="col-md-12 col-sm-12">
                                           <div class="modal-title">
                                                <h2>InMotion Studio</h2>
                                           </div>

                                           <!-- NAV TABS -->
                                           <ul class="nav nav-tabs" role="tablist">
                                                <li><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                                <li class="active"><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                           </ul>

                                           <!-- TAB PANES -->
                                           <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="sign_in">
                                                     <form action="#" method="post">
                                                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                          <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                          <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                          <a href="">Lupa Password?</a>
                                                     </form>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade in" id="sign_up">
                                                     <form action="#" method="post">
                                                          <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                          <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                          <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                          <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                     </form>
                                                </div>
                                           </div>
                                      </div>

                                 </div>
                            </div>
                       </div>

                  </div>
             </div>
        </section>