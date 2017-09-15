<?
include 'lib/init.php';


if(isset($_POST['email']) && isset($_POST['pwd'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    if( login($email, $pwd) ){
        if($_SESSION['user']['user_level']==0)
        {
            redirect('home');
        }
        else {
            redirect('admin_home');
            }
    }
    else{
        loadView('login', [
            'error' => true
        ]);
    }

}
else{
    loadView('login');
}

?>
