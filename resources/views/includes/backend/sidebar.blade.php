<aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                         <span class="brand-name">RVSC Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                
               
                  <li  class=" {{ Request::is('dashboard*') ? 'active' : '' }} expand" >
                    <a class="sidenav-item-link" href="/dashboard" >
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span> 
                    </a>
                
                  </li>
                   {{-- <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                            aria-expanded="false" aria-controls="authentication">
                            <span class="nav-text">category</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="category">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="sign-in.html">Manage</a>
                              </li>
                              
                              <li >
                                <a href="sign-up.html">Sign Up</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li> --}}
            <li class=" {{ Request::is('category*') ? 'active' : '' }}" >
                    <a class="" href="/category" 
                     >
                      <i class="mdi mdi-apps"></i>
                      <span class="nav-text">Room Categories</span> 
                    </a>
                
                  </li>
            <li class=" {{ Request::is('services*') ? 'active' : '' }}" >
                    <a class="" href="/services" 
                     >
                      <i class="mdi mdi-select-all"></i>
                      <span class="nav-text">Services Offered</span> 
                    </a>
                
                  </li>
            <li class=" {{ Request::is('media*') ? 'active' : '' }}" >
                    <a class="" href="/media" 
                     >
                      <i class="mdi mdi-image-multiple"></i>
                      <span class="nav-text">Media</span> 
                    </a>
                
                  </li>
            
            <li class=" {{ Request::is('events*') ? 'active' : '' }} " >
                    <a class="" href="/admin/events" 
                     >
                      <i class="mdi mdi-inbox-multiple"></i>
                      <span class="nav-text">Events</span> 
                    </a>
                
                  </li>
             <li  class="has-sub  {{ Request::is('room*') ? 'active' : '' }} expand" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#room"
                            aria-expanded="false" aria-controls="authentication">
                            <i class="mdi mdi-home"></i>
                            <span class="nav-text">Rooms</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="room">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="/room/add">Add New</a>
                              </li>
                              
                              <li >
                                <a href="/room">Manage Rooms</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>

     <li class=" {{ Request::is('management*') ? 'active' : '' }}" >
                    <a class="" href="/admin/management" 
                     >
                      <i class="mdi mdi-account-group"></i>
                      <span class="nav-text">Management</span> 
                    </a>
                
                  </li>
            <li class=" {{ Request::is('users*') ? 'active' : '' }}" >
                    <a class="" href="/users" 
                     >
                      <i class="mdi mdi-account-multiple"></i>
                      <span class="nav-text">System Users</span> 
                    </a>
                
                  </li>

 
                
              </ul>

            </div>

       
        </aside>