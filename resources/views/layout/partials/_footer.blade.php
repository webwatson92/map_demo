<hr>
<footer class="text-center" navbar-fixed-bottom>
	<p class="text-center">
		Copyright &copy; {{ date('Y')}} &middot; {{config('app.name')}} <br> En vous inscrivant, vous <a href="">acceptez nos Conditions d'utilisation, Politique de confidentialité</a> et recevoir des e-mails Wix, newsletters <br> et actualités. by <a href="https://twitter.com/">GlobalTicServices</a>
	</p>
  <script type="text/javascript">
   $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
  <!--SLIDE PAYS -->
      <script type="text/javascript" src="http://yourjavascript.com/21051171187/jquery-touchswipe-min.js"></script>
      <script type="text/javascript" src="http://yourjavascript.com/11873115711/jquery-1-12-4-min.js"></script>
      <script type="text/javascript" src="http://yourjavascript.com/71712155041/responsive-bootstrap-carousel.js"></script>
  <!--End SLIDE PAYS -->
	      <script>
		       var tab = [7.197, -5,467];

		        var mymap = L.map('mapid').setView(tab, 13);

		        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
				    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
				    maxZoom: 18,
				    id: 'mapbox.streets',
				    accessToken: 'pk.eyJ1Ijoid2Vid2F0c29uOTIiLCJhIjoiY2oycWo3c2ZoMDAzNDMzcnA0Z2dlNmN0OCJ9.wdVPGmEAHgoBcz0dWOAR_w'
				}).addTo(mymap);

		        var marker = L.marker([51.5, -0.09]).addTo(mymap);
		        marker.bindPopup("<b>Hello world!</b><br>I am a popup.").open

        </script>
        <script type="text/javascript">
        	  $("#link").mouseover(function(){
              		$("#menu").show();
    		    });

    		   
    		    $(document).on('mouseover','#link',function()
              {  
                  $('#menu').show(); 
              });

    		    $("#link").click(function(e)
    				{
    					$("#menu").show();
    				});

            $('document').ready(function()){
                alert('changer');
            }
        </script>

<!-- Facebook connect script -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1305218282939703',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</footer>