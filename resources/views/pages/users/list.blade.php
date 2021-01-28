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
        <div class="card-datatable">
          <table class="dt-responsive table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Extn.</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>one</td>
                <td>tow theree</td>
                <td>sjdflasdfnaos sdodf</td>
                <td> aksjndasdf </td>
                <td>fkahsdfkjh</td>
                <td> sdfaksfdjhk   kahjsdfkaj     </td>
              </tr>
              <tr>
                <td>one</td>
                <td>tow theree</td>
                <td>sjdflasdfnaos sdodf</td>
                <td> aksjndasdf </td>
                <td>fkahsdfkjh</td>
                <td> sdfaksfdjhk   kahjsdfkaj     </td>
              </tr>
              <tr>
                <td>one</td>
                <td>tow theree</td>
                <td>sjdflasdfnaos sdodf</td>
                <td> aksjndasdf </td>
                <td>fkahsdfkjh</td>
                <td> sdfaksfdjhk   kahjsdfkaj     </td>
              </tr>
              <tr>
                <td>one</td>
                <td>tow theree</td>
                <td>sjdflasdfnaos sdodf</td>
                <td> aksjndasdf </td>
                <td>fkahsdfkjh</td>
                <td> sdfaksfdjhk   kahjsdfkaj     </td>
              </tr>
              <tr>
                <td>one</td>
                <td>tow theree</td>
                <td>sjdflasdfnaos sdodf</td>
                <td> aksjndasdf </td>
                <td>fkahsdfkjh</td>
                <td> sdfaksfdjhk   kahjsdfkaj     </td>
              </tr>
              <tr>
                <td>two</td>
                <td>tow theree</td>
                <td>sjdflasdfnaos sdodf</td>
                <td> aksjndasdf </td>
                <td>fkahsdfkjh</td>
                <td> sdfaksfdjhk   kahjsdfkaj     </td>
              </tr>
              <tr>
                <td>three</td>
                <td>tow theree</td>
                <td>sjdflasdfnaos sdodf</td>
                <td> aksjndasdf </td>
                <td>fkahsdfkjh</td>
                <td> sdfaksfdjhk   kahjsdfkaj     </td>
              </tr>
              <tr>
                <td>four</td>
                <td>tow theree</td>
                <td>sjdflasdfnaos sdodf</td>
                <td> aksjndasdf </td>
                <td>fkahsdfkjh</td>
                <td> sdfaksfdjhk   kahjsdfkaj     </td>
              </tr>
              <tr>
                <td>fice</td>
                <td>tow theree</td>
                <td>sjdflasdfnaos sdodf</td>
                <td> aksjndasdf </td>
                <td>fkahsdfkjh</td>
                <td> sdfaksfdjhk   kahjsdfkaj     </td>
              </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Extn.</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
          </table>
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
