<?php
$url = "https://api.exchangeratesapi.io/2010-01-15";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);


$response = json_decode($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lokalize | Chidozie</title>
  </head>
  <body>
    <div>
      <table width=100%  border="1">
        <thead style="text-align:left">
          <tr>
            <th>Currency</th>
            <th>Exhange Rate(base EUR)</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach ($response->rates as $currency => $rate) {?>
            <tr>
              <td><?php echo $currency?></td>
              <td><?php echo $rate?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </body>
</html