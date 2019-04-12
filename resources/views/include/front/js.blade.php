<!-- jQuery -->
<script src="nitro_theme/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="nitro_theme/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<!-- <script src="nitro_theme/js/bootstrap.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<!-- Carousel -->
<script src="nitro_theme/js/owl.carousel.min.js"></script>
<!-- Stellar -->
<script src="nitro_theme/js/jquery.stellar.min.js"></script>
<!-- Waypoints -->
<script src="nitro_theme/js/jquery.waypoints.min.js"></script>
<!-- Counters -->
<script src="nitro_theme/js/jquery.countTo.js"></script>
<!-- MAIN JS -->
<script src="nitro_theme/js/main.js"></script>

<script>
$('ducument').ready(function(){
    // ใส่ class img-fluid ให้รูปในหน้า Page เพื่อทำ responsive
    $('.KpopContent img').attr('class', 'img-fluid');

});
</script>


<button onclick="topFunction()" id="toTopBtn" title="Go to top">Top</button>
<style>
#toTopBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #27cacc;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  transition: background-color 0.5s ease;
}

#toTopBtn:hover {
  background-color: #17a2b8;
}
</style>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("toTopBtn").style.display = "block";
  } else {
    document.getElementById("toTopBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>