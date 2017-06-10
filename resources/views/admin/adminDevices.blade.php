@extends('admin.adminCore')

@section('content')
    <div id="list">
        <div class="container">

            <h2>Devices</h2>

            <table class="table table-hover">

                @if(sizeof($list)>0)
                    <thead>
                    <tr><th>
                            Nr
                        </th>
                        <th>
                            Created
                        </th>
                        <th>
                            Updated
                        </th>
                        <th>
                            IMEI
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>

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
                                       class="btn btn-primary btn-sm">View device data</a>
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