    <div class="full">
      <div class="container"> 
          <div class="footerbackground">
       <div class="row">
          <div class="col-sm-3">
           <h4 class="widgetcolor">Nyttige linker</h4>
              <ul id="adobe">
                  <li><img src="images/adobe.png"  width="20"><a href="uploads/OriginalWrap_produkt2.pdf">Holder - Faresedler</a></li>
                  <li><img src="images/adobe.png"  width="20"><a href="uploads/DocWrap_produkt2a.pdf">Holder - Transport dokumenter</a></li>
              </ul>
           </div>
          <div class="col-sm-3">
             <h4 class="widgetcolor">Animation</h4>
              <img src="images/gif.gif" class="img-responsive" width="200" height="170">
           </div>
          <div class="col-sm-3">
             <h4 class="widgetcolor">Kontakt skjema</h4>
              <form class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-4"> 
                <input type="text" class="form-control" id="name" placeholder="Navn">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">        
                <input type="text" class="form-control" id="epost" placeholder="E-post">
            </div>
            </div>
              <div class="form-group">
              <div class="col-sm-12">
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
          <div class="col-sm-3">
             <h4 class="widgetcolor">Adresse</h4>
              <p>
              Vacuro AS<br>
            Besøksadresse:<br>
            C/O BNS<br>
            Jerikoveien 14,<br>
            1067 Oslo<br>
            Tel: +47 22 90 92 50<br>
            E-post: salg@bns.no<br>
              </p>
                </div>
           </div>
              </div>
            </div>
      </div>
      <div class="footer_bottom">
      <div class="container">
        <div class="row">
        <div class="footer">
          <div class="col-sm-9"> 
          <a href="home.php">Vacuro</a> 
           <a href="om.php">Om Oss</a>
           <a href="produkter.php">Produkter</a> 
           <a href="rereranser.php">Rereranser</a> 
           <a href="kontakt.php">Kontakt</a> 
           <a href="ipr.php">IPR</a>   
            </div>
            </div>
            <div class="col-sm-3"><p>Copyright 2016 - All Rights Reserved</p></div>
         
      </div>
      </div>
           <div class="arrow-top">
              <a class="arr3" href="#top" onclick="scrollToTop();return false">
            <i class="glyphicon glyphicon-chevron-up"></i>
                </a>
          </div>
</div>
   <script src="js/jquery-3.1.1.js"></script>
      <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/slick.js"></script>
      <script type="text/javascript" src="js/myjs.js"></script>
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