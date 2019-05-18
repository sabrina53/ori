
<!doctype html> 
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content= "text/html; charset=utf-8"/>
<style type="text/css">

	
	/* Invoice */
tr {
	height: 10px;
}

td {
	height: 10px;
	line-height: 1px;
}

th{
	height: 30px;
}

.item-title {
	font-size: 18px;
	height: 60px;
	margin-bottom: 10px;
}
.signature-line{
	border-bottom: 2px solid;
width: 150px;
margin-bottom: 15px;
}
#bottom {
	    margin-bottom: -15px;
    margin-top: 15px;
}
.inline-item {
	margin: auto;
	text-align: center;
	padding-bottom: 50px;
}

#total {
width: 90%;
margin-left: 10px;
}
.taxtxt {
	font-weight: bold;
	font-size:17px;
	text-align: center;
}
.greyitemBox {
	
	padding: 10px;
}
#issued {
	width: 40%;
	margin-top: auto;
margin-bottom: auto;
}
.bill-box {
	border-radius: 20px;
	border: 5px solid #5DE1CD;
	margin-bottom: 30px;
	width: 1000px;
	margin: auto;
	   padding: 10px;
	   border-collapse: collapse;
}
.bill-title {
	background-color: #CDF5EF;
	margin: auto;
	border: 5px solid #5DE1CD;;
width: 1020px;
text-align: center;
margin-left: -15px;
margin-top: -15px;
height: 100px;

}
.pdfa{
	color: white;
	text-decoration: none;
}
.form-controlthree {
	display: block;
width: 90%;
height: 30px;
margin: 15px 20px 15px 15px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}

.form-controlfour {
	display: block;
height: 30px;
margin: 15px 20px 15px 15px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}

.form-controlone {
	display: block;
width: 80%;
height: 30px;
padding-right: 10px;
margin: 15px 15px 15px 20px;

    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}

.form-controltwo {
	display: block;
width: 80%;
height: 20px;
    font-size: 0.8rem;
        font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}

.pdfCon {
	font-family: Helvetica;
	text-align: center;
	margin: auto;
	background-color: #FDFCFC;
	color: #788797;
	padding: 40px;

}
.download-btn {
		color: #788797;
		background-color: #5DE1CD;
}


.pdf-title {
color: #5DE1CD;
font-size: 35px;
font-family: Helvetica;
text-decoration: none;
letter-spacing: 5px;
text-align: center;
}

.pdf-titleNum {
color: #5DE1CD;
font-size: 35px;
font-family: Helvetica;
text-decoration: none;
letter-spacing: 5px;
text-align: center;
}

.top-pdf {
	
	text-align: left;
	margin-bottom: 40px;
margin-left: auto;
margin-right: auto;
		width: 1000px;
		line-height: 1px;
}

.form-header {
color: #5DE1CD;
font-size: 18px;
padding-right: 10px;
}

.form-bold {
	font-size: 16px;
}

.form-text {
font-family: Helvetica;
	font-size: 13px;
}
.userform {
width: 300px;

}

.client-form{
width: 300px;
}

#topcolone{
	width: 300px;
}

#topcoltwo{
	width: 250px;
}

.payheader-one {
		color: #788797;
		font-size: 14px;
		text-align: right;
		padding-right: 10px;
}

.payheader-two {
color: #5DE1CD;
		font-size: 14px;
		text-align: right;
				padding-right: 30px;
				line-height: 15px;
}

#signature {
	margin-top: 20px;
}

 .double-btn {
 	margin-top: 50px;
 	display: inline-flex;
 
 }

  .double-txt {
 	font-size: 15px;
	color: white;
	font-weight:normal;
	margin: auto;
	padding: 15px;
 }

 .colthree {
 	width: 110px;
 }

 .btn-primary {
    width: 500px;
    background-color: #F8C22F;
    border: 0;
    height: 40px;
    border-radius: 5px;
    margin-top: 10px;
    color: white;
    font-size: 16px;
}

 .btn-primary:hover {
    background-color: #55E0CB; 
}

 .form-normal {
 	font-weight: normal;
 }

</style>
</head>


<section class="pdfCon">
	<form method="post" action="{{ url('/invoice/show/') }}/{{ $project->id }}" enctype="multipart/form-data">
              {{ method_field('PUT') }}
                {{ csrf_field() }}

	<table class="inline-item">
		<tr>
		<th class="pdf-title">INVOICE</th> <th class="pdf-titleNum">#103</th>
	    </tr>
	</table>

<table class="top-pdf">
	<tr>
		<th class="form-header" id="topcolone">FROM</th>
		<th class="form-header" id="topcoltwo">BILLED TO</th>
		<th class="colthree"></th>
		<th></th>
		<th></th>
	</tr>

	<tr>
		<td><h2 class="form-bold">{{$user->fname}} {{ $user->lname}}</h2></td>
		<td><h2 class="form-bold">{{$client->company_name}}</h2></td>
		<td><h2 class="payheader-one"">PAYMENT #1</h2></td>
		<td><input type="text" name="pay_perc_one" value="{{ old('pay_perc_one') }}" class="form-controltwo" placeholder=" 0.20" ></td>
		<td><input type="text" name="payment_one_date" value="{{ old('payment_one_date') }}" class="form-controltwo" placeholder=" Year/Month/Day"></td>
	</tr>

	<tr>
		<td><p class="form-text">{{$user->address}}</p></td>
		<td class="form-text">{{$client->client_fname}} {{ $client->client_lname}}</td>
		<td><h2 class="payheader-one">PAYMENT #2</h2></td>
		<td><input type="text" name="pay_perc_two" value="{{ old('pay_perc_two') }}" class="form-controltwo" placeholder=" 0.40"></td>
		<td><input type="text" name="payment_two_date" value="{{ old('payment_two_date') }}"  class="form-controltwo" placeholder=" Year/Month/Day"></td>
	</tr>

	<tr>
		<td><p class="form-text">{{$user->pnumber}}</p></td>
		<td><p class="form-text">{{$client->address}}</p></td>
		<td></td>
		<td><h2 class="payheader-two">TOTAL DUE ON</h2></td>
		<td><input type="text" name="total_date" class="form-controltwo" placeholder=" Year/Month/Day"></td>
	</tr>

	<tr>
		<td><p class="form-text">{{$user->email}}</p></td>
		<td><p class="form-text">{{$client->number}}</p></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<td><h2 class="form-header">ISSUED ON</h2><input type="type" name="issued" value="{{ old('issued') }}" class="form-controltwo" id="issued" placeholder=" Year/Month/Day"></td>
		<td><p class="form-text">{{$client->email}}</p></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<th><h2 class="form-header">SIGNATURE</h2></th>
		<th><h2 class="form-header">SIGNATURE</h2></th>
		<th></th>
		<th></th>
		<th></th>
	</tr>

	<tr>
		<th><div class="signature-line"></div></th>
		<th><div class="signature-line"></div></th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
</table>

<table class="bill-box">

  <tr class="bill-title">
	<th class="item-title">Item Name</th>
	<th class="item-title">Amount</th>
  </tr>

  <tr class="greyitemBox">
		<td><input type="text" placeholder=" item name" name="item_name" value="{{ old('item_name') }}" class="form-controlone"></td>
		<td><input type="text" placeholder=" $" name="item_amount" value="{{ old('item_amount') }}" class="form-controlthree"></td>
  </tr>
  <tr class="greyitemBox">
		<td><input type="text" placeholder=" item name" name="item_name_two" value="{{ old('item_name_two') }}" class="form-controlone"></td>
		<td><input type="text" placeholder=" $" name="item_amount_two'" value="{{ old('item_amount_two') }}" class="form-controlthree"></td>
  </tr>
   <tr class="greyitemBox">
		<td><input type="text" placeholder=" item name" name="item_name_three" value="{{ old('item_name_three') }}" class="form-controlone"></td>
		<td><input type="text" placeholder=" $" name="item_amount_three'" value="{{ old('item_amount_three') }}" class="form-controlthree"></td>
  </tr>
   <tr class="greyitemBox">
		<td class="taxtxt">Discount ( % )</td>
		<td><input type="text" placeholder=" 0.20%" name="discount" value="{{ old('discount') }}" class="form-controlthree"></td>
  </tr>
  <tr class="greyitemBox">
		
		<td class="taxtxt">Tax ( % )</td>
		<td><input type="text" placeholder=" 0.20%" name="tax" value="{{ old('tax') }}"class="form-controlthree"></td>
  </tr>

  <tr class="bill-title" id="bottom">
	<th class="item-title">Total</th>
	<th><input type="text" placeholder="$000.00" name="total" value="{{ old('total') }}" class="form-controlfour" id="total"></th>
  </tr>

</table>
    <input type="submit" class="btn-primary"value="Save">

</form>

    <script src="{{ asset('/js/back.js') }}"></script> 

</section>



