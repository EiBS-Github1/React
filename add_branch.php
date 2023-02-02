<?php include("common.php") ?>
  <!-- <body onload="startTime()"> -->
    <body>
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
    <!-- <div class="tap-top"><i data-feather="chevrons-up"></i></div> -->
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
                      <h3>Add Branch</h3>
                    </div>
                    <div class="col-6">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard">
                          <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="branch">Branch Lists</a></li>
                        <li class="breadcrumb-item">Add Branch</li>
                      </ol>
                    </div>
                  </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
          <form class="form wizard">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card"> 
                    <div  id="status_success">
                     
                    </div>                  
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-lg-4 position-relative">
                          <label class="form-label">Company Name</label>
                          <input class="form-control" type="text" data-bs-original-title="" placeholder="Company Name"  id="company_name" value="" readonly>
                          <div class="valid-tooltip" id="error_company_name"></div>
                        </div>
                        <div class="col-lg-4 position-relative">
                          <label class="form-label">Branch Name</label>
                          <input class="form-control" type="text" data-bs-original-title="" placeholder="Branch Name" id="branch_name">
                          <div class="text-danger" id="error_branch_name"></div>
                          
                        </div>
                         <div class="col-lg-4 position-relative">
                          <label class="form-label">Opening Date</label>
                          <input class="form-control" type="date" data-bs-original-title="" placeholder="Opening Date"  id="opening_date">
                          <div class="text-danger" id="error_opening_date"></div>
                        </div>                                              
                      </div>
                      <div class="row mb-3">    
                        <div class="col-lg-4 position-relative">
                          <label class="form-label">Branch Authority</label>
                          <input class="form-control" type="text" data-bs-original-title="" placeholder="Branch Authority"   id="branch_authority">
                          <div class="text-danger" id="error_branch_authority"></div>
                        </div>                     
                        <div class="col-lg-4 position-relative">
                          <label class="form-label">Branch Contact No</label>
                          <input class="form-control" type="text" data-bs-original-title="" placeholder="Branch Contact No"   id="branch_phone">
                          <div class="text-danger" id="error_branch_phone"></div>
                        </div>
                        <div class="col-lg-4 position-relative">
                          <label class="form-label">Branch Location</label>
                          <input class="form-control" type="text" data-bs-original-title="" placeholder="Branch Location"  id="branch_location">
                          <div class="text-danger" id="error_branch_location"></div>
                        </div>
                      </div>
                      <div class="row mb-3"> 
                        <div class="col-lg-4 position-relative">
                          <label class="form-label">Branch Email ID</label>
                          <input class="form-control" type="text" data-bs-original-title="" placeholder="Branch Email ID"  id="branch_email">
                          <div class="text-danger" id="error_branch_email"></div>
                        </div>
                        <div class="col-lg-4 position-relative">                          
                          <input id="franchise" type="checkbox" value="0"  onclick="checkbox()">&nbsp;&nbsp;&nbsp;
                          <label class="form-label">Is Franchise</label>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="card-footer text-end">
                          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" title=""><a href='./branch'>Cancel</a></button>
                          <button class="btn btn-primary" type="button" data-bs-original-title="" title="" id="add_brnch" onclick="add_branch()">Submit</button>
                          <!-- <button class="btn btn-primary"  data-bs-original-title="" title="" onclick="add_branch()">Submit</button> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <?php include("footer.php") ?>
        <!-- footer start-->
      </div>
    </div>
    <?php include("script.php") ?>
    <?php include("session_timeout.php") ?>
    <?php include("api/api_branch.php")?>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>