<div class="modal modal-blur fade" id="UpdateAccount" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hello
                   <span class="text-danger"> {{Auth::user()->name}}</span>, update your login credentials</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">

            <form class="row" method="POST"  action="{{ route('UpdateAdmin') }}">


                <div class="col-md-6 mt-2">
                    <label class="form-label">Your Name</label>

                    {!! Form::text($name="name", $value=null, [

                    "class" => "form-control",
                    "required" => "required",

                    ]) !!}


                </div>


                <div class="col-md-6 mt-2">
                    <label class="form-label">Email/Username</label>

                    {!! Form::text($name="email", $value=null, [

                    "class" => "form-control",
                    "required" => "required",

                    ]) !!}


                </div>



                <div class="col-md-6 mt-2">
                    <label class="form-label">Password</label>

                    {!! Form::text($name="password", $value=null, [

                    "class" => "form-control",
                    "required" => "required",

                    ]) !!}


                </div>



                <div class="col-md-6 mt-2">
                    <label class="form-label">Password</label>

                    {!! Form::text($name="password_confirmation", $value=null, [

                    "class" => "form-control",
                    "required" => "required",

                    ]) !!}


                </div>

                @csrf
                <div class="modal-footer">
                    <a href="#" class="btn btn-pill btn-dark" data-bs-dismiss="modal">
                        <i class="fas me-1 fa-times" aria-hidden="true"></i>
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-orange btn-pill ms-auto">
                        <i class="fas me-1 fa-check" aria-hidden="true"></i>
                        Save Changes
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
</div>
