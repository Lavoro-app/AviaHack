<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Таблица</title>
    <link href="../../style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap" rel="stylesheet">
<style media="screen">

</style>
  </head>
  <body>
    <?php
    $city = $_GET["city"];
    $kol = $_GET["kol"];
    $day = $_GET["day"];
    $con_str=mysqli_connect('localhost', 'root', 'mokony101', 'mysql');
  mysqli_select_db($con_str, 'mysql') ;


  ?>
    <!-- <div class="ctrl"><div class="shift"></div><h1>&nbsp;+</h1><div class="scroll"></div><h1> - листать по-горизонтали</h1></div>
    <div class="ctrl" style="margin-top:4vh;"><div class="scroll"></div><h1> - листать по-вертикали</h1></div> -->
    <div class="ctrl" style="margin-top:3vh;"><a href="#tab" class="link_cent"><i class="material-icons" style="">
mouse
</i> - смотри график полётов ниже</a></div>
    <div class="flex_gor"><h1 class="gorod"> <?php
    if ($city == "abakan") { echo "Абакан"; }
    if ($city == "lipetsk") echo "Липецк";
    if ($city == "magnit") echo "Магнитогорск";
    if ($city == "Petropav") echo "Петропавловск-Камчатский";
    if ($city == "nureng") echo "Новый Уренгой"; ?>
  </h1></div>
    <header class="header">
      <nav class="navigate">
        <ul>
          <li><a href="../../input/index.php" class="nav_link">Назад</a></li>
          <li><a class="nav_link_sun" id="toggleThemeBtn"><i class="material-icons" style="padding:10px;">brightness_7</i></a></li>
        </ul>
      </nav>
    </header>

    <main class="main_error" id="errors">

    <?php
    $id = 0;
    $day_i = 0;
    $day_o = 0;
    for(; $id <= $kol; $id++){
    $result=mysqli_query($con_str, "SELECT * FROM `mysql`.`$city` WHERE id='$id'");
    while($row = mysqli_fetch_array($result)){
      $day_in = $row['Column_6'];
      $day_out = $row['Column_13'];
      switch ($day_in) {
        case 'понедельник':
          $day_i = 1;
          break;
        case 'вторник':
          $day_i = 2;
          break;
        case 'среда':
          $day_i = 3;
          break;
        case 'четверг':
          $day_i = 4;
          break;
        case 'пятница':
          $day_i = 5;
          break;
        case 'суббота':
          $day_i = 6;
          break;
        case 'воскресенье':
          $day_i = 7;
          break;
      }
      switch ($day_out) {
        case 'понедельник':
          $day_o = 1;
          break;
        case 'вторник':
          $day_o = 2;
          break;
        case 'среда':
          $day_o = 3;
          break;
        case 'четверг':
          $day_o = 4;
          break;
        case 'пятница':
          $day_o = 5;
          break;
        case 'суббота':
          $day_o = 6;
          break;
        case 'воскресенье':
          $day_o = 7;
          break;
      }
      $flight_n = $row['Column_3'];
      $comp = $row['Column_5'];
   $hour_in = mb_substr($row['Column_2'],0,-3);
   $min_in = mb_substr($row['Column_2'],-2,2);
   $hour_out = mb_substr($row['Column_9'],0,-3);
   $min_out = mb_substr($row['Column_9'],-2,2);
   if($day == 8){
        echo "<div class='error_line'>
          <a class='error_link' href='#tab'>$id рейс( $comp $flight_n ) будет в аэропорту с $hour_in:$min_in до $hour_out:$min_out, день - $day_in </a>
        </div>";
      }
      else{
        if($day == 7 and $day_i == 7){
          echo "<div class='error_line'>
            <a class='error_link' href='#tab'>$id рейс( $comp $flight_n ) будет в аэропорту с $hour_in:$min_in до $hour_out:$min_out, день - $day_in </a>
          </div>";
        }
        if($day == 6 and $day_i == 6){
          echo "<div class='error_line'>
            <a class='error_link' href='#tab'>$id рейс( $comp $flight_n ) будет в аэропорту с $hour_in:$min_in до $hour_out:$min_out, день - $day_in </a>
          </div>";
        }
        if($day == 5 and $day_i == 5){
          echo "<div class='error_line'>
            <a class='error_link' href='#tab'>$id рейс( $comp $flight_n ) будет в аэропорту с $hour_in:$min_in до $hour_out:$min_out, день - $day_in </a>
          </div>";
        }
        if($day == 4 and $day_i == 4){
          echo "<div class='error_line'>
            <a class='error_link' href='#tab'>$id рейс( $comp $flight_n ) будет в аэропорту с $hour_in:$min_in до $hour_out:$min_out, день - $day_in </a>
          </div>";
        }
        if($day == 3 and $day_i == 3){
          echo "<div class='error_line'>
            <a class='error_link' href='#tab'>$id рейс( $comp $flight_n ) будет в аэропорту с $hour_in:$min_in до $hour_out:$min_out, день - $day_in </a>
          </div>";
        }
        if($day == 2 and $day_i == 2){
          echo "<div class='error_line'>
            <a class='error_link' href='#tab'>$id рейс( $comp $flight_n ) будет в аэропорту с $hour_in:$min_in до $hour_out:$min_out, день - $day_in </a>
          </div>";
        }
        if($day == 1 and $day_i == 1){
          echo "<div class='error_line'>
            <a class='error_link' href='#tab'>$id рейс( $comp $flight_n ) будет в аэропорту с $hour_in:$min_in до $hour_out:$min_out, день - $day_in </a>
          </div>";
        }
      }

    }
    }
    ?>
    </main>
    <div id="openModal" class="modalDialog">
      <div class="moda">
        <div class="cmd">
          <h6 class="title_bd">Добавить новую базу данных</h6>
          <a href="#close" title="Закрыть" class="close1"></a>
      </div>
      <div class="center_form">
        <h4 style="display:none;text-align:center;" id="thanks">Спасибо, скоро график<br> появится на сайте</h4>
      <form   method="POST" name="test" id="form" style="text-align: center;">
          <input type="text" name="name1" placeholder="Название Города"  id="name1" class="input" required/>
          <div class="example-1">
<div class="form-group">
<label class="label">
  <i class="material-icons">attach_file</i>
  <span class="title">Добавить БД (.sql)</span>
  <input type="file" required>
</label>
</div>
</div>
        <button  id="button" class="btn" value="Далее" >Далее</button>
        <script type="text/javascript">

              document.getElementById('button').onclick = function () {
                form.style.display = "none";
                thanks.style.display = "block";
            }
        </script>
      </form>
      </div>
      </div>
    </div>


    <main class="main_tab" id="tab">
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <!-- <h1> >>><br>Листай >>> </h1> -->
       <div id="example5-1" ></div>
    </main>
    <script>
    google.charts.load("current", {packages:["timeline"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

      var container = document.getElementById('example5-1');
      var chart = new google.visualization.Timeline(container);
      var dataTable = new google.visualization.DataTable();

      dataTable.addColumn({ type: 'string', id: 'Room' });
      dataTable.addColumn({ type: 'string', id: 'Name' });
      dataTable.addColumn({ type: 'date', id: 'Start' });
      dataTable.addColumn({ type: 'date', id: 'End' });
      dataTable.addRows([
        <?php
        $id = 0;
        $day_i = 0;
        $day_o = 0;
        for(; $id <= $kol; $id++){
        $result=mysqli_query($con_str, "SELECT * FROM `mysql`.`$city` WHERE id='$id'");
        while($row = mysqli_fetch_array($result)){
          $day_in = $row['Column_6'];
          $day_out = $row['Column_13'];
          switch ($day_in) {
            case 'понедельник':
              $day_i = 1;
              break;
            case 'вторник':
              $day_i = 2;
              break;
            case 'среда':
              $day_i = 3;
              break;
            case 'четверг':
              $day_i = 4;
              break;
            case 'пятница':
              $day_i = 5;
              break;
            case 'суббота':
              $day_i = 6;
              break;
            case 'воскресенье':
              $day_i = 7;
              break;
          }
          switch ($day_out) {
            case 'понедельник':
              $day_o = 1;
              break;
            case 'вторник':
              $day_o = 2;
              break;
            case 'среда':
              $day_o = 3;
              break;
            case 'четверг':
              $day_o = 4;
              break;
            case 'пятница':
              $day_o = 5;
              break;
            case 'суббота':
              $day_o = 6;
              break;
            case 'воскресенье':
              $day_o = 7;
              break;
          }
          $flight_n = $row['Column_3'];
          $comp = $row['Column_5'];
       $hour_in = mb_substr($row['Column_2'],0,-3);
       $min_in = mb_substr($row['Column_2'],-2,2);
       $hour_out = mb_substr($row['Column_9'],0,-3);
       $min_out = mb_substr($row['Column_9'],-2,2);
       echo "[ '$id рейс ',  '$comp $flight_n $day_in',    new Date(0,0,$day_i,$hour_in,$min_in,0),  new Date(0,0,$day_o,$hour_out,$min_out,0) ],";

       }
      }

       ?>


      ]);

     var options = {
        timeline: { colorByRowLabel: true }

      };

      chart.draw(dataTable, options);
    }
    </script>


    <script type="text/javascript" src="../../dark.js"></script>
  </body>
</html>
