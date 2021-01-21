<?php
// class names should not be pluralised. and should start with a capital letter
    class Student{
    public $name;
    public $admNo;

    public function getAdmNo() {
        return $this->name." ".$this->admNo;
    }
}
    
// lets register students
$one = new Student();
$one->name = "Daniel";
$one->admNo = "12345";

$two = new Student();
$two->name = "Bara";
$two->admNo = "1237";


echo $one->getAdmNo()."<br>";
echo $two->getAdmNo()."<br>";


// simple complex example
class NotYourName {
    // CONSTRUCTORS::: they are functions.
    // difference is these functions are called at 
    // the level of class instantiation
    public function __construct($givenName) {
        // via the constructor, we create a new property called 'name' and
        // assign a value to it. i.e. the arguments of the constructor function
        $this->name = $givenName;
    }

    public $value; // a normal class property

    // a custom function that returns the name that was provided
    public function whatNameWasProvided() {
        // checks for the class property called 'name' and returns it's value.
        // remember the 'name' property was created at the constructor function
        return $this->name;
    }
    
}

$daniels_name = "Daniel";
$baras_name = "Bara";


// this code here executes whenever the form is submitted.
// $_POST['person_name'] ==>> the form was submitted, and the request
// contained a key called person_name. ie. an input element had the name
// person_name
if(isset($_POST['person_name']) && isset($_POST['submit'])) {
    // this will check for the value entered;
    $name_entered = $_POST['person_name'];

    if($name_entered === $daniels_name) {
        echo 'confirmed successfully';
    } else {

        // creating a custom error object, from the NotYourName class.
        // we pass the name_entered to the class declaration.
        // this is because of the constructor function at the class definition
        $errorReceived = new NotYourName($name_entered);
        $errorReceived->value = "wrong name";
      
        echo $errorReceived->value." your name is not ".$errorReceived->whatNameWasProvided();
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
        <label for="person_name">Daniel, confirm your name</label><br>
        <input type="text" name="person_name">
        <input type="submit" name="submit" value="send info"/>
    </form>

<h1>This is my javascript code</h1>
<p id="demo">Javascript can change HTML content.</p>


<button type="button"

onclick='document.getElementById("demo").style.fontSize="35px"'> click me!</button>

</body>
</html>