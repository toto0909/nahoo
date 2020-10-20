<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Nahoo!</title>
    <!--水色の背景色を画像で指定-->
    <style>
      .cover{
        background: url(img/back_image.png);
        background-size: cover;
      }
    </style>
  </head>

  <body>
    <main>
      <!--トップメニューアイコン6 + Nahoo!ロゴ + 時刻取得-->
      <!--アイコン6はSP版では非表示(d-none)-->
      <section class="text-center bg-white mt-3">
        <div class="container">
          <div class="row">
            <div class="d-none d-md-block col-md-1"><img src="img/battle.png" class="img-fluid"><p class="font-weight-light text-primary">バトル</p></div>
            <div class="d-none d-md-block col-md-1"><img src="img/club.jpg" class="img-fluid"><p class="font-weight-light text-primary">クラブ</p></div>
            <div class="d-none d-md-block col-md-1"><a href="nahoo.sakura.ne.jp/wiki/"><img src="img/wiki.png" class="img-fluid"></a><p class="font-weight-light text-primary">wiki</p></div>
            <div class="col-sm-6"><a href="https://www.yahoo.co.jp"><img src="img/nahoo.png" class="img-fluid"></a><div class="text-info font-weight-bold"><span id="view_clock"></span></div></div>
            <div class="d-none d-md-block col-md-1"><img src="img/money.png" class="img-fluid"><p class="font-weight-light text-primary">金融</p></div>
            <div class="d-none d-md-block col-md-1"><img src="img/game.jpg" class="img-fluid"><p class="font-weight-light text-primary">ゲーム</p></div>
            <div class="d-none d-md-block col-md-1"><img src="img/shopping.png" class="img-fluid"><p class="font-weight-light text-primary">買い物</p></div>
          </div>
      </section>

      <!--検索窓-->
      <section class="text-center mt-0">
        <div class="cover container text-black text-center py-3 border border-primary">
          <form method=get action="http://www.google.co.jp/search" target="_blank" style="margin: 0px;">
                <font size=-1>
                  <input type=hidden name=domains value="nahoo.sakura.ne.jp">
                  <input type=radio name=sitesearch value="" checked> Google検索 <!--Google検索-->
                  <input type=radio name=sitesearch value="Nahoo!"> Nahoo!検索 <!--Nahoo!内検索方法未定-->
                </font>
                <br>
                <input type=text name=q size=25 maxlength=255 value="">
                <input type=hidden name=ie value=utf-8>
                <input type=hidden name=oe value=utf-8>
                <input type=hidden name=hl value="ja">
                <input type=submit name=btnG value="検索">   
          </form>
        </div>
      </section>

      <!--コンテンツ群-->
      <section class="text-center mt-3">
        <div class="container text-center">
            <div class="row">
              <div class="col-sm-4 order-2 order-sm-1"> <!--左カラム-->
                <!--アプリケーション一覧-->
                <div class="w-100 cover border border-primary">
                  <div class="container w-100 py-3">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action">バトル(Battle)</a>
                      <a href="#" class="list-group-item list-group-item-action">クラブリーグ(Culb)</a>
                      <a href="#" class="list-group-item list-group-item-action">Wikipedia(Wiki)</a>
                      <a href="#" class="list-group-item list-group-item-action">ファイナンス(Finance)</a>
                      <a href="#" class="list-group-item list-group-item-action">ゲーム(Game)</a>
                      <a href="#" class="list-group-item list-group-item-action">ショッピング(Shopping)</a>
                      <a href="#" class="list-group-item list-group-item-action">その他(Others)</a>
                    </div>
                  </div>
                </div>

                <!--余白用-->
                <div class="w-100 bg-white">
                  <div><br></div>
                </div>

                <!--広告-->
                <div class="w-100 cover border border-primary">
                  <div class="container w-100 py-3">
                    <img src="img/yahoo_ad.png" width=100% height=100%>
                  </div>
                </div>

                <!--余白用-->
                <div class="w-100 bg-white">
                  <div><br></div>
                </div>

              </div>

              <div class="col-sm-4 order-1 order-sm-2"> <!--中央カラム-->
                <!--トップニュース-->
                <div class="w-100 cover border border-primary">
                  <div class="container w-100 py-3">
                    <h2>トップニュース</h2>
                  </div>
                </div>

                <!--余白用-->
                <div class="w-100 bg-white">
                  <div><br></div>
                </div>
              
               <!--天気(weather.php呼び出し)-->
               <div class="w-100 cover border border-primary">
                <div class="container w-100 mt-3 py-0 bg-white">
                  <?php include('./weather.php'); ?>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">天気</th>
                        <th scope="col">気温</th>
                        <th scope="col">湿度</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="https://openweathermap.org/city/1857519">松本市</a></th>
                        <td><?php echo get_json("icon",1); ?></td>
                        <td><?php echo get_json("temp",1); ?>℃</td>
                        <td><?php echo get_json("humidity",1); ?>%</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="https://openweathermap.org/city/1853226">新座市</a></th>
                        <td><?php echo get_json("icon",2); ?></td>
                        <td><?php echo get_json("temp",2); ?>℃</td>
                        <td><?php echo get_json("humidity",2); ?>%</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="https://openweathermap.org/city/1850144">豊島区</a></th>
                        <td><?php echo get_json("icon",3); ?></td>
                        <td><?php echo get_json("temp",3); ?>℃</td>
                        <td><?php echo get_json("humidity",3); ?>%</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="https://openweathermap.org/city/1863431">秦野市</a></th>
                        <td><?php echo get_json("icon",4); ?></td>
                        <td><?php echo get_json("temp",4); ?>℃</td>
                        <td><?php echo get_json("humidity",4); ?>%</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                </div>

                
               

              </div>

               <div class="col-sm-4 order-3 order-sm-3"> <!--右カラム-->

                <div class="w-100 h-30 cover border border-primary">為替</div>
                <div class="w-100 h-40 cover border border-primary">ショッピング</div>
               </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    <footer class="text-center text-muted py-4">
      <a href="http://nahoo.sakura.ne.jp"><p>©︎Nahoo!</p></a>
    </footer>


    <!--日付取得関数-->
    <script type="text/javascript">
      timerID = setInterval('clock()',500); //0.5秒毎にclock()を実行
      
      function clock() {
        document.getElementById("view_clock").innerHTML = getNow();
      }
      
      function getNow() {
        var now = new Date();
        var year = now.getFullYear();
        var mon = now.getMonth()+1; //１を足すこと
        var day = now.getDate();
        var hour = now.getHours();
        var min = now.getMinutes();
        var sec = now.getSeconds();
        var you = now.getDay(); //曜日(0～6=日～土)

        var youbi = new Array("日","月","火","水","木","金","土");
      
        //出力用
        var s = year + "年" + mon + "月" + day + "日(" + youbi[you] + ")" + hour + "時" + min + "分" + sec + "秒"; 
        return s;
      }
      </script>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>