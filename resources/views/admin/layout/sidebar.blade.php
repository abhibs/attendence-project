        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Attica Gold</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('admin-dashboard') }}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                    {{-- <ul>
                        <li> <a href="index.html"><i class='bx bx-radio-circle'></i>Default</a>
                        </li>
                        <li> <a href="index2.html"><i class='bx bx-radio-circle'></i>Alternate</a>
                        </li>
                        <li> <a href="index3.html"><i class='bx bx-radio-circle'></i>Graphical</a>
                        </li>
                    </ul> --}}
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-user"></i>
                        </div>
                        <div class="menu-title">Users</div>
                    </a>
                    <ul>
                        <li> <a href="app-emailbox.html"><i class='bx bx-radio-circle'></i>All Users</a>
                        </li>
                        <li> <a href="app-chat-box.html"><i class='bx bx-radio-circle'></i>Add Users</a>
                        </li>

                    </ul>
                </li>

            </ul>
            <!--end navigation-->
        </div>
