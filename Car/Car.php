<?php

 class Car {

    //$this->name で上書き出来る ($thisはこのクラスという意味)
    private $name = '最初は名前がありません。';

    //インスタンス化と同時にこの関数(__construct)は実行される
    function __construct(string $name) {
        $this->name = $name;
    }

    function departure(){
        echo "{$this->name}は出発した。";
    }

 }

 $fit1 = new Car('私はフィットです'); //Car('名前') === __construct($name)になる
 $fit1->departure();





 
//本当は「$fit1 = new Car('私はフィットです');」も違うディレクトリに用意してある「Fit.phpでnew Fit()」として作成した方が良い。