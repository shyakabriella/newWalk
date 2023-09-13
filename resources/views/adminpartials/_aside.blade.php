
 
 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>TB Guideline</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                    <img class="rounded-circle me-lg-2" src="/avatars/{{ Auth::user()->avatar }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        <span>{{ Auth::user()->name }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/home" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Health-Centers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('health.index') }}" class="dropdown-item"><i class="fa fa-users me-2"></i>HealthCare Category</a>
                            <a href="{{ route('patients.index') }}" class="dropdown-item"><i class="fa fa-user me-2 "></i>Add-Patient</a>
                            <a href="{{ route('samples.index') }}" class="dropdown-item">Sample_recording</a>
                            <a href="{{ route('status.index') }}" class="dropdown-item">Status Setting</a>
                        </div>
                    </div>
                    <a href="{{ route('users.index') }}" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Manage Users</a>
                    <a href="{{ route('roles.index') }}" class="nav-item nav-link"><i class="fa fa-pen me-2"></i>Manage Role</a>
                    <a href="{{ route('documents.index') }}" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Documents</a>
                    <a href="{{ route('permissions.index') }}" class="nav-item nav-link"><i class="fa fa-book me-2"></i>SetPermissions</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>PagesSections</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('home_section_ones.index') }}" class="dropdown-item">Home Slide</a>
                            <a href="{{ route('home_section_twos.index') }}" class="dropdown-item">Home section Two</a>
                            <a href="{{ route('home_section_threes.index') }}" class="dropdown-item">Home section Three</a>
                            <a href="{{ route('home_section_fours.index') }}" class="dropdown-item">Home section Four</a>
                            <a href="{{ route('home_section_fives.index') }}" class="dropdown-item">Home section Five</a>
                            <a href="{{ route('home_section_sixes.index') }}" class="dropdown-item">Home section Six</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->