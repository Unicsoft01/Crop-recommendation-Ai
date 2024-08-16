<x-app-layout>
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Recent Recommendations</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Recommendations
                    </p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#newRecommendation"> New
                        Recommendations
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ec-vendor-list card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="responsive-data-table_wrapper"
                                    class="dataTables_wrapper dt-bootstrap5 no-footer">

                                    <table id="responsive-data-table" class="table dataTable no-footer"
                                        aria-describedby="responsive-data-table_info">
                                        <thead>
                                            <tr>
                                                <th class="sorting sorting_asc" tabindex="0"
                                                    aria-controls="responsive-data-table" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Profile: activate to sort column descending"
                                                    style="width: 56.3125px;">SN</th>
                                                <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="width: 84.7344px;">pH Levels</th>
                                                <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email: activate to sort column ascending"
                                                    style="width: 173.375px;">NPK Ratio</th>
                                                <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Product: activate to sort column ascending"
                                                    style="width: 66.375px;">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending"
                                                    style="width: 74.125px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($crops as $item => $crop)
                                                @php
                                                    $iseven = $crop->id % 2 == 0;
                                                @endphp
                                                <tr @class([
                                                    'even' => $iseven,
                                                    'odd' => !$iseven,
                                                ])>
                                                    <td>{{ $item + 1 }}</td>
                                                    <td>{{ $crop->pH }}</td>
                                                    <td>{{ $crop->nitrogen }}:{{ $crop->phosphorus }}:{{ $crop->potassium }}
                                                    </td>
                                                    <td>{{ $crop->created_at->format('d-m-Y h:ma') }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-outline-success">Info</button>
                                                            <button type="button"
                                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false" data-display="static">
                                                                <span class="sr-only">Info</span>
                                                            </button>

                                                            <div class="dropdown-menu" style="">
                                                                <form action="{{ route('crops.destroy', $crop->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit" class="dropdown-item">
                                                                        Delete
                                                                    </button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Vendor Modal  -->
            <div class="modal fade modal-add-contact" id="newRecommendation" tabindex="-1"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <form method="post" action="{{ route('recommendations.store') }}">
                            @csrf
                            <div class="modal-header px-4">
                                <h5 class="modal-title" id="exampleModalCenterTitle">{{ config('app.name') }}</h5>
                            </div>

                            <div class="modal-body px-4">
                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nitrogen">Nitrogen</label>
                                            <input type="number" class="form-control" id="nitrogen"
                                                placeholder="Enter Nitrogen level" name="nitrogen" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phosphorus">Phosphorus</label>
                                            <input type="number" class="form-control" id="phosphorus"
                                                placeholder="Enter Phosphorus level" name="phosphorus" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="potassium">Potassium</label>
                                            <input type="number" class="form-control" id="potassium"
                                                placeholder="Enter potassium level" name="potassium" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="pH">pH</label>
                                            <input type="number" class="form-control" id="pH"
                                                placeholder="Enter pH level" name="pH" min="1"
                                                max="14" required>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="modal-footer px-4">
                                <button type="button" class="btn btn-secondary btn-pill"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success btn-pill">Get Recommendations</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div>
</x-app-layout>
