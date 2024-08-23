<x-app-layout>
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Crops</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Crops
                    </p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVendor"> Add
                        more Crops
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
                                        @if (count($crops) > 0)
                                            <thead>
                                                <tr>
                                                    <td>Sn</td>
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="responsive-data-table" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Profile: activate to sort column descending"
                                                        style="width: 56.3125px;">Thumbnail</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="responsive-data-table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Name: activate to sort column ascending"
                                                        style="width: 84.7344px;">Crop Name</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="responsive-data-table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Email: activate to sort column ascending"
                                                        style="width: 173.375px;">Botanical Name</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="responsive-data-table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Email: activate to sort column ascending"
                                                        style="width: 173.375px;">pH Level</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="responsive-data-table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Email: activate to sort column ascending"
                                                        style="width: 173.375px;">NPK Ratio</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="responsive-data-table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Product: activate to sort column ascending"
                                                        style="width: 66.375px;">Created at</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="responsive-data-table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Action: activate to sort column ascending"
                                                        style="width: 74.125px;">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($crops as $item => $crop)
                                                    @php
                                                        $iseven = $item % 2 == 0;
                                                    @endphp
                                                    <tr @class([
                                                        'even' => $iseven,
                                                        'odd' => !$iseven,
                                                    ])>
                                                        <td>{{ $item + 1 }}</td>
                                                        <td class="sorting_1"><img class="vendor-thumb"
                                                                src="{{ $crop->imageUrl }}" alt="{{ $crop->cropName }}"
                                                                title="{{ $crop->botanicalName }}"></td>
                                                        <td>{{ $crop->cropName }}</td>
                                                        <td>{{ $crop->botanicalName }}</td>
                                                        <td>{{ $crop->pH }}</td>
                                                        <td>{{ $crop->nitrogen }}:{{ $crop->phosphorus }}:{{ $crop->potassium }}</td>
                                                        <td>{{ $crop->created_at->format('d-m-Y') }}</td>
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
                                                                    {{-- <a href="{{ route('crops.edit', $crop->id) }}"
                                                                        class="dropdown-item">
                                                                        Edit</a> --}}


                                                                    <form
                                                                        action="{{ route('crops.destroy', $crop->id) }}"
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
                                        @else
                                            <h3 class="text-center p-5 text-primary">Nothing to Display, Please
                                                Consider
                                                Creating Some data</h3>
                                        @endif

                                    </table>
                                    {{-- <div class="row justify-content-between bottom-information">
                                        <div class="dataTables_info" id="responsive-data-table_info" role="status"
                                            aria-live="polite">Showing 1 to 20 of 88 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="responsive-data-table_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="responsive-data-table_previous"><a href="#"
                                                        aria-controls="responsive-data-table" data-dt-idx="0"
                                                        tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="responsive-data-table" data-dt-idx="1"
                                                        tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsive-data-table" data-dt-idx="2"
                                                        tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsive-data-table" data-dt-idx="3"
                                                        tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsive-data-table" data-dt-idx="4"
                                                        tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="responsive-data-table" data-dt-idx="5"
                                                        tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item next"
                                                    id="responsive-data-table_next"><a href="#"
                                                        aria-controls="responsive-data-table" data-dt-idx="6"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Vendor Modal  -->
            {{-- <div class="modal fade modal-add-contact" id="addVendor" tabindex="-1"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header px-4">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Vendor</h5>
                            </div>

                            <div class="modal-body px-4">
                                <div class="form-group row mb-6">
                                    <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Vendor
                                        Image</label>

                                    <div class="col-sm-8 col-lg-10">
                                        <div class="custom-file mb-1">
                                            <input type="file" class="custom-file-input" id="coverImage"
                                                required="">
                                            <label class="custom-file-label" for="coverImage">Choose
                                                file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="firstName">First name</label>
                                            <input type="text" class="form-control" id="firstName"
                                                value="John">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="lastName">Last name</label>
                                            <input type="text" class="form-control" id="lastName"
                                                value="Deo">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="userName">User name</label>
                                            <input type="text" class="form-control" id="userName"
                                                value="johndoe">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                value="johnexample@gmail.com">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="Birthday">Birthday</label>
                                            <input type="text" class="form-control" id="Birthday"
                                                value="10-12-1991">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="event">Address</label>
                                            <input type="text" class="form-control" id="event"
                                                value="Address here">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer px-4">
                                <button type="button" class="btn btn-secondary btn-pill"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary btn-pill">Save Contact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div> <!-- End Content -->
    </div>
</x-app-layout>
