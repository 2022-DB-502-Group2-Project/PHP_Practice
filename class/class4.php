<?php

/**
 * static 키워드 -> java의 class attribute / method와 동일
 *
 * 클래스 정의시 static 키워드를 사용한 프로퍼티와 메소드는 해당 클래스의 인스턴스를 생성하지 않아도 접근할 수 있다
 *
 * 이러한 프로퍼티와 메소드를 정적 멤버 라고 하며 정적 멤버의 특징은 아래와 같다
 *
 * 1. static 키워드로 선언된 정적 "프로퍼티"는 인스턴스화된 객체에서 접근할 수 없다. (상수화)
 * 2. static 키워드로 선언된 정적 "메소드"는 인스턴스화된 객체에서 접근할 수 있다.
 * 3. 정적 메소드 내에서는 $this 키워드를 사용할 수 없다.
 */

class staticmember{
    public static $staticproperty = "static property";
    public static function showproperty(){
        echo self::$staticproperty."\n";
    }
}

// static method 접근
staticmember::showproperty();
// static property 접근
echo staticmember::$staticproperty."\n";

$i1 = new staticmember();
// 인스턴스화 된 클래스로 static 메소드 접근가능
$i1->showproperty();
// 인스턴스화 된 클래스로 static attribute 접근 불가능
//echo $i1->$staicproperty;

/**
 *
 * 범위 지정연산자
 *
 * 클래스의 프로퍼티나 메소드에 접근하기 위해서는 인스턴스를 생성하고 화살표 연산자를 사용해야한다(->)
 *
 * 하지만 단순히 클래스 정의 내에서 프로퍼티나 메소드를 사용하고 싶은 경우, 지정연산자 '::' 를 사용할 수 있다
 *
 * 범위 지정 연산자는 클래스의 상수, static memeber, 재정의된 멤버(Overrided methods)에 접근할 수 있게 한다.
 *
 * 다음 키워드를 사용하면 클래스의 정의 내에서 특정 프로퍼티나 메소드에 접근할 수 있다.
 *
 * self : 자기자신에 접근할 때
 *
 * parent : 부모클래스 접근할 때
 *
 */

class parentclass{
    public $parentProperty;
    public static $staticProperty;

    public function __construct()
    {
        $this->parentProperty = "Property from parent";
    }

    public function echostaticproperty(){
        // self를 통해 자기 자신 클래스의 static member에 접근한다.
        $value = isset(self::$staticProperty) ? self::$staticProperty : "static property not defined";
        echo "Parent Class : ".$value."\n";
    }
    public function echoproperty(){
        echo $this->parentProperty."\n";
    }
}

class childclass extends parentclass {
    public $childProperty;
    public static $staticChildProperty;

    public function __construct()
    {
        // 부모 클래스 생성자 호출
        parent::__construct();
        $this->childProperty = "Property from child";
        // 자기 자신 클래스의 정적 멤버 초기화
        self::$staticChildProperty = "Static Child property";
    }

    //Override
    public function echoproperty()
    {
        // 부모 클래스의 echoproperty() 호출
        parent::echoproperty();
        echo $this->childProperty."\n";
    }
}

$c1 = new childclass();
$c1->echoproperty();
$c1->echostaticproperty();

?>