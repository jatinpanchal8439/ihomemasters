<?php
$rooms = ['kitchen','dining','living','master'];
$data = []; $grandTotal = 0; $submitted = false;

if ($_SERVER['REQUEST_METHOD']=='POST') {
  $submitted = true;
  foreach ($rooms as $r) {
    $cnt = (int)$_POST["{$r}_count"];
    $rate = (float)$_POST["{$r}_rate"];
    $total = $cnt * $rate;
    $data[$r] = compact('cnt','rate','total');
    $grandTotal += $total;
  }
  $contact = [
    'name'=>htmlspecialchars($_POST['name']),
    'email'=>htmlspecialchars($_POST['email']),
    'phone'=>htmlspecialchars($_POST['phone'])
  ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Interior Cost Calculator</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: url('bg.jpg') no-repeat center center fixed;
      background-size: cover;
      backdrop-filter: blur(2px);
      color: #fff;
    }

    h1 {
      text-align: center;
      margin: 30px 0;
      font-size: 2.8rem;
      text-shadow: 1px 1px 3px #000;
    }

    form, .result {
      max-width: 1000px;
      margin: 30px auto;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 12px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
      padding: 30px;
      color: #333;
    }

    .panel {
      display: flex;
      gap: 20px;
      align-items: center;
      padding: 20px;
      background: #f5f5f5;
      border-radius: 10px;
      border-left: 5px solid #2196f3;
      margin-bottom: 20px;
      transition: 0.3s;
    }

    .panel:hover {
      background: #e3f2fd;
      transform: scale(1.01);
    }

    .panel-icon {
      width: 80px;
      height: 80px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      flex-shrink: 0;
    }

    .panel-icon img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .panel-content {
      flex-grow: 1;
    }

    .panel h2 {
      margin: 0 0 10px;
      font-size: 18px;
      color: #0d47a1;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: 500;
    }

    input[type="text"],
    input[type="number"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      font-size: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background: #fff;
    }

    input:focus {
      border-color: #2196f3;
      outline: none;
    }

    button {
      width: 100%;
      background: #0d47a1;
      color: #fff;
      padding: 15px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 20px;
      transition: background 0.3s;
    }

    button:hover {
      background: #1565c0;
    }

    .result table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .result th, .result td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }

    .result th {
      background: #bbdefb;
      color: #0d47a1;
    }

    .result {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      margin-top: 30px;
      border-left: 5px solid #4caf50;
    }

    .result p {
      margin-top: 20px;
      font-weight: bold;
    }

    @media (max-width: 768px) {
      .panel {
        flex-direction: column;
        align-items: flex-start;
      }
      .panel-icon {
        margin-bottom: 15px;
      }
    }
  </style>
</head>
<body>

  <h1><i class="fas fa-ruler-combined"></i> Interior Cost Calculator</h1>

  <form method="POST">
    <?php foreach ($rooms as $r): ?>
      <div class="panel">
        <div class="panel-icon">
          <img src="icons/<?= $r ?>.jpg" alt="<?= $r ?>">
        </div>
        <div class="panel-content">
          <h2><?= ucfirst($r) ?> Room</h2>
          <label>Units:
            <input type="number" name="<?= $r ?>_count" required placeholder="e.g. 2">
          </label>
          <label>Rate per Unit (₹):
            <input type="text" name="<?= $r ?>_rate" required placeholder="e.g. 150000">
          </label>
        </div>
      </div>
    <?php endforeach; ?>

    <div class="panel">
      <div class="panel-icon">
        <img src="icons/contact.jpg" alt="Contact">
      </div>
      <div class="panel-content">
        <h2>Contact Details</h2>
        <label><i class="fas fa-user"></i> Name:
          <input type="text" name="name" required>
        </label>
        <label><i class="fas fa-envelope"></i> Email:
          <input type="email" name="email" required>
        </label>
        <label><i class="fas fa-phone"></i> Phone:
          <input type="text" name="phone">
        </label>
      </div>
    </div>

    <button type="submit"><i class="fas fa-calculator"></i> Submit & Get Estimate</button>
  </form>

  <?php if($submitted): ?>
    <div class="result">
      <h2><i class="fas fa-chart-bar"></i> Estimate Summary</h2>
      <table>
        <tr><th>Room</th><th>Units</th><th>Rate (₹)</th><th>Total (₹)</th></tr>
        <?php foreach ($data as $r => $v): ?>
          <tr>
            <td><?= ucfirst($r) ?></td>
            <td><?= $v['cnt'] ?></td>
            <td><?= number_format($v['rate'],2) ?></td>
            <td><?= number_format($v['total'],2) ?></td>
          </tr>
        <?php endforeach; ?>
        <tr>
          <td colspan="3"><strong>Total</strong></td>
          <td><strong>₹<?= number_format($grandTotal, 2) ?></strong></td>
        </tr>
      </table>
      <p><i class="fas fa-user-circle"></i> <?= "{$contact['name']}, {$contact['email']}, {$contact['phone']}" ?></p>
    </div>
  <?php endif; ?>

</body>
</html>
