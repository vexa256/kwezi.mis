@include('header.header')
@include('sidebar.sidebar')
@include('header.top')

<div class="page-wrapper"
    style="background-image: url('assets/img/bgd-dark.webp'); background-repeat:
    no-repeat;background-size: cover;">
    @include('crumbs.crumb')


    <div class="page-body">
        <div class="container-xl">

            @isset($Page)
            @include($Page)
            @endisset
        </div>
    </div>

    @include('footer.footer')

</div>
</div>
@include('scripts.scripts')
