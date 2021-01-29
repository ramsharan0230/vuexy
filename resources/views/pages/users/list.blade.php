@extends('layouts.master')
@section('title','Users List')
@push('styles')

  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css') }}">
  
@endpush
@section('main-content')
<!-- Responsive Datatable -->
<section id="responsive-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Responsive Datatable</h4>
        </div>
        <div class="card card-company-table">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>SN. </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Picture</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1. </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar rounded">
                          <div class="avatar-content">
                            <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />
                          </div>
                        </div>
                        <div>
                          <div class="font-weight-bolder">Dixons</div>
                          <div class="font-small-2 text-muted">meguc@ruj.io</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-primary mr-1">
                          <div class="avatar-content">
                            <i data-feather="monitor" class="font-medium-3"></i>
                          </div>
                        </div>
                        <span>Technology</span>
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="font-weight-bolder mb-25">23.4k</span>
                        <span class="font-small-2 text-muted">in 24 hours</span>
                      </div>
                    </td>
                    <td>$891.2</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="font-weight-bolder mr-1">68%</span>
                        <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2. </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar rounded">
                          <div class="avatar-content">
                            <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/parachute.svg" alt="Parachute svg" />
                          </div>
                        </div>
                        <div>
                          <div class="font-weight-bolder">Motels</div>
                          <div class="font-small-2 text-muted">vecav@hodzi.co.uk</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-success mr-1">
                          <div class="avatar-content">
                            <i data-feather="coffee" class="font-medium-3"></i>
                          </div>
                        </div>
                        <span>Grocery</span>
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="font-weight-bolder mb-25">78k</span>
                        <span class="font-small-2 text-muted">in 2 days</span>
                      </div>
                    </td>
                    <td>$668.51</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="font-weight-bolder mr-1">97%</span>
                        <i data-feather="trending-up" class="text-success font-medium-1"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3. </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar rounded">
                          <div class="avatar-content">
                            <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/brush.svg" alt="Brush svg" />
                          </div>
                        </div>
                        <div>
                          <div class="font-weight-bolder">Zipcar</div>
                          <div class="font-small-2 text-muted">davcilse@is.gov</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-warning mr-1">
                          <div class="avatar-content">
                            <i data-feather="watch" class="font-medium-3"></i>
                          </div>
                        </div>
                        <span>Fashion</span>
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="font-weight-bolder mb-25">162</span>
                        <span class="font-small-2 text-muted">in 5 days</span>
                      </div>
                    </td>
                    <td>$522.29</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="font-weight-bolder mr-1">62%</span>
                        <i data-feather="trending-up" class="text-success font-medium-1"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>4. </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar rounded">
                          <div class="avatar-content">
                            <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/star.svg" alt="Star svg" />
                          </div>
                        </div>
                        <div>
                          <div class="font-weight-bolder">Owning</div>
                          <div class="font-small-2 text-muted">us@cuhil.gov</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-primary mr-1">
                          <div class="avatar-content">
                            <i data-feather="monitor" class="font-medium-3"></i>
                          </div>
                        </div>
                        <span>Technology</span>
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="font-weight-bolder mb-25">214</span>
                        <span class="font-small-2 text-muted">in 24 hours</span>
                      </div>
                    </td>
                    <td>$291.01</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="font-weight-bolder mr-1">88%</span>
                        <i data-feather="trending-up" class="text-success font-medium-1"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>5. </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar rounded">
                          <div class="avatar-content">
                            <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/book.svg" alt="Book svg" />
                          </div>
                        </div>
                        <div>
                          <div class="font-weight-bolder">Cafés</div>
                          <div class="font-small-2 text-muted">pudais@jife.com</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-success mr-1">
                          <div class="avatar-content">
                            <i data-feather="coffee" class="font-medium-3"></i>
                          </div>
                        </div>
                        <span>Grocery</span>
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="font-weight-bolder mb-25">208</span>
                        <span class="font-small-2 text-muted">in 1 week</span>
                      </div>
                    </td>
                    <td>$783.93</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="font-weight-bolder mr-1">16%</span>
                        <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>6. </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar rounded">
                          <div class="avatar-content">
                            <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/rocket.svg" alt="Rocket svg" />
                          </div>
                        </div>
                        <div>
                          <div class="font-weight-bolder">Kmart</div>
                          <div class="font-small-2 text-muted">bipri@cawiw.com</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-warning mr-1">
                          <div class="avatar-content">
                            <i data-feather="watch" class="font-medium-3"></i>
                          </div>
                        </div>
                        <span>Fashion</span>
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="font-weight-bolder mb-25">990</span>
                        <span class="font-small-2 text-muted">in 1 month</span>
                      </div>
                    </td>
                    <td>$780.05</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="font-weight-bolder mr-1">78%</span>
                        <i data-feather="trending-up" class="text-success font-medium-1"></i>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>7. </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar rounded">
                          <div class="avatar-content">
                            <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/speaker.svg" alt="Speaker svg" />
                          </div>
                        </div>
                        <div>
                          <div class="font-weight-bolder">Payers</div>
                          <div class="font-small-2 text-muted">luk@izug.io</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="avatar bg-light-warning mr-1">
                          <div class="avatar-content">
                            <i data-feather="watch" class="font-medium-3"></i>
                          </div>
                        </div>
                        <span>Fashion</span>
                      </div>
                    </td>
                    <td class="text-nowrap">
                      <div class="d-flex flex-column">
                        <span class="font-weight-bolder mb-25">12.9k</span>
                        <span class="font-small-2 text-muted">in 12 hours</span>
                      </div>
                    </td>
                    <td>$531.49</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="font-weight-bolder mr-1">42%</span>
                        <i data-feather="trending-up" class="text-success font-medium-1"></i>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@push('script')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/app-user-list.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
@endpush
