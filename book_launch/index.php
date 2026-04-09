<!DOCTYPE html>
<html>
<head>
    <style>
        body, html{
            height: 100%;
            margin: 0;
        }
        .bg{
        	background-image:url("image.jpg");
        	height: 100%;
        	background-position: center;
        	background-repeat: no-repeat;
        	background-size: cover;
        }
    </style>

</head>    
<body>

<div class="bg"></div>
<div id="result"></div>
<script>
    if(typeof(EventSource) !== "undefined") {
      var source = new EventSource("sse.php");
      source.onmessage = function(event) {
        window.location.href = "book.html";
      };
    } else {
      document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
    }
</script>

</body>
</html>
