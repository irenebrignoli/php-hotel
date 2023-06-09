<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Hotels</title>
</head>

<body>

  <?php
  $hotels = [

          [
              'name' => 'Hotel Belvedere',
              'description' => 'Hotel Belvedere Descrizione',
              'parking' => true,
              'vote' => 4,
              'distance_to_center' => 10.4
          ],
          [
              'name' => 'Hotel Futuro',
              'description' => 'Hotel Futuro Descrizione',
              'parking' => true,
              'vote' => 2,
              'distance_to_center' => 2
          ],
          [
              'name' => 'Hotel Rivamare',
              'description' => 'Hotel Rivamare Descrizione',
              'parking' => false,
              'vote' => 1,
              'distance_to_center' => 1
          ],
          [
              'name' => 'Hotel Bellavista',
              'description' => 'Hotel Bellavista Descrizione',
              'parking' => false,
              'vote' => 5,
              'distance_to_center' => 5.5
          ],
          [
              'name' => 'Hotel Milano',
              'description' => 'Hotel Milano Descrizione',
              'parking' => true,
              'vote' => 2,
              'distance_to_center' => 50
          ],

      ];

      // foreach($hotels as $hotel){

      //   foreach($hotel as $key => $value){
      //     echo $key . ':' . ' ' . $value . '<br>';
      //   }

      //   echo '<hr>';
      // }

      
  ?>

  <div class="container">
    <h1  class="text-center mt-5">Hotels</h1>
    <form action="index.php" method="get">
      <label for="parking">Seleziona parcheggio:</label>
      <select name="parking" id="parking">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </form>
    <table class="table table-striped table-bordered mt-5">
      <thead>
        <tr>
          <?php
          foreach($hotels[0] as $key => $value){
            echo "<th scope='col'>". $key . "</th>";  
          }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach($hotels as $hotel){
          
          echo "<tr>".
                  "<th scope='row'>" . $hotel ['name'] . "</th>".
                  "<td>" . $hotel ['description'] . "</td>".
                  "<td>" . $hotel ['parking'] . "</td>".
                  "<td>" . $hotel ['vote'] . "</td>".
                  "<td>" . $hotel ['distance_to_center'] . "</td>"
                ."</tr>";
        }
        ?>
       
       
      </tbody>
    </table>
  </div>
  


  <!-- script bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>

</html>