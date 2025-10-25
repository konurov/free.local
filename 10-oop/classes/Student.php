   <?php 
   class Student{
            public $name;
            public $faculty;
            public $program ;
            public $group;
            public $email;
            public $phon;

           public function __construct($name,$faculty,$program,$group,$email,$phon)
            {
                $this->name = $name;
                $this->faculty = $faculty;
                $this->program = $program;
                $this->group = $group;
                $this->email = $email;
                $this->phon = $phon;
            }
           /* public function Student($name,$faculty,$program,$group,$email,$phon)
            {
                $this->name = $name;
                $this->faculty = $faculty;
                $this->program = $program;
                $this->group = $group;
                $this->email = $email;
                $this->phon = $phon;
            }*/
            public function Hello(){
                return "ФИО: {$this->name }<br>
                Факультет: {$this->faculty} <br>
                Спецеальность: {$this->program} <br>
                Группа: {$this->group} <br>
                Email: {$this->email} <br>
                Тел: {$this->phon}<br>";
            }
            // Метод __destruct, вызываемый при уничтожении объекта
            public function __destruct()
            {
                
                debug($this);
            }
            

        }