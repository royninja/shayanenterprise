
<?php
#default font details is : Arial style of size 10
#$party_code = $_GET["party_code"];
#$invoice_no = $_GET["invoice_no"];


require_once("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
#general part for every tax invoice
$pdf->SetFont("Arial","B",10);
$pdf->Cell(0,4,"","L,R,T",1);
$pdf->Cell(0,4,"Original for Recipient","L,R",1,"R");
$pdf->Cell(0,4,"Duplicate for Transporter","L,R",1,"R");
$pdf->Cell(0,4,"Triplicate for Supplier","L,R",1,"R");
$pdf->Cell(0,4,"Extra Copy","L,R",1,"R");
$pdf->SetFont("Arial","U",10);
$pdf->Cell(0,4,"","L,R",1);
$pdf->Cell(0,4,"TAX INVOICE","L,R,B",1,"C");

#company letter head and address part and buyers part
$pdf->SetFont("Arial","B",18);
$pdf->Cell(80,4,"","L,R",0);
$pdf->Cell(110,4,"","L,R",1);
$pdf->Cell(80,6,"SHAYAN ENTERPRISE","L,R",0,"L");
$pdf->SetFont("Arial","",10);
$pdf->Cell(20,4,"Invoice No.","L",0,"L");
$pdf->Cell(25,4,"",0,0,"L");
$pdf->Cell(13,4,"Date: ",0,0,"L");
$pdf->Cell(52,4,"","R",1,"L");
$pdf->Cell(80,4,"","L,R",0,"L");
$pdf->Cell(20,4,"Challan No.","L",0,"L");
$pdf->Cell(25,4,"",0,0,"L");
$pdf->Cell(13,4,"Date: ",0,0,"L");
$pdf->Cell(52,4,"","R",1,"L");
$pdf->SetFont("Arial","B",10);
$pdf->Cell(80,4,"Hardware,Printer,Stationaries & Order Supply","L,R",0,"L");
$pdf->Cell(20,4,"Order No.","L",0,"L");
$pdf->Cell(90,4,"","R",1,"L");
$pdf->SetFont("Arial","",10);
$pdf->Cell(80,4,"158, Muktaram Babu Street,Kolkata-700007","L,R",0,"L");
$pdf->Cell(20,4,"Indent No.","L",0,"L");
$pdf->Cell(90,4,"","R",1,"L");
$pdf->Cell(80,4,"Mobile: 9433131937","L,R",0,"L");
$pdf->Cell(110,4,"Buyers Name and Address :","L,R,T",1,"L");
$pdf->Cell(80,4,"GSTIN: ","L,R",0,"L");
$pdf->Cell(110,4,"","L,R",1,"L");#contains 46
$pdf->Cell(80,4,"PAN: ","L,R",0,"L");
$pdf->Cell(110,4,"","L,R",1,"L");
$pdf->Cell(80,4,"Email: shayan.enterprise@yahoo.com","L,R",0,"L");
$pdf->Cell(30,4,"Buyer's GSTIN: ","L",0,"L");
$pdf->Cell(80,4,"","R",1,"L");
$pdf->Cell(80,4,"State Code: ","L,R",0,"L");
$pdf->Cell(30,4,"Party Code :","L",0,"L");
$pdf->Cell(80,4,"","R",1,"L");

#main billing part and item description price etc.
	#table heading
$pdf->Cell(80,4,"","L,R",0);
$pdf->Cell(110,4,"","L,R",1);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(75,4,"Description",1,0,"C");
$pdf->Cell(20,4,"HSN Code",1,0,"C");
$pdf->Cell(20,4,"Quantity",1,0,"C");
$pdf->Cell(15,4,"Unit",1,0,"C");
$pdf->Cell(30,4,"Price per Unit",1,0,"C");
$pdf->Cell(30,4,"Amount",1,1,"C");
	#table body
#1
#description 31, 
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA","L",0,"C");
$pdf->Cell(20,4,"12345678911",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#2
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#3
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#4
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#5
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#6
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#7
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#8
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#9
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#10
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#11
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#12
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#13
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#14
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#15
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#16
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#17
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#18
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#19
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#20
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#21
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#22
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#23
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");

#24
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");

#25
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#26
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#27
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");

#28
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#29
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#30
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#31
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#32
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#33
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#34
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#35
$pdf->SetFont("Arial","",10);
$pdf->Cell(75,4,"","L",0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(15,4,"",0,0,"C");
$pdf->Cell(30,4,"",0,0,"C");
$pdf->Cell(30,4,"","R",1,"C");
#more row can be add

#buttom calculation part and bank details part
$pdf->Cell(30,4,"Delivery Place: ","L",0,"L");
$pdf->Cell(60,4,"",0,0,"L");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(30,4,"Total:",1,0,"L");
$pdf->Cell(50,4,"",1,1,"L");

$pdf->Cell(90,4,"Bank Name : UNITED BANK OF INDIA","T,L,R",0,"L");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(30,4,"Delivery Charge:",1,0,"L");
$pdf->Cell(20,4,"",1,0,"C");
$pdf->Cell(30,4,"",1,1,"C");

$pdf->Cell(90,4,"COLLEGE STREET BRANCH","L,R",0,"L");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(30,4,"CGST(%):",1,0,"L");
$pdf->Cell(20,4,"",1,0,"C");
$pdf->Cell(30,4,"",1,1,"C");

$pdf->Cell(90,4,"IFSC: UTBI0COL108","L,R",0,"L");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(30,4,"SGST(%):",1,0,"L");
$pdf->Cell(20,4,"",1,0,"C");
$pdf->Cell(30,4,"",1,1,"C");

$pdf->Cell(90,4,"MICR: ","L,R",0,"L");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(30,4,"IGST(%):",1,0,"L");
$pdf->Cell(20,4,"",1,0,"C");
$pdf->Cell(30,4,"",1,1,"C");

$pdf->Cell(90,4,"A/C No.: 0083050001519","L,R,B",0,"L");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(30,4,"Total: ",1,0,"L");
$pdf->Cell(20,4,"",1,0,"C");
$pdf->Cell(30,4,"",1,1,"C");

$pdf->Cell(90,4,"Total In Word :","L",0,"L");
$pdf->Cell(20,4,"",0,0,"C");
$pdf->Cell(30,4,"Total R/O:",1,0,"L");
$pdf->Cell(20,4,"",1,0,"C");
$pdf->Cell(30,4,"",1,1,"C");
$pdf->Cell(0,4,"","L,R",1);


#footer
$pdf->Cell(0,4,"","L,R",1);
$pdf->Cell(130,4,"","L",0);
$pdf->Cell(60,4,"E.O.&.E.","R",1,"C");
$pdf->Cell(130,4,"","L",0);
$pdf->Cell(60,4,"for, SHAYAN ENTERPRISE","R",1,"C");
$pdf->Cell(0,4,"","L,R,B",1);



$pdf->Output();
?>