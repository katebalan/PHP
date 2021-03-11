<?php

/*
5.1. Сделайте класс User. 
В нем метод setAge (для изменения возраста юзера) и метод addAge (для добавления некоторого количества лет к текущему возрасту). 
Добавьте проверку введенного возраста: если он от 18 до 60, то будем менять возраст на новый, а если нет - то менять не будем.
Вынесите проверку возраста на корректность в отдельный вспомогательный метод isAgeCorrect, в который параметром будет передавать-
ся возраст для проверки, и используйте его внутри методов setAge и addAge.
5.2. Создайте объект этого класса User, проверьте работу методов setAge и addAge.
5.3. Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет. 
*/

class User {
    public $name;
    public $age;
    
    public function isAgeCorrect($age) {
        if ($age >= 18 && $age <= 60) {
            return true;
        } else { 
            return false;
        }
    }
    
    public function setAge($age) {
       if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
        
    public function addAge($years) {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
    
    public function subAge($years) {
        $newAge = $this->age - $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }  
}

$user = new User;
$user->name = 'Саша';
$user->age = 25;

$user->setAge(16);
echo $user->age;
echo '<br>';

$user->addAge(2);
echo $user->age;
echo '<br>';

$user->subAge(5);
echo $user->age;
echo '<br>';

/*
6.1. Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
6.2. В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
6.3. Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
6.4. Вынесите проверку курса в отдельный private метод isCourseCorrect.
*/

class Student {
    public $name;
    public $course;
     
    public function transferToNextCourse() {
        if ($this->isCourseCorrect()) {
            return $this->course++;  
        }
    }        
            
    private function isCourseCorrect() {
        if ($this->course >= 1 && $this->course <=4) {
            return true;
        } else {
            return false;
        }
    }
}

$student = new Student;
$student->name = 'Женя';
$student->course = 2;

echo $student->name . ' переведен на ' . $student->transferToNextCourse() . ' курс ';
