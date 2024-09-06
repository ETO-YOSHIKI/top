<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
class Person {
  // プロパティ（メンバー変数）
  public $name;
  public $age;
  public $sex;

  // コンストラクタ
  public function __construct($name, $age, $sex) {
      $this->name = $name;
      $this->age = $age;
      $this->age = $sex;
  }

  // メソッド
  public function introduce() {
      echo . $this->name .  . $this->age .. $this->sex . ;
  }
}

// クラスのインスタンスを作成
$person1 = new Person("佐藤　一郎", 31,"男性");
$person2 = new Person("山田　花子", 25,"女性");
$person3 = new Person("鈴木　次郎", 27,"男性");

// メソッドを呼び出す
$person1->introduce();
echo "\n";
$person2->introduce();
echo "\n";
$person3->introduce();
?>

</body>

</html>