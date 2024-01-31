@extends('layout.main')
@section('content')
            <!-- TopBar -->
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-search fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                      aria-labelledby="searchDropdown">
                      <form class="navbar-search">
                        <div class="input-group">
                          <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                            aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                              <i class="fas fa-search fa-sm"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </li>
                  <div class="topbar-divider d-none d-sm-block"></div>
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                      <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{route ('logout')}}" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                      </a>
                    </div>
                  </li>
                </ul>
              </nav>
              <!-- Topbar -->
      
              <!-- Container Fluid-->
              <div class="container-fluid" id="container-wrapper">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                  </ol>
                </div>
      
                <div class="row mb-3">
                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                              <span>Since last month</span>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-primary"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Earnings (Annual) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Sales</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">650</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                              <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                              <span>Since last years</span>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-success"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- New User Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">New User</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">366</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                              <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                              <span>Since last month</span>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Pending Requests Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                              <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                              <span>Since yesterday</span>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-warning"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Invoice Example -->
                  <div class="col-xl-8 col-lg-7 mb-4">
                    <div class="card">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Invoice</h6>
                        <a class="m-0 float-right btn btn-danger btn-sm" href="#">View More <i
                            class="fas fa-chevron-right"></i></a>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                            <tr>
                              <th>Order ID</th>
                              <th>Customer</th>
                              <th>Item</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><a href="#">RA0449</a></td>
                              <td>Udin Wayang</td>
                              <td>Nasi Padang</td>
                              <td><span class="badge badge-success">Delivered</span></td>
                              <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                              <td><a href="#">RA5324</a></td>
                              <td>Jaenab Bajigur</td>
                              <td>Gundam 90' Edition</td>
                              <td><span class="badge badge-warning">Shipping</span></td>
                              <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                              <td><a href="#">RA8568</a></td>
                              <td>Rivat Mahesa</td>
                              <td>Oblong T-Shirt</td>
                              <td><span class="badge badge-danger">Pending</span></td>
                              <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                              <td><a href="#">RA1453</a></td>
                              <td>Indri Junanda</td>
                              <td>Hat Rounded</td>
                              <td><span class="badge badge-info">Processing</span></td>
                              <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                              <td><a href="#">RA1998</a></td>
                              <td>Udin Cilok</td>
                              <td>Baby Powder</td>
                              <td><span class="badge badge-success">Delivered</span></td>
                              <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="card-footer"></div>
                    </div>
                  </div>
                <!-- Modal Logout -->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Are you sure you want to logout?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <a href="{{route('logout')}}" class="btn btn-primary">Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
      
              </div>
              <!---Container Fluid-->
@endsection