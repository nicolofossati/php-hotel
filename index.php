<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

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

    $parking = '';

    if (!empty($_GET['parking'])) {
        $parking = $_GET['parking'];
    }
    ?>
    <form class="row g-3 justify-content-center my-3" method="get" action="index.php">

        <div class="col-md-4">
            <label for="inputState" class="form-label text-center d-block">Parking</label>
            <select id="inputState" class="form-select" name="parking">
                <option value="empty">Choose...</option>
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>
        </div>

        <div class="col-md-12 d-flex justify-content-center">
            <div class="col-md-4">
                <label for="customRange2" class="form-label text-center d-block">Hotel vote</label>
                <input type="range" class="form-range" min="0" max="5" id="customRange2">
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary col-3 me-2">Search</button>
            <button type="reset" class="btn btn-primary col-1 ms-2">Reset</button>
        </div>
    </form>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to center</th>
            </tr>
        </thead> <!-- Apertura table e titoli -->

        <tbody>
            <?php



            foreach ($hotels as $hotel) {
                ?>
                <tr>
                    <td>
                        <?php echo $hotel['name'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['description'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['parking'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['vote'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['distance_to_center'] ?>
                    </td>

                </tr>
                <?php
            }

            ?>

        </tbody>
    </table> <!-- chiusura table -->



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>