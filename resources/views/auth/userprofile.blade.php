@extends('layouts.master')
@section('title','search')

@section('content')

    <div class="container-fluid">
    
            <table class="table">
                <thead>
                    <tr class="table-secondary">
                    <th scope="col">#</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0; ?>
                @foreach($users as $user)
                    <tr>
                    <?php $i++ ?>
                    <th scope="row">{{$i}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->role}}</td>
                    <td colspan="2">
                    <a href="" type="button" class="btn btn-primary">Edit</a>
                   <a href="" type="button" class="btn btn-primary">Delete</a></td>
                    </tr>
                 @endforeach
                </tbody>
            </table>
     </div><!-- End Container-->
 </div><!--End Side Bar Column -->
</div>  <!--Container Main end-->
@endsection