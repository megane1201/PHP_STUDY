<?php
class AirConditioner {
    /*モード(冷房、暖房、除湿のみ、それ以外の文字列が入らいなこと)
    それぞれのモードを切り替える定義すること*/
    private $mode;
    
    /*温度（18～30）
    1度づつ上下させる関数を定義すること*/
    private $temperature;
    
    /*風量（1～5）
    1づつ上下させる関数を定義すること*/
    private $power;
    
    /*コントスラクタ*/
    function __construct($temperature,$power){
        //初期設定は冷房
        //温度・風量は引数で受け取ること
        $this->mode="冷房";
        $this->temperature=$temperature;
        $this->power=$power;
    }
    
    /*現在設定を表示*/
    function showStatus() {
        echo "======現在の設定======\n";
        echo "モード: $this->mode\n";
        echo "設定温度: $this->temperature\n";
        echo "風量: $this->power\n";
    }
}

?>