<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="icon" type="image/svg" href="assets/img/twemoji_desktop-computer.svg" />

    <!-- CSS Bostrap -->
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css"> -->

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS Bostrap -->
	<link rel="stylesheet" href="{{ asset('other/bootstrap/css/bootstrap.css') }}">

    <!-- CSS Manual -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/css/style.css') }}">

    <!-- JS Boostrap -->
    <script src="{{ asset('other/bootstrap/jquery.js') }}"></script>
    <script src="{{ asset('other/bootstrap/js/bootstrap.js') }}"></script>

    <!-- CSS Manual-->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- JS Boostrap -->
    <!-- <script src="assets/bootstrap/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script> -->


</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="{{ asset('frontend/img/twemoji_desktop-computer.svg') }}" alt="">
            <span class="logo_name">Billing</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="/home">
                    <i class='bx bx-home-alt'></i>
                    <span class="link_name">Home</span>
                </a>
            </li>
            <li>
                <a href="/deposite">
                    <i class='bx bx-money'></i>
                    <span class="link_name">Deposit</span>
                </a>
            </li>
            <li>
                <a href="/history">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Histori</span>
                </a>
            </li>
            <li class="page-name active">
                <a href="#">
                    <i class='bx bx-coin'></i>
                    <span class="link_name">Poin Customer</span>
                </a>
            </li>
            <li>
                <a href="/tagihan">
                    <i class='bx bx-calendar-alt'></i>
                    <span class="link_name">Tagihan</span>
                </a>
            </li>
            <li>
                <a href="/discountcomplement">
                    <i class='bx bx-purchase-tag-alt'></i>
                    <span class="link_name">Diskon & Komplemen</span>
                </a>
            </li>
            <li>
                <a href="/login">
                    <i class='bx bx-log-out-circle'></i>
                    <span class="link_name">Keluar</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Home Content -->
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="profile-details" data-toggle="modal" data-target="#modalku">
                <a>
                    <img src="{{ asset('frontend/img/profil.png') }}" alt="">
                    <span class="admin_name">Jhon Doe</span>
                </a>
            </div>
        </nav>

        <div class="content-deposite">
            <div class="container">
                <h5 class="display-4">Point Customer</h5>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <table id="tabledeposit" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Periode</th>
                                    <th>Total Poin</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{$data->nomor}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->period_id}}</td>
                                    <td>{{$data->total_poin}} Point</td>
                                    <!-- <td>
                                        <a href=""><button type="button" class="btn btn-custom">Update</button></a>
                                    </td> -->
                                </tr>
                                @endforeach
                                <!-- <tr>
                                    <td>2</td>
                                    <td>Jane Doe</td>
                                    <td>1</td>
                                    <td>45 Point</td>
                                    <td>
                                        <a href=""><button type="button" class="btn btn-custom">Update</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Baby Doe</td>
                                    <td>2</td>
                                    <td>35 Point</td>
                                    <td>
                                        <a href=""><button type="button" class="btn btn-custom">Update</button></a>
                                    </td>
                                </tr> -->
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <!-- Modal Profile -->
    <div class="modal fade" id="modalku">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Ini adalah Bagian Header Modal -->
                <div class="modal-header">
                    <h5 class="modal-title">Detail Profile</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Ini adalah Bagian Body Modal -->
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="assets/img/Ellipse 2.svg" alt="">
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input type="email" class="form-control" disabled id="exampleFormControlInput1"
                                        placeholder="Jhon Doe">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" disabled id="exampleFormControlInput1"
                                        placeholder="Jhondoe@example.com">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ini adalah Bagian Footer Modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>



    <!-- DataTables -->
    <script src="assets/DataTables/DataTables-1.10.25/js/jquery.dataTables.min.js"></script>

    <script src="assets/DataTables/DataTables-1.10.25/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#tabledeposit').DataTable();
        });
    </script>
</body>

</html>