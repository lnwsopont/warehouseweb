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
                    <select name="status">
                        <option value="1" <? if($emp_info['emp_status']==1){echo "selected";}?>>Active</option>
                        <option value="0" <? if($emp_info['emp_status']==0){echo "selected";}?>>In-Active</option>
                    </select>
                    <label>Status</label>
                </div>

            </div>
            <br>
            <button class="btn waves-effect waves-light" type="submit" name="action">Edit
                <i class="material-icons right">edit</i>
            </button>


        </form>
    </div>
</div>

<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
