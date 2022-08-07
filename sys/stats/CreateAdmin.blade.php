<div class="modal modal-blur fade" id="CreateAdmin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Admin Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">

                <form method="POST" action="{{ route('CreateAdmin') }}" class="row">
                    @csrf
                    <div class="col-md-12 mt-2">
                        {!! Form::text($name="name", $value=null, [

                        "class" => "form-control",
                        "placeholder" => "Admin's name",
                        "required" => "true",

                        ]) !!}
                    </div>

                    <div class="col-md-12 mt-2">
                        {!! Form::email($name="email", $value=null, [

                        "class" => "form-control",
                        "placeholder" => "Email/Username",
                        "required" => "true",

                        ]) !!}
                    </div>



                    <div class="col-md-12 mt-2">
                        {!! Form::text($name="password", $value=null, [

                        "class" => "form-control",
                        "placeholder" => "Set Account Password",
                        "required" => "true",

                        ]) !!}
                    </div>




                    <div class="modal-footer">
                        <a href="#" class="btn btn-pill btn-dark" data-bs-dismiss="modal">
                            <i class="fas me-1 fa-times" aria-hidden="true"></i>
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-orange btn-pill ms-auto">
                            <i class="fas me-1 fa-check" aria-hidden="true"></i>
                            Create Account
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
