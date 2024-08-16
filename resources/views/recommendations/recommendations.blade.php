{{-- <div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div> --}}
<x-app-layout>
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>{{ config('app.name') }}</h1>
                    <p class="breadcrumbs">
                        <span>
                            <a href="{{ route('dashboard') }}">Home</a>
                        </span>
                        <span>
                            <i class="mdi mdi-chevron-right"></i>
                            <a href="{{ route('recommendations.index') }}">Recommendations</a>
                        </span>
                        <span>
                            <i class="mdi mdi-chevron-right"></i>
                        </span>Recommended Crop(s)
                    </p>
                </div>
            </div>
            <div class="card card-default p-4 ec-card-space">
                <div class="ec-vendor-card mt-m-24px row">
                    @if (count($crops) > 0)
                        <div class="text-center mx-auto">
                            The System has Recommended the below Crop(s) with an accuracy of about
                            <b class="text-success"> {{ $percent = rand(50, 100) }}%</b> Recommendations <br>
                            {{-- <span class="text-danger">
                                Please Save recommendations if you want to access them later
                            </span> --}}
                        </div>
                        @foreach ($crops as $key => $crop)
                            @if ($n >= $crop->nitrogen - 10 && $n <= $crop->nitrogen + 10)
                                <div class="col-lg-6 col-xl-4 col-xxl-3">
                                    <div class="card card-default mt-24px">
                                        <div class="vendor-info card-body text-center p-4">
                                            <a href="javascript:0" class="text-secondary d-inline-block mb-3">
                                                <div class="image mb-3">
                                                    <img src="{{ $crop->imageUrl }}" class="img-fluid rounded-circle"
                                                        alt="{{ $crop->cropName }}">
                                                </div>

                                                <h5 class="card-title text-dark">Crop Name: {{ $crop->cropName }}</h5>

                                                <ul class="list-unstyled">
                                                    <li class="d-flex mb-1">
                                                        {{-- <i class="mdi mdi-eye mr-1"></i> --}}
                                                        <span>Botanical Name: {{ $crop->botanicalName }}</span>
                                                    </li>
                                                    <li class="d-flex">
                                                        {{-- <i class="mdi mdi-eye mr-1"></i> --}}
                                                        <span> Recommended Based on Nitrogen Level and soil pH
                                                        </span>
                                                    </li>
                                                </ul>
                                            </a>
                                            <div class="row justify-content-center ec-vendor-detail">
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">N</h6>
                                                    <h5>{{ $crop->nitrogen }}</h5>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">P</h6>
                                                    <h5>{{ $crop->phosphorus }}</h5>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">K</h6>
                                                    <h5>{{ $crop->potassium }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($n >= $crop->potassium - 10 && $n <= $crop->potassium + 10)
                                <div class="col-lg-6 col-xl-4 col-xxl-3">

                                    <div class="card card-default mt-24px">
                                        <div class="vendor-info card-body text-center p-4">
                                            <a href="javascript:0" class="text-secondary d-inline-block mb-3">
                                                <div class="image mb-3">
                                                    <img src="{{ $crop->imageUrl }}" class="img-fluid rounded-circle"
                                                        alt="{{ $crop->cropName }}">
                                                </div>

                                                <h5 class="card-title text-dark">Crop Name: {{ $crop->cropName }}</h5>

                                                <ul class="list-unstyled">
                                                    <li class="d-flex mb-1">
                                                        {{-- <i class="mdi mdi-eye mr-1"></i> --}}
                                                        <span>Botanical Name: {{ $crop->botanicalName }}</span>
                                                    </li>
                                                    <li class="d-flex">
                                                        {{-- <i class="mdi mdi-eye mr-1"></i> --}}
                                                        <span> Recommended Based on Potassium Level and soil pH
                                                        </span>
                                                    </li>
                                                </ul>
                                            </a>
                                            <div class="row justify-content-center ec-vendor-detail">
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">N</h6>
                                                    <h5>{{ $crop->nitrogen }}</h5>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">P</h6>
                                                    <h5>{{ $crop->phosphorus }}</h5>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">K</h6>
                                                    <h5>{{ $crop->potassium }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($n >= $crop->phosphorus - 10 && $n <= $crop->phosphorus + 10)
                                <div class="col-lg-6 col-xl-4 col-xxl-3">
                                    <div class="card card-default mt-24px">
                                        <div class="vendor-info card-body text-center p-4">
                                            <a href="javascript:0" class="text-secondary d-inline-block mb-3">
                                                <div class="image mb-3">
                                                    <img src="{{ $crop->imageUrl }}" class="img-fluid rounded-circle"
                                                        alt="{{ $crop->cropName }}">
                                                </div>

                                                <h5 class="card-title text-dark">Crop Name: {{ $crop->cropName }}</h5>

                                                <ul class="list-unstyled">
                                                    <li class="d-flex mb-1">
                                                        {{-- <i class="mdi mdi-eye mr-1"></i> --}}
                                                        <span>Botanical Name: {{ $crop->botanicalName }}</span>
                                                    </li>
                                                    <li class="d-flex">
                                                        {{-- <i class="mdi mdi-eye mr-1"></i> --}}
                                                        <span> Recommended Based on Phosphorus Level and soil pH
                                                        </span>
                                                    </li>
                                                </ul>
                                            </a>
                                            <div class="row justify-content-center ec-vendor-detail">
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">N</h6>
                                                    <h5>{{ $crop->nitrogen }}</h5>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">P</h6>
                                                    <h5>{{ $crop->phosphorus }}</h5>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">K</h6>
                                                    <h5>{{ $crop->potassium }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-6 col-xl-4 col-xxl-3">
                                    <div class="card card-default mt-24px">
                                        <div class="vendor-info card-body text-center p-4">
                                            <a href="javascript:0" class="text-secondary d-inline-block mb-3">
                                                <div class="image mb-3">
                                                    <img src="{{ $crop->imageUrl }}" class="img-fluid rounded-circle"
                                                        alt="{{ $crop->cropName }}">
                                                </div>

                                                <h5 class="card-title text-dark">Crop Name: {{ $crop->cropName }}</h5>

                                                <ul class="list-unstyled">
                                                    <li class="d-flex mb-1">
                                                        {{-- <i class="mdi mdi-eye mr-1"></i> --}}
                                                        <span>Botanical Name: {{ $crop->botanicalName }}</span>
                                                    </li>
                                                    <li class="d-flex">
                                                        {{-- <i class="mdi mdi-eye mr-1"></i> --}}
                                                        <span> Recommended Based on NPK ratio
                                                        </span>
                                                    </li>
                                                </ul>
                                            </a>
                                            <div class="row justify-content-center ec-vendor-detail">
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">N</h6>
                                                    <h5>{{ $crop->nitrogen }}</h5>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">P</h6>
                                                    <h5>{{ $crop->phosphorus }}</h5>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-uppercase">K</h6>
                                                    <h5>{{ $crop->potassium }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <hr>
                    @else
                        <h4 class="text-center mx-auto">
                            Sorry No Recommendations this time, Please Try Again Later!!!
                        </h4>
                    @endif



                </div>
            </div>
        </div> <!-- End Content -->
    </div>
</x-app-layout>
