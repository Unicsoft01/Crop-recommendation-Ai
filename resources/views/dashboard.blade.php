@php
    $totalusers = App\Models\User::count();
    $totalRecommendations = App\Models\Recommendations::count();
    $totalCrops = App\Models\Crops::count();
    // $blockedusers = App\Models\User::whereStatus(1)->count();
    // $activeusers = App\Models\User::whereStatus(0)->count();
    // $totalticket = App\Models\Ticket::count();
    // $openticket = App\Models\Ticket::whereStatus(0)->count();
    // $closedticket = App\Models\Ticket::whereStatus(1)->count();
    // $totalreview = App\Models\Review::count();
    // $pubreview = App\Models\Review::whereStatus(1)->count();
    // $unpubreview = App\Models\Review::whereStatus(0)->count();

    // $pending_card = App\Models\Sellcard::whereStatus(0)->latest()->get();
    // $publised_review = App\Models\Review::whereStatus(1)->latest()->get();
    // $unpublished_review = App\Models\Review::whereStatus(0)->latest()->get();
@endphp
<x-app-layout>
    <div class="ec-content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-xl-4 col-sm-6 p-b-15 lbl-card">
                    <div class="card card-mini dash-card card-1">
                        <div class="card-body">
                            <h2 class="mb-1">{{ $totalusers }}</h2>
                            <p>Registered Users</p>
                            <span class="mdi mdi-account-arrow-left"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 p-b-15 lbl-card">
                    <div class="card card-mini dash-card card-2">
                        <div class="card-body">
                            <h2 class="mb-1">{{ $totalRecommendations }}</h2>
                            <p>Recommendations</p>
                            <span class="mdi mdi-account-clock"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 p-b-15 lbl-card">
                    <div class="card card-mini dash-card card-3">
                        <div class="card-body">
                            <h2 class="mb-1">{{ $totalCrops }}</h2>
                            <p>Registered Crops</p>
                            <span class="mdi mdi-package-variant"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8 col-md-12 p-b-15">
                    <!-- Sales Graph -->
                    <div id="user-acquisition" class="card card-default">
                        <div class="card-header">
                            <h2>Recommendations Report</h2>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-style-border justify-content-between justify-content-lg-start border-bottom"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#todays" role="tab"
                                        aria-selected="true">Today's</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab"
                                        aria-selected="false">Monthly </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#yearly" role="tab"
                                        aria-selected="false">Yearly</a>
                                </li>
                            </ul>
                            <div class="tab-content pt-4" id="salesReport">
                                <div class="tab-pane fade show active" id="source-medium" role="tabpanel">
                                    <div class="mb-6" style="max-height:247px">
                                        <div class="chartjs-size-monitor"
                                            style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div
                                                    style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                </div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                </div>
                                            </div>
                                        </div>
                                        <canvas id="acquisition" class="chartjs2 chartjs-render-monitor" width="596"
                                            height="247"
                                            style="display: block; width: 596px; height: 247px;"></canvas>
                                        <div id="acqLegend" class="customLegend mb-2">
                                            <ul class="2-legend">
                                                <li><span style="background-color:rgba(52, 116, 212, .2)"></span>Based
                                                    on Nitrogen Levels</li>
                                                <li><span style="background-color:rgba(255, 192, 203, .3)"></span>Based
                                                    on Phosphorus
                                                </li>
                                                <li><span style="background-color:rgb(178, 251, 212, .3)"></span>Based
                                                    on Potassium </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-12 p-b-15">
                    <!-- Doughnut Chart -->
                    <div class="card ec-cust-card card-table-border-none card-default">
                        <div class="card-header justify-content-between ">
                            <h2>Recently Added Crops</h2>
                        </div>
                        <div class="card-body pt-0 pb-15px">
                            <table class="table ">
                                <tbody>
                                    @foreach ($crops as $item => $crop)
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="media-image mr-3 rounded-circle">
                                                        <a href="#"><img
                                                                class="profile-img rounded-circle w-45"
                                                                src="{{ $crop->imageUrl }}" alt="customer image"></a>
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <a href="profile.html">
                                                            <h6 class="mt-0 text-dark font-weight-medium">{{ $crop->cropName }}</h6>
                                                        </a>
                                                        <small>{{ $crop->botanicalName }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $crop->nitrogen }}:{{ $crop->phosphorus }}:{{ $crop->potassium }}</td>
                                            <td class="text-dark d-none d-md-block">{{ $crop->pH }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div>
</x-app-layout>
