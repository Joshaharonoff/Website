<?php 
  include('includes/header.php'); 
?>



<div class="tic-tac-toe">

  <h1>Let's play some Tic-Tac-Toe!</h1>
  <input type= "button" value = "Your Turn!" onClick= "solve();"> 
  <div id="row1" class="row">
    <input type="text" id="top-left">
    <input type="text" id="top-middle">
    <input type="text" id="top-right">
  </div>
  <div id= "row2" class="row">
    <input type="text" id="middle-left">
    <input type="text" id="middle-middle">
    <input type="text" id="middle-right">
  </div>
  <div id= "row3" class="row">
    <input type="text" id="bottom-left">
    <input type="text" id="bottom-middle">
    <input type="text" id="bottom-right">
  </div>


</div>

<script type="text/javascript">
   function solve(){
    
    var tl = document.getElementById("top-left").value;
    var tm = document.getElementById("top-middle").value;
    var tr= document.getElementById("top-right").value;
    var ml = document.getElementById("middle-left").value;
    var mm = document.getElementById("middle-middle").value;
    var mr = document.getElementById("middle-right").value;
    var bl = document.getElementById("bottom-left").value;
    var bm = document.getElementById("middle-middle").value;
    var br = document.getElementById("middle-right").value;

    
    var top = [tl,tm,tr];

    if()){
      alert('ok woah..this may have worked')
    }
   
  
  }
  

</script>


<?php 
  include('includes/footer.php'); 
?>
