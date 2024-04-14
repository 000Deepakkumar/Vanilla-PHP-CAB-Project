<script>

// Get the button that opens the modal
var btn = document.getElementById("myBtn<?php echo $tr['CRN']?>");

// When the user clicks the button, open the modal 
btn.onclick = function() {
  document.getElementById("modal").style.filter = "blur(2px)";
  document.getElementById("myModal").style.display = "block";
}

</script>