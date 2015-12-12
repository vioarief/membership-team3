<?php $this->layout('layouts::layout-system'); ?>

<div class="full-width-section parallax full-section-bg">
	<div class="container" style="margin: 0 auto;">
		<div class="dt-sc-clear"></div>                            
		<div class="form-wrapper register" style="margin-top: -150px;">

            <h3 class="aligncenter"> <span> <i class="fa fa-user"></i></span> Login Anggota</h3>
            <?php
                echo $this->insert('sections::flash-message');
                ?>

			<form action="<?php echo $this->uri_path_for('membership-login'); ?>" method="post" novalidate>

				<div class="row">
                    
                    <div class="col-xs-10">
                        <div class="form-group">
                            <label for="email" class="control-label" style="font-weight: bold;">Username / Email</label>
                            <input id="username" class="input_full" name="username" required="required" type="text" style="font-size: 15px;" />
                        </div>
                    </div>

                     <div class="col-xs-10">
                        <div class="form-group">
                            <label for="email" class="control-label" style="font-weight: bold;">Password</label>
                            <input id="password" class="input_full" name="password" required="required" type="password" style="font-size: 15px;" />
                        </div>
                    </div>

                    <div class="col-xs-10">
                        <div class="form-group" style="text-align:right;">
                            <input value="Login" class="button" type="submit" />
                        </div>
                    </div>
                </div>
			</form>
		</div>
	</div>
</div>

<div class="full-width-section">  
	<div class="container"> 
		<div class="dt-sc-margin70"></div>
		<div class="page_info aligncenter">
			<h4 class="title">Bantuan Login?</h4>
			<p>Jika belum terdaftar sebagai anggota, <a href="<?php echo $this->uri_path_for('membership-register'); ?>" title="">Daftar Disini</a> menjadi anggota PHP Indonesia.</p>
			<p>Hilang atau lupa password login, silahkan <a href="<?php echo $this->uri_path_for('membership-forgot-password'); ?>" title="">Reset Password</a> Anda.</p>
		</div>
	</div>
</div>
<div class="dt-sc-margin100"></div>