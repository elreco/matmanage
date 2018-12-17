
<div class="d-md-flex flex-row-reverse">
	<div class="signin-right">

		<div class="signin-box signup">
			<h3 class="signin-title-primary">Recover your password!</h3>
			<h5 class="signin-title-secondary lh-4">Fill your new password.</h5>
			
			<?= $this->Form->create($user, ['url' => ['action' => 'password'], 'id' => 'selectForm', 'class' => 'parsley-style-1']); ?>

			<div class="row row-xs mg-b-10">
				<?= $this->Form->hidden('token'); ?>
				<div class="col-sm">
					<?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Password', 'label' => false, 'id' => 'password', 'minLenght' => '8', 'value' => ""]); ?>
				</div>
				<div class="col-sm mg-t-10 mg-sm-t-0">
					<?= $this->Form->control('password2', ['class' => 'form-control', 'placeholder' => 'Repeat password', 'label' => false, 'type' => 'password', 'data-parsley-equalto' => '#password']); ?>
				</div>
			</div>

			<button type="submit" class="btn btn-primary btn-block btn-signin">Send</button>
			<?= $this->Form->end(); ?>
			<!-- <div class="signup-separator"><span>or signup using</span></div>

			<button class="btn btn-facebook btn-block">Sign Up Using Facebook</button>
			<button class="btn btn-twitter btn-block">Sign Up Using Twitter</button> -->

			<p class="mg-t-40 mg-b-0">Back to  
			<?php echo $this->Html->link(
    				'Log In',
    				['controller' => 'Users', 'action' => 'login']
			); ?></p>
		</div><!-- signin-box -->

	</div><!-- signin-right -->
	<div class="signin-left">
		<?php if($mobile == 0): ?>
		<div class="video-background">
		    <div class="video-foreground">
		      	<iframe src="https://www.youtube.com/embed/fp0Gt-OSz78?start=20&controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1&playlist=fp0Gt-OSz78" frameborder="0" allowfullscreen></iframe>
		    </div>
	  	</div>
	  	<?php endif; ?>
		<div class="signin-box">
			<h2 class="slim-logo">

				<a href="/">
					<?=$this->Html->image('logo.png', ['alt' => 'Fortnite League']); ?>
					<!-- fortniteleague.<span>pro</span> -->
				</a>
			</h2>

			<p>We are excited to launch Fortnite League. We are the best and biggest Fortnite competitive network. Fortnite League is a League and Tournament website: do your placement matchs and get ranked. Then play matchs again and again, to grind the ladder. Your 10 best matchs will determine your league: Bronze, Silver, Gold, Platinium, Diamond, Master, Challenger, Pro</p>

			<p>Browse our site and show us who is the best.</p>

			<p>
				<a href="#" class="btn btn-outline-secondary pd-x-25" data-toggle="modal" data-target="#modaldemo4">Learn More</a>
			</p>

			<p class="tx-12">&copy; Copyright 2018. All Rights Reserved.</p>
		</div>
	</div><!-- signin-left -->
</div><!-- d-flex -->
<div id="modaldemo4" class="modal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
			<div class="modal-body bg-white pd-0">
				<div class="pd-y-30 pd-xl-x-30">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<div class="pd-x-30 pd-y-10">
		                <div class="slim-card-title">About Fortnite League</div>
		                

		                <p class="activity-text">How it works.</p>

		                <div class="row no-gutters">
		                    
		                    <div class="col-md-6">
		                        <div class="post-wrapper" style="background-color: white;">
		                            <h3>Play your placement matchs</h3>
		                            <p class="pd-r-20"> Your 10 first matchs will determine your rank.</p>
		                            
		                        </div><!-- post-wrapper -->
		                    </div><!-- col-8 -->
		                    <div class="col-md-6 text-center">
				                        <img src="/img/tuto1.png" alt="Tuto" class="img-fit-cover img-style-1">
		                    </div>
		                </div><!-- row -->
		                <div class="row no-gutters mg-t-20">
		                    
		                    <div class="col-md-6">
		                        <div class="post-wrapper" style="background-color: white;">
		                            <h3>Get a rank</h3>
		                            <p class="pd-r-20">Once you did your placement match, you will be ranked.</p>
		                            
		                        </div><!-- post-wrapper -->
		                    </div><!-- col-8 -->
		                    <div class="col-md-6 text-center">
		                        <img src="/img/tuto2.png" alt="Tuto" class="img-fit-cover img-style-1">
		                    </div>
		                </div><!-- row -->
		                <div class="row no-gutters mg-t-20">
		                    
		                    <div class="col-md-6">
		                        <div class="post-wrapper" style="background-color: white;">
		                            <h3>Get a rank</h3>
		                            <p class="pd-r-20">Once you did your placement match, keep playing to grind the ladder and get a good rank. Your best 10 games will determine your rank.</p>
		                            
		                        </div><!-- post-wrapper -->
		                    </div><!-- col-8 -->
		                    <div class="col-md-6 text-center">
		                        <img src="/img/tuto3.png" alt="Tuto" class="img-fit-cover img-style-1">
		                    </div>
		                </div><!-- row -->
		                
					</div>
				</div><!-- pd-20 -->
			</div><!-- modal-body -->
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div>
<?php $this->start('script'); ?>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		// Datepicker
	    $('.fc-datepicker').datepicker({
	      	showOtherMonths: true,
	      	selectOtherMonths: true
	    });
	    // MASK
	    $('.fc-datepicker').mask('00/00/0000');
	    $('#selectForm').parsley();
	});
</script>

<?php $this->end(); ?>