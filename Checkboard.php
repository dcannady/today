
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Checker Board</title>
    <style type="text/css">
      #black{
        background-color: black;
        width: 50px;
        height: 50px;
      }
      #white{ background-color: white;
        width: 50px;
        height: 50px;
      }
    </style>
  </head>
  <body>
  <table>
    <?php
    function blackFirst(){
      echo "<tr>";
      for($i=0; $i<8; $i++){
        if($i % 2 ==0){
          echo "<td id='black'></td>";
        } else {
          echo "<td id='white'></td>";
        }
      }
      echo "</tr>";
    }
    function whiteFirst(){
      echo "<tr>";
      for($i=0; $i<8; $i++){
        if($i % 2 ==0){
          echo "<td id='white'></td>";
        } else {
          echo "<td id='black'></td>";
        }
      }
      echo "</tr>";
    }
    for($k=0; $k<8; $k++){
      if ($k % 2 ==0){
        blackFirst();
      } else {
        whiteFirst();
      }
    }
    ?>
  </table>
</body>
</html>
