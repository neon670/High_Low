<?php

// $students = array(
//     array('name' => 'Virginia Potts', 'age' => 29),
//     array('name' => 'Elon Musk', 'age' => 42),
//     array('name' => 'Rasmus Lerdorf', 'age' => 45),
//     array('name' => 'Marissa Mayer', 'age' => 38)
// );

// foreach ($students as $student) {
//     foreach ($student as $key => $value) {
//         echo "Student's $key is $value\n";
//     }
// }
    $books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);	
    foreach( $books as $key => $book ){
    	if($book['published'] > 1950){
    	echo "{$key} was published {$book['published']} and {$book['author']} is the author and has {$book['pages']} pages.\n";
    	}
    }
