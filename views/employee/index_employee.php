<? View::display('employee/header', []); ?>
<style>
    body{
        background: #eee
    }
</style>
<div class ="container">
 
    
    <div class="row">
        <div class="col s6 ">
            <a href="/parcel/receive">
                <div class="card">
                    <div class="card-image">
                        <img src="/assets/images/receive.jpg">

                    </div>
                    <div class="card-content">
                        <h4>Parcel Check-in</h4>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col s6 ">
            <a href="/parcel/checkout">
                <div class="card">
                    <div class="card-image">
                        <img src="/assets/images/checkout.jpg">

                    </div>
                    <div class="card-content">
                        <h4>Parcel Check-out</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col s6 ">
            <a href="/edit/employee">
                <div class="card">
                    <div class="card-image">
                        <img src="/assets/images/edit_emp.jpg">

                    </div>
                    <div class="card-content">
                        <h4>Edit Employees</h4>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col s6 ">
            <a href="/edit/customer">
                <div class="card">
                    <div class="card-image">
                        <img src="/assets/images/edit_cus.jpg">

                    </div>
                    <div class="card-content">
                        <h4>Edit Customers</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col s6 ">
            <a href="/report">
                <div class="card">
                    <div class="card-image">
                        <img src="/assets/images/reports.jpg">

                    </div>
                    <div class="card-content">
                        <h4>Reports</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
</div>