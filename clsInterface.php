<?php
class clsInterface
{
    function Head()
    {
        $sReturn = '<html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
          <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
          <meta name="generator" content="Hugo 0.84.0">
          <title>Jumbotron example · Bootstrap v5.0</title>
      
          <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">
      
          
      
          <!-- Bootstrap core CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
          <!-- Favicons -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
          <script src="script.js"></script>
          <meta name="theme-color" content="#7952b3">
      
      
          <style>
            .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              user-select: none;
            }
      
            @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                font-size: 3.5rem;
              }
            }
          </style>
      
          
        </head>
        <body>
          
      <main>
        <div class="container py-4">
          <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
              <span class="fs-4">Jumbotron example</span>
            </a>
          </header>';

          return $sReturn;
    }


    function main()
    {
        global $objdb;
        $sReturn = $sOption = '';
        $res = $objdb->Query('select * from channel');
        for($i = 0; $i < $objdb->rows($res) ; $i++)
            $sOption .= '<option value="'.$objdb->Result($res, $i, 'id').'">'.$objdb->Result($res, $i, 'title').'</option>';

        $sReturn = '<div class="row">    
            <div class="col-lg-12 layout-spacing col-md-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Key Assumptions</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                    <form id="" method="post" action="index.php?&type=send">
                        <input type="hidden" class="form-control" name="user_ID" value="125">
                        <div class="form-row">
                            <div class="col-md-2">
                                <p class="Channels_d">Channels <a class="file_import" id="pills-profile-tab" data-toggle="modal" data-target="#import_cashflow_actual_year_1">Add Channel</a></p>
                            </div>
                            <div class="form-group multiple-form-group input-group">
                                <div class="col-md-2 padding_left_none">
                                      <p>Channel</p>
                                </div>
                                <div class="col-md-2 padding_left_none">
                                    <p>Product or Unit Name</p>                                </div>
                                <div class="col-md-2 padding_left_none">
                                     <p>First Month Units Sold</p>                                </div>
                                <div class="col-md-1 padding_left_none">
                                    <p>Avg Price</p>
                                </div>
                                <div class="col-md-2 padding_left_none">
                                     <p>Average COGS</p>
                                </div>
                                <div class="col-md-2 padding_left_none">
                                        <p>Closing Inventory Rate in %</p>
                                </div>
                            </div>
                            <div class="form-group multiple-form-group input-group">
                            <div class="col-md-2 padding_left_none">
                          
                            <select class="form-control" name="Channels[]" id="">
                                    <option value="Select Fixed Assets">Select Channel</option>
                                   '.$sOption.'
                                </select> 
                            </div>
                            <div class="col-md-2 padding_left_none">
                                <input type="text" name="Unit_Name[]" value="" class="form-control Revenue_Assumptions_data" placeholder="Product or Unit Name" required="">
                            </div>
                            <div class="col-md-2 padding_left_none">
                                <input type="text" name="First_Month_Unit_Sold[]" value="" class="form-control Revenue_Assumptions_data" placeholder="First Month Units" required="">
                            </div>
                            <div class="col-md-1 padding_left_none">
                                <span class="input-euro left"><input type="text" name="Average_Price[]" value="" class="form-control Revenue_Assumptions_data" placeholder="Average Price" required=""></span>
                            </div>
                            <div class="col-md-2 padding_left_none">
                                <span class="input-euro left"><input type="text" name="Average_COGS[]" value="" class="form-control Revenue_Assumptions_data" placeholder="Average COGS" required=""></span>
                            </div>
                            <div class="col-md-2 padding_left_none">
                                <span class="input-per right"><input type="text" name="Closing_Inventory[]" value="" class="form-control Revenue_Assumptions_data" placeholder="Closing Inventory Rate in %" required=""></span>
                            </div>
                            <div class="col-md-1 padding_left_none">
                                <button type="button" class="btn btn-success btn-add btn_add_text_row">+</button>
                            </div>
                        </div>
                        </div>
                         </div>
                        <hr>
                        <h4 class="mb-4">Growth Rates</h4>
                        <div class="form-row">
                            <label for="colFormLabelSm" class="col-md-2 col-formlabel col-form-label-sm">Year 1
                                Growth Rate %</label>
                            <div class="col-md-3">
                                <span class="input-per right"><input type="text" name="year_1" class="form-control" value="" id="colFormLabelSm" placeholder="Enter Year 1 Growth Rate" required=""></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="colFormLabelSm" class="col-md-2 col-formlabel col-form-label-sm">Year 2
                                Growth Rate %</label>
                            <div class="col-md-3">
                                <span class="input-per right"> <input type="text" name="year_2" class="form-control" value="" id="colFormLabelSm" placeholder="Enter Year 2 Growth Rate" required=""> </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="colFormLabelSm" class="col-md-2 col-formlabel col-form-label-sm">Year 3
                                Growth Rate %</label>
                            <div class="col-md-3">
                                <span class="input-per right"> <input type="text" name="year_3" class="form-control" value="" id="colFormLabelSm" placeholder="Enter Year 3 Growth Rate" required=""></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="colFormLabelSm" class="col-md-2 col-formlabel col-form-label-sm">Year 4
                                Growth Rate %</label>
                            <div class="col-md-3">
                                <span class="input-per right"> <input type="text" name="year_4" class="form-control" value="" id="colFormLabelSm" placeholder="Enter Year 4 Growth Rate" required=""></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="colFormLabelSm" class="col-md-2 col-formlabel col-form-label-sm">Year 5
                                Growth Rate %</label>
                            <div class="col-md-3">
                                <span class="input-per right"> <input type="text" name="year_5" class="form-control" value="" id="colFormLabelSm" placeholder="Enter Year 5 Growth Rate" required=""></span>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary mb-4 mt-3" id="submit" type="submit">Save Key
                            Assumptions</button>
                    </form>
                </div>
                </div>
            </div>
        </div>';

        return $sReturn;
    }

}