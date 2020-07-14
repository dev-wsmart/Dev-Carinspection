<style>
  .chiller-theme .sidebar-wrapper {
      background: #00385B !important;
  }
  .user{
    display: flex;
    width: 220px;
    height: 220px;
    background-color: #ffffff;
    border-radius: 50%;
  }
  .user img{
    align-self: center;
    margin: 0 auto;
    width: 80%;
  }
  .sub-menu{
    padding-left: 50px !important;
  }
  </style>



  <div class="page-wrapper chiller-theme toggled">


     <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-header">

          <div class="user">
            <img class="img-responsive img-rounded" src="{{ asset('images/logo-1.png') }}">
          </div>
        </div>

        <!-- sidebar-search  -->
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu" style="color:#fff; background:#294993 !important; padding-top:10px; padding-buttom:20px;">
             <center><h3>SCHICHER</h3></center>
             <center>
             <span class="user-name" style="color:#fff;">
            {{ Auth::user()->username }}
            </span>
            </center>
            </li>

            <li>
              <a class="dropdown-item {{ (request()->is('report') || request()->is('/')) ? 'active': '' }}" href="{{ route('report.index') }}">
                <i class="fa fa-file"></i>
                <span>Inspection Report</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item {{ (request()->is('service')) ? 'active': '' }}" href="{{ route('service.index') }}">
                <!-- <i class="fas fa-tools"></i> -->
                <i class="fas fa-wrench"></i>
                <span>Service Report</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item {{ (request()->is('edit')) ? 'active': '' }}" href="{{ route('edit.index') }}">
                <i class="fa fa-edit"></i>
                <span>Edit Inspection Report</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item {{ (request()->is('appointment')) ? 'active': '' }}" href="{{ route('appointment.index') }}">
                <i class="fa fa-calendar-check"></i>
                <span>Inspection Appointment</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" id="approve" data-toggle="collapse" data-target="#subApprove" aria-expanded="true" aria-controls="subApprove">
                <i class="fa fa-plus"></i>
                <span>Approve Appointment</span>
              </a>
            </li>
              <div id="subApprove" class="collapse" aria-labelledby="approve" data-parent="#accordion">
                <li>
                  <a class="dropdown-item sub-menu {{ (request()->is('')) ? 'active': '' }}" href="">
                    <i class="fa fa-spinner"></i>
                    <span>Pending</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item sub-menu {{ (request()->is('approved-appoint')) ? 'active': '' }}" href="{{ route('approved-appoint.index') }}">
                    <i class="fa fa-check"></i>
                    <span>Approved</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item sub-menu {{ (request()->is('')) ? 'active': '' }}" href="">
                    <i class="fa fa-times"></i>
                    <span>Not Approved</span>
                  </a>
                </li>
              </div>
            
  <br>
            <li class="header-menu">
            <center>
            <button type="button" class="btn btn-warning">ฟอร์มตรวจสถาพรถ</button>
            </center>
            </li>


  <br>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                   <i class="fas fa-sign-out-alt">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
                </i>
                <span>Logout</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>

    </nav>
  </div>
