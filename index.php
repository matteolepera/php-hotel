<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>PHP Hotels©</title>
</head>
<body>

    <h1>PHP Hotel</h1>
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
    // var_dump($hotels);
    

    // foreach($hotels as $curHotel){
    //     foreach($curHotel as $key => $value){
    //         echo "$key" . " - " . "$value";

    //         echo "<br>";
    //     }
    // }

    ?>

    <table class="table">
         <thead>
        <tr>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Parcheggio</th>
            <th>Voto</th>
            <th>Distanza dal centro</th>
        </tr>
    </thead>
  <tbody>
    <?php foreach ($hotels as $curHotel ) { ?>
    <tr>
      <td><?php echo $curHotel['name']; ?></td>
      <td><?php echo $curHotel['description'];?></td>
      <td><?php echo $curHotel['parking'] ? "Si" : "No";?></td>
      <td><?php echo $curHotel['vote'];?></td>
      <td><?php echo $curHotel['distance_to_center'];?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    
</body>
</html>