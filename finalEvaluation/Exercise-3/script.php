<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $result = true;        // at the begining we set a boolean variable and change his status according to the respect of each condition.
    if(empty($_POST['make']) || strlen($_POST['make']) < 2) // We check here if the input make is not empty and has a valid length. 
    {
        
        echo 'Make need at least 2 characters.';           // The message we display for the user if his make input value contain less than 2 characters. We do the same for other text inputs.
        
        $result = false;
    }
    
    if(empty($_POST['model']) || strlen($_POST['model']) < 2)
    {
        // If the user doesnt respect the conditions we will display a message each time with the whole mandatory fields .
        echo 'Model need at least 2 characters.';
        
        $result = false;
    }
    
    if(empty($_POST['year']) || strlen($_POST['year']) < 2)
    {
        // display error
        echo 'enter a valid year at least two numbers .';
        
        $result = false;
    }
    
    if(empty($_POST['color']) || !in_array($_POST['color'], ['white', 'silver', 'black', 'red', 'blue', 'others'])) // The color choise must be from an option to not allow some inspects .
    {
        // display error
        echo 'please select a valid color';
        
        $result = false;
    }
    if($result)
    {
        echo 'ALL THE DATAS ARE VALID, Thank you for your respect'; // When the user respects the whole conditions we return this kind of confitmation message .
    }
    else
    {
        http_response_code(400);
        echo 'REVIEW THE FORM '; // 400 Bad Request .. The request could not be understood by the server due to malformed syntax. The client SHOULD NOT repeat the request without modifications.
    }
    
}
else
{
    // display error
    http_response_code(405); // 405 Method Not Allowed .The method specified in the Request-Line is not allowed for the resource identified by the Request-URI. The response MUST include an Allow header containing a list of valid methods for the requested resource.
    echo 'NOPE';
}