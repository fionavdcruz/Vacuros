<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Kontakt - Vacuro AS</title>
     <link rel="icon" type="image/png" href="images/favicons.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
      
     <div class="container-fluid">
      <div class="row">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15376.139478124729!2d73.82312992828034!3d15.536261327392396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfc0120542a7ed%3A0x78199baf3e7935c0!2sPorvorim%2C+Penha+de+Fran%C3%A7a%2C+Goa!5e0!3m2!1sen!2sin!4v1483964089024" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
         </div>
      </div>
      
      <div class="widthcolor">
      <div class="container">
         <div class="row">
             <div class="dist2">
          <div class="col-sm-9">
              <div class="full2">
             <h4 class="black">Kontakt oss</h4>
             <p>Du er hjertlig velkommen til å sende oss en melding.<br>
                Vi vil svare dig så rask som mulig.<br>
                Ha en fin dag.<br></p>
             </div>
              <div class="dist6">
                 <form class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-4"> 
                 <label for="name">Navn</label> <br>
                <input type="text" class="form-control" id="name" placeholder="Navn">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="email">E-Post</label><br>
                <input type="text" class="form-control" id="epost" placeholder="E-post">
            </div>
            </div>
              <div class="form-group">
              <div class="col-sm-12">
                  <label for="message">Melding</label><br>
                <textarea class="form-control "rows="4" cols="50" placeholder="Melding" id="melding"></textarea>
                </div>
            </div>
            <div class="form-group">        
            <div class="col-sm-10">
                <button type="submit" class="frm-button">Slett</button>
                <button type="submit" class="frm-button">Send</button>
          </div>
            </div>
        </form>
 
            </div>
          </div>
          <div class="col-sm-3">
              <div class="address">
             <h4>Adresse</h4>
              <p></p>
              <p>Vacuro AS</p>
               <p>Besøksadresse:</p>
               <p>C/O BNS</p>
              <p>Jerikoveien 14,</p>
              <p>1067 Oslo</p>
              <p>Tel: +47 22 90 92 50</p>
              <p>E-post: salg@bns.no</p>
             
                       </div>
                    </div>
                 </div>
                </div>
             </div>
          </div>
      <?php 
      
      include('footer.php');
      ?>
       
    <script src="js/jquery-3.1.1.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
        var timeOut;
function scrollToTop() {
	if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
		window.scrollBy(0,-10);
		timeOut=setTimeout('scrollToTop()',10);
	}
	else clearTimeout(timeOut);
}
      
      </script>
  </body>
</html>