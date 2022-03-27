<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> This is a paragraph </p.>
    
    <?php
        echo "Hi there. This is also a paragraph!";

        echo 'I\'m using an example of escaping a quote.';
        $a = true;
        if($a === true) {
            getdate(); /*this is an example of a built in function*/
            echo "Congrats my dude, there is truth here.";
        }

        /*this an example of a user defined function */
        $b = array("dog", "cat", "fish", "donkey", "goat", "pig", "zebra");
        function functionName() {
            if($b(3) !== "fish") {
                echo 'this ain\t fish yo';
            }
        }
        
    //if a page is made entirely of php do not use a closing tag!
    ?> 
    
    
    <p> This is a third paragraph. </p>



</body>
</html>