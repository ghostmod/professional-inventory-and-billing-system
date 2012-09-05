<?php ?>
<div style="margin:0 auto; width:500px; padding-top:50px;">
	<div style="margin:0 auto; text-align:center; padding-bottom:30px;"><?php echo $this->Html->image('logo.png'); ?></div>
	<div class="lbox_bg" style="margin:0 auto; padding:25px; width:390px; text-align:center;">
    	<div style="text-align:left; padding-left:27px; padding-top:10px; padding-bottom:5px;" class="forn_text text_font_login">User Name</div>
        <div><?php echo $this->Form->input('', array('type' => 'text', 'label' => '', 'class' => 'form_input')); ?></div><br />
        
        <div style="text-align:left; padding-left:30px; padding-top:4px; padding-bottom:5px;" class="forn_text text_font_login">Password</div>
        <div style="padding-bottom:16px;"><?php echo $this->Form->input('', array('type' => 'text', 'label' => '', 'class' => 'form_input')); ?></div><br />
        
		<div style="margin-bottom:10px;"><?php echo $this->Html->image('submit_but.jpg'); ?></div>
    </div>
    <div class="footer_login_text" style="padding-left:28px; padding-top:10px;">Powered By Techinfocomp</div>
</div>