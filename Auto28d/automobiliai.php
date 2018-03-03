<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-5">
            <form>
                <div class="form-group">
                    <label for="date">Greičio fiksavimo data ir laikas</label>
                    <input type="date" class="form-control" id="date" aria-describedby="date" placeholder="Įveskite greičio fiksavimo datą ir laiką">
                </div>
                <div class="form-group">
                    <label for="number">Automobilio numeris</label>
                    <input type="text" class="form-control" id="number" placeholder="Įveskite automobilio duomenis">
                </div>
                <div class="form-group">
                    <label for="distance">Nuvažiuotas atstumas metrais</label>
                    <input type="text" class="form-control" id="distance" placeholder="Įveskite nuvažiuotą atstumą metrais">
                </div>
                <div class="form-group">
                    <label for="time">Sugaištas laikas sekundėmis</label>
                    <input type="text" class="form-control" id="time" placeholder="Įveskite sugaištą laiką minutėmis">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<?php
session_start();

if (isset($_POST['date'], $_POST['number'], $_POST['distance'], $_POST['time'])) {
    $auto = new \BalticTalents\Radar\Radar(new \DateTime($_POST['date']), $_POST['number'], $_POST['distance'],
        $_POST['time']);

echo (string)$auto . '<br>';
    }

?>



