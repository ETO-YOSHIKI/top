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
  protected $name;
  protected $age;
  protected $sex;
  protected $id;
  protected static $count = 0;

  // コンストラクタ
  public function __construct($name, $age, $sex) {
      $this->name = $name;
      $this->age = $age;
      $this->sex = $sex;
  }
     

  // メソッド
  public function number() {
    self::$count++;
    $this->id = "S" . str_pad(self::$count, 4, "0", STR_PAD_LEFT);
  }
  public function show() {
    printf('(%s) %s %d歳 %s <br>',$this->id,$this->name,$this->age,$this->sex);
  }
}

class PartStaff extends Person {
  // プロパティ
  private $jikyu;

  // コンストラクタ
  public function __construct($name, $age, $sex, $jikyu) {
    parent::__construct($name, $age, $sex);
    $this->jikyu = $jikyu;
  }

  // メソッド
  public function number() {
    parent::number();
    $this->id = "P" . str_pad(self::$count, 4, "0", STR_PAD_LEFT);
  }

  public function show() {
    printf('(%s) %s %d歳 %s 時給: %d円 <br>', $this->id, $this->name, $this->age, $this->sex, $this->jikyu);
  }
}

// クラスのインスタンスを作成
$person[1] = new Person( "佐藤　一郎", 31 , "男性");
$person[2] = new Person( "山田　花子", 25 , "女性");
$person[3] = new Person( "鈴木　次郎", 27 , "男性");
$person[4] = new PartStaff( "田中　友子", 24 , "女性",900);
$person[5] = new Person( "中村　三郎", 27 , "男性");

// メソッドを呼び出す
foreach($person as $per){
  $per->number();
  $per->show();
}

?>
</body>

</html>