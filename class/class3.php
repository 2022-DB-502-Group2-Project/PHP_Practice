<?php

/**
 * 상속 : 기존 클래스에 기능을 추가하거나 재정의하여 새로운 클래스를 만드는것을 의미한다
 *
 * 객체지향 주요 특성중 하나인 상속성에 해당한다.
 * 상속을 이용하면 기존에 정의되어있는 클래스의 모든 프로퍼티와 메소드를 물려받아 새로운 클래스를 생성한다
 * 기존에 정의되어있던 클래스를 부모클래스 혹은 상위클래스라고 하며
 *
 * 상속을 통해 새롭게 작성되는 클래스를 자식클래스 혹은 하위클래스라고 한다.
 *
 *
 * extend 키워두를 통해서 상속을 정의하며, public, protected 접근제어자 멤버에 대한 상속을 받는다.
 *
 * 상속을 받은 후에 부모 클래스의 생성자를 실행해 주어야 하며, 이는 자식클래스 생성자 최상단 라인에 위치해야한다.
 * 부모 클래스 생성자 실행을 위해서는 parent::__construct() 를 해준다
 * parent와self, ::에 대해서는 class4.php 에서 본다.
 */

class baseclass{
    public $publicVar;
    protected $protectedVar;
    private $privateVar;

    public function __construct(){
        $this->privateVar = "private var"."\n";
        $this->protectedVar = "protected var"."\n";
    }

    public function showpublicproperty(){
        return isset($this->publicVar) ? $this->publicVar : "public var not defined";
    }

    protected function baseclass_protected(){
        echo $this->protectedVar;
    }

    private function baseclass_private(){
        echo $this->privateVar;
    }


}

class inherit1 extends baseclass{
    public function __construct()
    {
        parent::__construct(); // 부모 클래스의 생성자 실행
    }

    public function testInherit(){
        $this->baseclass_protected();
        //$this->baseclass_private(); // unable to call
        echo "Access to attribute : ".$this->protectedVar;
    }
}

$i1 = new inherit1();

$i1->testInherit();
echo $i1->showpublicproperty()."\n";

/**
 *
 * 오버라이딩
 *
 * 오버라이딩이란 이미 정의된 메소드를 다시 정의하는것으로, 상속받은 부모 클래스의 메소드를 자식클래스에서 재정의하는것을 의미한다.
 *
 * PHP에서는 부모 클래스의 메소드와 이름만 작성하면 해당 클래스를 오버라이딩 할 수 있다.
 *
 */

class inherit2 extends baseclass{
    public $publicValueFromInherit2;

    public function __construct($value)
    {
        parent::__construct();
        $this->publicValueFromInherit2 = $value;
    }

    // Override method showpublicproperty pre-defined in parent class
    public function showpublicproperty()
    {
        return $this->publicValueFromInherit2;
    }
}

$i2 = new inherit2("Override test");
echo $i2->showpublicproperty()."\n";

?>