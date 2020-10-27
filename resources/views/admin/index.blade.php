@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <h4>Admin</h4>
        </div>
    </div>
    <hr style="width: 100%">
    <table id="example" class="display nowrap dataTable no-footer table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Institution</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $item)
            <tr role="row">
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->institution}}</td>
                <td>{{$item->email}}</td>
                <td>
                    @if($item->admin)
                    <a href="{{url()->current()}}/admin-status/{{$item->id}}/0" class="btn btn-sm btn-secondary">Make as User</a>
                    @else
                    <a href="{{url()->current()}}/admin-status/{{$item->id}}/1" class="btn btn-sm btn-danger">Make as Admin</a>
                    @endif
                </td>
                <td>
                    @if($item->active)
                    <a href="{{url()->current()}}/active-status/{{$item->id}}/0" class="btn btn-sm btn-secondary">Deactive Account</a>
                    @else
                    <a href="{{url()->current()}}/active-status/{{$item->id}}/1" class="btn btn-sm btn-primary">Activate Account</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            "scrollX": true
        } );
    } );
</script>
@endsection
