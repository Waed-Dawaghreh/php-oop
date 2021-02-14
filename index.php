<?php
class Student
{
    private $id;
    private $name;
    private $email;
    private $mob_number;
    function __construct($id, $name, $email, $mob_number)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->mob_number = $mob_number;
    }

    public function get_name()
    {
        return $this->name;
    }
    public function get_mobNumber()
    {
        return $this->mob_number;
    }
}

//===========================
class Teacher extends Student
{
    private $salary;
    private $subjects = [];
    function __construct($id, $name, $email, $mob_number, $salary, $subjects)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->mob_number = $mob_number;
        $this->salary = $salary;
        $this->subjects = $subjects;
    }

    public function get_salary()
    {
        return $this->salary;
    }
    public function get_subjects()
    {
        return $this->subjects;
    }
}

$student = new Student(123443, "Sara ", "eva@orange.com", "0777777777");
$teacher = new Teacher(96432, "Sadi  ", "adam@orange.com", "0777788888", 800, ["English", "Arabic", "Math", "science"]);
echo $student->get_name();
print_r($teacher->get_subjects());
