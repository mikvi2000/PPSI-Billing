<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <!-- <link rel="stylesheet" type="text/css" href="detil.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->

    <!-- CSS Bostrap -->
	<link rel="stylesheet" href="{{ asset('other/bootstrap/css/bootstrap.css') }}">

    <!-- CSS Manual -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/css/style.css') }}">

</head>

<body>
    <div class="container">
        <div class="col-md-9 offset-md-3">
            <div class="judul1">
                Detail Transaksi/Detail Reservation
            </div>
        </div>

        <div class="judul2">
            Detail Kamar
        </div>

        <table class="table table-borderless">
            <thead class="headd">
                <tr>
                    <td>No</td>
                    <td>Nama Kamar</td>
                    <td>Jenis Kamar</td>
                    <td>Jumlah Kamar</td>
                    <td>Harga</td>
                    <td>Point</td>
                    <td>Sub Total</td>
                    <td>Sub Point</td>
                </tr>
            </thead>
            <tbody class="body">
                <tr>
                    <td>1</td>
                    <td>Kamar melati</td>
                    <td>Standart</td>
                    <td>3</td>
                    <td>R. 350k</td>
                    <td>5</td>
                    <td>R. 750k</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Kamar melati</td>
                    <td>Standart</td>
                    <td>3</td>
                    <td>R. 350k</td>
                    <td>5</td>
                    <td>R. 750k</td>
                    <td>15</td>
                </tr>
            </tbody>
            <tfoot class="foot">
                <tr>
                    <td colspan="6">Total</td>
                    <td>R. 750k</td>
                    <td>15</td>
                </tr>
            </tfoot>
        </table>

        <div class="judul3">
            Detail F&B
        </div>

        <table class="table table-borderless">
            <thead class="headd">
                <tr>
                    <td>No</td>
                    <td>Nama F&B</td>
                    <td>Tanggal Beli</td>
                    <td>Jumlah</td>
                    <td>Harga</td>
                    <td>Point</td>
                    <td>Sub Total</td>
                    <td>Sub Point</td>
                </tr>
            </thead>
            <tbody class="body">
                <tr>
                    <td>1</td>
                    <td>Indomies Noodle
                        Soup</td>
                    <td>17 April 2021</td>
                    <td>3</td>
                    <td>Rp 1,050,000</td>
                    <td>5</td>
                    <td>R. 750k</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Indomies Noodle
                        Soup</td>
                    <td>17 April 2021</td>
                    <td>3</td>
                    <td>Rp 1,050,000</td>
                    <td>5</td>
                    <td>Rp 1,050,000</td>
                    <td>15</td>
                </tr>
            </tbody>
            <tfoot class="foot">
                <tr>
                    <td colspan="6">Total</td>
                    <td>Rp 1,050,000</td>
                    <td>15</td>
                </tr>
            </tfoot>
        </table>

        <div class="judul3">
            Detail Fasilitas
        </div>

        <table class="table table-borderless">
            <thead class="headd">
                <tr>
                    <td>No</td>
                    <td>Nama Fasilitas</td>
                    <td>Tanggal Sewa</td>
                    <td>Jumlah Fasilitas</td>
                    <td>Harga</td>
                    <td>Point</td>
                    <td>Sub Total</td>
                    <td>Sub Point</td>
                </tr>
            </thead>
            <tbody class="body">
                <tr>
                    <td>1</td>
                    <td>Ballroom A</td>
                    <td>17 April 2021</td>
                    <td>3</td>
                    <td>Rp 1,050,000</td>
                    <td>5</td>
                    <td>Rp 1,050,000</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ballroom A</td>
                    <td>17 April 2021</td>
                    <td>3</td>
                    <td>Rp 1,050,000</td>
                    <td>5</td>
                    <td>Rp 1,050,000</td>
                    <td>15</td>
                </tr>
            </tbody>
            <tfoot class="foot">
                <tr>
                    <td colspan="6">Total</td>
                    <td>R. 750k</td>
                    <td>15</td>
                </tr>
            </tfoot>
        </table>
        <div class="col-md-8 offset-md-4">
            <button class="b1">Kembali</button>
        </div>

    </div>
</body>

</html>