    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="Hekal-index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="Hekal-Booking">Booking</a>
                </li>
            </ul>
        </nav>
        <?php
        $name= $_POST['name'];
        $date= $_POST['date'];
        $time= $_POST['time'];
        $checkin = date('d-m-yy', strtotime($date)) ." ". date('H:i:s', strtotime($time));
        $duration=$_POST['duration'];
        $out = date('d-m-yy', strtotime($date)) ." ". date('H:i:s', strtotime($time.' + '.$duration.' days'));
        $mobil='';
        $phone=$_POST['phone'];
        $service_price=0;
        if (isset($_POST['service'])) {
            $service = $_POST['service'];
        }
        else {
            $service = '';
        }

            if($car == "Alphard"){
            $jumlah = $duration*300;
        }
        else if ($car == "Mobilio"){
            $jumlah = $duration*500;
        }
        else if ($car == "Avanza"){
            $jumlah = $duration*250;
            }

        ?>

        <section class="container">
            <h1 class="text-center mb-3 pt-5">Thank You <?php echo $name?></h1>
            <p class="text-danger text-center">Please double check your reservation details</h1>
            <table class="table table-success table-striped-colums">
                        <thead>
                        <tr>
                            <th scope="col">Booking Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Check-In</th>
                            <th scope="col">Check-out</th>
                            <th scope="col">Car Type</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Service(s)</th>
                            <th scope="col">Total Price</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th><?php echo rand();?></th>
                            <td><?php echo $name;?></td>
                            <td><?php echo $date;?></td>
                            <td><?php echo date("d-m-y", strtotime(" ",strtotime($date)))?><br><?php echo $time ?></td>
                            <td><?php echo date("d-m-y", strtotime("+$duration day", strtotime($date))) ?><?php echo $time ?></td>
                            <td>
                                <?php echo $mobil;?></td>
                            <td>
                                <?php echo $phone;?></td>
                                <?php
                            if (!empty($service)) {
                                echo '<ul>';
                                foreach ($service as $myservice) {
                                    if ($myservice == "Health protocol") {
                                        $service_price += 5;
                                        echo '<li>' . $myservice . '</li>';
                                    }
                                    else if($myservice == "Driver") {
                                        $service_price += 20;
                                        echo '<li>' . $myservice . '</li>';
                                    }
                                    else {
                                        $service_price += 50;
                                        echo '<li>' . $myservice . '</li>';
                                    }
                                    
                                }
                                echo '</ul>';
                            } else {
                                echo 'Empty Additional Service(s)';
                            }
                        ?>
                    </td>
                    <td>
                        <?php echo '$' . ($jumlah+$service_price)?>
                    </td>
                </tr>
                
                </tb>
            </table>
            </div>
            <footer class="py-3 text-center" style="background-color: lightgray;">
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalbutton">
                Created by Haykal_1202200030
            </button>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous"></script>
    </body>