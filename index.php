<!-- 
nome repo: php-hotel
Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET 
permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel 
per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto 
di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente 
(es. ottenere una lista con hotel che dispongono di parcheggio e che 
hanno un voto di tre stelle o superiore).
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->

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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- VUE CDN -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- LUXON CDN -->
  <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
  <!-- AXIOS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- My css link -->
  <link rel="stylesheet" href="css/style.css">
  <title>PHP Badwords</title>
</head>
<body class="bg-dark">
  <div class="container my-5 py-4 bg-body-tertiary">
    <div class="row justify-content-center">
      <div class="col-6 d-flex flex-column justify-content-center mx-auto">
        <div class="col d-flex flex-column justify-content-center mx-auto">
          <img class="my-3 mx-auto" src="./imgs/vuejs-logo.png" alt="" width="90" height="75">
        </div>
        <div class="col my-3">
          <div class="w-100 mx-auto">
            <button class="btn btn-success" type="submit">Search</button>
          </div>
        </div>

        <!-- tramite echo si stampano gli elementi  -->
        <!-- creo lista in html -->
        <!-- rimuovo gli elementi che non servono -->
        <!-- inserisco il php nell'html -->
        <!-- ciclo foreach su array hotels -->
        <div class="col my-3">
          <div class="w-100 mx-auto">
            <ul class="list-group">
            <?php foreach($hotels as $key => $hotel) { ?>
              <li class="list-group-item">
                <!-- per accedere alla chiave devo usare le parentesi quadre -->
                <?php echo "Name: " . $hotel['name']; ?><br>
                <?php echo "Description: " . $hotel['description']; ?><br>
                <?php echo "Parking: " . ($hotel['parking'] ? 'Yes' : 'No'); ?><br>
                <?php echo "Vote: " . $hotel['vote']; ?><br>
                <?php echo "Distance to center: " . $hotel['distance_to_center'] . " km"; ?><br>
              </li>
            <?php } ?>
          </div>
        </div>

        <div class="col my-3">
          <div class="w-100 mx-auto">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Parking</th>
                  <th scope="col">Vote</th>
                  <th scope="col">Distance to center</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Otto</td>
                  <td>Otto</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry the Bird</td>
                  <td>@twitter</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>Larry the Bird</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Larry the Bird</td>
                  <td>@twitter</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>Larry the Bird</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Larry the Bird</td>
                  <td>@twitter</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>Larry the Bird</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col my-3">
          <div class="w-100 mx-auto">
            <p class="mt-3 text-body-secondary">© 2023</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- My JS file -->
  <script src="js/main.js"></script>
  <!-- Bootstrap JS file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>