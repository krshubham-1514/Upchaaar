
<!doctype html>
<html>
<head>
   <title>
   </title>
   <script src="jquery-3.3.1.js"></script>
   <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSHhcM57BSnH69BxuP7W5aHKF1jNfm9rg&callback=initMap">
    </script>
    
</head>
<style>
     #mylocation{
         height:800px;
         width:800px;
         

     }
    </style>
<body>
<div id="mylocation"></div>
<button onclick="getlocation()">CLICK HERE TO GET YOUR LOCATION</button>

<script>
    var doc=document.getElementById("mylocation");
    
    function getlocation()
    {
       if(navigator.geolocation)
       {
           navigator.geolocation.getCurrentPosition(showposition);
           
       }
    }
    function showposition(position)
    {
         long=53.3;
         lat=56.7;
         var coords=new google.maps.LatLng(lat,long);
         var mapOptions={
             zoom:12,
             center:coords,
             mapTypeId:google.maps.MapTypeId.ROADMAP,


         }    
         var map=new google.maps.Map(document.getElementById("mylocation"),mapOptions);
         var marker=new google.maps.Marker({map:map,position:coords});

         

    }

</script>
</body>
</html>
