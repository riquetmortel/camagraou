<?PHP
echo HALLOO;
require('getdb.php');
require('userClass.php');

$user = new userClass(); // on instancie le user 
var_dump($user);
print_r($_POST);

if ($_POST[login]){
	echo lol;
	$login = $_POST[login];
	$pass = $_POST[pass];
	$success = $user->Login($login, $pass); //rappel : la meth Login considere comme OK le login OU l'email
	var_dump ($success);
	if ($success){
		echo 'LE USER EST LE NUM :'.$_SESSION[uid];
		header("Location: home.php");
	}
	else
		echo "Raté";
	}

?>


