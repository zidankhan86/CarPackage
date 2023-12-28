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
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#assignModal{{ $item->id }}">Assign</button>

                        <!-- Modal -->
                        <div class="modal fade" id="assignModal{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Assign Car</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Add your form elements here for status and name -->
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select name="" id="status{{ $item->id }}"class="form-control">
                                                    <option value="assigned">Assign</option>
                                                </select>
                                                
                                                
                                            </div>
                                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <!-- Assuming $userBooking is the collection of users -->
                                <select class="form-select" id="name{{ $item->id }}" name="name">
                                    @foreach($user as $user)
                                        <option value="{{ $user->role }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="submitAssignForm{{ $item->id }}()">Assign</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- JavaScript for form submission -->
                        <script>
                            function submitAssignForm{{ $item->id }}() {
                                // Retrieve values from the form
                                var status = document.getElementById('status{{ $item->id }}').value;
                                var name = document.getElementById('name{{ $item->id }}').value;

                                // Log or use the values as needed
                                console.log("Status:", status);
                                console.log("Name:", name);

                                // Add your logic to handle the form data (e.g., send it to the server)

                                // Close the modal
                                $('#assignModal{{ $item->id }}').modal('hide');
                            }
                        </script>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

<div class="modal modal-blur fade" id="modal-team" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <!-- Your existing modal code here -->
    </div>
</div>

@endsection
