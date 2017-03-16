<!DOCTYPE html>
<html>
		<head>
		
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Vacuro</title>
        <link rel="icon" type="image/png" href="images/favicons.png">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">    
            <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="dist/jquery.directional-hover.min.js"></script>
		<link rel="stylesheet" href="dist/jquery.directional-hover.min.css">
		<style>
.dh-container1 {
  margin: 15px;
  width: 400px;
  height: 165px;
  float: left;
  background-image: url(images/limfrie.jpg);
  background-repeat:no-repeat;
  background-size:contain;
  background-position:center;
    position: relative;
 
}
.dh-container2 {
  margin: 15px;
  width: 400px;
  height: 165px;
  float: left;
  background-image: url(images/Transportdokumenter.jpg);
  background-repeat:no-repeat;
  background-size:contain;
  background-position:center;
       position: relative;
  
}

.dh-container3 {
  margin: 15px;
  width: 400px;
  height: 165px;
  float: left;
  background-image: url(images/Faresedler.jpg);
  background-repeat:no-repeat;
  background-size:contain;
  background-position:center;
       position: relative;
}
            
.dh-overlay {
  background: rgba(52,73,94,.65);
  width: 100%;
  height: 100%;
  text-align: center;
  line-height: 300px;
  color: #fff;
            }
</style>
		</head>

		<body>
            <?php 
      
      include('header.php');
      ?>
            
         <div class="container-fluid">
       <div class="row">
           <div class="pattern">
           <div class="col-sm-12">
           
           </div>
           </div>
        </div>
      </div>
            
            
            
               <div class="widthcolor">
      <div class="container">
          <div class="dist3">
       <div class="row">
          <div class="col-sm-4">
              <div class="dh-container1 img-responsive">
          <div class="dh-overlay"></div>
        </div>
              <h4 class="widgetcolor">Holder - Faresedler</h4>
              <div class="dashed"></div>
              <p>Faresedler som passer til Vacuro-holderne, kan enkelt bestilles fra DGM – </p>
              <a href="http://dgm.no/produktkategori/faresedler/">http://dgm.no/produktkategori/faresedler/</a>
          </div>
        
           <div class="col-sm-4">
               <div class="dh-container2 img-responsive">
          <div class="dh-overlay"></div>
        </div>
                <h4 class="widgetcolor">Holder - Transport dokumenter</h4>
               
               <div class="dashed"></div>
               <p>Holderen er produsert i resirkulerbart, transparent Polykarbonat (PC) og er slagfast (skuddsikkert glass, plexiglass). For permanent innfesting på transportenheten. Enkel og rask montering med 4 pop nagler. Transportdokumentene settes inn og tas ut av holderen svært raskt og effektivt.</p>
          </div>
           <div class="col-sm-4">
              <div class="dh-container3 img-responsive">
          <div class="dh-overlay"></div>
        </div>
                <h4 class="widgetcolor">Faresedler - Lim frie</h4>
               <div class="dashed"></div>
               <p>Lim frie faresedler inngår også i vårt sortiment.
                  Lim frie faresedler for gjenbruk er produsert i resirkulerbart Polypropylen (PP) og er svært slitesterke. Faresedlene
                  kan gjenbruker i flere år, noe som fører til sterkt reduserte kostnader til faresedler for transportører.</p>
          </div>
      </div>
              </div>
            </div>
          </div>
  
            <?php 
      include('footer.php');
      ?>
            


 <script src="js/bootstrap.min.js"></script>

<script>
			$(window).load(function() {
				$('.dh-container1').directionalHover();
                $('.dh-container2').directionalHover();
                $('.dh-container3').directionalHover();
			});
            </script>

</body>
</html>