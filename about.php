<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
  <body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
      <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TEAM</a>
      <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large">TEAM</a>
  </div>

  <!-- Page content -->
  <div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- Automatic Slideshow Images -->
    <div class="w3-display-container w3-center">
      <img src="us.jpg" style="size:100%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h1>TUBz Steema</h1>
        <p><b>We had the best time programing this shit!</b></p>   
      </div>
    </div>

    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
      <h2 class="w3-wide">Tugas Besar 3 Strategi Algoritma</h2>
        <p class="w3-justify">Algoritma pencocokan string (pattern) Knuth-Morris-Pratt (KMP) dan Algoritma BoyerMoore
          merupakan algoritma yang lebih baik daripada brute force. Pada Tugas Besar III
          kali ini Anda diminta membuat aplikasi sederhana deteksi spam pada media sosial
          dengan kedua algoritma tersebut, plus menggunakan regular expression (regex). Teks
          yang akan Anda proses adalah posting berbahasa Indonesia. Pengguna aplikasi ini
          akan memberikan masukan berupa keyword spam, dan menandai daftar posting yang
          dikategorikan spam terurut berdasarkan tanggal.
        </p>
      <div class="w3-row w3-padding-32">
        <div class="w3-third">
          <p>Renjira Naufhal D.</p>
          <img src="ren.jpg" class="w3-round w3-margin-bottom" style="width:60%">
        </div>
        <div class="w3-third">
          <p>Shinta Ayu C. K.</p>
          <img src="shi.jpg" class="w3-round w3-margin-bottom" style="width:60%">
        </div>
        <div class="w3-third">
          <p>Naufal Putra P.</p>
          <img src="nop.jpg" class="w3-round" style="width:60%">
        </div>
      </div>
    </div>

    

    <!-- Ticket Modal -->
    <div id="ticketModal" class="w3-modal">
      <div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-teal w3-center w3-padding-32"> 
          <span onclick="document.getElementById('ticketModal').style.display='none'" 
         class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
          <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
        </header>
        <div class="w3-container">
          <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
          <input class="w3-input w3-border" type="text" placeholder="How many?">
          <p><label><i class="fa fa-user"></i> Send To</label></p>
          <input class="w3-input w3-border" type="text" placeholder="Enter email">
          <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
          <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
          <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
        </div>
      </div>
    </div>
    
  <!-- End Page Content -->
  </div>
  
  <!--
  To use this code on your website, get a free API key from Google.
  Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
  -->

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>
  </body>
</html>
