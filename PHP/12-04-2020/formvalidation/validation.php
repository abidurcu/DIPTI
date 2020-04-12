<?php 
    class validate
    {
        static $fname; static $errfname; static $crrfname; static $lname; static $errlname; static $crrlname; static $crrname;
        private function __construct(){return null;}
        static function form()
        {
            if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_REQUEST['submit285'])) :
                validate::$fname = $_REQUEST['fname'];
                validate::$lname = $_REQUEST['lname'];

                if (empty(validate::$fname)):
                    validate::$errfname = "<div style='color: red;'>Please write your First Name</div>";
                elseif(!preg_match('/^[A-Za-z. ]*$/', validate::$fname)):
                    validate::$errfname = "<div style='color: red;'>Invalid First Name</div>";
                else: 
                    validate::$crrfname = validate::$fname;
                endif;

                if (empty(validate::$lname)):
                    validate::$errlname = "<div style='color: red;'>Please write your Last Name</div>";
                elseif(!preg_match('/^[A-Za-z. ]*$/', validate::$lname)):
                    validate::$errlname = "<div style='color: red;'>Invalid Last Name</div>";
                else: 
                    validate::$crrlname = validate::$lname;
                endif;

                if (!empty(validate::$crrfname) && !empty(validate::$crrlname)):
                   validate::$crrname =  "<div style='color:green;'>Your Full Name is : ".validate::$crrfname." ".validate::$crrlname."</div>";
                endif;
            endif;
        }
    }
    
?>