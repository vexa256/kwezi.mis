<div class="container">
<div class="row">
    <div class="col-auto ms-auto float-end mt-3 mb-3">
        <div class="btn-list">
            <a data-bs-toggle="modal" href="#CreateAdmin"
            class="btn  float-right btn-primary shadow-lg">
            <i class="fas fa-user-plus me-1" aria-hidden="true"></i> New Admin
        </a>

    </div>
</div>
</div>

<div class="col-md-12">
    <div class="card">

        <div class="card-header">
            <h3 class="card-title">All registered admin accounts


            </h3>



        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive">

            <table class="MyTable table table-bordered table-striped table-danger shadow">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Role</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>Admin</td>


                        <td>

                            <form method="POST"
                                action="{!! route('users.user.destroy', $user->id) !!}"
                                accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                <div class="btn-group btn-group-xs pull-right" role="group">


                                    <button type="submit" class="btn btn-danger" title="Delete User"
                                        onclick="return confirm(&quot;Click Ok to delete User.&quot;)">
                                        <span class="fas fa-trash" aria-hidden="true"></span>
                                    </button>

                                    <a href="#UpdateAccount" class="btn btn-info ml-2"
                                        data-bs-toggle="modal"><span class="fas fa-edit"
                                            aria-hidden="true"></span></a>
                                </div>

                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


@include('admins.UpdateAdmin')
@include('stats.CreateAdmin')
