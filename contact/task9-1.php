<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="discription" content="「問い合わせ」">
  <link rel="stylesheet" type="text/css" href="reset.css">
  <link rel="stylesheet" href="style.css">
  <title>問い合わせページ</title>
</head>
<body>
  <header>
    <div class="header">
      <h1>ここには会社名が入ります</h1>
      <a href="#" class="head_btn">ボタン１</a>
      <a href="#" class="head_btn2">ボタン２</a>
    </div>
      <div class="menu">
        <ul>
          <li>
            <a href>メニュー01</a>
          </li>
          <li>
            <a href>メニュー02</a>
          </li>
          <li>
            <a href>メニュー03</a>
          </li>
        </ul>
      </div>
  </header>
  <div class="mv">
    <h1>
      <img src="mv.png" alt>
    </h1>
  </div>
    <main>
      <section class="sec_01">
        <div class="wrapper">
          <?php
            $name = $_POST['name'];
            $kana = $_POST['kana'];
            $mail = $_POST['mail'];
            $tel = $_POST['tel'];
            $sentaku = $_POST['sentaku'];
            $toi = $_POST['toi'];             
            $check = $_POST['check'];
          ?>
          <h1>お問い合わせ</h1>
                送信完了しました。</br>
              </div>
        </section>
        <section class="Form">
          <form action="task8-2.php" method="post">

            <div class="Form-Item">
             <p class="Form-Item-Label">
              <span class="Form-Item-Label-Required">お名前</span>
              <span class="Form-Item-Label-Required0">必須</span>
             </p>
             <input type="text" class="Form-Item-Input" placeholder="山田太郎" name="name" value="<?= $name;?>">
            </div>
            <div class="Form-Item">
             <p class="Form-Item-Label">
              <span class="Form-Item-Label-Required">フリガナ</span>
              <span class="Form-Item-Label-Required0">必須</span>
             </p>
             <input type="text" class="Form-Item-Input" placeholder="ヤマダタロウ" name="kana" value="<?= $kana;?>">
            </div>
            <div class="Form-Item">
             <p class="Form-Item-Label">
              <span class="Form-Item-Label-Required">メールアドレス</span>
              <span class="Form-Item-Label-Required0">必須</span>
             </p>
             <input type="text" class="Form-Item-Input" placeholder="info@fast-creadmy.jp" name="mail" value="<?= $mail;?>" >
            </div>
            <div class="Form-Item">
             <p class="Form-Item-Label">
              <span class="Form-Item-Label-Required">電話番号</span>
              <span class="Form-Item-Label-Required0">必須</span>
             </p>
             <input type="text" class="Form-Item-Input" placeholder="info@fast-creadmy.jp" name="tel" value="<?= $tel;?>">
            </div>
            <div class="Form-Item">
             <p class="Form-Item-Label">
              <span class="Form-Item-Label-Required">お問い合わせ項目</span>
              <span class="Form-Item-Label-Required0">必須</span>
             </p>
             <select class="Form-Item-Input"  name="sentaku">
             <option value="option0">選択してください</option>
                <option value="option1" <?php if ($sentaku=="option1"){echo selected;}  ?>>選択肢1</option>
                <option value="option2" <?php if ($sentaku=="option2"){echo selected;}  ?>>選択肢2</option>
                <option value="option3" <?php if ($sentaku=="option3"){echo selected;}  ?>>選択肢3</option>
                <option value="option4" <?php if ($sentaku=="option4"){echo selected;}  ?>>選択肢4</option>
                </select>
            </div>
            <div class="Form-Item">
             <p class="Form-Item-Label">
              <span class="Form-Item-Label-Required">お問い合わせ内容</span>
              <span class="Form-Item-Label-Required0">必須</span>
             </p>
             <input type="text" class="Form-Item-Input" placeholder="こちらにお問い合わせ内容をご記入ください" name="toi" value="<?= $toi;?>">
            </div>
            <div class="Form-Item">
             <p class="Form-Item-Label">
              <span class="Form-Item-Label-Required">個人情報保護方針</span>
              <span class="Form-Item-Label-Required0">必須</span>
             </p>
             <label> <label><input type="checkbox" name="check" <?php if($check=="on") {echo checked;}?> >個人情報保護方針に同意します</label>
            </div>
            <button type="submit" class="c-button">確認</button>
          </form>
        </section>
        <section class="sec_btn2">
          <div class="wrapper">
            <div class="sec_btn_content">
              <div class="content_btn_left">
                <h2>こちらからご購入下さい</h2>
                <a href="#" class="btn">ネットショップ</a>
              </div>
              <div class="content_btn_right">
                <h2>お気軽にお問い合わせください</h2>
                <a href="#" class="btn2">お問い合わせ</a>
              </div>
            </div>
          </div>
        </section>
        <section class="sec_03">
          <div class="wrapper">
            <h3>ここには会社名が入ります</h3>
                  <br>住所が入ります</br>
                  <br>03-1234-5678</br>
                  <br>営業時間;9:00～18:00</br>
                </div>
          </section>
          <section class="sec_04">
            <div class="wrapper">
              <div class="rink">
                <ul>
                 <li>
                   <a href="#">リンク01</a>
                 </li>
                 <li>
                   <a href="#">リンク02</a>
                 </li>
                 <li>
                   <a href="#">リンク03</a>
                 </li>
                 <li>
                   <a href="#">リンク04</a>
                 </li>
                 <li>
                   <a href="#">リンク05</a>
                 </li>
                 <li>
                   <a href="#">リンク06</a>
                 </li>
                 <li>
                   <a href="#">リンク07</a>
                 </li>
                </ul>
               </div>
                     </div>
               </section>

    </main>
    <footer>
      <p>ここには会社名が入ります©copyright</p>
    </footer>
   </body>
   </html>     