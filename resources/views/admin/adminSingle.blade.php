@extends('admin.adminCore')

@section('content')
<div class="single">

    <p>Name: {{$device['name']}}</p>
    <p>IMEI: {{$device['imei']}}</p>
    <p>ID: {{$device['id']}}</p>
    <a href="{{route($route)}}" class="btn btn-primary btn-sm">Back</a>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nr.</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Speed</th>
                    <th>Temperature</th>
                    <th>Humidity</th>
                    <th>Odometer server</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Model ID</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($device['device_conn_data'] as $data)
                        <tr>
                        @foreach($data as $key => $value)

                            @if($key == 'pivot')
                            @else
                                <td>{{$value}}</td>
                            @endif

                            @endforeach
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection