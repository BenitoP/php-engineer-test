<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <style type="text/css">
        body{line-height: 1em;}
    </style>
    <body>

        <h1>PHP Engineer Test</h1>

        <h2>Hello World</h2>

        <p>At the end of this test, you should have all the answers on this page.</p>

        <h2>Output a square</h2>

        <?php
            $square = new Square(10);
            $square->draw();
        ?>

        <h2>Output a diamond</h2>

        <?php
            // output your diamond here
            $diamond = new Diamond(10);
            $diamond->draw();
        ?>

        <h2>Output your rectangle</h2>

        <?php
            // output your working rectangle here
            $rectangle = new Rectangle(10);
            $rectangle->draw();
        ?>

        <h2>Output the result of the API</h2>

        <?php
            $url = "https://pokeapi.co/api/v2/pokemon/mewtwo/";
            $response = \Httpful\Request::get($url)
            ->expectsJson()
            ->send();

            $name = $response->body->name;
            $type = $response->body->types[0]->type->name;
            $img = $response->body->sprites->front_default;

            echo "
                <div> 
                    <label>Pokemon Name:</label> <label>".$name."</label> 
                </div>";

            echo "
                <div> 
                    <label>Pokemon Type:</label> <label>".$type."</label> 
                </div>";
                
            echo "
                <div> 
                    <label>Pokemon Image:</label> <img src='".$img."'>
                </div>";
        ?>

        <h2>Recommendations</h2>

        <ul>
            <li> I would suggest some sort of front end task to test styling and maybe the use of a front-end framework </li>
            <li> Add one database integration question to test basic database skills </li>
        </ul>

    </body>
</html>
