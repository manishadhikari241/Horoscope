@extends('master.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <table class="table is-bordered table is-hoverable">
                <h1 align="center">News Description</h1>
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
                @foreach($news as $key=>$value)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$value->title}}</td>
                        <td>{{htmlspecialchars_decode($value->description)}}</td>
                        <td><img src="{{url('images/News/'.$value->image)}}" width="30px"></td>
                        <td>{{$value->created_at}}</td>
                        <td>
                            <a class="fa fa-edit" href=""></a>
                            <a class="fa fa-trash" href=""> </a>
                        </td>
                    </tr>

                @endforeach

                </tbody>

            </table>
        </div>
    </div>
    </div>
@endsection