<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="icon" type="image/svg" href="assets/img/twemoji_desktop-computer.svg" />

    <!-- CSS Bostrap -->
    <link rel="stylesheet" href="{{ asset('other/bootstrap/css/bootstrap.css') }}">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS Manual-->
    <link rel="stylesheet" href="{{ asset('frontend/style/css/style.css') }}">

    <!-- JS Boostrap -->
    <script src="{{ asset('other/bootstrap/jquery.css') }}"></script>
	<script src="{{ asset('other/bootstrap/js/bootstrap.js') }}"></script>

</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="{{ asset('frontend/img/twemoji_desktop-computer.svg') }}" alt="">
            <span class="logo_name">Billing</span>
        </div>
        <ul class="nav-links">
            <li class="page-name active">
                <a href="#">
                    <i class='bx bx-home-alt'></i>
                    <span class="link_name">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-money'></i>
                    <span class="link_name">Deposit</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Histori</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-coin'></i>
                    <span class="link_name">Poin Customer</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-calendar-alt'></i>
                    <span class="link_name">Tagihan</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-purchase-tag-alt'></i>
                    <span class="link_name">Diskon & Komplemen</span>
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
            <div class="profile-details">
                <a href="#">
                    <img src="{{ asset('frontend/img/profil.png') }}" alt="">
                    <span class="admin_name">Jhon Doe</span>
                    <i class='bx bx-chevron-down'></i>
                    <!-- <ul class="sub-menu">
                        <li>
                            <i class='bx bx-user-circle'></i>
                            <a href="#">Profil</a>
                        </li>
                        <li>
                            <i class='bx bxs-log-out'></i>
                            <a href="#">Logout</a>
                        </li>
                    </ul> -->
                </a>
            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="left-side">
                        <div class="box-topic">
                            Jumlah Transaksi
                        </div>
                        <div class="number">50</div>
                    </div>
                </div>
                <div class="box">
                    <div class="left-side">
                        <div class="box-topic">
                            Jumlah Deposit Aktif
                        </div>
                        <div class="number">20</div>
                    </div>
                </div>
                <div class="box">
                    <div class="left-side">
                        <div class="box-topic">
                            Jumlah Transaksi 1 <br>
                            Bulan
                        </div>
                        <div class="number">20</div>
                    </div>
                </div>
                <div class="box">
                    <div class="left-side">
                        <div class="box-topic">
                            Jumlah Deposit 1 <br>
                            Bulan
                        </div>
                        <div class="number">20</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div id="chartPoint"></div>
        </div>
    </section>

    <!-- Grafik -->







    <!-- Framework Grafik-->
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        // Create the chart
        Highcharts.chart('chartPoint', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Point Customer'
            },
            subtitle: {
                text: 'Berikut Peringkat Point Customer'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Jumlah Poin'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [
                {
                    name: "Customer",
                    colorByPoint: true,
                    data: [
                        {
                            name: "Si A",
                            y: 62.74,
                            drilldown: "Si A"
                        },
                        {
                            name: "Si B",
                            y: 10.57,
                            drilldown: "Si B"
                        },
                        {
                            name: "Si C",
                            y: 7.23,
                            drilldown: "Si C"
                        },
                        {
                            name: "Si D",
                            y: 5.58,
                            drilldown: "Si D"
                        },
                        {
                            name: "Si E",
                            y: 4.02,
                            drilldown: "Si E"
                        },
                        {
                            name: "Si F",
                            y: 1.92,
                            drilldown: "Si F"
                        },
                        {
                            name: "Other",
                            y: 7.62,
                            drilldown: null
                        }
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "Chrome",
                        id: "Chrome",
                        data: [
                            [
                                "v65.0",
                                0.1
                            ],
                            [
                                "v64.0",
                                1.3
                            ],
                            [
                                "v63.0",
                                53.02
                            ],
                            [
                                "v62.0",
                                1.4
                            ],
                            [
                                "v61.0",
                                0.88
                            ],
                            [
                                "v60.0",
                                0.56
                            ],
                            [
                                "v59.0",
                                0.45
                            ],
                            [
                                "v58.0",
                                0.49
                            ],
                            [
                                "v57.0",
                                0.32
                            ],
                            [
                                "v56.0",
                                0.29
                            ],
                            [
                                "v55.0",
                                0.79
                            ],
                            [
                                "v54.0",
                                0.18
                            ],
                            [
                                "v51.0",
                                0.13
                            ],
                            [
                                "v49.0",
                                2.16
                            ],
                            [
                                "v48.0",
                                0.13
                            ],
                            [
                                "v47.0",
                                0.11
                            ],
                            [
                                "v43.0",
                                0.17
                            ],
                            [
                                "v29.0",
                                0.26
                            ]
                        ]
                    },
                    {
                        name: "Firefox",
                        id: "Firefox",
                        data: [
                            [
                                "v58.0",
                                1.02
                            ],
                            [
                                "v57.0",
                                7.36
                            ],
                            [
                                "v56.0",
                                0.35
                            ],
                            [
                                "v55.0",
                                0.11
                            ],
                            [
                                "v54.0",
                                0.1
                            ],
                            [
                                "v52.0",
                                0.95
                            ],
                            [
                                "v51.0",
                                0.15
                            ],
                            [
                                "v50.0",
                                0.1
                            ],
                            [
                                "v48.0",
                                0.31
                            ],
                            [
                                "v47.0",
                                0.12
                            ]
                        ]
                    },
                    {
                        name: "Internet Explorer",
                        id: "Internet Explorer",
                        data: [
                            [
                                "v11.0",
                                6.2
                            ],
                            [
                                "v10.0",
                                0.29
                            ],
                            [
                                "v9.0",
                                0.27
                            ],
                            [
                                "v8.0",
                                0.47
                            ]
                        ]
                    },
                    {
                        name: "Safari",
                        id: "Safari",
                        data: [
                            [
                                "v11.0",
                                3.39
                            ],
                            [
                                "v10.1",
                                0.96
                            ],
                            [
                                "v10.0",
                                0.36
                            ],
                            [
                                "v9.1",
                                0.54
                            ],
                            [
                                "v9.0",
                                0.13
                            ],
                            [
                                "v5.1",
                                0.2
                            ]
                        ]
                    },
                    {
                        name: "Edge",
                        id: "Edge",
                        data: [
                            [
                                "v16",
                                2.6
                            ],
                            [
                                "v15",
                                0.92
                            ],
                            [
                                "v14",
                                0.4
                            ],
                            [
                                "v13",
                                0.1
                            ]
                        ]
                    },
                    {
                        name: "Opera",
                        id: "Opera",
                        data: [
                            [
                                "v50.0",
                                0.96
                            ],
                            [
                                "v49.0",
                                0.82
                            ],
                            [
                                "v12.1",
                                0.14
                            ]
                        ]
                    }
                ]
            }
        });
    </script>

</body>

</html>