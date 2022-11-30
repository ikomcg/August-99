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
    <script src="javaScript/index.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="javaScript/sweetalert.min.js" defer></script>
</head>
<body>
    <div>
        <div class="add_book">
            <button type="button" class="btn btn-success" id="btn_modal_form">Add</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Year Publisher</th>
                    <th scope="col">Category</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'database/books.php';
                    books();
                ?>
            </tbody>
    </table>
    </div>

    <div id="add-books">
            <div class="form">
                <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-outline-info" id="close_modal_form_add">X</button>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputTitle">Title</label>
                        <input type="text" class="form-control" id="inpt_Title" placeholder="Title">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="ISBN">ISBN </label>
                    <input type="text " class="form-control" id="inpt_ISBN" placeholder="ISBN">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Author">Author </label>
                    <input type="text" class="form-control" id="inpt_Author" placeholder="Author">
                </div>
                <div class="form-group">
                    <label for="Publisher">Publisher </label>
                    <input type="text" class="form-control" id="inpt_Publisher" placeholder="Publisher ">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="Year Published">Year Published</label>
                    <input type="text" class="form-control" id="inpt_Year_Published">
                    </div>
                    <div class="form-group col-md-2">
                    <label for="Category ">Category </label>
                    <input type="text" class="form-control" id="inpt_Category">
                    </div>
                </div>
                <button type="submit" id="btn_add_books" class="btn btn-primary">Add</button>
        </div>
    </div>

</body>
</html>
