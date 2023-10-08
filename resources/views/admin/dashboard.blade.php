@extends('layouts.app') <!-- Extend the main layout, adjust as needed -->

@section('content')
    <!-- Define the content section -->
    <div class="container">
        <h1>Welcome to the Admin Dashboard</h1>

        <!-- Add your admin dashboard content here -->
        <p>This is where you can manage users and perform admin actions.</p>

        <!-- Example: Link to create dispatcher accounts -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createDispatcherModal">Create
            Dispatcher Account</button>

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
        {{-- <a href="#" class="btn btn-primary">Create Dispatcher Account</a> --}}
    </div>
@endsection
