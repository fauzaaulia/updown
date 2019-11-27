<body>
   <section class="material-half-bg">
      <div class="cover"></div>
   </section>
   <section class="login-content">
      <div class="logo">
         <h1><a style="color:white" href="<?= base_url(); ?>">Up&Down</a></h1>
      </div>
      <div class="login-box">
         <form class="login-form" action="index.html">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>
            <div class="form-group">
               <label class="control-label">USERNAME</label>
               <input class="form-control" type="text" placeholder="Username" autofocus>
            </div>
            <div class="form-group">
               <label class="control-label">Email</label>
               <input class="form-control" type="text" placeholder="Email" autofocus>
            </div>
            <div class="form-group">
               <label class="control-label">PASSWORD</label>
               <input class="form-control" type="password" placeholder="Password">
            </div>
            <div class="form-group">
               <label class="control-label">CONFIRM PASSWORD</label>
               <input class="form-control" type="password" placeholder="Confirmation Password">
            </div>
            <div class="form-group">
               <div class="utility">
                  <p class="semibold-text mb-2"><a href="<?= base_url('auth') ?>">Have account ?</a></p>
               </div>
            </div>
            <div class="form-group btn-container">
               <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN UP</button>
            </div>
         </form>
      </div>
   </section>