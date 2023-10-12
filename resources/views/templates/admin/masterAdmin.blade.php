<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/docfind/Dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 02:40:29 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Docfindboard</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('admin/vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin/vendors/iconic-fonts/flat-icons/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="{{ asset('admin/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="{{ asset('admin/assets/css/slick.css') }}" rel="stylesheet">
  <!-- medboard styles -->
  <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

  <!-- Page Specific CSS (Morris Charts.css) -->
  <link href="{{ asset('admin/assets/css/morris.css') }}" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

  <link href="{{ asset('admin/assets/css/datatables.min.css') }}" rel="stylesheet">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-bs-target="#ms-recent-activity" data-bs-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  @include('templates.admin.aside')
  <!-- Main Content -->
  <main class="body-content">
    <!-- Navigation Bar -->
    @include('templates.admin.header')
    <!-- Body Content Wrapper -->
    @yield('content')
  </main>
  <!-- MODALS -->
  <!-- Reminder Modal -->
  <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white"> New Reminder</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <form>
          <div class="modal-body">
            <div class="ms-form-group">
              <label>Remind me about</label>
              <textarea class="form-control" name="reminder"></textarea>
            </div>
            <div class="ms-form-group">
              <span class="ms-option-name fs-14">Repeat Daily</span>
              <label class="ms-switch float-end">
                <input type="checkbox">
                <span class="ms-switch-slider round"></span>
              </label>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="ms-form-group">
                  <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="ms-form-group">
                  <select class="form-control" name="reminder-time">
                    <option value="">12:00 pm</option>
                    <option value="">1:00 pm</option>
                    <option value="">2:00 pm</option>
                    <option value="">3:00 pm</option>
                    <option value="">4:00 pm</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Add Reminder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Notes Modal -->
  <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <form>
          <div class="modal-body">
            <div class="ms-form-group">
              <label>Note Title</label>
              <input type="text" class="form-control" name="note-title" value="">
            </div>
            <div class="ms-form-group">
              <label>Note Description</label>
              <textarea class="form-control" name="note-description"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Add Note</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/perfect-scrollbar.js') }}"> </script>
  <script src="{{ asset('admin/assets/js/jquery-ui.min.js') }}"> </script>

  <!-- Global Required Scripts End -->
  <script src="{{ asset('admin/assets/js/d3.v3.min.js') }}"> </script>
  <script src="{{ asset('admin/assets/js/topojson.v1.min.js') }}"> </script>
  <script src="{{ asset('admin/assets/js/datamaps.all.min.js') }}"> </script>


  <!-- Page Specific Scripts Start -->
  <script src="{{ asset('admin/assets/js/slick.min.js') }}"> </script>
  <script src="{{ asset('admin/assets/js/moment.js') }}"> </script>
  <script src="{{ asset('admin/assets/js/jquery.webticker.min.js') }}"> </script>
  <script src="{{ asset('admin/assets/js/Chart.bundle.min.js') }}"> </script>
  <script src="{{ asset('admin/assets/js/index-chart.js') }}"> </script>

  <!-- Page Specific Scripts Finish -->
  <script src="{{ asset('admin/assets/js/calendar.js') }}"></script>
  <!-- medboard core JavaScript -->
  <script src="{{ asset('admin/assets/js/framework.js') }}"></script>
  <!-- Settings -->
  <script src="{{ asset('admin/assets/js/settings.js') }}"></script>

  <!-- Page Specific Scripts Start -->
  {{-- <script src="{{ asset('admin/assets/js/datatables.min.js') }}"> </script>
  <script src="{{ asset('admin/assets/js/data-tables.js') }}"> </script> --}}
  <!-- Page Specific Scripts End -->
</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/docfind/Dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 02:41:01 GMT -->
</html>
