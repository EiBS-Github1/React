<?php include("common.php") ?>
<body onload="startTime()">
  <!-- loader starts-->
  <div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
      <defs></defs>
      <filter id="goo">
        <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
      </filter>
    </svg>
  </div>
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include("header.php") ?>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <?php include("sidebar.php") ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">        
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>Appointment</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard">                                       
                    <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Appointment</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div  id="status_success">
                     
                  </div>    
                  <div class="card-header text-end">
                    <a href="add_app" type="button" class="btn btn-primary" type="submit" data-bs-original-title="">Add Appointment</a>
                  </div>                 
                  <div class="card-body">
                    <div class="table-responsive product-table" id="appointment_list">
                      <!-- <table class="display" id="advance-1">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Problem</th>
                            <th>Treatment Pitched</th>
                            <th>Attend by</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Pradeep (<span class="text-primary">Lead</span>)</td>
                            <td>Hair loss</td>
                            <td>DHI</td>
                            <td>Ramesh</td>                            
                            <td><span style="color:#23b474;font-weight: 750;">Positive</span></td>
                            <td>
                              <a href="view_app.php"><i class="fa fa-eye eyc"></i></a>
                              <a href="edit_app.php"><i class="fa fa-edit eyc"></i></a>
                              <a href="#" data-bs-toggle="modal" data-bs-target="#appointment_delete" ><i class="fa fa-trash eyc"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Ravi (<span class="text-primary">Customer</span>)</td>
                            <td>Hair patch</td>
                            <td>FUE</td>
                            <td>Gopi</td>                            
                            <td><span style="color:#23b474;font-weight: 750;">Positive</span></td>
                            <td>
                              <a href="view_app.php"><i class="fa fa-eye eyc"></i></a>
                              <a href="edit_app.php"><i class="fa fa-edit eyc"></i></a>
                              <a href="#" data-bs-toggle="modal" data-bs-target="#appointment_delete" ><i class="fa fa-trash eyc"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Gopi (<span class="text-primary">Lead</span>)</td>
                            <td>Hair patch</td>
                            <td>FUT</td>
                            <td>Ravi</td>                            
                            <td><span style="color:#23b474;font-weight: 750;">Positive</span></td>
                            <td>
                              <a href="view_app.php"><i class="fa fa-eye eyc"></i></a>
                              <a href="edit_app.php"><i class="fa fa-edit eyc"></i></a>
                              <a href="#" data-bs-toggle="modal" data-bs-target="#appointment_delete" ><i class="fa fa-trash eyc"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Sruthi (<span class="text-primary">Customer</span>)</td>
                            <td>Hair frizz</td>
                            <td>DHI</td>
                            <td>Gopi</td>                            
                            <td><span style="color:#ff0018;font-weight: 750;">Negative</span></td>
                            <td>
                              <a href="view_app.php"><i class="fa fa-eye eyc"></i></a>
                              <a href="edit_app.php"><i class="fa fa-edit eyc"></i></a>
                              <a href="#" data-bs-toggle="modal" data-bs-target="#appointment_delete" ><i class="fa fa-trash eyc"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Jacob (<span class="text-primary">Lead</span>)</td>
                            <td>Hair patch</td>
                            <td>FUE</td>
                            <td>Kavya</td>                            
                            <td><span style="color:#23b474;font-weight: 750;">Positive</span></td>
                            <td>
                              <a href="view_app.php"><i class="fa fa-eye eyc"></i></a>
                              <a href="edit_app.php"><i class="fa fa-edit eyc"></i></a>
                              <a href="#" data-bs-toggle="modal" data-bs-target="#appointment_delete" ><i class="fa fa-trash eyc"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Doss (<span class="text-primary">Customer</span>)</td>
                            <td>Hair loss</td>
                            <td>DHI</td>
                            <td>Maha</td>                            
                            <td><span style="color:#23b474;font-weight: 750;">Positive</span></td>
                            <td>
                              <a href="view_app.php"><i class="fa fa-eye eyc"></i></a>
                              <a href="edit_app.php"><i class="fa fa-edit eyc"></i></a>
                              <a href="#" data-bs-toggle="modal" data-bs-target="#appointment_delete" ><i class="fa fa-trash eyc"></i></a>
                            </td>
                          </tr>                       
                        </tbody>
                      </table> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
      <div class="modal fade" id="appointment_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <br>
            <h5 style="text-align: center;">Delete ?</h5><br>
            <div class="mb-3">
              <p class="col-form-label" style="text-align: center !important;">Are you sure you want to delete this Data.</p>
            </div>
          </div>
          <div class="card-footer text-center mb-3">
            <button class="btn btn-light" type="button" data-bs-dismiss="modal">No, Cancel</button>
            <button class="btn btn-primary" type="button" data-bs-dismiss="modal" id="delete">Yes, delete</button>
          </div>
        </div>
      </div>
    </div>
        <!-- footer start-->
        <?php include("footer.php") ?>
        <!-- footer start-->
      </div>
    </div>
    <?php include("script.php") ?>
    <?php include("session_timeout.php") ?>
    <?php include("api/api_appointment.php") ?>
    <!-- login js-->
    <!-- Plugin used-->
     <script> 
    // (function($) {
    // "use strict";
    // $("#advance-1").jsGrid({
    //     width: "100%",
    //     filtering: true,
    //     editing: true,
    //     inserting: true,
    //     sorting: true,
    //     paging: true,
    //     autoload: true,
    //     pageSize: 15,
    //     pageButtonCount: 5,
    //     deleteConfirm: "Do you really want to delete the client?",
    //     controller: db,
    //     fields: [
    //     { name: "Name", type: "text", width: 150 },
    //     { name: "Age", type: "number", width: 50 },
    //     { name: "Address", type: "text", width: 200 },
    //     { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
    //     { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
    //     { type: "control" }
    //     ]
    // });
    // 
     $("#advance-1").DataTable({
          // "ordering": false,
          "responsive": true,
          "aaSorting":[],
           "language": {
            "lengthMenu": "Show _MENU_",
           },
           // dom: 'Bfrtip',
           "dom":
            "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
          });
    </script>
  </body>
  </html>