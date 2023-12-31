<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('admin')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ asset("ui/backend") }}/index.html">
                <i class="bi bi-clipboard-data"></i>
                <span>POS</span>
            </a>
        </li><!-- End POS Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_employees" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people-fill"></i><span>Employees</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_employees" class="nav-content collapse " data-bs-parent="#sidebar-nav_employees">
                <li>
                    <a href="{{route('employee_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Employee</span>
                    </a>
                    <a href="{{route('employee_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Employee</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_customer" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-bounding-box"></i><span>Customer</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_customer" class="nav-content collapse " data-bs-parent="#sidebar-nav_customer">
                <li>
                    <a href="{{route('customer_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Customer</span>
                    </a>
                    <a href="{{route('customer_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Customer</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_suppliers" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-wheelchair"></i><span>Suppliers</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_suppliers" class="nav-content collapse " data-bs-parent="#sidebar-nav_suppliers">
                <li>
                    <a href="{{route('supplier_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Supplier</span>
                    </a>
                    <a href="{{route('supplier_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Supplier</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_salary" data-bs-toggle="collapse" href="#">
                <i class="bi bi-currency-dollar"></i><span>Salary(EMP)</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_salary" class="nav-content collapse " data-bs-parent="#sidebar-nav_salary">
                <li>
                    <a href="{{route('salary_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Salary</span>
                    </a>
                    <a href="{{route('salary_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Salary</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_category" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bookmark-check"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_category" class="nav-content collapse " data-bs-parent="#sidebar-nav_category">
                <li>
                    <a href="{{route('category_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Category</span>
                    </a>
                    <a href="{{route('category_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Category</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_products" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_products" class="nav-content collapse " data-bs-parent="#sidebar-nav_products">
                <li>
                    <a href="{{route('product_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Product</span>
                    </a>
                    <a href="{{route('product_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Product</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_expense" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-text"></i><span>Expense</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_expense" class="nav-content collapse " data-bs-parent="#sidebar-nav_expense">
                <li>
                    <a href="{{route('expense_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Expense</span>
                    </a>
                    <a href="{{route('expense_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Expense</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_orders" data-bs-toggle="collapse" href="#">
                <i class="bi bi-cart-dash-fill"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_orders" class="nav-content collapse " data-bs-parent="#sidebar-nav_orders">
                <li>
                    <a href="{{route('order_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Order</span>
                    </a>
                    <a href="{{route('order_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Order</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_salesReport" data-bs-toggle="collapse" href="#">
                <i class="bi bi-chat-left-text"></i><span>Sales Report</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_salesReport" class="nav-content collapse " data-bs-parent="#sidebar-nav_salesReport">
                <li>
                    <a href="{{route('sales_report_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Sales Report</span>
                    </a>
                    <a href="{{route('sales_report_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Sales Report</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_attendence" data-bs-toggle="collapse" href="#">
                <i class="bi bi-check-circle"></i><span>Attendence</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_attendence" class="nav-content collapse " data-bs-parent="#sidebar-nav_attendence">
                <li>
                    <a href="{{route('attendence_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Attendence</span>
                    </a>
                    <a href="{{route('attendence_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Attendence</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_setting" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_setting" class="nav-content collapse " data-bs-parent="#sidebar-nav_setting">
                <li>
                    <a href="{{route('settings_details_create')}}">
                        <i class="bi bi-circle"></i><span>Add Settings</span>
                    </a>
                    <a href="{{route('settings_details_index')}}">
                        <i class="bi bi-circle"></i><span>All Settings</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

    </ul>

</aside>
