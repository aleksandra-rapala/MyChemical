<?php
require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/BoardRepository.php';
session_start();

class SecurityController extends AppController {

    const USER = 1;
    const ADMIN = 2;
    const DEFAULT_CREATE_USER = self::USER;

    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function logowanie()
    {
        if (!$this->isPost()) {
            return $this->render('login');
        }

            $email = $_POST['email'];      //name w input atrybuty mówią pod jakim kluczem przyjda do kontrolera
            $user = $this->userRepository->getUser($email);    //szukamy uzytkownika o danym emailu

            //jeśli user jest null tzn. że nie istnieje //zwracamy ekran logowania z wiadomościami
            if (!$user) return $this->render('login', ['messages' => ['User not found!!']]);
            if ($user->getEmail() !== $email) return $this->render('login', ['messages' => ['User with this email not exist!']]);
            else if (!password_verify($_POST['password'] . ($user->getSalt()), $user->getPassword())) return $this->render('login', ['messages' => ['Wrong password!']]);
            else {

                $_SESSION['id'] = $user->getId();
                $_SESSION['account_type'] = $user->getIdAccountType();
                $_SESSION['email'] = $user->getEmail();

                $boardRepository = new BoardRepository();
                $his_board = $boardRepository->getUserBoard($_SESSION['id']);
                $_SESSION['id_board'] = $his_board->getIdBoard();

                $this->userRepository->setCookieUser($_SESSION['email']);


                $url = "http://$_SERVER[HTTP_HOST]";
                header("Location: {$url}/seeBoard");

                }
            }



    public function wylogowanie()
    {
            $this->userRepository->deleteCookieUser();

            unset($_SESSION['id']);
            unset($_SESSION['account_type']);
            unset($_SESSION['email']);
            unset($_SESSION['id_board']);

            session_destroy();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }



    public function rejestracja(){

        if (!$this->isPost()) {
            return $this->render('register');
        }

        //przechwytywanie danych
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        //wyszukujemy użytkownika o danym emailu
        $user = $this->userRepository->getUser($email);


        //jeśli user jest null tzn. że nie istnieje jeszcze taki użytkownik zatem sprawdzamy hasła
        if(!$user){
            if ($password !== $confirm_password) {
                return $this->render('register', ['messages' => ['Wrong password!']]);
            }
            else {

                //tworzymy nowego użytkownika

                $salt = rand(1,20);
                $password_safe = password_hash($password.$salt, PASSWORD_BCRYPT);

               $this->userRepository->createNewUser(new User(null, $email, $password_safe, $salt, self::DEFAULT_CREATE_USER));
               $new_user = $this->userRepository->getUser($email);

                //tworzenie repozytorium board
                $boardRepository = new BoardRepository();
                $boardRepository->createNewBoard($new_user->getId());

                $url = "http://$_SERVER[HTTP_HOST]";
                header("Location: {$url}/login");
            }
        }
        else return $this->render('register', ['messages'=> ['User with this email already exist!']]);
    }

}