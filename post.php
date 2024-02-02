<!DOCTYPE html>
<html lang="ja">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>contact - はなふさあかり</title>

      <!-- CSS -->
      <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>

<body>
    <header class="header">
        <div class="header-inner">
          <h1><a href="index.html"><img class="logo" src="images/logo.jpg"></a></h1>
          <div class="menu-wrapper">
                <div class="btn">
                    <span class="bar bar-top"></span>
                    <span class="bar bar-middle"></span>
                    <span class="bar bar-bottom"></span>
                </div>
                <nav class="menu-lists">
                    <ul>
                      <li><a href="index.html">home</a></li>
                      <li><a href="portfolio.html">portfolio</a></li>
                      <li><a href="profile.html">profile</a></li>
                      <li class="open"><a href="contact.html">contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <?php
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      // メールの構成情報
      $to = "milishota@yahoo.co.jp";
      $subject = "contact - はなふさあかりにお問い合わせがありました";
      $body = "contact - はなふさあかりにお問い合わせがありました。\n\n";
      $body .= "名前：$name \nメールアドレス：$email \n";
      $body .= "お問い合わせ内容：$message \n";
      $headers = "From : info@kizuna13.shop\n";
      $headers .= "X-Mailer : PHP 8\n";
    ?>

    <main id="post">
      <p><?php print $name; ?> 様</p>
      <br>
      <p>メールアドレス：<?php print $email; ?></p>
      <p>お問い合わせ内容：<?php print $message; ?></p>
      <br>
    </main>

    <?php
      if (mb_send_mail($to, $subject, $body, $headers)) {
        print "お問い合わせを完了しました。<br><br>";
      } else {
        print "お問い合わせを送信できませんでした。<br>お手数ですが、こちらにご連絡ください。<br>akari.95@outlook.com";
      }
    ?>

    <footer id="footer">
      <p id="page-top"><a href="#">^</a></p>
      <p>&copy; 2024 akari hanafusa</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
    <!-- 文字に適用↓ -->
    <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/8-9/js/8-9.js"></script>
    <script>
      'use strict';
      // フォント
      (function(d) {
          var config = {
          kitId: 'rop5hua',
          scriptTimeout: 3000,
          async: true
          },
          h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);

      // ハンバーガーメニュー
      $(function() {
      $('.btn').on('click',function(){// .btnをクリックすると〜
        $('.btn').toggleClass('close');// .btnにcloseというクラスが追加される
        $('nav').fadeToggle(500);// navの表示・非表示切り替わる
        $('main').fadeToggle(500);// pの表示・非表示切り替わる
      });
    });

    </script>
</body>
</html>