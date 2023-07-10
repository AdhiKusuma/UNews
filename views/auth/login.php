<?php $this->load->view('auth/templates/header_auth') ?>

  <main class="container">
   <section>
   <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
         <div class="card card-signin my-5">
            <div class="card-body">
            <div class="form-box">
            <div class="form-value">
            <h2>ADMIN</h2>
            <!-- Alert -->
            <div class="row">
               <div class="col">
                  <?php if($this->session->flashdata('message')) : ?>
                     <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                     <?= $this->session->flashdata('message') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>   
                     </div>
                  <?php endif ?>
               </div>
            </div>

            <?= form_open("auth/login", ["class" => "form-signin"]) ?>
            <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                  <input type="text" name="identity" value="" class="form-control" id="inputEmail" placeholder="Email" required autofocus>  
                  <label for="inputEmail">Email</label>
               </div>

               <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                  <input type="password" name="password" id="inputPassword" value="" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
               </div>

               <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" name="remember" value="1" class="custom-control-input" id="remember">
                  <label class="custom-control-label" for="remember">Remember Me</label>
               </div>

               <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">LOGIN</button>


               <div class="register">
                  <a href="<?= base_url('auth/forgot_password') ?>">Forgot Your Password ? </a> 
               </div>
               
            <?= form_close() ?>
            </div>
         </div>
      </div>
   </div>
   </section>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </main>
  
<?php $this->load->view('auth/templates/footer') ?>
