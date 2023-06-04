<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator Trapesium</title>
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
    <h1>Kalkulator Trapesium</h1>
    <br>
    <label for="base1">Alas Atas:</label>
    <input type="number" id="base1" placeholder="Masukkan alas atas">
    <br>
    <label for="base2">Alas Bawah:</label>
    <input type="number" id="base2" placeholder="Masukkan alas bawah">
    <br>
    <label for="height">Tinggi:</label>
    <input type="number" id="height" placeholder="Masukkan tinggi">
    <br>
    <label for="side1">Sisi Miring 1:</label>
    <input type="number" id="side1" placeholder="Masukkan sisi miring 1">
    <br>
    <label for="side2">Sisi Miring 2:</label>
    <input type="number" id="side2" placeholder="Masukkan sisi miring 2">
    <br>
    <button onclick="calculate()">Hitung</button>
    <div id="result"></div>
  </div>

  <script>
    function calculate() {
      var base1 = document.getElementById("base1").value;
      var base2 = document.getElementById("base2").value;
      var height = document.getElementById("height").value;
      var side1 = document.getElementById("side1").value;
      var side2 = document.getElementById("side2").value;

      if (base1 > 0 && base2 > 0 && height > 0 && side1 > 0 && side2 > 0) {
        var area = ((parseInt(base1) + parseInt(base2)) * parseInt(height)) / 2;
        var perimeter = parseInt(base1) + parseInt(base2) + parseInt(side1) + parseInt(side2);

        document.getElementById("result").innerHTML = "Luas: " + area + "<br>Keliling: " + perimeter;
      } else {
        document.getElementById("result").innerHTML = "Masukkan nilai yang valid untuk alas atas, alas bawah, tinggi, sisi miring 1, dan sisi miring 2";
      }
    }
  </script>
</body>
</html>
