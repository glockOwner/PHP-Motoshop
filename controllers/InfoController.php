<?php
include_once ROOT . '/models/Info.php';
class InfoController
{
    public function actionDelivery()
    {
        $deliveryInfoList = Info::getDeliveryInfoList();

        require_once ROOT . '/views/info/delivery.php';
        return true;
    }

    public function actionPayment()
    {
        $paymentInfoList = Info::getPaymentInfoList();

        require_once ROOT . '/views/info/payment.php';
        return true;
    }

    public function actionGuarantee()
    {
        $guaranteeInfoList = Info::getGuaranteeInfoList();

        require_once ROOT . '/views/info/guarantee.php';
        return true;
    }

    public function actionCredit()
    {
        $creditInfoList = Info::getCreditInfoList();

        require_once ROOT . '/views/info/credit.php';
        return true;
    }

    public function actionAbout()
    {
        $aboutInfoList = Info::getAboutInfoList();

        require_once ROOT . '/views/info/about.php';
        return true;
    }

    public function actionContacts()
    {
        $contactsInfoList = Info::getContactsInfoList();

        require_once 'views/info/contacts.php';
        return true;
    }
}