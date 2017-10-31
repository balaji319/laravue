@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('massage'))
                        <div class="alert alert-success">
                            {{ session('massage') }}
                        </div>
                    @endif
                <div class="table-responsive">
                 <table class="table">
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Role</th>
                        <th> Action</th>
                    </tr>
                     
                        @foreach($obj_user_data as $data)
                        <tr>
                         <td><img src="{{$data->img}} " style="height:20%" class="img-thumbnail"></td>
                         <td>{{ $data->name}}</td>
                         <td>{{ $data->email}}</td>
                         <td>{{ $data->email}}</td>
                         <td><a href="{{ url('home/'.$data->id.'/edit')}}"class="btn btn-success"> Edit</td>

                         <td>
                            <form method="POST" action="{{ url('home/'.$data->id)}}">
                                 {{ csrf_field() }}
                                 {{ method_field('DELETE') }} 
                                <button type="submit"  class="btn btn-danger" value=""> Delete</button>
                                </td>
                            </form>
                       </tr>
                         @endforeach                    
                     
                 </table>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
