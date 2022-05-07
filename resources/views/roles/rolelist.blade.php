<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    Roles
                </h1>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h3 class="card-title">List:</h3>
        <div class="card-tools mr-2">
            <a type="button" href="{{ route('roles.add') }}" class="btn btn-tool btn-primary">
                <i class="fas fa-plus"></i>
                Add role
            </a>
        </div>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible m-3">
            <button type="button" class="close text-danger" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> {{ Session::get('success') }}
        </div>
    @endif


    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Role name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allroles as $role)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a href="{{ route('roles.show', [$role->id]) }}" class="btn btn-primary btn-xs">
                                <i class="fas fa-eye"></i>
                                view
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
