<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="{{ route('dashbord') }}" class="brand-link">
            <!--begin::Brand Image-->
            <img src="/kpgu-logo.png" alt="KPGU-logo" class="brand-image opacity-75 shadow">
            <!--end::Brand Image--> <!--begin::Brand Text-->
            <!--end::Brand Text--> </a> <!--end::Brand Link--> </div>
    <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashbord') }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        Dashbord
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('student_list') }}" class="nav-link">
                        <i class="nav-icon bi bi-person-circle"></i>
                        Students
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('books_list') }}" class="nav-link">
                        <i class="nav-icon bi bi-book"></i>
                        Book
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('borrow_books_list') }}" class="nav-link">
                        <i class="nav-icon bi bi-journal-arrow-up"></i>
                        Book Issued
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('setting') }}" class="nav-link">
                        <i class="nav-icon bi bi-gear-fill"></i>
                        Setting
                    </a>
                </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->
