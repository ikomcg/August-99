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

    $addBooks = new mySQL($Title, $ISBN, $Author, $Publisher, intval($Year_Published), $Category, $mysqli);
    $addBooks->updateBooks($booksID);

} else if (isset($_POST['addBooks'])) {
    $Title = $_POST['Title'];
    $ISBN = $_POST['ISBN'];
    $Author = $_POST['Author'];
    $Publisher = $_POST['Publisher'];
    $Year_Published = $_POST['Year_Published'];
    $Category = $_POST['Category'];

    $addBooks = new mySQL($Title, $ISBN, $Author, $Publisher, intval($Year_Published), $Category, $mysqli);
    $addBooks->addBooks();
}


class mySQL
{
    public $Title;
    public $ISBN;
    public $Author;
    public $Publisher;
    public $Year_Published;
    public $Category;
    public $booksID;

    function __construct( $Title, $ISBN, $Author, $Publisher, $Year_Published, $Category, $mysqli)
    {
        $this->title = $Title;
        $this->ISBN = $ISBN;
        $this->Author = $Author;
        $this->Publisher = $Publisher;
        $this->Year_Published = $Year_Published;
        $this->Category = $Category;
        $this->mysqli =  $mysqli;
    }
   function addBooks()
    {

        $response = array();
        $inserData = array();


        $sqlreg = "INSERT INTO bookscatalog(Title, ISBN, Author, Publisher, Year_Publisher, Category) 
            VALUES ('$this->title','$this->ISBN',' $this->Author','$this->Publisher','$this->Year_Published','$this->Category')";

        $response[] = 'Success';
        $response[] = 'Add books success';
        $response[] = 'success';

        $inserData[] = true;

        if ($this->mysqli->query($sqlreg)) {
            $this->mysqli->affected_rows;
        }

        echo json_encode(array(
            'message' => $response,
            'dataStatus' => $inserData
        ));
    }
    function updateBooks($booksID)
    {

        $response = array();
        $inserData = array();


        $sqlupd = "UPDATE bookscatalog SET Title='$this->title', ISBN='$this->ISBN', Author='$this->Author', Publisher='$this->Publisher', Year_Publisher='$this->Year_Published', Category='$this->Category' WHERE books_ID='$booksID'";


        $response[] = 'Success';
        $response[] = 'Update books success';
        $response[] = 'success';

        $inserData[] = true;

        if ($this->mysqli->query($sqlupd)) {
            $this->mysqli->affected_rows;
        }

        echo json_encode(array(
            'message' => $response,
            'dataStatus' => $inserData
        ));
    }
}
