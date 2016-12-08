<?php
if(isset($_POST['submitSave'])){
	$products=simplexml_load_file('products.xml');
	$product= $products->addChild('product');
	$product->addAttribute('id', $_POST['id']);
	$product->addChild('name', $_POST['name']);
	$product->addChild('contact', $_POST['contact']);
	file_put_contents('products.xml',$products->asXML());
	header('location:index.php');
}
?>	
<form method="post">
	<table cellpading="2" cellspacing="2">
		<tr>
			<td>ID</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Phone/Email</td>
			<td><input type="text" name="contact"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submitSave" value="Save"></td>
		</tr>
</form>