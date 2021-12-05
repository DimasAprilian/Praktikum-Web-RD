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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center">Tugas Pemrograman Web - Dimas Aprilian</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal">
                    Insert Data
                </button>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Prodi</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="dataMahasiswa">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="insertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Insert Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form role="form" action="#" method="POST">
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nim">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="prodi">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Angkatan</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="angkatan">
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="insertdata();">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form role="form" action="#" method="POST">
                        <div class="modal-body">
                            <input type="number" class="form-control" id="idedit" hidden>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaedit">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nimedit">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="prodiedit">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Angkatan</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="angkatanedit">
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="updatedata();">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        fetch();


        $('.modal').on('hidden.bs.modal', function() {
            $(this).find('form')[0].reset();
        });


        function fetch() {
            $.ajax({
                url: "proses/fetch.php",
                success: function(result) {
                    $("#dataMahasiswa").html(result);
                }
            });
        }

        function insertdata() {

            var nama = $("#nama").val();
            var nim = $("#nim").val();
            var prodi = $("#prodi").val();
            var angkatan = $("#angkatan").val();

            $.ajax({
                url: "proses/insert.php",
                data: "nama=" + nama + "&nim=" + nim + "&prodi=" + prodi + "&angkatan=" + angkatan,
                type: "POST",
                dataType: "HTML",
                success: function(result) {
                    $("[data-bs-dismiss=modal]").trigger({
                        type: "click"
                    });
                    fetch();
                }
            });

        }

        function deletedata(id) {
            $.ajax({
                url: "proses/delete.php",
                data: "id=" + id,
                type: "POST",
                success: function(result) {
                    fetch();
                }
            });
        }

        function editdata(id) {
            $.ajax({
                url: "proses/edit.php",
                data: "id=" + id,
                type: "POST",
                success: function(result) {
                    var result = JSON.parse(result);

                    $("#idedit").val(result['id']);
                    $("#namaedit").val(result['nama']);
                    $("#nimedit").val(result['nim']);
                    $("#prodiedit").val(result['prodi']);
                    $("#angkatanedit").val(result['angkatan']);
                }
            });
        }

        function updatedata() {
            var id = $("#idedit").val();
            var nama = $("#namaedit").val();
            var nim = $("#nimedit").val();
            var prodi = $("#prodiedit").val();
            var angkatan = $("#angkatanedit").val();
            $.ajax({
                url: "proses/update.php",
                data: "id=" + id + "&nama=" + nama + "&nim=" + nim + "&prodi=" + prodi + "&angkatan=" + angkatan,
                type: "POST",
                dataType: "HTML",
                success: function(result) {
                    console.log(result);
                    $("[data-bs-dismiss=modal]").trigger({
                        type: "click"
                    });
                    fetch();
                }
            });
        }
    </script>
</body>

</html>