<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<header>

</header>
<div class="container">
    <h1>All users</h1>

    @if(Session::has('message'))
        <div class="alert alert-info">{!! Session::get('message') !!}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Activation code</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $user)
            <tr>
                <td>{!! $user->getName() !!}</td>
                <td>{!! $user->getEmail() !!}</td>
                <td>{!! $user->role->name !!}</td>
                <td>{!! $user->status->name !!}</td>
                <td>{!! $user->activation_code !!}</td>
                <td>
                    <!-- delete the project (uses the destroy method DESTROY /projects/{id} -->
                    {!! Form::open(array('url' => 'users/' . $user->getId(), 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    <button type="submit" class="btn del_btn"></button>
                    {!! Form::close() !!}

                    {{--<a href="{!! URL::to('users/' . $user->getId()) !!}"><img class="detail_icon" src="{{ URL::to('/images/view_detail.ico') }}"></a>--}}

                    {{--<a href="{!! URL::to('users/' . $user->getId() . '/edit') !!}"><img src="{{ URL::to('/images/admin/gtk-edit.png') }}"></a>--}}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



</div>
</body>
</html>