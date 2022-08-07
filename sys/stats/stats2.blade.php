<div class="container">
<div class="row">
<div class="col-md-6 col-xl-3">
    <div class="card card-sm  bg-dark-lt">
      <div class="card-body">
        <div class="row align-items-center">

          <div class="col-auto">
            <a href="{{-- {{ route('MgtBlogs') }} --}}" class=" ">
            <i class="fas fa-bookmark fa-3x"></i></a>
          </div>

          <div class="col">
            <div class="font-weight-medium">
                Blog Posts
            </div>
            <div class="text-dark">
                {{-- {{$Blog}} --}} blog posts
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="col-md-6 col-xl-3">
    <div class="card card-sm  bg-dark-lt">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-auto">
            <a href="{{-- {{ route('MgtGallery') }} --}}" class=" ">
            <i class="fas fa-images fa-3x"></i></a>
          </div>
          <div class="col">
            <div class="font-weight-medium">
                Gallery Uploads
            </div>
            <div class="text-dark">
                {{-- {{$Gallery}} --}} images
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="col-md-6 col-xl-3">
    <div class="card card-sm  bg-dark-lt">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-auto">
            <a href="{{-- {{ route('MgtBulletinFiles') }} --}}" class=" ">
            <i class="fas fa-tags fa-3x"></i></a>
          </div>
          <div class="col">
            <div class="font-weight-medium">
                Advert Uploads
            </div>
            <div class="text-dark">
                {{-- {{$Bulletins}} --}} bulletins uploaded
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="col-md-6 col-xl-3">
    <div class="card card-sm  bg-dark-lt">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-auto">
            <a href="{{-- {{ route('MgtLeaders') }} --}}" class=" ">
            <i class="fas fa-user-check fa-3x"></i></a>
          </div>
          <div class="col">
            <div class="font-weight-medium">
             Team
            </div>
            <div class="text-dark">
                {{-- {{$Leaders}} --}} Members
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
</div>
