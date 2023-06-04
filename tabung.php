<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator Tabung</title>
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
      color: #FFFFFF;
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
      border-radius: 0.5rem;
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
    <h1>Kalkulator Tabung</h1>
    <label for="radius">Jari-Jari:</label>
    <input type="number" id="radius" placeholder="Masukkan jari-jari">
    <br>
    <label for="height">Tinggi:</label>
    <input type="number" id="height" placeholder="Masukkan tinggi">
    <br>
    <button onclick="calculate()">Hitung</button>
    <div id="result"></div>
  </div>

  <script>
    function calculate() {
      var radius = document.getElementById("radius").value;
      var height = document.getElementById("height").value;

      if (radius > 0 && height > 0) {
        var volume = Math.PI * Math.pow(radius, 2) * height;
        var surfaceArea = 2 * Math.PI * radius * (radius + height);

        document.getElementById("result").innerHTML = "Volume: " + volume.toFixed(2) + "<br>Luas Permukaan: " + surfaceArea.toFixed(2);
      } else {
        document.getElementById("result").innerHTML = "Masukkan nilai yang valid untuk jari-jari dan tinggi";
      }
    }
  </script>
</body>
</html>
