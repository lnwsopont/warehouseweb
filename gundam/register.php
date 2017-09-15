<?
include 'lib/init.php';

if(!isset($_POST['clear']) && isset($_POST['email'])){

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $addr = $_POST['addr'];

    if($pwd != $pwd2){
        loadView('register', [
            'pwd_error' => true,
            'i_email' => $email,
            'i_fname' => $fname,
            'i_lname' => $lname,
            'i_addr' => $addr
        ]);
    }
    else{
        sql_insert("
            insert into users(user_email,user_password,user_firstname,user_lastname,user_address)
            values('$email','$pwd','$fname','$lname','$addr')
        ");
        login($email, $pwd);
        redirect('home');

    }

}
else{
    loadView('register');
}

?>

