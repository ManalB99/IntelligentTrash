<?php require('header.php'); ?>
<!Doctype html>
  <head>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj2VgbhMzLzO8hDN3uEV-2km6cERpczpg&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 500px;
        width: 550px;
        margin: auto; 
        border: 3px solid; 
        position: relative;
      }
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: 45.756446, lng: 4.826378 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>
  </head>
  <body>
    <p>&nbsp; &nbsp; &nbsp; &nbsp;</p>
    <!--The div element for the map -->
    <div id="map"></div>
    <div class="row">
        <div class="col-12" style="text-align:center;">
        <button class="btn btn-secondary" style="width:50%;">Scanner et jeter</button>
        </div>
    </div>
  </body>
</html>
<?php include '../views/footer.php'; ?>