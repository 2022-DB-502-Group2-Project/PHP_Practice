<?php

/**
 * 인스턴스 생성
 * 
 * php에서는 new 키워드를 사용하여 인스턴스를 생성할 수 있다
 * 
 * $objectname = new class(param1,param2);
 * 
 * 클래스 프로퍼티에 접근하거나 메소드를 호출할때는 화살표 기호를 사용한다
 * 
 * 객체 이름 뒤에 화살표 기호를 붙이고, 접근하려는 프로퍼티나 호출하고자 하는 메소드의 이름을 사용하면 된다
 * 
 * $objectname -> propertyname
 * $objectname -> methodname
 */

class example1{
    function __construct(){

    }

    function method1(){
        echo "Method 1 called"."\n";
    }
}

$obj1 = new example1();
$obj1 -> method1();

/**
 * 접근 제한자
 * 
 * php에서는 접근 제한자를 사용할 수 있다
 * 
 * 또한 객체 내부에서 해당 인스턴스의 프로퍼티에 접근하고 싶을때는 특별한 변수인 $this를 사용할 수 있다.
 * 
 * $this 변수는 해당 '인스턴스'가 바로 자기자신을 가리키는데 사용하는 변수이다.
 * 
 * 접근제한자로는 
 * 
 * public
 * protected : 상위클래스에 대해서는 public멤버로 취급되며, 외부에서는 private멤버처럼 취급된다.
 * private
 * 
 * 세개가 있으며, 자바와 동일, 차이점이라면 접근제한자를 안쓰면 public으로 간주된다는 점이다.
 *
 *
 */


class example2{
    
    // 클래스 내부에 바로 쓰는 변수는 클래스 변수가 되며, 함수는 메소드가 된다.
    // 클래스 메소드 선언은 static을 붙여서 선언한다.


    public $publicVar;
    private $privateVar;
    protected $protectedVar;

    public function __construct($param1){
        // dynamic declared variable은 default로 선언되어 public 처리가 되는듯 하다
        $this->param1 = $param1."\n";
        $this->publicVar = "public property"."\n";
        $this->privateVar = "private property"."\n";
        $this->protectedVar = "protected property"."\n";
    }

    public function method1(){
        echo $this->param1;
    }

    public function publicMethod(){
        echo "public method"."\n";
    }
    protected function protectedMethod(){
        echo "protected method"."\n";
    }
    private function privateMethod(){
        echo "private method"."\n";
    }
}

$b = new example2("param1");

echo $b->publicVar;
echo $b->param1;
//echo $b->privateVar; // unable to call

$b->method1();
$b->publicMethod();
//$b->protectedMethod(); // unable to call
//$b->privateMethod(); // unable to call

/**
 * public 메소드는 private, protected 멤버와 프로그램 사이에 인터페이스 역할을 수행해줄 수 있다
 * 외부에서 바로 데이터 접근을 못하도록 하는것을 정보 은닉이라고 한다.
 */

class example3{

    private $privateVar;

    public function __construct(){
        $this->privateVar = "private property\n";
    }

    public function getPrivateVar(){
        return $this->privateVar;
    }
    public function setPrivateVar($value){
        $this->privateVar = $value;
    }
}

$obj3 = new example3();
echo $obj3->getPrivateVar();
$obj3->setPrivateVar("Changed value");
echo $obj3->getPrivateVar();
?>