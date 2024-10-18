<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel pengulangan</title>
</head>
<body>
  <table border="1">
    <?php for($baris = 1; $baris <= 3; $baris++): ?>
    <tr>
      <?php for($kolom = 1; $kolom <= 5; $kolom++): ?>
      <td><?= $baris; ?>.<?= $kolom; ?></td>
      <?php endfor; ?>
    </tr>
    <?php endfor; ?>
  </table>
</body>
</html>