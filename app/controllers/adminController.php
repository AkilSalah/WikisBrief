<?php
require_once '../models/Admin.php';

class AdminController {
    private $adminModel;

    public function __construct() {
        $this->adminModel = new AdminModel();
    }

    public function getAdminModel()  {
        if (isset($_POST['submit']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {
            $email = $_POST['Email'];
            $pass = $_POST['Password'];
            $this->adminModel->setEmailAdmin($email);

            if ($this->adminModel->adminLogin()) {
                header('location: ../views/dashboard.php');
                exit();
            } else {
                echo "Identifiants incorrects";
            }
        }
    }
}

$adminController = new AdminController();

if (isset($_POST['submit'])) {
    $adminController->getAdminModel();
}
?>
