<!DOCTYPE html>
<html>
<head>
<title>Profil</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
 

<link type="text/css" rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
	@media print {
		#print1 {
			display: none;
		}
		.print2 {
			color: #2d3194 !important;
		}
		#headshot {
			display: none;
		}
		.sectionTitle h1 {
	
	color: #2d3194 !important;
}
		
	}
</style> 
</head>

<body id="top">
<div id="cv" class="instaFade"  >
	<div class="mainDetails">
		<img src="logoproduzeni.png" style="max-width: 100%">
		<div id="headshot" class="quickFade">
			<img src="headshot.jpg" alt="Alan Smith" />
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php session_start();  if($_SESSION["ime"]!="mirza"){
            header("Location: index.php");

  } echo $_SESSION['ime']; echo " ";;echo $_SESSION['prezime']; ?></h1>
			<h2 class="quickFade delayThree">Dermatolog</h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<div>
				<div style="color: #505050;">Broj bodova:</div>
				<div class="print2" style="text-align: center;font-size: 50px;">28</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Osnovni podaci</h1>
				</div>
				
				<div class="sectionContent">

		
		<div class="row" style="padding-bottom:20px">
          <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right; color: #505050;">
         	Ime:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Pero	
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;color: #505050;">
         	Ime roditelja:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Pere	
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Prezime:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Perić
          	</div>
          </div>
            <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Mjesto rođenja:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Sarajevo
          	</div>
          </div>
            <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Datum rođenja:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	29.05.1980.
          	</div>
          </div>
            <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	JMBG:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold; ">
          	2683449378543
          	</div>
          </div>

        </div>
					
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Licenca</h1>
			</div>
			<div class="sectionContent">
				<div class="row" style="padding-bottom:20px">
             <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;color: #505050;">
         	Broj licence:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	243-2B	
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;color: #505050;">
         	Datum izdavanja licence:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	12.01.2008.	
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Važi do:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	25.01.2025.
          	</div>
          </div>
            <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Broj bodova:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	28
          	</div>
          </div>
        
        </div>
				
			</div>
			<div class="clear"></div>
		</section>

		<section id="id2">
			<div class="sectionTitle">
				<h1>Podaci o članstvu</h1>
			</div>
			<div class="sectionContent">
				<div class="row" style="padding-bottom:20px">
               <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;color: #505050;">
         	Podružnica:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Brčko	
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;color: #505050;">
         	Organizacija / Ustanova:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Pedijatrija	
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Status članstva:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Aktivan
          	</div>
          </div>
            <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Datum prvog učlanjenja:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	28.01.2000.
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Datum prestanka članstva:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	/
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Razlog prestanka članstva:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	/
          	</div>
          </div>

        </div>
				
			</div>
			<div class="clear"></div>
		</section>

		<section>
			<div class="sectionTitle">
				<h1>Obrazovanje</h1>
			</div>
			<div class="sectionContent">
				
        	<div class="row"style="padding-bottom:20px">
         <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;color: #505050;">
         	Stručni smjer:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Doktor	
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;color: #505050;">
         	Školsa sprema:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	VSS	
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Broj diplome:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	224-256-223
          	</div>
          </div>
            <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Datum izdavanja:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	28.01.2000.
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Općina izdavanja:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Brčko
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Broj uvjerenja:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	37/B
          	</div>
          </div>
            <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Datum polaganja:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	02.02.2001.
          	</div>
          </div>
            <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Mjesto polaganja:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	KSS Brčko
          	</div>
          </div>
        </div>
				
			</div>
			<div class="clear"></div>
		</section>
			<section>
			<div class="sectionTitle">
				<h1>Kontakt informacije</h1>
			</div>
			<div class="sectionContent">
				<div class="row" style="padding-bottom:20px">
         <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;color: #505050;">
         	Adresa:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Džamijska 222	
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;color: #505050;">
         	Poštanski broj:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	72022	
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Općina:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	Trnovo
          	</div>
          </div>
            <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Email:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	pero@peric.com
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	GSM:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	+38769098765
          	</div>
          </div>
           <div class="col-sm-12">
          	<div style="display: inline-block; width: 35%;text-align: right;text-align: top;color: #505050;">
         	Telefon:
          	</div>
          	<div style="display: inline-block; width: 55%;text-align: left;font-weight: bold;">
          	+38733987123
          	</div>
          </div>
            
      
         
        </div>
				
			</div>
			<div class="clear"></div>
		</section>
<section id="print1">
			
			<div style="display: flex;
    justify-content: space-between;">
				<div style="display: inline-block; height: 32px;width:77px; ">
					<img src="print.png" style="max-width:100%;cursor: pointer;"onclick="ispis();">
				</div>
				<div style="display: inline-block; height: 32px;width:77px; ">
					<a href="logout.php?logout"><img src="logout.png" style="max-width:100%;cursor: pointer;"></a>
					
				</div>
				
			</div>
		</section>


	</div>
	</div>

<script type="text/javascript">
	


 function ispis() {	
 	  window.print();
 	 

}
</script>

</body>
</html>