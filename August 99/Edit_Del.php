<?php   
    include 'database/server.php';

    if(isset($_GET['ID'])){
        $id = $_GET['ID'];
        $sqlbooks = "SELECT * FROM bookscatalog WHERE books_ID = '$id'";
        $result = $mysqli->query($sqlbooks);
        $resultInfo = $result->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalog</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style/styles.css">
    <!-- js scripy -->
    <script src="javaScript/cruds_Books.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="javaScript/sweetalert.min.js" defer></script>
</head>
<body>
    <div id="update-books">
            <div class="form">
                <input type="hidden" class="form-control" id="inpt_ID"  value="<?php echo $resultInfo['books_ID'] ?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputTitle">Title</label>
                        <input type="text" class="form-control" id="inpt_Title" placeholder="Title" value="<?php echo $resultInfo['Title'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="ISBN">ISBN </label>
                    <input type="text " class="form-control" id="inpt_ISBN" placeholder="ISBN" value="<?php echo $resultInfo['ISBN'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Author">Author </label>
                    <input type="text" class="form-control" id="inpt_Author" placeholder="Author" value="<?php echo $resultInfo['Author'] ?>">
                </div>
                <div class="form-group">
                    <label for="Publisher">Publisher </label>
                    <input type="text" class="form-control" id="inpt_Publisher" placeholder="Publisher " value="<?php echo $resultInfo['Publisher'] ?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="Year Published">Year Published</label>
                    <input type="text" class="form-control" id="inpt_Year_Published" placeholder="year published "  value="<?php echo $resultInfo['Year_Publisher'] ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label for="Category ">Category </label>
                    <input type="text" class="form-control" id="inpt_Category" placeholder="Category"  value="<?php echo $resultInfo['Category'] ?>">
                    </div>
                </div>
                <div>
                <button type="submit" id="btn_update_books" class="btn btn-primary" >Update</button>
                </div>
        </div>
    </div>

</body>
</html>
