<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>ArinMandarin</title>
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="header">
      <nav class="navigate">
        <ul>
          <li><a href="../index.php" class="nav_link">Назад</a></li>
          <li><a class="nav_link_sun" id="toggleThemeBtn"><i class="material-icons" style="padding:10px;">brightness_7</i></a></li>
        </ul>
      </nav>
    </header>
    <main class="main_inp" id="main">
      <form   name="form" id="form" style="text-align: center;" method="POST" action="../table/cities/index.php?city=abakan&kol=19&day=8" >
          <input type="text" autocomplete="off" name="city" placeholder="Название Города"  id="city" class="input" spellcheck="false" onchange='eventForm(this.value)' required/>
        <button  id="button" type="submit" class="btn" value="Далее" >Далее</button>
      </form>
    </main>

    <script type="text/javascript" src="../dark.js"></script>

    <script type="text/javascript">

    // for (let char of "Hello") {
    //   alert(char);
    // }

    function eventForm(value) {
      value = value.toLowerCase();
      if (value.indexOf('абакан') != -1 || value.indexOf('обакан') != -1 || value.indexOf('абокан') != -1 || value.indexOf('обокан') != -1 ){
        if (value.indexOf('понедельник') == -1 && value.indexOf('среда') == -1 && value.indexOf('вторник') == -1 && value.indexOf('среду') == -1 && value.indexOf('четверг') == -1 && value.indexOf('пятницу') == -1 && value.indexOf('пятница') == -1 && value.indexOf('субботу') == -1 && value.indexOf('суббота') == -1 && value.indexOf('воскресенье') == -1){
        document.form.action = "../table/cities/index.php?city=abakan&kol=19&day=8";}else{
          if(value.indexOf('понедельник') != -1){
            document.form.action = "../table/cities/index.php?city=abakan&kol=19&day=1";
          }
          if(value.indexOf('вторник') != -1){
            document.form.action = "../table/cities/index.php?city=abakan&kol=19&day=2";
          }
          if(value.indexOf('среду') != -1 || value.indexOf('среда') != -1){
            document.form.action = "../table/cities/index.php?city=abakan&kol=19&day=3";
          }
          if(value.indexOf('четверг') != -1){
            document.form.action = "../table/cities/index.php?city=abakan&kol=19&day=4";
          }
          if(value.indexOf('пятницу') != -1 || value.indexOf('пятница') != -1){
            document.form.action = "../table/cities/index.php?city=abakan&kol=19&day=5";
          }
          if(value.indexOf('субботу') != -1 || value.indexOf('суббота') != -1){
            document.form.action = "../table/cities/index.php?city=abakan&kol=19&day=6";
          }
          if(value.indexOf('воскресенье') != -1){
            document.form.action = "../table/cities/index.php?city=abakan&kol=19&day=7";
          }
        }
      }
      if (value.indexOf('липецк') != -1 || value.indexOf('липицк') != -1 || value.indexOf('липитск') != -1 || value.indexOf('липетск') != -1) {
        if (value.indexOf('понедельник') == -1 && value.indexOf('вторник') == -1 && value.indexOf('среду') == -1 && value.indexOf('четверг') == -1 && value.indexOf('пятницу') == -1 && value.indexOf('субботу') == -1 && value.indexOf('воскресенье') == -1){
        document.form.action = "../table/cities/index.php?city=lipetsk&kol=18&day=8";}else{
          if(value.indexOf('понедельник') != -1){
            document.form.action = "../table/cities/index.php?city=lipetsk&kol=18&day=1";
          }
          if(value.indexOf('вторник') != -1){
            document.form.action = "../table/cities/index.php?city=lipetsk&kol=18&day=2";
          }
          if(value.indexOf('среду') != -1){
            document.form.action = "../table/cities/index.php?city=lipetsk&kol=18&day=3";
          }
          if(value.indexOf('четверг') != -1){
            document.form.action = "../table/cities/index.php?city=lipetsk&kol=18&day=4";
          }
          if(value.indexOf('пятницу') != -1){
            document.form.action = "../table/cities/index.php?city=lipetsk&kol=18&day=5";
          }
          if(value.indexOf('субботу') != -1){
            document.form.action = "../table/cities/index.php?city=lipetsk&kol=18&day=6";
          }
          if(value.indexOf('воскресенье') != -1){
            document.form.action = "../table/cities/index.php?city=lipetsk&kol=18&day=7";
          }
        }
      }
      if (value.indexOf('магнитогорск') != -1 || value.indexOf('магнит') != -1 || value.indexOf('могнитогорск') != -1 || value.indexOf('могнетогорск') != -1 || value.indexOf('магнетогорск') != -1 || value.indexOf('могнитагорск') != -1 || value.indexOf('могнетагорск') != -1 || value.indexOf('магнетагорск') != -1 || value.indexOf('магнитагорск') != -1) {
        // document.form.action = "../table/cities/index.php?city=magnit&kol=28";
        if (value.indexOf('понедельник') == -1 && value.indexOf('вторник') == -1 && value.indexOf('среду') == -1 && value.indexOf('четверг') == -1 && value.indexOf('пятницу') == -1 && value.indexOf('субботу') == -1 && value.indexOf('воскресенье') == -1){
        document.form.action = "../table/cities/index.php?city=magnit&kol=28&day=8";}else{
          if(value.indexOf('понедельник') != -1){
            document.form.action = "../table/cities/index.php?city=magnit&kol=28&day=1";
          }
          if(value.indexOf('вторник') != -1){
            document.form.action = "../table/cities/index.php?city=magnit&kol=28&day=2";
          }
          if(value.indexOf('среду') != -1){
            document.form.action = "../table/cities/index.php?city=magnit&kol=28&day=3";
          }
          if(value.indexOf('четверг') != -1){
            document.form.action = "../table/cities/index.php?city=magnit&kol=28&day=4";
          }
          if(value.indexOf('пятницу') != -1){
            document.form.action = "../table/cities/index.php?city=magnit&kol=28&day=5";
          }
          if(value.indexOf('субботу') != -1){
            document.form.action = "../table/cities/index.php?city=magnit&kol=28&day=6";
          }
          if(value.indexOf('воскресенье') != -1){
            document.form.action = "../table/cities/index.php?city=magnit&kol=28&day=7";
          }
        }
      }
      if (value.indexOf('петропавловск') != -1 || value.indexOf('петропавловск камчатский') != -1 || value.indexOf('петропавловск-камчатский') != -1) {
        // document.form.action = "../table/cities/index.php?city=Petropav&kol=38";
        if (value.indexOf('понедельник') == -1 && value.indexOf('вторник') == -1 && value.indexOf('среду') == -1 && value.indexOf('четверг') == -1 && value.indexOf('пятницу') == -1 && value.indexOf('субботу') == -1 && value.indexOf('воскресенье') == -1){
        document.form.action = "../table/cities/index.php?city=Petropav&kol=38&day=8";}else{
          if(value.indexOf('понедельник') != -1){
            document.form.action = "../table/cities/index.php?city=Petropav&kol=38&day=1";
          }
          if(value.indexOf('вторник') != -1){
            document.form.action = "../table/cities/index.php?city=Petropav&kol=38&day=2";
          }
          if(value.indexOf('среду') != -1){
            document.form.action = "../table/cities/index.php?city=Petropav&kol=38&day=3";
          }
          if(value.indexOf('четверг') != -1){
            document.form.action = "../table/cities/index.php?city=Petropav&kol=38&day=4";
          }
          if(value.indexOf('пятницу') != -1){
            document.form.action = "../table/cities/index.php?city=Petropav&kol=38&day=5";
          }
          if(value.indexOf('субботу') != -1){
            document.form.action = "../table/cities/index.php?city=Petropav&kol=38&day=6";
          }
          if(value.indexOf('воскресенье') != -1){
            document.form.action = "../table/cities/index.php?city=Petropav&kol=38&day=7";
          }
        }
      }
      if (value.indexOf('новый уренгой') != -1 || value.indexOf('уренгой') != -1 || value.indexOf('урингой') != -1 || value.indexOf('новый урингой') != -1) {
        // document.form.action = "../table/cities/index.php?city=nureng&kol=95";
        if (value.indexOf('понедельник') == -1 && value.indexOf('вторник') == -1 && value.indexOf('среду') == -1 && value.indexOf('четверг') == -1 && value.indexOf('пятницу') == -1 && value.indexOf('субботу') == -1 && value.indexOf('воскресенье') == -1){
        document.form.action = "../table/cities/index.php?city=nureng&kol=95&day=8";}else{
          if(value.indexOf('понедельник') != -1){
            document.form.action = "../table/cities/index.php?city=nureng&kol=95&day=1";
          }
          if(value.indexOf('вторник') != -1){
            document.form.action = "../table/cities/index.php?city=nureng&kol=95&day=2";
          }
          if(value.indexOf('среду') != -1){
            document.form.action = "../table/cities/index.php?city=nureng&kol=95&day=3";
          }
          if(value.indexOf('четверг') != -1){
            document.form.action = "../table/cities/index.php?city=nureng&kol=95&day=4";
          }
          if(value.indexOf('пятницу') != -1){
            document.form.action = "../table/cities/index.php?city=nureng&kol=95&day=5";
          }
          if(value.indexOf('субботу') != -1){
            document.form.action = "../table/cities/index.php?city=nureng&kol=95&day=6";
          }
          if(value.indexOf('воскресенье') != -1){
            document.form.action = "../table/cities/index.php?city=nureng&kol=95&day=7";
          }
        }
      }
}
    </script>

  </body>
</html>
