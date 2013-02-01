<?php /* orderform.php */
$page_title = "Order Form";
$page_canonical = "orderform";
$extra_meta = "<meta name='robots' content='index,nofollow' />
";
include('header.php'); ?>
	<section>
		<fieldset class="item-box">
			<legend class="item-title">Order Form</legend>
			Listed below is the contact information for both mail and telephone orders. You can also download our order form in both PDF and Word formats. To order via email, please visit our <a class="link-inline" href="contact.php">contact page</a>.<br /><br />
			<div class="address-div">
				Download an Order Form.<br /><a href="download_orderform_pdf.php" class="link-inline" title="Download .pdf Order Form">Download -- (.pdf)</a> | <a href="download_orderform_doc.php" class="link-inline" title="Download .doc Order Form">Download -- (.doc)</a>
			</div>
			<br />
			<div class="address-div" itemscope itemtype="http://schema.org/Organization">
				<h3 class="hightlight">Make Check Payable To:</h3>
				<span itemprop="name">Sisters of Mary Immaculate</span><br /><br />
				<h3 class="hightlight">Address</h3>
				<address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">Our Mission House<br /><span  itemprop="streetAddress">118 Park Road<span><br /><span itemprop="addressLocality">Leechburg</span>, <span itemprop="addressRegion">PA</span> <span itemprop="postalCode">15656</span></address><br />
				<h3 class="hightlight">Phone Number</h3>
				<span itemprop="telephone">724-845-2828</span>
			</div>
		</fieldset>
	</section>
<?php include('footer.php'); ?>