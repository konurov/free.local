   <?php 
   class Student{
            public $name;
            public $faculty;
            public $program ;
            public $group;
            public $email;
            public $phon;
            public static $countSUM = 0;
           
            const TEST_CAR = 'Прототип';
            const TEST_CAR_SPEED = 300;



           public function __construct($name,$faculty,$program,$group,$email,$phon)
            {
                $this->name = $name;
                $this->faculty = $faculty;
                $this->program = $program;
                $this->group = $group;
                $this->email = $email;
                $this->phon = $phon;
                self::$countSUM++;
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
            public static function GetconutSUM(){
                return self::$countSUM;
            }
            public function Hello(){
                return "ФИО: {$this->name }<br>
                Факультет: {$this->faculty} <br>
                Спецеальность: {$this->program} <br>
                Группа: {$this->group} <br>
                Email: {$this->email} <br>
                Тел: {$this->phon}<br>";
            }
            public function getPrototypeInfo()
                {
                    return "<h3>Данные тестового авто:</h3>
                        Наименование: " . self::TEST_CAR . "<br>
                        Скорость: " . self::TEST_CAR_SPEED . "<br>";
                }

            /*
            // Метод __destruct, вызываемый при уничтожении объекта
            public function __destruct()
            {
                
                //debug($this);
            }*/
            

        }