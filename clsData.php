<?php 
class clsData {

    function initialization()
    {
        global $objdb;
        global $objInterface;

        include_once('db.php');
        include_once('clsInterface.php');

        $objdb = new db('localhost', 'root', '', 'obc');
        $objInterface = new clsInterface();
    }

    function Page($sType = '')
    {
        global $objInterface;
      
        $this->initialization();
        $sReturn = $objInterface->Head();
        switch($sType)
        {
            case "": $sReturn .= $objInterface->Main(); break;
            case "send": $sReturn = $objInterface->save(); break;
        }
        return $sReturn;
    }

   
}