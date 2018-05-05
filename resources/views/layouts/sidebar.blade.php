<!-- sidebar-->
<aside class="aside">
   <!-- START Sidebar (left)-->
   <div class="aside-inner">
      <nav data-sidebar-anyclick-close="" class="sidebar">
         <!-- START sidebar nav-->
         <ul class="nav">
            <!-- Iterates over all sidebar items-->
            <li class="nav-heading">
               <span>Menu Navigation</span>
            </li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
               <a href="/home" title="Dashboard">
                  <em class="icon-speedometer"></em>
                  <span>Dashboard</span>
               </a>
            </li>
            <li class="{{ Request::is('workbench') ? 'active' : '' }}">
               <a href="/workbench" title="Workbench">
                  <em class="icon-calendar"></em>
                  <span>Workbench</span>
               </a>
            </li>
            <li>
               <a href="#rad" title="RAD" data-toggle="collapse">
                  <em class="icon-people"></em>
                  <span>RAD</span>
               </a>
               <ul id="rad" title="RAD" class="nav sidebar-subnav collapse"> 
                  <li class="{{ Request::is('patients/create') ? 'active' : '' }}">
                     <a href="/patients/create">
                        <span>Patient Registration</span>
                     </a>    
                  </li>
                  <li class="{{ Request::is('patients/list') ? 'active' : '' }}">
                     <a href="/patients/list">
                        <span>Patient List</span>
                     </a>
                  </li>
               </ul>
            </li>
            {{-- <li>
               <a href="#tests" title="Test Results" data-toggle="collapse">
                  <em class="fa fa-stethoscope"></em>
                  <span>Test Results</span>
               </a>
               <ul id="tests" title="Test Results" class="nav sidebar-subnav collapse">
                  <li class="sidebar-subnav-header">Test Results</li>
                  <li>
                     <a href="#">
                        <span>Laboratory</span>
                     </a>
                     <a href="#">
                        <span>Cardiovascular</span>
                     </a>
                     <a href="#radiology" data-toggle="collapse">
                        <span>Radiology &nbsp;<em class="fa fa-caret-down"></em></span>
                     </a>
                     <ul id="radiology" class="nav sidebar-subnav collapse">
                        <li>
                           <a href="#">
                              <span>X-Ray</span>
                           </a>
                           <a href="#">
                              <span>CT-Scan</span>
                           </a>
                           <a href="#">
                              <span>Ultrasound</span>
                           </a>
                           <a href="#">
                              <span>MRI</span>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li>
               <a href="#" title="SOAP">
                  <em class="icon-notebook"></em>
                  <span>SOAP</span>
               </a>
            </li> --}}
            <li class="{{ Request::is('users') ? 'active' : '' }}">
               <a href="/users" title="Users">
                  <em class="icon-user"></em>
                  <span>Users</span>
               </a>
            </li>
            <li class="{{ Request::is('departments') ? 'active' : '' }}">
               <a href="/departments" title="Departments">
                  <em class="fa fa-building-o"></em>
                  <span>Departments</span>
               </a>
            </li>
         </ul>
         <!-- END sidebar nav-->
      </nav>
   </div>
   <!-- END Sidebar (left)-->
</aside>