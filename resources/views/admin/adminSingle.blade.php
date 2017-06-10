@extends('admin.adminCore')

@section('content')
<div class="single">
    <p>Name: {{$device['name']}}</p>
    <p>IMEI: {{$device['imei']}}</p>
    <p>ID: {{$device['id']}}</p>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nr.</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Speed</th>
                    <th>Temperature</th>
                    <th>Humidity</th>
                    <th>Odometer server</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($device['device_conn_data'][0] as $key => $data)
                            <td>{{$data}}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection