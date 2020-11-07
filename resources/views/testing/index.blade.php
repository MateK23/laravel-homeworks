<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Test{
            public $name;
            function __construct($name){
                $this->name=$name;
            }
            public function set_name($var)
            {
                $this->name=$var;
            }
            public function get_name()
            {
                return $this->name;
            }
        }
        class TestSubject extends Test{
            public function message()
            {
                echo "hi";
            }
        }

        $my_test=new TestSubject("Apple");
        //$my_test->set_name("Mate");
        $my_test->message();
        echo $my_test->get_name();
    ?>

    <?php
    $username = "root";
    $server = "localhost";
    $password = "";

    ?>
</body>
</html>
