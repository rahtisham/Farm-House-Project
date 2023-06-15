@extends('layouts.admin_panel')

@section('content')

 <!--start content-->
 <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add New Form</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a> --}}
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><button type="button" class="btn btn-dark px-5">Add more</button></li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="breadcrumb-title pe-3">Dashboard / FarmHouse / Create</div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Create FarmHouse Form</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <div class="mb-3" data-select2-id="21">
                            <label class="form-label">FarmHouse Name</label>
                            <input class="form-control" type="text" placeholder="Enter Farm House Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Booking Hour</label>
                            <select class="single-select">
                                <option value="">Select Booking Hour</option>
                                <option value="12 Hour">12 Hour</option>
                                <option value="24 Hour">24 Hour</option>
                            </select>
                        </div>
                        <div class="mb-3 select2-sm">
                            <label class="form-label">City</label>
                            <select class="single-select">
                                <option value="">Select City</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                            </select>
                        </div>

                        <div class="mb-3" data-select2-id="21">
                            <label class="form-label">Address</label>
                            <input class="form-control" type="text" placeholder="Enter Address">
                        </div>
                        <div class="mb-3 select2-sm">
                            <label class="form-label">Pool</label>
                            <select class="single-select">
                                <option value="">Select Pool</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="mb-3 select2-sm">
                            <label class="form-label">Badroom</label>
                            <select class="single-select">
                                <option value="">Select Badroom</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="mb-3 select2-sm">
                            <label class="form-label">Bathroom</label>
                            <select class="single-select">
                                <option value="">Select Bathroom</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <div class="mb-3" data-select2-id="21">
                            <label class="form-label">Price</label>
                            <input class="form-control" type="text" placeholder="Enter Price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select2 Multiple Control</label>
                            <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
                                <option value="United States" selected>United States</option>
                                <option value="United Kingdom" selected>United Kingdom</option>
                                <option value="Afghanistan" selected>Afghanistan</option>
                                <option value="Aland Islands">Aland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFileLg" class="form-label">Large file input example</label>
                            <input class="form-control" id="formFileLg" type="file">
                        </div>

                        <button type="button" class="btn btn-success px-5 mt-2">Submit</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</main>
<!--end page main-->

@endsection
