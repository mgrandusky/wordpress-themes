<?php
/*
Template Name Posts: Exhibitor Portal Login
*/
?>
<?php get_header(); ?>
<script>jQuery('body').addClass('contact-us');</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
		<?php
		if(isset($_POST['submit'])){
			$email = $_POST["txtEmail"];
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    			$irceoptions = pods( 'irceoptions', $params ); 
				$filename = $irceoptions->display( 'exhibitors_email_domain_list' );
                $domainfile = $irceoptions->display( 'upload_file' );
				$lines = file(str_replace("http://www.irce.com", "/projects/irce/public_html", $domainfile));
				$line_number = false;
				$ar=split("@",$email);
				$search = $ar[1];
				while (list($key, $line) = each($lines) and !$line_number) {
   					$line_number = (strpos($line, $search) !== FALSE);
				}

				if($line_number){
					echo '<script>window.location.href = "http://www.irce.com/exhibitor-portal/welcome";</script>';
				}else{
   					$errormessage =  "This ($email) email address is not considered valid.";
				}
			}else{
				$errormessage =  "This ($email) email address is not considered valid.";
			}
		}

?>
          	<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
<?php if(in_array('Show Login', get_field('show_login'))): ?>
		<form method="post" action="">
		<span style="font-size:16px;font-weight:bold;">Email Address:</span><br>
		<input type="text" id="txtEmail" name="txtEmail" style="width:300px">
                <div style="color:red;font-weight:700;" id="errormsg"><?php echo $errormessage; ?></div>
                <input type="submit" name="submit" class="button" value="Submit" style="font-size:16px;">
		</form>
<?php endif; ?>

						<?php endwhile; ?>



						<?php endif; ?>
        </section>
      </article>
    </div>

	 <aside> 
	      <?php get_sidebar(); ?>
	    </aside>
	  </div>
	  <!-- #main --> 
	</div>
	<!-- #main-container -->
<?php get_footer(); ?>