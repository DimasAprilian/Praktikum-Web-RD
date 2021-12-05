<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Tugas Pemrograman Web" />
    <meta name="author" content="Dimas Aprilian - 118140032" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Title -->
    <title>Tugas Pemrograman Web - Dimas Aprilian - 118140032</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center">Tugas Pemrograman Web - Dimas Aprilian</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Buah</th>
                            <th scope="col">Harga/kg</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mangga</td>
                            <td>Rp. 15.000</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Salak</td>
                            <td>Rp. 10.000</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jambu</td>
                            <td>Rp. 13.000</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
            class calculate{
                var int $harga_jambu;
                var int $harga_mangga;
                var int $harga_salak;
                var int $total_jambu = 0;
                var int $total_mangga = 0;
                var int $total_salak = 0;
                var int $total;

                public function __construct($tot_mangga, $tot_salak, $tot_jambu){
                    $this->harga_mangga = 15000 * $tot_mangga;
                    $this->harga_jambu = 13000 * $tot_jambu;
                    $this->harga_salak = 10000 * $tot_salak;
                    $this->total_mangga = $tot_mangga;
                    $this->total_jambu = $tot_jambu;
                    $this->total_salak = $tot_salak;

                    $this->total = $this->harga_mangga + $this->harga_jambu + $this->harga_salak;
                }
            }

            if(isset($_POST['submit'])){
                $tot_mangga = $_POST['mangga'];
                $tot_jambu = $_POST['jambu'];
                $tot_salak = $_POST['salak'];
                $count = new calculate($tot_mangga, $tot_salak, $tot_jambu);
            }
            $data = new calculate(0,0,0);
            ?>

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-warning">
                        Kasir Buah
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="mb-3 row">
                                <label for="mangga" class="col-sm-3 col-form-label">Mangga</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="mangga" id="mangga" value="0" onchange="calculate();">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="salak" class="col-sm-3 col-form-label">Salak</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="salak" id="salak" value="0" onchange="calculate();">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jambu" class="col-sm-3 col-form-label">Jambu</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="jambu" id="jambu" value="0" onchange="calculate();">
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-outline-secondary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary">
                        Total Harga
                    </div>
                    <div class="card-body text-center" style="height: 190px;">

                        <h1 id="hargaTotal"><?php echo "RP.". $data->total; ?></h1>
                    </div>
                </div>
            </div>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            function calculate() {
                var jambu = parseInt($("#jambu").val()) * 13000;
                var mangga = parseInt($("#mangga").val()) * 15000;
                var salak = parseInt($("#salak").val()) * 10000;

                var count = jambu + mangga + salak;

                $("#hargaTotal").html("RP."+count);
            }
        </script>
</body>

</html>