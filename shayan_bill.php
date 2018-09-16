<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shayan Enterprise Billing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Shayan Enterpise Billing Portal</h2>
  <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="invoice_no" >Invoice No: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="invoice" maxlength=10 placeholder="Enter Invoice No" name="invoice_no">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="invoice_date">Invoice Date :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="invoice_date" placeholder="Enter Invoice Date" name="invoice_date">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="challan_no">Challan No:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="challan_no" placeholder="Enter Challan No" name="challan_no">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="challan_date">Challan Date :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="challan_date" placeholder="Enter Challan Date" name="challan_date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="order_no">Order No:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="order_no" placeholder="Enter Order No" name="order_no">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="indent_no">Indent No:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="indent_No" placeholder="Enter Indent Number" name="indent_no">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="buyers_name">Buyer's Name and Address :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="buyers_name1" placeholder="Enter Buyers Name and Address" maxlength=45 name="buyers_name1">
		<input type="text" class="form-control" id="buyers_name2" placeholder="Enter Buyers Name and Address" maxlength=45 name="buyers_name2">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="buyers_gstin">Buyer's GSTIN :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="buyers_gstin" placeholder="Enter Buyers GSTIN" name="buyers_gstin">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="party_code">Party Code :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="party_code" placeholder="Enter Party Code" name="party_code">
      </div>
    </div>
	
	<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>Description</th>
        <th>HSN Code</th>
        <th>Quantity</th>
		<th>Unit</th>
		<th>Price Per Unit</th>
		<th>Amount</th>
      </tr>
    </thead>
    <tbody>
	
      <tr>
        <td><input type="text" class="form-control" id="desc1" maxlength=45 name="desc1"></td>
        <td><input type="text" class="form-control" id="hsn1" maxlength=11 name="hsn1"></td>
        <td><input type="number" step="0.01" class="form-control" id="qty1" name="qty1" value="<?php echo $_GET["qty1"]; ?>"></td>
		<td><input type="number" step="0.01" class="form-control" id="price1" name="price1" value="<?php echo $_GET["price1"]; ?>"></td>
		<td>
			 <select>
				 <option value="Pcs" name="price_unit1">Pcs</option>
				 <option value="Pc" name="price_unit1">Pc.</option>
				 <option value="No." name="price_unit1">No</option>
				 <option value="Nos." name="price_unit1">Nos</option>
				 <option value="Kg." name="price_unit1">Kg.</option>
				 <option value="Kgs." name="price_unit1">Kgs.</option>
				 <option value="Meter." name="price_unit1">Meter</option>
				 <option value="meters." name="price_unit1">Meters</option>
				 <option value="Ltr." name="price_unit1">Ltr</option>
				 <option value="Ltrs." name="price_unit1">Ltrs</option>
				 <option value="Pkt." name="price_unit1">Pkt.</option>
				 <option value="Pkts." name="price_unit1">Pkts</option>
				 <option value="mililiter." name="price_unit1">mililiter</option>
				 <option value="Mili. Lts." name="price_unit1">Mililiters</option>
				 <option value="Drum." name="price_unit1">Drum</option>
				 <option value="Drums." name="price_unit1">Drums</option>
				 <option value="Ream" name="price_unit1">Ream</option>
				 <option value="Reams" name="price_unit1">Reams</option>
             </select> 
		</td>
		<td><?php echo number_format($amount1 = $_GET["price1"]*$_GET["qty1"],2); ?></td>
      </tr>

	  <tr>
        <td><input type="text" class="form-control" id="desc2" maxlength=45 name="desc2"></td>
        <td><input type="text" class="form-control" id="hsn2" maxlength=11 name="hsn2"></td>
        <td><input type="number" step="0.01" class="form-control" id="qty2" name="qty2" value="<?php echo $_GET["qty2"]; ?>"></td>
		<td><input type="number" step="0.01" class="form-control" id="price2" name="price2" value="<?php echo $_GET["price2"]; ?>"></td>
		<td>
			 <select>
				 <option value="Pcs" name="price_unit2">Pcs</option>
				 <option value="Pc" name="price_unit2">Pc.</option>
				 <option value="No." name="price_unit2">No</option>
				 <option value="Nos." name="price_unit2">Nos</option>
				 <option value="Kg." name="price_unit2">Kg.</option>
				 <option value="Kgs." name="price_unit2">Kgs.</option>
				 <option value="Meter." name="price_unit2">Meter</option>
				 <option value="meters." name="price_unit2">Meters</option>
				 <option value="Ltr." name="price_unit2">Ltr</option>
				 <option value="Ltrs." name="price_unit2">Ltrs</option>
				 <option value="Pkt." name="price_unit2">Pkt.</option>
				 <option value="Pkts." name="price_unit2">Pkts</option>
				 <option value="mililiter." name="price_unit2">mililiter</option>
				 <option value="Mili. Lts." name="price_unit2">Mililiters</option>
				 <option value="Drum." name="price_unit2">Drum</option>
				 <option value="Drums." name="price_unit2">Drums</option>
				 <option value="Ream" name="price_unit2">Ream</option>
				 <option value="Reams" name="price_unit2">Reams</option>
             </select> 
		</td>
		<td><?php echo number_format($amount2 = $_GET["price2"]*$_GET["qty2"],2); ?></td>
      </tr>
	<!--calculation-->
		<tr>
        <td><label>Sum: </label></td>
        <td><?php echo number_format($total = $amount1+amount2,2); ?></td>
      </tr>



	  
	  
	  
	  
    </tbody>
  </table>
</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
