<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator Lingkaran</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my style -->
    <link rel="stylesheet" href="../css/style.css" />
  <style>
    
    /* Styling untuk form dan hasil */
    .container {
      text-align: center;
      margin-top: 50px;
    }

    h1 {
      color: var(--primary);
      font-size: 2rem;
      font-style: italic;
    }

    label {
      font-weight: bold;
      margin-right: 5px;
      font-size: 1.5rem;
    }

   input {
      margin-bottom: 10px;
      padding: 5px;
      border-radius: 0.8rem;
      font-size: 1.5rem;
    }

    button {
      padding: 8px 16px;
      background-color: #8a5a2b;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 1rem;
      font-size: 1.5rem;
    }

    #result {
     font-weight: bold;
     margin-top: 20px;
     font-size: 1.5rem;
    }
  </style>
</head>
<body>
	<!-- navbar start -->
    <nav class="navbar">
      <a href="../index.html" class="navbar-logo"
        >Bangun Datar</span><span> Dan </span><span>Ruang</span>.</a
      >
      <div class="navbar-nav">
        <a href="../index.html">Home</a>

        <a href="../bangundatar.php">Bangun Datar</a>

        <a href="../bangunruang.php">Bangun Ruang</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="Search"><i data-feather="search"></i></a>
        <a href="#" id="Menu"> <i data-feather="menu"></i></a>
      </div>
    </nav>
    <br><br><br><br><br>
    <!-- navbar end -->
  <div class="container">
    <h1>Kalkulator Lingkaran</h1>
    <br>
    <label for="radius">Jari-jari:</label>
    <input type="number" id="radius" placeholder="Masukkan jari-jari">
    <br>
    <button onclick="calculate()">Hitung</button>
    <div id="result"></div>
  </div>

  <script>
    function calculate() {
      var radius = document.getElementById("radius").value;

      if (radius > 0) {
        var area = Math.PI * Math.pow(radius, 2);
        var circumference = 2 * Math.PI * radius;

        document.getElementById("result").innerHTML = "Luas: " + area.toFixed(2) + "<br>Keliling: " + circumference.toFixed(2);
      } else {
        document.getElementById("result").innerHTML = "Masukkan nilai yang valid untuk jari-jari";
      }
    }
  </script>
</body>
</html>
