<?php

/**
 * 추상클래스
 *
 *
 * < 추상 메소드 >
 * 자식 클래스에서 오버라이딩 해야만 사용할 수 있는 메소드들을 의미한다.
 *
 * abstract (access modifier) function (method name)(){}
 *
 * < 추상 클래스 >
 * 하나 이상의 추상 메소드를 포함하는 클래스를 추상 클래스라고 한다
 * 객체지향 특징인 다형성을 가진 메소드의 집합을 정의할 수 있게 해준다.
 * 반드시 사용되어야 하는 메소드를 추상 클래스에 추상 메소드로 선언해 놓으면, 해당 클래스를 상속받는 모든 클래스에는 이 추상 메소드를 반드시 재정의(Override)해야한다.
 * 추상 클래스는 동작이 정의되어있지 않은 메소드가 있으므로, 인스턴스 생성이 불가능하다.
 */

abstract class AbsClass{
    // protected -> 상속받은 클래스들에 대해서만 public
    // 추상 메소드
    abstract protected function move();
    abstract protected function stop();

    // 일반 메소드
    public function start(){
        echo "Start Method"."\n";
    }
}

class childclass1 extends AbsClass{
    public function move()
    {
        echo "move"."\n";
    }
    public function stop()
    {
        echo "stop"."\n";
    }
}

$c1 = new childclass1();
$c1->move();
$c1->start();
$c1->stop();

/**
 * 인터페이스 : 추상클래스는 상속받아 기능을 이용 및 확장하는데 목적이 있다면, 인터페이스는 함수의 껍데기만 있고, 해당 함수들에 대한 구현을 강제하기 위함이 목적이다. 구현을 강제함으로서 구현 객체의 동일한 동작을 보장할 수 있다
 * 추상클래스같은 경우 일반 메소드에 대한 오버라이딩 및 오버로딩을 통해 동일한 동작을 완전히 보장하지 못할 수 도 있다.
 *
 * implements로 인터페이스르 구현할 수 있으며, 인터페이스 내 모든 메소드는 추상 메소드이다(abstract 키워드 를 생략가능)
 * 인터페이스를 구현하는 클래스는 인터페이스의 모든 메소드를 구현해야한다.
 *
 * interface간의 상속도 가능하며, extends 키워드를 사용하면 된다.
 * interface 내 모든 메소드는 public이다.
 * 추상클래스와 달리 인터페이스는 쉼표로 구분해 여러개 구현할 수 있다
 *
 * class (class name) implements interface1,interface2,interface3...etc
 *
 */

interface Transport{
    public function move();
    public function stop();
}

interface FlyingObject extends Transport{
    public function fly();
}

class Airplance implements FlyingObject {

    public function move()
    {
        echo "move\n";
    }

    public function stop()
    {
        echo "stop\n";
    }

    public function fly()
    {
        echo "fly\n";
    }
}

?>