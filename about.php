 <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="jumbotron">
          <img src="design/docs/assets/img/demo/browser-author.jpg" class="img-rounded img-responsive">       
        <h6><?php echo $first_name.' '.$last_name; ?></h6><br>

        <p>Information</p>
        <!--First Row-->
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <span class="inp"></span>
              <input type="text" value= ""placeholder="Username" class="form-control" />
            </div>
          </div>
         <div class="col-sm-3">
            <div class="form-group">
              <span class="inp"></span>
              <input type="password" value= "" placeholder="Current Password" class="form-control" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <span class="inp"></span>
              <input type="password" value= ""placeholder="New Password" class="form-control" />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <span class="inp"></span>
              <input type="password" value= "" placeholder="Confirm New Password" class="form-control" />
            </div>
          </div>
        </div>


      <form action="index.php" method="POST">
        <div class="row">
          <div class="col-xs-1">
            <div class="form-group">
              <span class="inp"></span>
              <input type="text" value= "<?php echo $age; ?>"placeholder="<?php echo $age; ?>" class="form-control" />
            </div>
          </div>

      <div class="col-sm-6">
            <div class="col-sm-3">
              <div class="form-group">
                <select data-toggle="select" class="form-control select select-default select-sm">
                    <option class="disabled">Birthdate</option>
                </select>
              </div>
            </div>
                  <div class="col-sm-3">
                   <div class="form-group">
                    <select name = "bday_month" data-toggle="select" class="form-control select select-primary select-sm">
                    
                        <?php
                      $bmonth_string = "";
                        if ($bday_month != 0) {
                          switch ($bday_month) {
                            case 1:
                              echo '<option name = "bday_month" value="1">January</option>';
                              break;
                            case 2:
                              echo '<option name = "bday_month" value="2">February</option>';
                              break;
                            case 3:
                              echo '<option name = "bday_month" value="3">March</option>';
                              break;
                            case 4:
                              echo '<option name = "bday_month" value="4">April</option>';
                              break;
                            case 5:
                              echo '<option name = "bday_month" value="5">May</option>';
                              break;
                            case 6:
                              echo '<option name = "bday_month" value="6">June</option>';
                              break;
                            case 7:
                              echo '<option name = "bday_month" value="7">July</option>';
                              break;
                            case 8:
                              echo '<option name = "bday_month" value="8">August</option>';
                              break;
                            case 9:
                              echo '<option name = "bday_month" value="9">September</option>';
                              break;
                            case 10:
                              echo '<option name = "bday_month" value="10">October</option>';
                              break;
                            case 11:
                              echo '<option name = "bday_month" value="11">November</option>';
                              break;
                            case 12:
                              echo '<option name = "bday_month" value="12">December</option>';
                              break;

                            default:
                              
                              break;
                          }
                        }elseif ($bday_month == "" or $bday_month == 0) {
                          echo '
                            <option name = "bday_month" value="0">Month</option>
                              <option name = "bday_month" value="1">January</option>
                              <option name = "bday_month" value="2">February</option>
                              <option name = "bday_month" value="3">March</option>
                              <option name = "bday_month" value="4">April</option>
                              <option name = "bday_month" value="5">May</option>
                              <option name = "bday_month" value="6">June</option>
                              <option name = "bday_month" value="7">July</option>
                              <option name = "bday_month" value="8">August</option>
                              <option name = "bday_month" value="9">September</option>
                              <option name = "bday_month" value="10">October</option>
                              <option name = "bday_month" value="11">November</option>
                              <option name = "bday_month" value="12">December</option>
                          ';
                        }
                      ?>
                      
                    </select>
                    </div>
                  </div> <!-- col-sm-3-->

          <div class="col-sm-3">
            <div class="form-group">
                    <select name = "bday_day" data-toggle="select" class="form-control select select-primary select-sm">
                     
                         <?php
                         if ($bday_day != 0) {
                          echo '
                              <option name = "bday_day" value = '.$bday_day.'>'.$bday_day.'</option>
                            ';
                         }elseif($bday_day == 0 or $bday_day == ""){
                          $i = 1;
                          echo '<option value="0">Day</option>';
                          while($i != 32)
                          {
                            echo '
                              <option name = "bday_day" value = '.$i.'>'.$i.'</option>
                            ';
                            $i++;
                          }
                        }
                        ?>
                      
                    </select>
                  </div>
          </div> <!--col-sm-3-->

          <div class="col-sm-3">
            <div class="form-group">
                    <select name = "bday_year" data-toggle="select" class="form-control select select-primary select-sm">
                     
                        <?php
                         if ($bday_year != 0) {
                          echo '
                              <option name = "bday_year" value = '.$bday_year.'>'.$bday_year.'</option>
                            ';
                         }elseif($bday_year == 0 or $bday_year == ""){
                          $i = 2015;
                          echo '<option value="0">Year</option>';
                          while($i != 1950)
                          {
                            echo '
                              <option name = "bday_year" value = '.$i.'>'.$i.'</option>
                            ';
                            $i--;
                          }
                        }
                        ?>
                     
                    </select>
             </div> <!--form-group-->
          </div> <!--col-sm-3-->
        </div> <!--col-sm-6-->
       </div> <!--First Row-->

        <!--Second Row-->
        <div class="row">
          <div class="col-xs-5">
            <div class="form-group">
              <input name = "email" type="text" class="form-control" placeholder="<?php echo $email; ?>" value = "<?php echo $email; ?>">
            </div>
          </div>

          <div class="col-xs-5">
            <div class="form-group">
              <input name = "contact" type="text" class="form-control" placeholder="<?php echo $contact; ?>" value = "<?php echo $contact; ?>">
            </div>
          </div>
        </div> <!--Second Row-->

        <!--Third Row-->
        <div class="row">
          <div class="col-xs-10">
            <div class="form-group">
              <input name = "address" type="text" class="form-control" placeholder="<?php echo $residential_address; ?>" value = "<?php echo $residential_address; ?>">
            </div>
          </div>
        </div> <!--Third Row-->

        <center><button name = "update_info" type="submit" class="btn btn-danger">Save</button></center>
 </form>

        </div> <!--jumbotron-->
     </div> <!--col-sm-12-->
    </div> <!--row-->
  </div> <!--container-->
