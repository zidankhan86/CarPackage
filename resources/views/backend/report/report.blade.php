@extends('backend.layout.app')

@section('content')
<br><br><div class="container">
    <div class="container">
        <div class="container">
        <h1>Booking Report</h1>

<form action="{{route('order.report.search')}}" method="get">

<div class="row">
    <div class="col-md-4">
        <label for="">From date:</label>
        <input name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-4">
        <label for="">To date:</label>
        <input name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-success">Search</button>
    </div>
</div>

</form>
<div id="orderReport">

<h1>Order Reports- {{date('Y-m-d')}}</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>

            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">City Name</th>
            <th scope="col">Road Name</th>
            <th scope="col">Location</th>
            <th scope="col">Order Date</th>

        </tr>
        </thead>
        <tbody>

        @foreach($report as $key=>$order)
        <tr>
            <td>{{$key+1}}</td>

            <td>{{$order->name}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->city}}</td>
            <td>{{$order->road}}</td>
            <td>{{$order->location}}</td>
            <td>{{$order->created_at}}</td>

        </tr>
        @endforeach

        </tbody>
    </table>
</div>
<div>
<button onclick="printDiv('orderReport')" class="btn btn-success">Print</button>
</div>

        </div>
    </div>
</div>

<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>


  @endsection
