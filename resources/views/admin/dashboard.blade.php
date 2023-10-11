@extends('templates.admin.masterAdmin')

@section('title', 'Người dùng')

@section('content')

    <div class="ms-content-wrapper">
        <div class="row">
            <!-- Notifications Widgets -->

            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6>Doctors</h6>
                                <p class="ms-card-change"> 4567</p>
                            </div>
                        </div>
                        <i class="fas fa-stethoscope ms-icon-mr"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6>Nurses</h6>
                                <p class="ms-card-change"> 5600</p>
                            </div>
                        </div>
                        <i class="fas fa-user-plus ms-icon-mr"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Patients</h6>
                                <p class="ms-card-change"> 8622</p>
                            </div>
                        </div>
                        <i class="fa fa-wheelchair ms-icon-mr"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Pharmacists</h6>
                                <p class="ms-card-change"> 3400</p>
                            </div>
                        </div>
                        <i class="fas fa-briefcase-medical ms-icon-mr"></i>
                    </div>
                </a>
            </div>


            <div class="col-xl-4 col-lg-6 col-md-12 flex">
                <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6 class="bold">Appointments</h6>
                            <h3><strong>3,973</strong></h3>
                        </div>
                    </div>
                    <canvas id="line-chart-2"></canvas>
                </div>

                <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6>New Patients</h6>
                            <h3><strong>593</strong></h3>
                        </div>
                    </div>
                    <canvas id="line-chart-3"></canvas>
                </div>

                <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6 class="bold">Hospital Earning</h6>
                            <h3><strong>3,973</strong></h3>
                        </div>
                    </div>
                    <canvas id="line-chart-4"></canvas>
                </div>

            </div>

            <div class="col-xl-8 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Upcoming Appointments</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover thead-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Patient</th>
                                        <th scope="col">Doctor</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Timing</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ms-table-f-w"> <img src="assets/img/dashboard/patient-1.jpg"
                                                alt="people"> Bernardo Galaviz </td>
                                        <td>Dr. Cristina Groves</td>
                                        <td>01 Dec 2022</td>
                                        <td>5:00 PM</td>
                                        <td>+01-789-654-123</td>
                                        <td><label class="ms-switch">
                                                <input type="checkbox" checked="">
                                                <span class="ms-switch-slider ms-switch-success round"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"> <img src="assets/img/dashboard/patient-5.jpg"
                                                alt="people"> Jenni </td>
                                        <td>Dr. Richard Miles</td>
                                        <td>01 Dec 2022</td>
                                        <td>8:00 AM</td>
                                        <td>+10-654-654-991</td>
                                        <td><label class="ms-switch">
                                                <input type="checkbox" checked="">
                                                <span class="ms-switch-slider ms-switch-success round"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"> <img src="assets/img/dashboard/patient-6.jpg"
                                                alt="people"> John Doe </td>
                                        <td>Dr. Andrew </td>
                                        <td>01 Dec 2022</td>
                                        <td>10:00 AM</td>
                                        <td>+10-709-254-445</td>
                                        <td><label class="ms-switch">
                                                <input type="checkbox">
                                                <span class="ms-switch-slider ms-switch-success round"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"> <img src="assets/img/dashboard/patient-8.jpg"
                                                alt="people"> Alesdro Guitto </td>
                                        <td>Dr. Robert </td>
                                        <td>01 Dec 2022</td>
                                        <td>2:00 PM</td>
                                        <td>+10-102-225-333</td>
                                        <td><label class="ms-switch">
                                                <input type="checkbox" checked="">
                                                <span class="ms-switch-slider ms-switch-success round"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"> <img src="assets/img/dashboard/patient-1.jpg"
                                                alt="people"> Richard </td>
                                        <td>Dr. Adwerd</td>
                                        <td>07 Dec 2022</td>
                                        <td>5:00 PM</td>
                                        <td>+01-222-111-356</td>
                                        <td><label class="ms-switch">
                                                <input type="checkbox">
                                                <span class="ms-switch-slider ms-switch-success round"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-md-12">
                <div class="ms-panel ms-panel-fh ms-widget">
                    <div class="ms-panel-header ms-panel-custome">
                        <h6>Doctors List</h6>
                    </div>
                    <div class="ms-panel-body p-0">
                        <ul class="ms-followers ms-list ms-scrollable">
                            <li class="ms-list-item media">
                                <img src="assets/img/dashboard/doctor-1.jpg" class="ms-img-small ms-img-round"
                                    alt="people">
                                <div class="media-body mt-1">
                                    <h4>Micheal</h4>
                                    <span class="fs-12">MBBS, MD</span>
                                </div>
                                <button type="button" class="ms-btn-icon btn-success" name="button"><i
                                        class="material-icons">check</i> </button>
                            </li>
                            <li class="ms-list-item media">
                                <img src="assets/img/dashboard/doctor-2.jpg" class="ms-img-small ms-img-round"
                                    alt="people">
                                <div class="media-body mt-1">
                                    <h4>Jennifer</h4>
                                    <span class="fs-12">MD</span>
                                </div>
                                <button type="button" class="ms-btn-icon btn-info" name="button"><i
                                        class="material-icons">person_add</i> </button>
                            </li>
                            <li class="ms-list-item media">
                                <img src="assets/img/dashboard/doctor-3.jpg" class="ms-img-small ms-img-round"
                                    alt="people">
                                <div class="media-body mt-1">
                                    <h4>Adwerd </h4>
                                    <span class="fs-12">BMBS</span>
                                </div>
                                <button type="button" class="ms-btn-icon btn-info" name="button"><i
                                        class="material-icons">person_add</i> </button>
                            </li>
                            <li class="ms-list-item media">
                                <img src="assets/img/dashboard/doctor-4.jpg" class="ms-img-small ms-img-round"
                                    alt="people">
                                <div class="media-body mt-1">
                                    <h4>John Doe</h4>
                                    <span class="fs-12">MS, MD</span>
                                </div>
                                <button type="button" class="ms-btn-icon btn-success" name="button"><i
                                        class="material-icons">check</i> </button>
                            </li>
                            <li class="ms-list-item media">
                                <img src="assets/img/dashboard/doctor-5.jpg" class="ms-img-small ms-img-round"
                                    alt="people">
                                <div class="media-body mt-1">
                                    <h4>Jordan</h4>
                                    <span class="fs-12">MBBS</span>
                                </div>
                                <button type="button" class="ms-btn-icon btn-info" name="button"><i
                                        class="material-icons">person_add</i> </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>New Patients</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover  thead-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Patient</th>
                                        <th scope="col">E-mail Id</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Disease</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ms-table-f-w"> <img src="assets/img/dashboard/patient-3.jpg"
                                                alt="people"> Richard </td>
                                        <td>Richard288@gmail.com</td>
                                        <td>+1-202-555-0875</td>
                                        <td>Fever</td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"> <img src="assets/img/dashboard/patient-2.jpg"
                                                alt="people"> William </td>
                                        <td>William434@gmail.com</td>
                                        <td>+1-202-534-0112</td>
                                        <td>Eye</td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"> <img src="assets/img/dashboard/patient-4.jpg"
                                                alt="people"> John Doe </td>
                                        <td>johndeo652@gmail.com</td>
                                        <td>+1-202-182-0132</td>
                                        <td>Typhoid</td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"> <img src="assets/img/dashboard/patient-5.jpg"
                                                alt="people"> Martin </td>
                                        <td>Martin876@gmail.com</td>
                                        <td>+1-202-998-2341</td>
                                        <td>Cancer</td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"> <img src="assets/img/dashboard/patient-1.jpg"
                                                alt="people"> Robert </td>
                                        <td>Robert082@gmail.com</td>
                                        <td>+1-202-455-1431</td>
                                        <td>Diabetes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-md-12">
                <div class="ms-panel ms-panel-fh ms-widget">
                    <div class="ms-panel-header ms-panel-custome">
                        <h6>Latest Reports</h6>
                    </div>
                    <div class="ms-panel-body p-0">
                        <ul class="ms-followers ms-list ms-scrollable">
                            <li class="ms-list-item media">

                                <div class="media-body mt-1">
                                    <h4>Ultrasound-2.pdf</h4>
                                    <a href="#"><span class="fs-12">View Report</span></a>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" name="button">Download </button>
                            </li>
                            <li class="ms-list-item media">

                                <div class="media-body mt-1">
                                    <h4>Hypothermia.pdf</h4>
                                    <a href="#"><span class="fs-12">View Report</span></a>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm" name="button">On Hold </button>
                            </li>
                            <li class="ms-list-item media">

                                <div class="media-body mt-1">
                                    <h4>Ultrasound.pdf</h4>
                                    <a href="#"><span class="fs-12">View Report</span></a>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" name="button">Download </button>
                            </li>
                            <li class="ms-list-item media">

                                <div class="media-body mt-1">
                                    <h4>Heart-ECG.pdf</h4>
                                    <a href="#"><span class="fs-12">View Report</span></a>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" name="button">Download</button>
                            </li>
                            <li class="ms-list-item media">

                                <div class="media-body mt-1">
                                    <h4>X-ray.pdf</h4>
                                    <a href="#"><span class="fs-12">View Report</span></a>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm" name="button">On Hold </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
