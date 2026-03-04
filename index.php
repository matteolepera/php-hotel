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
    ?>
    <div class="container">
        <h2>Filtra gli hotel:</h2>
    <form action="./index.php" method="GET">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="parking" id="checkDefault">
            <label class="form-check-label" for="checkDefault">
                Parcheggio disponibile
            </label>
        </div>
        <button class="btn btn-primary" type="submit">Filtra</button>
    </form>

    <table class="table mt-4">
         <thead>
        <tr>
            <?php 
                $keys = array_keys($hotels[0]);
                // var_dump($keys);
                foreach($keys as $curKey){
                    // var_dump($curKey);
                    echo "<th>$curKey</th>";
                }
            ?>
        </tr>
    </thead>
  <tbody>
        <?php foreach ($hotels as $curHotel ) { ?>
        <tr>
      <?php foreach($curHotel as $key => $value) {?>
            <td><?php echo $key == 'parking' ? ($value ? 'Yes' : 'No') : $value ?></td>
        <?php } ?>
    </tr>
<?php } ?>
  </tbody>
</table>

</div> 
    
</body>
</html>