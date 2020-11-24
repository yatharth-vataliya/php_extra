
<?php

/**
  * An example of duck typing in PHP
  */

interface CanFly {
   public function fly();
 }

interface CanSwim {
   public function swim();
 }

 class Bird {
   public function info() {
     echo "I am a {$this->name}\n";
     echo "I am an bird\n";
   }
 }

/**
  * some implementations of birds
  */
class Dove extends Bird implements CanFly {
   var $name = "Dove";
   public function fly() {
     echo "I fly\n";
   } 
 }

 class Penguin extends Bird implements CanSwim {
   var $name = "Penguin";
   public function swim() {
     echo "I swim\n";
   } 
 }

 class Duck extends Bird implements CanFly, CanSwim {
   var $name = "Duck";
   public function fly() {
     echo "I fly\n";
   }
   public function swim() {
     echo "I swim\n";
   }
 }

/**
  * a simple function to describe a bird
  */
function describe($bird) {
   if ($bird instanceof Bird) {
     $bird->info();
     if ($bird instanceof CanFly) {
       $bird->fly();
     }
     if ($bird instanceof CanSwim) {
       $bird->swim();
     }
   } else {
     die("This is not a bird. I cannot describe it.");
   }
 }

// describe these birds please
describe(new Penguin);
 echo "<br/>";

describe(new Dove);
 echo "<br/>";

describe(new Duck);  

abstract class AbstractClass
{
    public abstract function __construct();
    public abstract static function display():string; //  abstract method that is declare as static is must be static at the time of implementation otherwise that will cause the error and stop the execution of the script
    // Force Extending class to define this method
    abstract protected function getValue();
    protected abstract function prefixValue($prefix);
    // private abstract function prefixValue($prefix); // this is not valid;
    /*public static function return_ins(){
      return new self();
    }*/ // not valid to create a instance of abstract class;
    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
    private function printOut1() {
        print $this->getValue() . "\n";
    } // this is valid to declare normal method as private in abstract class;
}

class ConcreteClass1 extends AbstractClass
{

    // if the abstract method is defined as protected, the function implementation must be defined as either protected or public, but not private.
    public function __construct(){
      echo " <br/> Derived class from AbstractClass => ".__CLASS__."<br/>";
    }
    protected function getValue() {
        return "ConcreteClass1";
    }
    public static function display(): string { return "stirng"; }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
  public function __construct(){
      echo " <br/> Derived class from AbstractClass => ".__CLASS__."<br/>";
    }
    public function getValue() {
        return "ConcreteClass2";
    }

    public static function display():string {return __METHOD__;}

    // public static function display():string {} // this will throw  error at the runtime not the compile time and the error is Fatal error: Uncaught TypeError: Return value of ConcreteClass2::display() must be of the type string, none returned in G:\htdocs\PHP_EXTRA\abstract.php:122 Stack trace: #0 G:\htdocs\PHP_EXTRA\abstract.php(142): ConcreteClass2::display() #1 {main} thrown in G:\htdocs\PHP_EXTRA\abstract.php on line 122
    
    // protected static function display():string {}
    // private static function display():string {}
    // public static function display(){}
    // above three statements are invalid and throw error and stop the execution of the script;

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";
// var_dump($class1->return_ins());
$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";
// var_dump(AbstractClass::return_ins());
$val=ConcreteClass2::display(); // 
echo $val;

abstract class Basic {
     public static function doWork() {
         return (new self())->work();
     }

     abstract protected function work();
 }

 class Keeks extends Basic {
     protected function work() {
         return 'Keeks';
     }
 }

 echo Keeks::doWork();




?>