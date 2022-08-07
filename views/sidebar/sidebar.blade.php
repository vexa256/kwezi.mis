<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">

            <img src="{{ url('assets/images/logo.png') }}" alt="" class="img-fluid"
            style="display: block;margin-left: auto;margin-right: auto; width: 70%">
        </h1>
        <div class="navbar-nav flex-row d-lg-none">


            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url({{ asset('user.svg') }})"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="mt-1 small text-muted">{{ Auth::user()->email }}</div>
                    </div>
                </a>
                @include('scripts.logout')
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Update Account Data</a>

                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="javascript:void" onclick="$('#logout-form').submit();" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
               @include('sidebar.admins')
               @include('sidebar.cms')
               @include('sidebar.pages')
               @include('sidebar.destinations')
               @include('sidebar.packages')
               @include('sidebar.reviews')
               @include('sidebar.team')
               @include('sidebar.blogs')
               @include('sidebar.services')
               @include('sidebar.gallery')
               @include('sidebar.partners')

                 {{-- @include('sidebar.cms')
                @include('sidebar.sermons')
                @include('sidebar.programs')
                @include('sidebar.news')
               
                @include('sidebar.members')
                @include('sidebar.leaders')
                @include('sidebar.bulletinFiles')
                @include('sidebar.publications')
                @include('sidebar.prayer')
                @include('sidebar.gallery') --}}



            </ul>
        </div>
    </div>
</aside>
