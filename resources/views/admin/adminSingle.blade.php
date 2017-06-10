@extends('admin.adminSingle')

@section('content')
    <p>Name: {{$device['name']}}</p>
    <p>IMEI: {{$device['imei']}}</p>
    <p>ID: {{$device['id']}}</p>
    {{dd($device)}}
    <div class="container">
        <h2>labas</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    @foreach($device as $key => $value)
                        <th>{{$key}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($device['device_conn_data'][0] as $key => $data)

                        @if($key == 'pivot')
                            labas
                            @else
                            <td>{{$key, $data}}</td>
                        @endif

                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

@endsection