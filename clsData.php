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
        global $objdb;

        $this->initialization();
        $sReturn = $objInterface->Head();
        switch($sType)
        {
            case "": $sReturn .= $objInterface->Main(); break;
            case "send": $sReturn = $this->save(); break;
        }
        return $sReturn;
    }

    function save()
    {
        global $objdb;
        $sVal = '';

       for($i=0; $i<count($_POST['Channels']); $i++)
        {
            $iChannels = $_POST['Channels'][$i];
            $sUnit_Name = $_POST['Unit_Name'][$i];
            $sUnit_Sold = $_POST['First_Month_Unit_Sold'][$i];
            $iAverage_Price = $_POST['Average_Price'][$i];
            $iClosing_Inventory = $_POST['Closing_Inventory'][$i];
            $sGrowthRate = json_encode(
                array(
                   '1' => $_POST['year_1'],
                   '2' => $_POST['year_2'],
                   '3' => $_POST['year_3'],
                   '4' => $_POST['year_4'],
                   '5' => $_POST['year_5']
                ));
          
            $sVal .= "('$iChannels', '$sUnit_Name', '$sUnit_Sold', '$iAverage_Price', '$iClosing_Inventory',  '$sGrowthRate'),";
        }

        $sVal = rtrim($sVal, ',');
        $varResult = $objdb->Query("INSERT INTO Assumptions (ChannelId, Units, UnitSoldMonth, AveragePrice, Inventory, YearsRates) values $sVal");
        if($varResult) header('Location:index.php?res=success');
        // echo '<pre>';
        // print_r($varResult);
        // die('csss');
       

        // echo '<pre>';
        // echo $sGrowthRate;
        // print_r($_POST);
      
        // die('xsss');

    }
}