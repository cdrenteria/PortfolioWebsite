<html>
    <body>
        <?php 
            $firstname = $lastname = $email = $company = "";
            $nameErr = $emailErr = $companyErr = "Required Field"
            if ($_SERVER["REQUEST_METHOD" == "POST"]) {
                if (empty($_POST["firstName"])) {
                $nameErr = "Name is required";
                } else {
                $name = testInput($_POST["firstName"]);
                }

                if ($_SERVER["REQUEST_METHOD" == "POST"]) {
                if ($_POST["lastName"]) {
                    $lastname = testInput($_POST["lastName"]);
                }
                
                if (empty($_POST["email"])) {
                $emailErr = "Email is required";
                } else {
                $email = testInput($_POST["email"]);
                }
                
                if (empty($_POST["company"])) {
                $companyErr = "";
                } else {
                $company = testInput($_POST["company"]);
                }
            }
            function testInput($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
            echo "Thank you, an email has been sent confirming your submission."


        ?>
    </body>
</html>
