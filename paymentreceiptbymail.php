<?php
session_start();
include("dbconnection.php");
date_default_timezone_set('Asia/Kolkata');
$pagename=basename($_SERVER['PHP_SELF']);
?>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<?php
$sqlpayment = "select payment.*,city.city,location.locationname from payment left JOIN city on city.cityid=payment.cityid left join location ON location.locationid=city.locationid  WHERE payment.paymentid='$_GET[paymentid]'";
$qsqlpayment = mysqli_query($con,$sqlpayment);
$rspayment = mysqli_fetch_array($qsqlpayment);

$sqlcustomer= "SELECT customer.*,location.locationname,city.city FROM customer LEFT JOIN location ON customer.locationid=location.locationid LEFT JOIN city on city.cityid=customer.cityid WHERE customer.customerid='$_SESSION[customerid]'";
$qsqlcustomer = mysqli_query($con,$sqlcustomer);
$rscustomer = mysqli_fetch_array($qsqlcustomer);

$sqloffer ="SELECT * FROM offer WHERE offerid='$rspayment[offerid]'";
$qsqloffer = mysqli_query($con,$sqloffer);
$rsoffer = mysqli_fetch_array($qsqloffer);


$sqlchef ="SELECT * FROM homechef WHERE homechefid='$rspayment[homechefid]'";
$qsqlchef = mysqli_query($con,$sqlchef);
$rschef = mysqli_fetch_array($qsqlchef);
$message="";
$message = $message . "<div class='contact' style='padding: 0em 0;'>
	<div class='container'>
		<div class=' contact-w3'>	
		
<center><h2 style='color:red;'>Payment Receipt</h2></center>";

$message = $message . "<table border='1'  class='table' style='border: 1px solid black;width:100%;'><tr  class='cross' style='border: 1px solid black;width:100%;'><td class='ring-in t-data' colspan='1'><b>Delivery Address:</b><br>$rscustomer[customername],<br>$rscustomer[address]<BR>Area: $rspayment[locationname]<BR>City:  $rspayment[city]</td>";
$message = $message . "<td class='ring-in t-data' colspan='2'><b>Delivery Date / Time:</b><br> ". date("d-M-Y h:i A",strtotime($rspayment['deliverydatetime'])) . " </td>
			<td class='ring-in t-data' colspan='2'><b>Bill No.:</b><br>$rspayment[paymentid]</td>
	</tr>
		<tr style='border: 1px solid black;width:100%;'>
			<th class='t-head head-it'>Item</th>
			<th class='t-head head-it'>Note</th>
			<th class='t-head head-it'>Cost</th>			
			<th class='t-head head-it'>Quantity</th>
			<th class='t-head head-it'>Total </th>
		</tr>
	<tbody>";
	?>
		<?php
	$sql= "SELECT foodorder.*,customer.customername,payment.paymenttype,homechef.homechefname,item.itemname,item.itemimage  FROM foodorder LEFT JOIN customer ON foodorder.customerid=customer.customerid LEFT JOIN payment on payment.paymentid=foodorder.paymentid LEFT JOIN homechef on homechef.homechefid=foodorder.homechefid LEFT JOIN item on item.itemid=foodorder.itemid WHERE foodorder.paymentid='$_GET[paymentid]'";
	$qsql = mysqli_query($con,$sql);
	$totamt = 0;
	while($rs = mysqli_fetch_array($qsql))
	{
		$message = $message . "<tr  class='cross' style='border: 1px solid black;width:100%;'>
				<td class='ring-in t-data'><b>$rs[itemname]</b><br>$rs[homechefname]</td>
				<td class='ring-in t-data'>"; 
				if($rs['description'] != "")
				{
					$message = $message .  $rs['description'];
				}
				else
				{
					$message = $message .  "NIL";
				}
			$message = $message . "<hr><b>Order Status:</b>";
		if($rs['status'] == "Active")
		{
			$message = $message . "<b>Ordered</b><br>";
		}
		else if($rs['status'] == "Processing")
		{
			$message = $message . "<b>Processing</b><br>";
		}
		else if($rs['status'] == "Packed")
		{
			$message = $message . "<b>Packed</b><br>";
		}
		else
		{
			$message = $message . $rs['status'];
		}
				$message = $message . "</td>
				<td class='ring-in t-data'>₹$rs[cost]</td>
				<td class='ring-in t-data'>$rs[qty]</td>
				<td class='ring-in t-data'>₹" . $rs['qty'] * $rs['cost'] . "</td>
				</tr>";
		$totamt = $totamt + ($rs['qty'] * $rs['cost']);
	}

	$message = $message . "</tbody><tbody>";

	if($rspayment['offerid'] != 0)
	{
		$message = $message . "<tr style='border: 1px solid black;width:100%;'>
			<th class='t-head head-it'></th>
			<th class='t-head head-it'></th>
			<th class='t-head head-it' colspan='2'>Total Amount</th>			
			<th class='t-head head-it' id='totpayableamt'>₹$totamt</th>
		</tr>
		<tr style='border: 1px solid black;width:100%;'>
			<th class='t-head head-it'>Offer code<br>$rsoffer[offercode]</th> 
			<th class='t-head head-it'>Offer detail<br>";
			if($rsoffer['offertype'] == "Flat Discount")
			{
			$message = $message . "₹".$rsoffer['offeramt']." discount"; 
			$offeramt = $rsoffer['offeramt'];
			}
			if($rsoffer['offertype'] == "Percentage discount")
			{
			$message = $message . $rsoffer['offeramt'] . "% discount"; 
			$offeramt = ($rsoffer['offeramt'] * $totamt) /100;
			}
			$message = $message . "</th>
			<th class='t-head head-it ' colspan='2'>Discount Amount</th>	
			<th class='t-head head-it ' >₹$offeramt</th>
		</tr>
		<tr style='border: 1px solid black;width:100%;'>
			<th class='t-head head-it'></th>
			<th class='t-head head-it'></th>
			<th class='t-head head-it' colspan='2'>Total Amount</th>			
			<th class='t-head head-it' id='totpayableamt'>₹" .$toamt = $totamt-$offeramt . " </th>
		</tr>";
	}
	else
	{
		$message = $message . "<tr style='border: 1px solid black;width:100%;'>
			<th class='t-head head-it'></th>
			<th class='t-head head-it'></th>
			<th class='t-head head-it' colspan='2'>Total Amount</th>			
			<th class='t-head head-it' id='totpayableamt'>₹$totamt</th>
		</tr>";
	}
	
	$message = $message . "</tbody>
	<tr  class='cross' style='border: 1px solid black;width:100%;'>
		<th   colspan='5' class='t-head head-it' ><b>Payment detail:</th>		
	</tr>

	<tr  class='cross'  style='border: 1px solid black;width:100%;'>
		<td  class='ring-in t-data'><b>Payment Type:</b>  $rspayment[paymenttype]</td>
		<td   colspan='4'  class='ring-in t-data'><b>Payment date:</b>" .  date("d-M-Y",strtotime($rspayment['orderdatetime'])) ."</td>	</tr></table>	<div class='clearfix'></div></div></div></div>";

include("phpmailer.php");
$subject= "You have received one order...";
//echo $rschef['emailid'];
sendmail($rschef['emailid'], $rschef['homechefname'] , $subject, $message);
echo "<script>window.location='paymentreceipt.php?paymentid=$_GET[paymentid]';</script>";
?>