<!DOCTYPE html>
<html>
<head>
  <title>Jajar Genjang</title>
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
    <h1>Kalkulator Jajar Genjang</h1><br>
    <label for="base">Alas:</label>
    <input type="number" id="base" placeholder="Masukkan alas">
    <br>
    <label for="height">Tinggi:</label>
    <input type="number" id="height" placeholder="Masukkan tinggi">
    <br>
    <label for="side">Sisi Miring:</label>
    <input type="number" id="side" placeholder="Masukkan sisi miring">
    <br>
    <button onclick="calculate()">Hitung</button>
    <div id="result"></div>
  </div>

  <script>
    function calculate() {
      var base = document.getElementById("base").value;
      var height = document.getElementById("height").value;
      var side = document.getElementById("side").value;

      if (base > 0 && height > 0 && side > 0) {
        var area = base * height;
        var perimeter = 2 * (parseInt(base) + parseInt(side));

        document.getElementById("result").innerHTML = "Luas: " + area + "<br>Keliling: " + perimeter;
      } else {
        document.getElementById("result").innerHTML = "Masukkan nilai yang valid untuk alas, tinggi, dan sisi miring";
      }
    }
  </script>
</body>
</html>
