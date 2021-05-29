<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title> Teste Técnico - Klivio Rafael </title>
    <style>
        .cabecalho{
          font-size: 16px; 
          font-family: Trebuchet MS; 
          text-align: center;
          background-color: lightblue;
          padding-top: 10px;
          padding-bottom: 30px;
          margin-left: -10px;
          margin-right: -10px;

          
        }
        .logo1 {
          margin-top: 30px;
          margin-left: 20px;
          margin-bottom: 30px;
        }
        
      </style>
    <section id = "container">
      <div class = "logo1">
        <img src="logo.png">
      </div>
      
      <div class = "cabecalho">
          <h1> Teste Técnico - Klivio Rafael</h1>
          <br />
          <h2 style="font-size: 14px; "> Tecnologias utilizadas </h2>
          <h2 > HTML + CSS + PHP + MySQL </h2>
          <br />
          <h3 style="font-size: 14px; "> Observações</h3>
          <h4 style="font-size: 12px; "> 1 -Todos os nomes citados nessa pesquisa foram categorizados como Personalidades Nacionais, não havendo necessidade de inclusão nas tabelas; </h4>
          <h4 style="font-size: 12px; "> 2 - Os dados foram coletados no mesmo dia 14/01/2021, portanto não houve a necessidade de inclusão nas tabelas; </h4>
          <h4 style="font-size: 12px; "> 3 - Todos os nomes citados na pesquisa apresentaram as mesmas metas, portanto não houve a necessidade de inclusão nas tabelas; </h4>
          <h4 style="font-size: 12px; "> 4 - Na categoria PD, todos os nomes citados apresentaram o mesmo resultado, apresentando um empate técnico; </h4>
          <br />
          <h2 style="font-size: 15px; "> Gráficos Personalidades Nacionais </h2>
      </div>
  <br />
  <br />
  <br />
  <br />
      <div class = "grafico1">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Perfil', 'IPD'],

            <?php 
            require 'conexao.php';
            $sql = "SELECT Perfil, SUM(IPD) FROM teste_import GROUP BY Perfil ORDER BY SUM(IPD) ASC";
            $con = $mysqli -> query($sql) or die($mysqli->error);

            while ($registro = mysqli_fetch_array($con)){

                $perfil = $registro['Perfil'];
                $ipd = $registro['SUM(IPD)'];
                $ipd = number_format($ipd); 
                ?>

            ['<?php echo $perfil ?>', '<?php echo $ipd ?>'],

          <?php } ?>
          ]);

          var options = {
            chart: {
              title: 'Gráfico por IPD',
              subtitle: 'Personalidades Nacionais, IPD, Período: 14/1/2021',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        
        </script>
      </div>
  
      <div class = "grafico2">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart2);

        function drawChart2() {
          var data = google.visualization.arrayToDataTable([
            ['Perfil', 'FAMA'],

            <?php 
            require 'conexao.php';
            $sql = "SELECT Perfil, SUM(FAMA) FROM teste_import GROUP BY Perfil ORDER BY SUM(FAMA) ASC";
            $con2 = $mysqli -> query($sql) or die($mysqli->error);

            while ($registro = mysqli_fetch_array($con2)){

              $perfil = $registro['Perfil'];
              $fama = $registro['SUM(FAMA)'];
              $fama = number_format($fama); 
                ?>

            ['<?php echo $perfil ?>', '<?php echo $fama ?>'],

          <?php } ?>
          ]);

          var options = {
            chart: {
              title: 'Gráfico por FAMA',
              subtitle: 'Personalidades Nacionais, FAMA, Período: 14/1/2021',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart2_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        
      </script>
      </div>
      

      <div class = "grafico3">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart3);

        function drawChart3() {
          var data = google.visualization.arrayToDataTable([
            ['Perfil', 'Engajamento'],

            <?php 
            require 'conexao.php';
            $sql = "SELECT Perfil, SUM(ENGAJ) FROM teste_import GROUP BY Perfil ORDER BY SUM(ENGAJ) ASC";
            $con3 = $mysqli -> query($sql) or die($mysqli->error);

            while ($registro = mysqli_fetch_array($con3)){

              $perfil = $registro['Perfil'];
              $engajamento = $registro['SUM(ENGAJ)'];
              $engajamento = number_format($engajamento);
              ?>

            ['<?php echo $perfil ?>', '<?php echo $engajamento ?>'],

          <?php } ?>
          ]);

          var options = {
            chart: {
              title: 'Gráfico por Engajamento',
              subtitle: 'Personalidades Nacionais, IPD, Período: 14/1/2021',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart3_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        
      </script>
      </div>

      <div class = "grafico4">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart4);

        function drawChart4() {
          var data = google.visualization.arrayToDataTable([
            ['Perfil', 'Valencia'],

            <?php 
            require 'conexao.php';
            $sql = "SELECT Perfil, SUM(VALENCIA) FROM teste_import GROUP BY Perfil ORDER BY SUM(VALENCIA) ASC";
            $con4 = $mysqli -> query($sql) or die($mysqli->error);

            while ($registro = mysqli_fetch_array($con4)){

              $perfil = $registro['Perfil'];
              $valencia = $registro['SUM(VALENCIA)'];
              $valencia = number_format($valencia);
              ?>

            ['<?php echo $perfil ?>', '<?php echo $valencia ?>'],

          <?php } ?>
          ]);

          var options = {
            chart: {
              title: 'Gráfico por Valência',
              subtitle: 'Personalidades Nacionais, Valência, Período: 14/1/2021',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart4_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        
      </script>
      </div>

      <div class = "grafico5">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart5);

        function drawChart5() {
          var data = google.visualization.arrayToDataTable([
            ['Perfil', 'Mod'],

            <?php 
            require 'conexao.php';
            $sql = "SELECT Perfil, SUM(mood) FROM teste_import GROUP BY Perfil ORDER BY SUM(mood) ASC";
            $con5 = $mysqli -> query($sql) or die($mysqli->error);

            while ($registro = mysqli_fetch_array($con5)){

              $perfil = $registro['Perfil'];
              $mod = $registro['SUM(mood)'];
              $mod = number_format($mod);
              ?>

            ['<?php echo $perfil ?>', '<?php echo $mod ?>'],

          <?php } ?>
          ]);

          var options = {
            chart: {
              title: 'Gráfico por Mod',
              subtitle: 'Personalidades Nacionais, MOD, Período: 14/1/2021',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart5_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        
      </script>
      </div>

      <div class = "grafico6">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart6);

        function drawChart6() {
          var data = google.visualization.arrayToDataTable([
            ['Perfil', 'Ranking'],

            <?php 
            require 'conexao.php';
            $sql = "SELECT Perfil, SUM(RANKING) FROM teste_import GROUP BY Perfil ORDER BY SUM(RANKING) ASC";
            $con6 = $mysqli -> query($sql) or die($mysqli->error);

            while ($registro = mysqli_fetch_array($con6)){

              $perfil = $registro['Perfil'];
              $ranking = $registro['SUM(RANKING)'];
              $ranking = number_format($ranking);
              ?>

            ['<?php echo $perfil ?>', '<?php echo $ranking ?>'],

          <?php } ?>
          ]);

          var options = {
            chart: {
              title: 'Gráfico por Ranking',
              subtitle: 'Personalidades Nacionais, Ranking, Período: 14/1/2021',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart6_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        
      </script>
      </div>
     
      <div class = "grafico7">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart7);

        function drawChart7() {
          var data = google.visualization.arrayToDataTable([
            ['Perfil', 'Interesse'],

            <?php 
            require 'conexao.php';
            $sql = "SELECT Perfil, SUM(INTERESSE) FROM teste_import GROUP BY Perfil ORDER BY SUM(INTERESSE) ASC";
            $con7 = $mysqli -> query($sql) or die($mysqli->error);

            while ($registro = mysqli_fetch_array($con7)){

              $perfil = $registro['Perfil'];
              $interesse = $registro['SUM(INTERESSE)'];
              $interesse = number_format($interesse);
              ?>

            ['<?php echo $perfil ?>', '<?php echo $interesse ?>'],

          <?php } ?>
          ]);

          var options = {
            chart: {
              title: 'Gráfico por Interesse',
              subtitle: 'Personalidades Nacionais, Interesse, Período: 14/1/2021',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart7_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        
      </script>
      </div>
    </section> 
  </head>
  <body>
    <div id="columnchart_material" style="width: 1500px; height: 500px;"></div>
    <div id="columnchart2_material" style="width: 1500px; height: 500px;"></div>
    <div id="columnchart3_material" style="width: 1500px; height: 500px;"></div>
    <div id="columnchart4_material" style="width: 1500px; height: 500px;"></div>
    <div id="columnchart5_material" style="width: 1500px; height: 500px;"></div>
    <div id="columnchart6_material" style="width: 1500px; height: 500px;"></div>
    <div id="columnchart7_material" style="width: 1500px; height: 500px;"></div>
  </body>

</html>