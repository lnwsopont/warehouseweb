<? View::display('employee/header', []); ?>

<div class="row">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select>
                    <option value="1">Active</option>
                    <option value="0">In-Active</option>  
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="old_password" type="password" class="validate">
                <label for="new_password">New Password</label>
            </div>
            <div class="input-field col s12">
                <input id="old_password" type="password" class="validate">
                <label for="old_password">Old Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="tel" type="text" class="validate">
                <label for="email">Tel No.</label>
            </div>
        </div>
      
            </div>
        </div>
    </form>
</div>