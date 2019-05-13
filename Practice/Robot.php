<?php 
	class Robot{
		private $speed;
		private $color;
		// プロパティをプライベートに　→  メソッドで定める、外からアクセスできないようにする

		function __construct($value){
			$this->color = $value;   //ロボット説明書のカラープロパティにアクセス
		}
		// ロボットインスタンスが作成されたと同時に色が決まる、初期値

		function setSpeed($value){
			if(0 <= $value && $value<= 50){
				// ロボット説明書のスピードプロパティにアクセス
				$this->speed = $value;
			}else{
				exit("エンスト");
			}
		}   //privateにしたことで、get作らんとアクセスできんくなった

		function getSpeed(){
			return $this->speed;
		}

		function showSpeed(){
			echo "時速".$this->speed."kmで走っています";
		}

		function start(){
			echo "電源を入れる";
		}

		function run(){
			echo "<br>歩き出す";
		}

		function stop(){
			echo "<br>ストップ";
		}

	}

$Robot1 = new Robot("Black");
$Robot2 = new Robot("Red");
// オブジェクト（インスタンス）作成　　インスタンス化

// public $speedだったらアクセスできる。
// $Robot1->setSpeed(50);
// echo $Robot1->speed;

//getSpeedメソッド作ったから
$Robot1->setSpeed(50);
echo $Robot1->getSpeed();
echo "<br>";
echo $Robot1->showSpeed();
echo "<br>";
echo $Robot1->start();
echo $Robot1->run();
echo $Robot1->stop();




 ?>