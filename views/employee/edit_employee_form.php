<? View::display('employee/header', []); ?>
<div class="container">
    <? if ($success): ?>
        <blockquote>
            edit success
        </blockquote>
    <? endif; ?>
    <div class="row">
        <form class="col s12" method ="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Placeholder" id="first_name" type="text" name="first_name" class="validate" value="<?= $emp_info['emp_fname'] ?>">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Placeholder" id="last_name" type="text" name="last_name" class="validate" value="<?= $emp_info['emp_lname'] ?>">
                    <label for="last_name">Last Name</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Placeholder" id="tel" type="text" name="tel" class="validate" value="<?= $emp_info['emp_tel'] ?>">
                    <label for="tel">Tel No.</label>
                </div>
                <div class="input-field col s12">
                <select class="browser-default">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                </div>
                
            </div>
            <br>
            <button class="btn waves-effect waves-light" type="submit" name="action">Edit
                <i class="material-icons right">edit</i>
            </button>


        </form>
    </div>
</div>
