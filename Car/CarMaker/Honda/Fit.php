<?php

namespace Car\CarMaker\Honda;

//namespace Carを呼び出している。namespaceを指定したら、このuseをしないと「extends Car」が使えなくなった。
use Car;

class Fit extends Car{

    //省略 フィット(Fit)は車(Car)なので車(class Car)の要素を使用出来る

    //追加でフィット特有の機能など追加できる。
}

//フィットを作るなら、new Carよりnew Fitの方が適切。そうなんだ程度でOK。
$fit2 = new Fit('私はフィットです'); 
$fit2->departure();