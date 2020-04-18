<?php 
    $desh = ["","Bangladesh", "India", "Pakistan", "USA", "Australia", "Canada", "Others"];
    class validate
    {
        static $fname;
        static $errfname;
        static $crrfname;
        static $lname;
        static $errlname;
        static $crrlname;
        static $crrname;
        static $email;
        static $erremail;
        static $crremail;
        static $phone;
        static $errphone;
        static $crrphone;
        static $gender;
        static $errgender;
        static $test;
        static $desh;
        static $country;
        static $errcountry;
        static $crrcountry;
        
        private function __construct()
        {
            return null;
        }
        
        static function form()
        {
            if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_REQUEST['submit285'])) :
                validate::$fname = $_REQUEST['fname'];
                validate::$lname = $_REQUEST['lname'];
                validate::$email = $_REQUEST['email'];
                validate::$phone = $_REQUEST['phone'];
                validate::$gender = $_REQUEST['gender'];
                validate::$country = $_REQUEST['country'];

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

                if (empty(validate::$email)):
                    validate::$erremail = "<div style='color: red;'>Please write your Email Address</div>";
                elseif(!filter_var(validate::$email, FILTER_VALIDATE_EMAIL)):
                    validate::$erremail = "<div style='color: red;'>Invalid Email Address</div>";
                else: 
                    validate::$crremail = validate::$email;
                endif;

                if (empty(validate::$phone)):
                    validate::$errphone = "<div style='color: red;'>Please write your Phone Number</div>";
                elseif(!preg_match('/^[0-9 -+]*$/', validate::$phone) || strlen(validate::$phone) < 11):
                    validate::$errphone = "<div style='color: red;'>Invalid Phone Number</div>";
                else: 
                    validate::$crrphone = validate::$phone;
                endif;

                if (empty(validate::$gender)):
                    validate::$errgender = "<div style='color:red;'>Please select your gender</div>";
                elseif(validate::$gender == "Male" || validate::$gender == "Female" || validate::$gender == "Others"):
                    validate::$test = validate::$gender;
                else:
                    validate::$errgender = "<div style='color:red;'>dure giye mor</div>";
                endif;

                if(empty(validate::$country)):
                    validate::$errcountry = "<div style='color:red'> Please select your country </div>";
                else:
                validate::$crrcountry = "<div style='color:green'>Your Country is : ".validate::$country."</div>";
                endif;
                    

                if (!empty(validate::$crremail) && !empty(validate::$crrphone) && !empty(validate::$gender)):
                   validate::$crremail =  "<div style='color:green;'>Your Email is : ".validate::$crremail."</div>";
                   validate::$crrphone =  "<div style='color:green;'>Your Phone Number is : ".validate::$crrphone."</div>";
                   validate::$gender =  "<div style='color:green;'>Your Gender is : ".validate::$gender."</div>";
                endif;

                
            endif;
        }
    }
    
?>