@props([
'page_title' => 'iOt Livestock Management',
'noChild' => true
])

<div class="ec-content-wrapper">
      <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                  <h1>{{ $page_title }}</h1>
                  <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>{{ $page_title }}
                  </p>
            </div>
            <div class="row">
                  <div class="col-xl-12 col-lg-12">
                        <div class="ec-cat-list card card-default">
                              <div class="card-body">
                                    {{ $slot }}
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>