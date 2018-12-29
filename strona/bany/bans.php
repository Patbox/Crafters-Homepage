<?php
   // <<-----------------Database Connection------------>> //
   require 'includes/data/database.php';
   $sql = 'SELECT name, reason, banner, time, expires FROM bans ORDER BY time DESC LIMIT 20';
   $retval = $conn->query($sql);
   ?>
<body>
    <table class="col-sm-12 table-condensed">
        <thead>
            <tr>
            <th>
                <center>Nick</center>
            </th>
            <th>
                <center>Zbanowany przez</center>
            </th>
            <th>
                <center>Powód</center>
            </th>
            <th>
                <center>Otrzymany</center>
            </th>
            <th>
                <center>Wygasa</center>
            </th>
            </tr>
            </thead>
            <tbody>
               <?php while($row = $retval->fetch_assoc()) { 
                  if($row['banner'] == null) {
                     $row['banner'] = 'Console';
                  }
                  // <<-----------------Ban Date Converter------------>> //
                  $timeEpoch = $row['time'];
                  $timeConvert = $timeEpoch / 1000;
                  $timeResult = date('d. m. Y H:i', $timeConvert);
                  // <<-----------------Expiration Time Converter------------>> //
                  $expiresEpoch = $row['expires'];
                  $expiresConvert = $expiresEpoch / 1000;
                  $expiresResult = date('d. m. Y H:i', $expiresConvert);
                  ?>
               <tr class="hoverable">
                  <td><center><?php echo "<img src='https://minotar.net/helm/" . $row['name'] . "/32' style='margin-bottom:5px;margin-right:5px;border-radius:2px;' />" . $row['name'];?></center></td>
                  <td><center><?php echo "<img src='https://minotar.net/helm/" . $row['banner'] . "/32'  style='margin-bottom:5px;margin-right:5px;border-radius:2px;' />" . $row['banner'];?></center></td>
                  <td style="width: 30%;"><center><?php echo $row['reason'];?></center></td>
                  <td><center><?php echo $timeResult;?></center></td>
                  <td><center><?php if($row['expires'] == 0) {
                     echo 'Nigdy';
                     } else {
                     echo $expiresResult; }?></center></td>
               </tr>
               <?php }
                  $conn->close();
                  echo "</tbody></table>";
                  ?>
         </div>
      </div>
   </div>