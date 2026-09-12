<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>table in html using php</h1>
    <?php $n = readline("Enter the number : "); ?>
    <table border="2" style="text-align: center;" cellpadding="5">
        <thead>
            <tr>
              <th>TABLE OF <?php $n ?></th>
              <th>RESULT</th>
            </tr>
        </thead>

        <tbody>
          <?php for($i=1;$i<=10;$i++):?>
              <tr>
                <td><?php echo $n." X ".$i." "?></td>
                <td><?php echo $n*$i ?></td>
              </tr>
          <?php endfor ?>
        </tbody>
    </table>
</body>
</html>

