<?php 
class clsData {

    function initialization()
    {
        global $objdb;
        global $objInterface;

        include_once('db.php');
        include_once('clsInterface.php');

        $objdb = new db('localhost', 'root', 'root', 'obc');
        $objInterface = new clsInterface();
    }

    function Page()
    {
        global $objInterface;
        global $objdb;

        $this->initialization();
        $sReturn = $objInterface->Head();
        $sReturn .= $objInterface->Main();
        return $sReturn;
    }


}