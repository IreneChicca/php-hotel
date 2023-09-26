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


    $parking =$_GET['parking'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
<form method="GET" action="" class="w-75 p-5">


<select class="form-select" aria-label="Default select example" name="parking">
  <option selected>Parking</option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  

</select>
<button class="btn btn-primary mt-3">Send</button>
</form>




<table class="table text-center">
  <thead>
    <tr>

    <?php 
    foreach ($hotels[0] as $key => $hotel) {

            echo "<th scope='col'>".$key."</th>";
      
    }
    ?>          
      
    </tr>
  </thead>
  <tbody>
<?php
    
    if($parking == 'Yes')
        foreach ($hotels as  $hotel) {
       echo  "<tr>
       <td>".$hotel['name']."</td>
      <td>".$hotel['description']."</td>

      <td>". 
      
      //if($hotel['parking']) ? 'yes' : 'no'  

      $hotel['parking'].
      "</td>

      <td>".$hotel['vote']."</td>
      <td>".$hotel['distance_to_center']."</td>"
    ;

          

        };
    
    ?>


    
  </tbody>
</table>
</body>
</html>