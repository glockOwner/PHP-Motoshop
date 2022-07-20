<?php
include_once 'models/AdminBase.php';
class AdminController extends AdminBase
{
    public function actionIndex()
    {
        $isAdmin = self::checkAdmin();
        self::checkAdminOrModer();

        require_once 'views/admin/index.php';
        return true;
    }
}