<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <a>Exo-1</a>
        <?php
         echo date("d/m/y");
        ?>
    </div>

    <div>
        <a>Exo-2</a>
        <?php
        echo date("d-m-y");
        ?>
    </div>

    <div>
        <a>Exo-3</a>
        <?php
        $date3 = date("l j F Y");
        setlocale(LC_TIME, "fr_FR", "French");
        echo strftime("%A %e %B %Y", strtotime($date3));
        ?>
    </div>

    <div>
        <a>Exo-4</a>
        <?php
        $timestamp = new DateTime('2016-08-02 15:00');
        echo $timestamp -> getTimestamp();
        ?>
    </div>

    <div>
        <a>Exo-5</a>
        <?php
        $dateOne= date_create("2016-05-16");
        $dateTwo = date_create("2019-07-23");
        $dateDif = date_diff($dateOne, $dateTwo)->format('%y years, %m months and %d days');
        echo $dateDif;
        ?>
    </div>

    <div>
        <a>Exo-6</a>
        <?php
        $nbre = cal_days_in_month(CAL_GREGORIAN, 2, 2017);
        echo "Il y avait {$nbre} jours en fevrier 2017";
        ?>
    </div>

    <div>
        <a>Exo-7</a>
        <?php
        $dateAjd = new DateTime();
        $dateAjd->modify("+20 day");
        echo "Dans 20 jours, à partir d'aujourd'hui, nous serons le {$dateAjd->format('d-m-y')}";
        ?>
    </div>

    <div>
        <a>Exo-8</a>
        <?php
        $dateAvant = new DateTime();
        $dateAvant->modify("-22 day");
        echo "Il y a 22 jours, à partir d'aujourd'hui, nous étions le {$dateAvant->format('d-m-y')}";
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>