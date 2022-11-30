<?php
include '../database/server.php';
session_start();
if (isset($_POST['update'])) {
    $booksID = $_POST['booksID'];
    $Title = $_POST['Title'];
    $ISBN = $_POST['ISBN'];
    $Author = $_POST['Author'];
    $Publisher = $_POST['Publisher'];
    $Year_Published = $_POST['Year_Published'];
    $Category = $_POST['Category'];

    $addBooks = new mySQL();
    $addBooks->updateBooks($booksID, $Title, $ISBN, $Author, $Publisher, intval($Year_Published), $Category, $mysqli);

} else if (isset($_POST['addBooks'])) {
    $Title = $_POST['Title'];
    $ISBN = $_POST['ISBN'];
    $Author = $_POST['Author'];
    $Publisher = $_POST['Publisher'];
    $Year_Published = $_POST['Year_Published'];
    $Category = $_POST['Category'];

    $addBooks = new mySQL();
    $addBooks->addBooks($Title, $ISBN, $Author, $Publisher, intval($Year_Published), $Category, $mysqli);
} 


class mySQL
{
    
   function addBooks($Title, $ISBN, $Author, $Publisher, $Year_Published, $Category, $mysqli)
    {

        $response = array();
        $inserData = array();


        $sqlreg = "INSERT INTO bookscatalog(Title, ISBN, Author, Publisher, Year_Publisher, Category) 
            VALUES ('$Title','$ISBN',' $Author','$Publisher','$Year_Published','$Category')";

        $response[] = 'Success';
        $response[] = 'Add books success';
        $response[] = 'success';

        $inserData[] = true;

        if ($mysqli->query($sqlreg)) {
            $mysqli->affected_rows;
        }

        echo json_encode(array(
            'message' => $response,
            'dataStatus' => $inserData
        ));
    }
    function updateBooks($booksID, $Title, $ISBN, $Author, $Publisher, $Year_Published, $Category, $mysqli)
    {

        $response = array();
        $inserData = array();


        $sqlupd = "UPDATE bookscatalog SET Title= '$Title', ISBN= '$ISBN', Author= '$Author', Publisher= '$Publisher', Year_Publisher= '$Year_Published', Category= '$Category' WHERE books_ID='$booksID'";


        $response[] = 'Success';
        $response[] = 'Update books success';
        $response[] = 'success';

        $inserData[] = true;

        if ($mysqli->query($sqlupd)) {
            $mysqli->affected_rows;
        }

        echo json_encode(array(
            'message' => $response,
            'dataStatus' => $inserData
        ));
    }
}
