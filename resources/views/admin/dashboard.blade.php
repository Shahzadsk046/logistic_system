@extends('layouts.app') <!-- Extend the main layout, adjust as needed -->

@section('page-title', 'Overview')

@section('css')
    <!-- Slick -->
    <link rel="stylesheet" href="{{ url('libs/slick/slick.css') }}" type="text/css">
    <style>
        .statistics>.stats {
            text-align: center;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
    </style>
@endsection

@section('header-action-button')
    {{-- <button class="btn btn-primary btn-icon">
        <i class="bi bi-plus-circle"></i> Create Dispatcher
    </button> --}}
    <button type="button" class="btn btn-primary btn-icon f-small" data-bs-toggle="modal"
        data-bs-target="#createDispatcherModal">
        <i class="bi bi-plus-circle"></i> Create Dispatcher
    </button>
@endsection

@section('content')
    <!-- Page title -->
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">
                        <i class="bi bi-globe2 small me-2"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div> --}}

    <!-- Cards with key information -->
    <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-12 d-flex flex-lg-row flex-column">
            <div class="my-3 mx-2 w-100">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Total Earning</h5>
                        <p class="card-text">$1000</p>
                    </div>
                </div>
            </div>
            <div class="my-3 mx-2 w-100">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Driver Earning</h5>
                        <p class="card-text">$1000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12 my-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Statistics</h5>
                    <div class="row statistics">
                        <div class="col-6 col-lg-3 py-2 text-center stats">
                            <div class="stat-box d-flex flex-lg-row flex-column">
                                <div class="avatar avatar-primary me-lg-2 mx-auto my-2">
                                    <span class="avatar-text rounded-circle">
                                        <i class="bi bi-minecart-loaded"></i>
                                    </span>
                                </div>
                                <div class="card-columns me-2">
                                    <h5 class="mb-0">1234</h5>
                                    <p class="mb-0">Total Loads</p>
                                    <a href="#"><i class="bi bi-eye"></i> View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 py-2 stats">
                            <div class="stat-box d-flex flex-lg-row flex-column">
                                <div class="avatar avatar-info me-lg-2 mx-auto my-2">
                                    <span class="avatar-text rounded-circle">
                                        <i class="bi bi-minecart-loaded"></i>
                                    </span>
                                </div>
                                <div class="card-columns me-2">
                                    <h5 class="mb-0">667</h5>
                                    <p class="mb-0">Completed Loads</p>
                                    <a href="#"><i class="bi bi-eye"></i> View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 py-2 stats">
                            <div class="stat-box d-flex flex-lg-row flex-column">
                                <div class="avatar avatar-danger me-lg-2 mx-auto my-2">
                                    <span class="avatar-text rounded-circle">
                                        <i class="bi bi-person"></i>
                                    </span>
                                </div>
                                <div class="card-columns me-2">
                                    <h5 class="mb-0">56</h5>
                                    <p class="mb-0">Total Drivers</p>
                                    <a href="#"><i class="bi bi-eye"></i> View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 py-2 stats">
                            <div class="stat-box d-flex flex-lg-row flex-column">
                                <div class="avatar avatar-success me-lg-2 mx-auto my-2">
                                    <span class="avatar-text rounded-circle">
                                        <i class="bi bi-person"></i>
                                    </span>
                                </div>
                                <div class="card-columns me-2">
                                    <h5 class="mb-0">42</h5>
                                    <p class="mb-0">Active Drivers</p>
                                    <a href="#"><i class="bi bi-eye"></i> View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-3">
            <div class="card container-fluid py-3">
                <div class="card-title">Ongoing Load</div>
                <div class="row ongoingLoads overflow-auto">

                    <table id="ongoingLoadsTable" class="table">
                        <thead>
                            <tr>
                                <th>Load ID</th>
                                <th>Pickup Date</th>
                                <th>Pickup</th>
                                <th>Dropoff</th>
                                <th>Driver Fare</th>
                                <th>Driver</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>838913618</td>
                                <td>11 Oct, 2023 12:00</td>
                                <td>Houston, TX, USA</td>
                                <td>Hot Springs, AR, USA</td>
                                <td>$350.00</td>
                                <td><a href="#">Raicel Franco Cigala Miami,FL</a></td>
                            </tr>
                        </tbody>
                        {{-- <tbody>
                   <!-- Loop through your ongoing load data and generate rows -->
                   @foreach ($ongoingLoads as $load)
                      <tr>
                         <td>{{ $load->load_id }}</td>
                         <td>{{ $load->pickup_date }}</td>
                         <td>{{ $load->dropoff }}</td>
                         <td>{{ $load->driver_fare }}</td>
                         <td>{{ $load->driver }}</td>
                      </tr>
                   @endforeach
                </tbody> --}}
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Charts or other data visualizations can go here -->

    <!-- Tables with data -->

    <!-- Forms for admin actions -->

    <!-- Additional content as needed -->
    <!-- Define the content section -->
    <!-- The Modal -->
    <div class="modal fade" id="createDispatcherModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <form method="POST" action="{{ route('admin.create.dispatcher') }}">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Dispatcher Account</h4>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- Add your form to create dispatcher accounts here -->
                        @csrf
                        <div class="form-group p-2">
                            <label class="form-label" for="name">Dispatcher's Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group p-2">
                            <label class="form-label" for="email">Dispatcher's Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>

                        <div class="form-group p-2">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Create Dispatcher</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <h1>Welcome to the Admin Dashboard</h1>

        <!-- Add your admin dashboard content here -->
        <p>This is where you can manage users and perform admin actions.</p>

        <!-- Example: Link to create dispatcher accounts -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createDispatcherModal">Create
            Dispatcher Account</button>

        {{-- <a href="#" class="btn btn-primary">Create Dispatcher Account</a> --}}
    {{-- </div> --}}

@section('script')
    <script>
        $(document).ready(function() {
            $('#ongoingLoadsTable').DataTable();
        });
    </script>
@endsection
@endsection
