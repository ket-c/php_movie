<?php

namespace controllers;

include __DIR__ . '/../repositories/AdminRepositoryClass.php';

use respositiories\AdminRepositoryClass;

class AdminControllerClass extends AdminRepositoryClass
{
    public function triggerLogin()
    {
        $email = $this->customPOSTTrim('email');
        $password = md5($this->customPOSTTrim('password'));

        if ($login = $this->authentication($email, $password)) {
            // check if result is more than 0
            if ($login) {
                session_start();
                if (isset($_SESSION['error'])) {
                    unset($_SESSION['error']);
                }
                $_SESSION['success'] = 'Welcome!';
                header('Location: ../ui/account/dashboard.php');
            }
        } else {
            session_start();
            if (isset($_SESSION['success'])) {
                unset($_SESSION['success']);
            }
            $_SESSION['error'] = 'Failed to login. Inavlid credentials';
            header('Location: ../index.php');
        }
    }

    public function triggerNewAdmin()
    {
        $name = $this->customPOSTTrim('name');
        $email = $this->customPOSTTrim('email');
        $phone = $this->customPOSTTrim('phone');
        $about = $this->customPOSTTrim('about');
        $address = $this->customPOSTTrim('address');
        $password = md5($this->customPOSTTrim('password'));
        $confirm_passoword = md5($this->customPOSTTrim('confirm_password'));
        if ($password == $confirm_passoword) {
            if (
                $this->saveNewAdmin(
                    $name,
                    $email,
                    $phone,
                    $address,
                    $about,
                    $password
                )
            ) {
                if (isset($_SESSION['error'])) {
                    unset($_SESSION['error']);
                }
                $_SESSION['success'] = "Welcome! $name.";
                $this->authentication($email, $password);
                header('Location: ../ui/account/dashboard.php');
            } else {
                session_start();
                if (isset($_SESSION['success'])) {
                    unset($_SESSION['success']);
                }
                $_SESSION['error'] = 'Failed to sign up';
                header('Location: ../ui/account/register.php');
            }
        } else {
            session_start();
            $_SESSION['error'] = 'Passwords do not match';
            header('Location: ../ui/account/register.php');
        }
    }

    public function triggerUpdateAdmin()
    {
        session_start();
        $name = $this->customPOSTTrim('name');
        $email = $this->customPOSTTrim('email');
        $phone = $this->customPOSTTrim('phone');
        $about = $this->customPOSTTrim('about');
        $address = $this->customPOSTTrim('address');
        $id = $_SESSION['loggedin_id'];

        if ($this->updateAdmin($id, $name, $email, $phone, $address, $about)) {
            if (isset($_SESSION['error'])) {
                unset($_SESSION['error']);
            }
            $_SESSION['success'] = 'updated successfully';
        } else {
            if (isset($_SESSION['success'])) {
                unset($_SESSION['success']);
            }
            $_SESSION['error'] = 'failed to update';
        }
        header('Location: ../ui/account/profile.php');
    }

    private function customPOSTTrim($param)
    {
        return isset($_POST[$param]) ? trim(strip_tags($_POST[$param])) : null;
    }
}
