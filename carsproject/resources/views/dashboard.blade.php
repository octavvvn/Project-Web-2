@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center my-4">
            <div class="welcome-section p-4 bg-info text-white rounded">
                <h1 class="mb-0 welcome-text">Welcome, {{ Auth::user()->name }}!</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Section 1: Summary Boxes -->
        <div class="col-lg-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Cars</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total Mechanics</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Completed Services</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Pending Services</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Section 2: Services Overview and Mechanics Overview -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Services Overview
                </div>
                <div class="card-body"><canvas id="servicesChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-pie me-1"></i>
                    Mechanics Overview
                </div>
                <div class="card-body"><canvas id="mechanicsChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Section 3: Date and Time, Service Center Schedule, and Messages -->
        <div class="col-lg-4">
            <div class="card mb-4 h-50 equal-card">
                <div class="card-header">
                    <i class="fas fa-calendar me-1"></i>
                    Date and Time
                </div>
                <div class="card-body">
                    <div class="container">
                        <div id="clock">
                            <div id="h"></div>
                            <div class="span"> : </div>
                            <div id="m"></div>
                            <div class="span"> : </div>
                            <div id="s"></div>
                        </div>
                        <div id="date">
                            <div id="day"></div>
                            <div id="month"></div>
                            <div id="year"></div>
                            <div class="span1">:</div>
                            <div id="dayname"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4 h-100 equal-card">
                <div class="card-header">
                    <i class="fas fa-clock me-1"></i>
                    Service Center Schedule
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Monday
                            <span>08:00 - 18:00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tuesday
                            <span>08:00 - 18:00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Wednesday
                            <span>08:00 - 18:00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Thursday
                            <span>08:00 - 18:00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Friday
                            <span>08:00 - 18:00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Saturday
                            <span>08:00 - 18:00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Sunday
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4 h-100">
                <div class="card-header">
                    <i class="fas fa-envelope me-1"></i>
                    Messages
                </div>
                <div class="card-body">
                    <div class="message d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://i.pinimg.com/564x/d0/a7/8c/d0a78ce6a1c3d3934bd482eb04301e51.jpg" class="rounded-circle me-3 message-image" alt="Haikal">
                            <div class="message-text">
                                <h5 class="mb-0 message-name">Haikal</h5>
                                <small class="text-muted">Status: In Progress</small>
                            </div>
                        </div>
                        <span class="badge bg-warning ms-auto">Pending</span>
                    </div>
                    <div class="message d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://i.pinimg.com/736x/a0/25/ee/a025ee17c29217651bb836b9db6fa35d.jpg" class="rounded-circle me-3 message-image" alt="Octaviani">
                            <div class="message-text">
                                <h5 class="mb-0 message-name">Octaviani</h5>
                                <small class="text-muted">Status: Completed</small>
                            </div>
                        </div>
                        <span class="badge bg-success ms-auto">Done</span>
                    </div>
                    <div class="message d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://i.pinimg.com/564x/68/2b/16/682b16fff4fdd2ba21e7cd6612732c5b.jpg" class="rounded-circle me-3 message-image" alt="Sakha">
                            <div class="message-text">
                                <h5 class="mb-0 message-name">Sakha</h5>
                                <small class="text-muted">Status: Waiting</small>
                            </div>
                        </div>
                        <span class="badge bg-danger ms-auto">Pending</span>
                    </div>
                    <div class="message d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://i.pinimg.com/236x/0b/1f/0e/0b1f0ee4f9cc3417c1715bd08ae90d50.jpg" class="rounded-circle me-3 message-image" alt="Nurmila">
                            <div class="message-text">
                                <h5 class="mb-0 message-name">Nurmila</h5>
                                <small class="text-muted">Status: Waiting</small>
                            </div>
                        </div>
                        <span class="badge bg-danger ms-auto">Pending</span>
                    </div>
                    <div class="message d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://i.pinimg.com/474x/52/57/b3/5257b3dfb0373f82734c9082207f35e5.jpg" class="rounded-circle me-3 message-image" alt="Agam">
                            <div class="message-text">
                                <h5 class="mb-0 message-name">Agam</h5>
                                <small class="text-muted">Status: Waiting</small>
                            </div>
                        </div>
                        <span class="badge bg-danger ms-auto">Pending</span>
                    </div>
                    <div class="message d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://i.pinimg.com/564x/1e/e5/37/1ee537dece90e8b6ba3bb4a5d99709b5.jpg" class="rounded-circle me-3 message-image" alt="Ruby">
                            <div class="message-text">
                                <h5 class="mb-0 message-name">Ruby</h5>
                                <small class="text-muted">Status: Waiting</small>
                            </div>
                        </div>
                        <span class="badge bg-danger ms-auto">Pending</span>
                    </div>
                    <!-- Add more messages as needed -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    window.onload = function() {
        displayClock();
        displayDates();
    };

    function displayClock() {
        var d = new Date();
        var hour = d.getHours();
        var minute = d.getMinutes();
        var second = d.getSeconds();

        if(hour < 10) { 
            document.getElementById('h').innerHTML = "0" + hour;
        } else {
            document.getElementById('h').innerHTML = hour;  
        }

        if(minute < 10) { 
            document.getElementById('m').innerHTML = "0" + minute;
        } else {
            document.getElementById('m').innerHTML = minute;  
        }

        if(second < 10) { 
            document.getElementById('s').innerHTML = "0" + second;
        } else {
            document.getElementById('s').innerHTML = second;  
        }
        window.setInterval(displayClock, 1000);
    }

    function displayDates() {
        var dateObj = new Date();
        var date = dateObj.getDate();
        var month = dateObj.getUTCMonth();
        var day = dateObj.getDay();
        var year = dateObj.getUTCFullYear();

        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        const dayName = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

        document.getElementById('day').innerHTML = date;
        document.getElementById('month').innerHTML = monthNames[month];
        document.getElementById('year').innerHTML = year;
        document.getElementById('dayname').innerHTML = dayName[day];
    }

    var ctx = document.getElementById("servicesChart").getContext('2d');
    var servicesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                label: 'Services',
                data: [10, 20, 30, 40, 50, 60],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        }
    });

    var ctx = document.getElementById("mechanicsChart").getContext('2d');
    var mechanicsChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Jodie", "Abra", "Doe"],
            datasets: [{
                label: 'Mechanics',
                data: [10, 20, 30],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
        }
    });
</script>
@endpush

@push('styles')
<link href="@import url('https://fonts.googleapis.com/css2?family=Belanosima&family=Rubik+Vinyl&display=swap" rel="stylesheet">
<style>
    h1 {
        font-family: 'Trebuchet MS';
        color: #39FF14;
        text-align: center;
        font-size: 50px;
    }


    .container {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #clock {
        display: flex;
        flex-direction: row;
    }

    #h, #m, #s, .span {
        color: black;
        font-size: 18px;
        font-family: 'Orbitron', sans-serif;
        padding: 10px;
    }

    #day, #month, #year, #dayname {
        padding: 10px;
        font-size: 18px;
        font-family: 'Orbitron', sans-serif;
    }

    #date {
        color: black;
        display: flex;
        flex-direction: row;
    }

    .span1 {
        font-size: 10px;
        font-family: 'Orbitron', sans-serif;
        padding: 10px;
    }

    .message-image {
        width: 43px;
        height: 43px;
        object-fit: cover;
    }

    .message-name {
        font-size: 1rem;
        margin: 0;
    }

    .message-text {
        margin-left: 10px;
    }

    .message {
        align-items: center;
    }

    .message .badge {
        margin-left: auto;
    }

    .card.h-100 {
        height: 100%;
    }

    .equal-card {
        height: 100%;
    }
</style>
@endpush
