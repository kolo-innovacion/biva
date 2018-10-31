
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="initial-scale=1.0, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <!--Tablet-->
    <div class="container-fluid bg-light" style="height: 100vh; padding-top: 1.5vh; padding-bottom: 1.5vh;">
        <div class="container col-md-12" style="background-color: white; ">
          <div class="container col-md-12">
            <img src="img/logo.png" alt="" class="col-md-3">
          </div>
          <form method="post" enctype="multipart/form-data" action="connect2.php">
          <!--SOURCES-->
          <div class="container col-md-12" style="border: 3px solid ; border-radius: 5px; border-color: rgb(0,157,224); text-align: center;">
            <div class="row">
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>BS1 BLOOMBERG</h6>
                <img src="img/brightsign.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="sky1" value="00-0B-78-00-99-2F">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>BS2 MILENIO TV</h6>
                <img src="img/brightsign.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="sky2" value="00-0B-78-00-99-21">
              </div>
              <div class="container col-md-3"style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>BS3 SKY (RX3)</h6>
                <img src="img/brightsign.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="sky3" value="00-0B-78-00-98-DC">
              </div>
              <div class="container col-md-3 " style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>BS4 VID INST (RX4)</h6>
                <img src="img/brightsign.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="sky4" value="00-0B-78-00-98-D8">
              </div>
            </div>
            <div class="row">
              <div class="container col-md-3 "style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>BS5 SKY (RX5)</h6>
                <img src="img/brightsign.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="sky5" value="00-0B-78-00-98-D0">
              </div>
              <div class="container col-md-3 " style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>CORVIL</h6>
                <img src="img/aopen.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="output1a" value="00-0B-78-00-99-2D">
              </div>
              <div class="container col-md-3 " style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>BIM</h6>
                <img src="img/aopen.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="output1b" value="00-0B-78-00-99-1F">
              </div>
              <div class="container col-md-3 " style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>NAGIOS</h6>
                <img src="img/aopen.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="output1c" value="00-0B-78-00-98-CF">
              </div>
            </div>
            <div class="row">
              <div class="container col-md-3 " style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>OP CORVIL</h6>
                <img src="img/aopen.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="output2a" value="00-0B-78-00-98-EB">
              </div>
              <div class="container col-md-3"   style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>OUTPUT 2B</h6>
                <img src="img/aopen.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="output2b" value="00-0B-78-00-98-F3">
              </div>
              <div class="container col-md-3 "  style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>OUTPUT 2C</h6>
                <img src="img/aopen.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="output2c" value="00-0B-78-00-98-F6">
              </div>
              <div class="container col-md-3 " style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>Clickshare 1</h6>
                <img src="img/aopen.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="clickshare1" value="00-0B-78-00-99-2E">
              </div>
            </div>
            <div class="row">
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>Clickshare 2</h6>
                <img src="img/aopen.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="radio" name="source" id="clickshare2" value="00-0B-78-00-98-ED">
              </div>
              <div class="container col-md-3">
              </div>
              <div class="container col-md-3">
              </div>
              <div class="container col-md-3">
              </div>
            </div>
          </div>
          <br>
          <!--SCREENS-->
          <div class="container col-md-12" style="border: 3px solid ; border-radius: 5px; border-color: rgb(0,157,224); text-align: center;">
            <div class="row">
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>LOBBY 1</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-C3"><button type="button" name="refresh1" class="btn btn-primary" value="00-0B-78-00-9A-C3">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="lobby1" value="00-0B-78-00-9A-C3" name="lobby1">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>LOBBY 2</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-CE"><button type="button" name="refresh2" class="btn btn-primary" value="00-0B-78-00-9A-CE">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="lobby2" value="00-0B-78-00-9A-CE" name="lobby2">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>VIGILANCIA 2</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-D2"><button type="button" name="refresh3" class="btn btn-primary" value="00-0B-78-00-9A-D2">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="vigilancia2" value="00-0B-78-00-9A-D2" name="vigilancia2">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>VIGILANCIA 1</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-B1"><button type="button" name="refresh4" class="btn btn-primary" value="00-0B-78-00-9A-B1">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="vigilancia1" value="00-0B-78-00-9A-B1" name="vigilancia1">
              </div>
            </div>
            <div class="row">
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>OPERACIONES 3</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-B7"><button type="button" name="refresh5" class="btn btn-primary" value="00-0B-78-00-9A-B7">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="operaciones1" value="00-0B-78-00-9A-B7" name="operaciones1">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>OPERACIONES 4</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-C9"><button type="button" name="refresh6" class="btn btn-primary" value="00-0B-78-00-9A-C9">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="operaciones2" value="00-0B-78-00-9A-C9" name="operaciones2">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>OPERACIONES 2</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-C6"><button type="button" name="refresh7" class="btn btn-primary" value="00-0B-78-00-9A-C6">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="operaciones3" value="00-0B-78-00-9A-C6" name="operaciones3">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>OPERACIONES 1</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-CF"><button type="button" name="refresh8" class="btn btn-primary" value="00-0B-78-00-9A-CF">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="operaciones4" value="00-0B-78-00-9A-CF" name="operaciones4">
              </div>
            </div>
            <div class="row">
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>VW IZQ</h6>
                <a href="refresh.php?refresh=00-0B-78-00-8E-EB"><button type="button" name="refresh9" class="btn btn-primary" value="00-0B-78-00-8E-EB">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="vwizq" value="00-0B-78-00-8E-EB" name="vwizq">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>VW CENTRO</h6>
                <a href="refresh.php?refresh=00-0B-78-00-8E-EA"><button type="button" name="refresh10" class="btn btn-primary" value="00-0B-78-00-8E-EA">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="vwcentro" value="00-0B-78-00-8E-EA" name="vwcentro">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>VW DER</h6>
                <a href="refresh.php?refresh=00-0B-78-00-8F-94"><button type="button" name="refresh11" class="btn btn-primary" value="00-0B-78-00-8F-94">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="vwder" value="00-0B-78-00-8F-94" name="vwder">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>Operaciones TI 01</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-B3"><button type="button" name="refresh12" class="btn btn-primary" value="00-0B-78-00-9A-B3">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="muroop1" value="00-0B-78-00-9A-B3" name="muroop1">
              </div>
            </div>
            <div class="row">
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>Operaciones TI 02</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-CD"><button type="button" name="refresh13" class="btn btn-primary" value="00-0B-78-00-9A-CD">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="muroop2" value="00-0B-78-00-9A-CD" name="muroop2">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>ÁREA DE TI</h6>
                <a href="refresh.php?refresh=00-0B-78-00-9A-CA"><button type="button" name="refresh14" class="btn btn-primary" value="00-0B-78-00-9A-CA">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="area" value="00-0B-78-00-9A-CA" name="area">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>VERTICAL DER</h6>
                <a href="refresh.php?refresh=00-0B-78-00-93-2C"><button type="button" name="refresh15" class="btn btn-primary" value="00-0B-78-00-93-2C">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="vertder" value="00-0B-78-00-93-2C" name="vertder">
              </div>
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>VERTICAL IZQ</h6>
                <a href="refresh.php?refresh=00-0B-78-00-94-A1"><button type="button" name="refresh16" class="btn btn-primary" value="00-0B-78-00-94-A1">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="vertizq" value="00-0B-78-00-94-A1" name="vertizq">
              </div>
            </div>
            <div class="row">
              <div class="container col-md-3" style="border: 2px solid ; border-color: rgb(0,157,224);">
                <h6>PODIO</h6>
                <a href="refresh.php?refresh=00-0B-78-00-94-AA"><button type="button" name="refresh17" class="btn btn-primary" value="00-0B-78-00-94-AA">REFRESH</button></a>
                <img src="img/display.png" alt="" class="col-md-12">
                <input class="form-check-input position-static" type="checkbox" id="podio" value="00-0B-78-00-94-AA" name="podio">
              </div>
              <div class="container col-md-3">
              </div>
              <div class="container col-md-3">
              </div>
              <div class="container col-md-3">
                <br><br>
                <input type="submit" name="" value="SEND" class="btn btn-primary col-md-12">
              </div>
            </div>
          </div>
        </form>
        </div>
    </div>
    <script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
