@extends('admin.adminCore')

@section('content')
    <div id="list">
        <div class="container">

            <h2>Devices</h2>

            <table class="table table-hover">

                @if(sizeof($list)>0)
                    <thead>
                    <tr>
                        @foreach($list[0] as $key => $value)
                            <th>{{$key}}</th>
                        @endforeach

                    </tr>

                    </thead>
                    <tbody>
                    @foreach ($list as $key => $record)
                        <tr>
                            @foreach ($record as $key => $value)

                                <td>{{$value}}</td>

                            @endforeach

                            @if(isset($showDelete))

                                <td><a href="{{route($showDelete, $record['imei'])}}"
                                       class="btn btn-primary btn-sm">View</a>
                                </td>
                            @endif

                        </tr>

                    @endforeach

                    </tbody>
                @else
                    <h3>No items in database!</h3>
                @endif
            </table>
        </div>
    </div>
@endsection