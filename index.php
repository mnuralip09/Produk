<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sistem Monitoring Produksi Sarung Tangan</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <h2>Sistem Monitoring Produksi Sarung Tangan</h2>

  <div class="form-container">
    <form action="simpan.php" method="POST">
      <label>Tanggal:</label>
      <input type="date" name="tanggal" required><br>

      <label>Shift:</label>
      <select name="shift" required>
        <option value="Pagi">Pagi</option>
        <option value="Siang">Siang</option>
        <option value="Malam">Malam</option>
      </select><br>

      <label>Jumlah:</label>
      <input type="number" name="jumlah" required><br>

      <label>Jenis Produk:</label>
      <select name="jenis" required>
        <option value="Golf">Golf</option>
        <option value="Rally">Rally</option>
        <option value="Gardening">Gardening</option>
      </select><br>

      <label>Pekerja:</label>
      <input type="text" name="pekerja" required><br>

      <button type="submit">Simpan</button>
    </form>
  </div>

  <div class="dashboard">
    <h3>Produksi Harian</h3>
    <canvas id="chartHarian"></canvas>

    <h3>Produksi per Jenis Produk</h3>
    <canvas id="chartPie"></canvas>
  </div>

  <script>
    // Contoh data dummy
    const dataHarian = {
      labels: ['Sen', 'Man', 'Tie', 'Wai', 'Tah', 'Min'],
      datasets: [{
        label: 'Produksi',
        data: [700, 500, 800, 600, 750, 650],
        borderColor: 'blue',
        fill: false,
        tension: 0.1
      }]
    };

    const configLine = {
      type: 'line',
      data: dataHarian
    };

    new Chart(document.getElementById('chartHarian'), configLine);

    const dataPie = {
      labels: ['Golf', 'Rally', 'Gardening'],
      datasets: [{
        label: 'Produksi',
        data: [40, 30, 30],
        backgroundColor: ['#3b82f6', '#f59e0b', '#10b981']
      }]
    };

    const configPie = {
      type: 'pie',
      data: dataPie
    };

    new Chart(document.getElementById('chartPie'), configPie);
  </script>
</body>
</html>
