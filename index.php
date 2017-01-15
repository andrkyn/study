<?php

class People {

    public $name;
    public $phone;
    public $email;
    public $cafedra;
    public $predmet;
    public $kol_lesson;    // количество занятий

        public function ColTime($two_hours) {       // $two_hours - заниятие идет 2 часа
            //echo '<br> Функция: зянятия ';

           // $kol_hours = $two_hours;  // общее количество часов
            $kol_hours = ($this->kol_lesson) * $two_hours;  // общее количество часов
            return $kol_hours;
        }
}

class Teacher extends People {

   // public $kol_lesso;    // количество занятий преподавателя

         public function KolLessons($two_hours) {
             //echo '<br> Функция: преподаватель ';
            // $kol_hours = $teacher1->ColTime($two_hours);   // kol_hours - общее количество проведенных часов
             // return $kol_hours1;
        }
}

class Students extends People {

    public $year;   // год поступления

    public function ColHoursStudent($two_hours) {
        $kol_hours1 =   $this->ColTime($two_hours);
        return $kol_hours1;
    }
}

$teacher1 = new Teacher;
$teacher1->predmet = 'Математика';
$teacher1->kol_lesson = 10;
$teacher1->phone = 11111;

$teacher2 = new Teacher;
$teacher2->predmet = 'Физика';
$teacher2->kol_lesson = 14;
$teacher2->phone = 22222;

$students = new Students;

$two_hours = 2;


//echo '<br> Преподаватель ';
echo '<br> Преподаватель '.$teacher1->predmet.' провел студентам часов: ' . $teacher1->ColTime($two_hours);
echo '<br> Преподаватель '.$teacher2->predmet.' провел студентам часов: ' . $teacher2->ColTime($two_hours);


echo '<pre>';
print_r($teacher1);
print_r($teacher2);
