<?php /* 404.php */
$page_title = "Error 404";

$extra_meta = "<meta http-equiv='Refresh' content='5; URL=/' />
	<meta name='robots' content='noindex,nofollow' />
";
include('header.php'); ?>
	<section>
		<fieldset class="item-box">
			<legend class="item-title">Error 404</legend>
			<h1>That page does not exist!</h1>
			<blockquote>
				You will be redirected in 5 seconds.
			</blockquote>
		</fieldset>
	</section>
<?php include('footer.php'); ?>