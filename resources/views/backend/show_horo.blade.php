@extends('master.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <br/>
            <table class="table is-bordered table is-hoverable">
                <h1 align="center">Your Horoscope</h1>
                <thead>
                <tr>
                    <th>Sn</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($horodata as $key => $value)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$value->Title}}</td>
                        <td>{!! $value->Description !!}</td>
                        <td><img src="{{url('images/'.$value->Image)}}" width="30px"></td>
                        <td>{{$value->created_at}}</td>
                        <td><a class="btn btn-primary" href="{{route('edit-horo').'/'.$value->id}}"><i
                                        class="fa fa-edit"></i></a>
                            <a class="btn btn-danger confirm" href="{{route('delete-horo').'/'.$value->id}}"><i
                                        class="fa fa fa-trash"></i> </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
            {{ $horodata->links() }}
        </div>
    </div>
    </div>


@endsection