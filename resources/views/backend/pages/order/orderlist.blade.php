@extends('backend.layout.app')

@section('content')

<div class="container">

    <br><p class="text-info" style="text-align: center">Book List</p><br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Location</th>
                <th scope="col">City</th>
                <th scope="col">Road</th>
                <th scope="col">Orders Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userBooking as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->location }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->road }}</td>
                    <td>{{ $item->created_at->diffForHumans() }}</td>
                    <td>
                        <!-- Button to trigger the modal -->
                   
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#assignModal">Assign</button>
                    

                       
                       <!-- Modal -->
            <div class="modal fade" id="assignModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Assign Car</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('driver.store.update', $item->id) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-control">
                                        <option>Assign</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <select class="form-select">
                                        @foreach($user as $driver)
                                            <option>{{ $driver->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Assign</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>

</div>


@endsection
