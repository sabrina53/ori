
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
    font-size: 1rem;
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

.back-btn {
	background-color:#23A591;
	width: 100px;
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

.form-bold-center {
	font-size: 16px;
	text-align: center;
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
		width: 120px;
}

.payheader-two {
color: #5DE1CD;
font-size: 14px;
text-align: right;
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

 .form-normal {
 	font-weight: normal;
 	font-size: 15px;
 	text-align: center;
 }

 a {
 	color: white;
 }
 
 a:hover {
 color:#23A591;
 }

</style>
</head>


<section class="pdfCon">

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
		<td><h2 class="form-bold">{{ $user->fname}} {{ $user->lname}}</h2></td>
		<td><h2 class="form-bold">{{ $client->company_name}}</h2></td>
		<td><h2 class="payheader-one">PAYMENT #1</h2></td>
		<td><h2 class="form-bold"> {{ $project->pay_perc_one }} %</h2></td>
		<td><h2 class="form-bold">Date due: {{ $project->payment_one_date }} </h2></td>
	</tr>

	<tr>
		<td><p class="form-text">{{ $user->address}}</p></td>
		<td class="form-text">{{ $client->client_fname}} {{ $client->client_lname}}</td>
		<td><h2 class="payheader-one">PAYMENT #2</h2></td>
		<td><h2 class="form-bold">{{ $project->pay_perc_two }} %</h2></td>
		<td><h2 class="form-bold">Date due: {{ $project->payment_two_date }} </h2></td>
	</tr>

	<tr>
		<td><p class="form-text">{{$user->pnumber}}</p></td>
		<td><p class="form-text">{{$client->address}}</p></td>
		<td><h2 class="payheader-two">TOTAL DUE ON</h2></td>
				<td></td>

		<td><h2 class="form-bold">{{ $project->total_date }} </h2></td>
	</tr>

	<tr>
		<td><p class="form-text">{{$user->email}}</p></td>
		<td><p class="form-text">{{$client->number}}</p></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<td><h2 class="form-header">ISSUED ON <h2 class="form-bold">{{ $project->issued }} </h2></h2>
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
		<td><h2 class="form-normal">{{ $project->item_name }} </h2></td>
		<td><h2 class="form-bold-center">{{ $project->item_amount }} </h2></td>
  </tr>

  <tr class="greyitemBox">
	<td><h2 class="form-normal">{{ $project->item_name_two }} </h2></td>
	<td><h2 class="form-bold-center">{{ $project->item_amount_two }} </h2></td>
  </tr>

   <tr class="greyitemBox">

	<td><h2 class="form-normal">{{ $project->item_name_three }} </h2></td>
	<td><h2 class="form-bold-center">{{ $project->item_amount_three }} </h2></td>
  </tr>

   <tr class="greyitemBox">
		<td class="taxtxt">Discount ( % )</td>
		<td><h2 class="form-bold-center">{{ $project->discount }} %</h2></td>
  </tr>

  <tr class="greyitemBox">
		<td class="taxtxt">Tax ( % )</td>
		<td><h2 class="form-bold-center">{{ $project->tax }} %</h2></td>
  </tr>

  <tr class="bill-title" id="bottom">
	<th class="item-title">Total</th>
	<td><h2 class="form-bold-center">{{ $project->total }} </h2></td>
  </tr>

</table>
	
	<div class="double-btn">
                		<div class="back-btn">
                    		<h4 class="double-txt"><a class="backbtn">Go Back </a></h4>
                    	</div>

						<div class="download-btn">
                    		<h4 class="double-txt"><a href="{{ url ('/export') }}/{{$project->client->id }}">Download PDF</a></h4>
                		</div>
    </div>
				

</div>

    <script src="{{ asset('/js/back.js') }}"></script> 

</section>



