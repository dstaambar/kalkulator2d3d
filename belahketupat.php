<!DOCTYPE html>
<html>
<head>
  <title>Belah Ketupat</title>
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
    <h1 >Kalkulator Belah Ketupat</h1>
    <br>
    <label for="diagonal1">Diagonal 1:</label>
    <input type="number" id="diagonal1" placeholder="Masukkan diagonal 1">
    <br>
    <label for="diagonal2">Diagonal 2:</label>
    <input type="number" id="diagonal2" placeholder="Masukkan diagonal 2">
    <br>
    <label for="side">Sisi:</label>
    <input type="number" id="side" placeholder="Masukkan sisi">
    <br>
    <button onclick="calculate()">Hitung</button>
    <div id="result"></div>
  </div>

  <script>
    function calculate() {
      var diagonal1 = document.getElementById("diagonal1").value;
      var diagonal2 = document.getElementById("diagonal2").value;
      var side = document.getElementById("side").value;

      if (diagonal1 > 0 && diagonal2 > 0 && side > 0) {
        var area = (parseInt(diagonal1) * parseInt(diagonal2)) / 2;
        var perimeter = 4 * parseInt(side);

        document.getElementById("result").innerHTML = "Luas: " + area + "<br>Keliling: " + perimeter;
      } else {
        document.getElementById("result").innerHTML = "Masukkan nilai yang valid untuk diagonal 1, diagonal 2, dan sisi";
      }
    }
  </script>
</body>
</html>
