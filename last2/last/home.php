
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<?php include('includes/sidebar.php'); ?>
<!--Sidebar End-->
<a href="#" data-toggle="push-menu" class="paper-nav-toggle left d-lg-none">
    <i></i>
</a>
<div class="page has-sidebar-left height-full">
    <div class="container-fluid relative animatedParent animateOnce p-lg-5">
        <div class="row mb-5">
            <div class="col-md-8">
                <div class="pt-5 pb-lg-5 pt-xs-5 relative">
                    <h1>
                        Welcome back, Nomi
                    </h1>
                    <strong>Current Job Summary</strong>
                </div>
                <div class="row">
                    <div class="col-md-4 my-3">
                        <div class="d-flex">
                            <a href="#">
                                <i class="icon-apps purple lighten-2 avatar avatar-lg  mr-3 r-5"></i>

                            </a>
                            <div>
                                <h6 class="mt-0 mb-1">Project Name</h6>
                                <div class="mt-1 text-dark-heading">Food Application Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="d-flex">
                            <img class="mr-3 r-3" src="assets/img/dummy/bootstrap.png" alt="" width="50" height="50">
                            <div>
                                <h6 class="mt-0 mb-1">Company</h6>
                                <h5 class="mt-1 text-dark-heading">Bootstrap Paper Co</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="d-flex">
                            <img class="mr-3 r-3 circle" src="assets/img/dummy/u12.png" alt="" width="50" height="50">
                            <div>
                                <h6 class="mt-0 mb-1">Team Leader</h6>
                                <div class="mt-1 text-dark-heading">Salman Khan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card no-b shadow2">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                         <span class="easy-pie-chart" data-percent="55"
                                               data-options='{"lineWidth": 10, "barColor": "#3f51b5"}'>
                                    <span class="percent">55%</span>
                                     </span>
                            </div>
                            <div>
                                <h6> Your Progress <br>
                                    <small>Where you stand in project</small>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="icon icon-schedule text-yellow"></i>Design New Layout
                            <div class="float-right">
                                <span class="badge badge-warning">Incomplete</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--States-->
        <div class="row my-5">
            <div class="col-lg-3">
                <div class="counter-box p-40 white shadow2 r-5">
                    <div class="float-right">
                        <span class="icon icon-light-bulb s-48"></span>
                    </div>
                    <div class="sc-counter s-36">1200</div>
                    <h6 class="counter-title">Web Projects</h6>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter-box p-40 white shadow2 r-5">
                    <div class="float-right">
                        <span class="icon icon-target-12 s-48"></span>
                    </div>
                    <div class="sc-counter s-36">1200</div>
                    <h6 class="counter-title">Premium Themes</h6>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter-box p-40 white shadow2 r-5">
                    <div class="float-right">
                        <span class="icon icon-trophy7 s-48"></span>
                    </div>
                    <div class="sc-counter s-36">1200</div>
                    <h6 class="counter-title">Support Requests</h6>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter-box p-40 gradient  text-white shadow2 r-5">
                    <div class="float-right">
                        <span class="icon icon-startup s-48"></span>
                    </div>
                    <div class="sc-counter s-36">550</div>
                    <h6 class="counter-title">Support Requests</h6>
                </div>
            </div>
        </div>
        <!--States-->
        <div class="my-5">
            <ul id="myTab4" role="tablist" class="nav nav-pills mb-3">
                <li>
                    <a class="nav-link active show s-16 font-weight-lighter r-30 " id="tab1" data-toggle="tab" href="#v-pills-tab1" role="tab" aria-controls="tab1" aria-expanded="true" aria-selected="true">Basic Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link s-16 font-weight-lighter r-30" id="tab2" data-toggle="tab" href="#v-pills-tab2" role="tab" aria-controls="tab2" aria-selected="false">Your Progress</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  s-16 font-weight-lighter r-30" id="tab3" data-toggle="tab" href="#v-pills-tab3" role="tab" aria-controls="tab3" aria-selected="false">Expense Report</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="v-pills-tab1" role="tabpanel" aria-labelledby="v-pills-tab1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card no-b my-3 shadow2">
                                <div class="card-header white no-b p-5 d-flex justify-content-between ">
                                    <h4>Monthly Expenses</h4>
                                    <div class="dropdown">
                                        <a class="" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-more_vert p-0 s-16"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View
                                                Profile </a>
                                            <a class="dropdown-item" href="#">Account
                                                Settings </a>
                                            <a class="dropdown-item" href="#">
                                                Earning Reports </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-5 pl-5 pr-5">
                                    <div style="height: 400px">
                                        <canvas
                                                data-chart="line"
                                                data-dataset="[[20, 24, 32, 34, 38, 35, 37, 40, 53, 60, 62],[48, 54, 53, 58, 56, 62, 61, 59, 76, 78, 80],]"
                                                data-labels="['1', '4', '7', '10', '13', '16', '19', '22', '25', '28', '31']"
                                                data-dataset-options="datasets: [{
                    label: 'Months',
                    fill: !0,
                    lineTension: 0,
                    backgroundColor: 'rgba(101, 148, 255, 0.5)',
                    borderWidth: 2,
                    borderColor: 'rgba(101, 148, 255,1)',
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0,
                    borderJoinStyle: 'miter',
                    pointRadius: 4,
                    pointBorderColor: 'rgba(101, 148, 255,1)',
                    pointBackgroundColor: '#fff',
                    pointBorderWidth: 2,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(101, 148, 255,1)',
                    pointHoverBorderWidth: 2,
                    spanGaps: !1
                }, {
                    label: 'Hours',
                    fill: !0,
                    lineTension: 0,
                    backgroundColor: 'rgba(136, 226, 255, 0.5)',
                    borderWidth: 2,
                    borderColor: 'rgba(136, 226, 255, 1)',
                    pointRadius: 4,
                    pointBorderColor: 'rgba(136, 226, 255, 1)',
                    pointBackgroundColor: '#fff',
                    pointBorderWidth: 2,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(101, 148, 255,1)',
                    pointHoverBorderWidth: 2,
                    spanGaps: !1
                }]"
                                                data-options="{
                legend: {
                    display: !0,
                    labels: {
                        fontColor: '#7F8FA4',
                        boxRadius: 4,
                        usePointStyle: !0
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        display: !0,
                        ticks: {
                            fontSize: '11',
                            fontColor: '#969da5'
                        },
                        gridLines: {
                           display: false,
                           zeroLineColor: 'rgba(255,255,255,0.1)',
                                                 color: 'rgba(255,255,255,0.1)',
                        }
                    }],
                    yAxes: [{
                        display: !0,
                        gridLines: {
                         display: false,
                         zeroLineColor: 'rgba(255,255,255,0.1)',
                                                 color: 'rgba(255,255,255,0.1)',
                        },
                        ticks: {
                            beginAtZero: !0,
                            max: 100,
                            stepSize: 25,
                            fontSize: '11',
                            fontColor: '#969da5'
                        }
                    }]
                }
            }">
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card no-b my-3 shadow2">
                                <div class="card-header white no-b p-5 d-flex justify-content-between ">
                                    <h4>Leaves Trend</h4>
                                    <div class="dropdown">
                                        <a class="" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-more_vert p-0 s-16"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View
                                                Profile </a>
                                            <a class="dropdown-item" href="#">Account
                                                Settings </a>
                                            <a class="dropdown-item" href="#">
                                                Earning Reports </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                               <div class="card-body pb-5 pl-5 pr-5">
                                   <div style="height: 400px">
                                       <canvas
                                               data-chart="bar"
                                               data-dataset="[
                                        [21, 90, 55, 0, 59, 77, 12,21, 90, 55, 0, 59, 77, 12,21, 90, 55, 0, 59, 77, 12],
                                        [12, 40, 16, 17, 89, 0, 12,12, 0, 55, 60, 79, 99, 12,12, 0, 55, 60, 79, 99, 12],
                                        [12, 40, 16, 17, 89, 0,12, 40, 16, 17, 89, 0, 12,12, 40, 16, 17, 89, 0, 12],
                                        ]"
                                               data-labels="['Blue','Yellow','Green','Purple','Orange','Red','Indigo','Blue','Yellow','Green','Purple','Orange','Red','Indigo','Blue','Yellow','Green','Purple','Orange','Red','Indigo']"
                                               data-dataset-options="[
                                    {
                                        label: 'HTML',
                                        backgroundColor: '#6594ff',
                                        borderWidth: 0,

                                    },
                                    {
                                         label: 'Wordpress',
                                         backgroundColor: '#88e2ff',
                                         borderWidth: 0,

                                     },
                                    {
                                          label: 'Laravel',
                                          backgroundColor: '#e2e8f0',
                                          borderWidth: 0,

                                      }
                                    ]"
                                               data-options="{
                                      legend: { display: true,},
                                      scales: {
                                        xAxes: [{
                                            stacked: true,
                                             barThickness:5,
                                             gridLines: {
                                                zeroLineColor: 'rgba(255,255,255,0.1)',
                                                 color: 'rgba(255,255,255,0.1)',
                                                 display: false,},
                                             }],
                                        yAxes: [{
                                                stacked: true,
                                                     gridLines: {
                                                        zeroLineColor: 'rgba(255,255,255,0.1)',
                                                        color: 'rgba(255,255,255,0.1)',
                                                    }
                                       }]

                                      }
                                }"
                                       >
                                       </canvas>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade text-center" id="v-pills-tab2" role="tabpanel" aria-labelledby="v-pills-tab2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card no-b my-3 shadow2">
                                <div class="card-header white no-b p-5 d-flex justify-content-between ">
                                    <h4>Activity Feed</h4>
                                    <div class="dropdown">
                                        <a class="" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-more_vert p-0 s-16"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View
                                                Profile </a>
                                            <a class="dropdown-item" href="#">Account
                                                Settings </a>
                                            <a class="dropdown-item" href="#">
                                                Earning Reports </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-5 pl-5 pr-5">
                                    <div style="height: 400px">
                                        <canvas
                                                data-chart="line"
                                                data-dataset="[[20, 24, 32, 34, 38, 35, 37, 40, 53, 60, 62],[48, 54, 53, 58, 56, 62, 61, 59, 76, 78, 80],]"
                                                data-labels="['1', '4', '7', '10', '13', '16', '19', '22', '25', '28', '31']"
                                                data-dataset-options="datasets: [{
                    label: 'Months',
                    fill: !0,
                    lineTension: 0,
                    backgroundColor: 'rgba(101, 148, 255, 0.5)',
                    borderWidth: 2,
                    borderColor: 'rgba(101, 148, 255,1)',
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0,
                    borderJoinStyle: 'miter',
                    pointRadius: 4,
                    pointBorderColor: 'rgba(101, 148, 255,1)',
                    pointBackgroundColor: '#fff',
                    pointBorderWidth: 2,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(101, 148, 255,1)',
                    pointHoverBorderWidth: 2,
                    spanGaps: !1
                }, {
                    label: 'Hours',
                    fill: !0,
                    lineTension: 0,
                    backgroundColor: 'rgba(136, 226, 255, 0.5)',
                    borderWidth: 2,
                    borderColor: 'rgba(136, 226, 255, 1)',
                    pointRadius: 4,
                    pointBorderColor: 'rgba(136, 226, 255, 1)',
                    pointBackgroundColor: '#fff',
                    pointBorderWidth: 2,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(101, 148, 255,1)',
                    pointHoverBorderWidth: 2,
                    spanGaps: !1
                }]"
                                                data-options="{
                legend: {
                    display: !0,
                    labels: {
                        fontColor: '#7F8FA4',
                        boxRadius: 4,
                        usePointStyle: !0
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        display: !0,
                        ticks: {
                            fontSize: '11',
                            fontColor: '#969da5'
                        },
                        gridLines: {
                           display: false,
                           zeroLineColor: 'rgba(255,255,255,0.1)',
                                                 color: 'rgba(255,255,255,0.1)',
                        }
                    }],
                    yAxes: [{
                        display: !0,
                        gridLines: {
                         display: false,
                         zeroLineColor: 'rgba(255,255,255,0.1)',
                                                 color: 'rgba(255,255,255,0.1)',
                        },
                        ticks: {
                            beginAtZero: !0,
                            max: 100,
                            stepSize: 25,
                            fontSize: '11',
                            fontColor: '#969da5'
                        }
                    }]
                }
            }">
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade text-center p-5" id="v-pills-tab3" role="tabpanel" aria-labelledby="v-pills-tab3">
                    <h4 class="card-title">Tab 3</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>
<!-- Right Sidebar -->
<aside class="control-sidebar fixed white ">
    <div class="slimScroll">
        <div class="sidebar-header">
            <h4>Activity List</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <div>
                <div class="my-3">
                    <small>25% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>45% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>60% Complete</small>
                    `
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>75% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>100% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 bg-primary text-white">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-normal s-14">Sodium</h5>
                    <span class="font-weight-lighter text-primary">Spark Bar</span>
                    <div> Oxygen
                        <span class="text-primary">
                                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <canvas width="100" height="70" data-chart="spark" data-chart-type="bar"
                            data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                            data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                    </canvas>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                <tbody>
                <tr>
                    <td>
                        <a href="#">INV-281281</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 1228.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="sidebar-header">
            <h4>Activity</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-4">
            <div class="activity-item activity-primary">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 5 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-danger">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 8 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-success">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 10 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-warning">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 12 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel-1.0.7/panel-page-dashboard8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jul 2018 16:26:53 GMT -->
</html>