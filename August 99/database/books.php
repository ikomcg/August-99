<?php 
    

    function books(){
        include 'server.php';
        $sqlbooks = "SELECT * FROM bookscatalog ";
        $resultBook = $mysqli->query($sqlbooks);


    while($result = mysqli_fetch_array($resultBook)){

        echo '<tr> 
                <td>'.$result['Title'].'</td>
                <td>'.$result['ISBN'].'</td>
                <td>'.$result['Author'].'</td>
                <td>'.$result['Publisher'].'</td>
                <td>'.$result['Year_Publisher'].'</td>
                <td>'.$result['Category'].'</td>
                <td>
                    <button type="button" class="btn btn-secondary btn-lg" >
                      <a href=Edit_Del.php?ID='.$result['books_ID'].' >Edit</a>  
                    </button>
                    <button type="button" class="btn btn-secondary btn-lg" > <a href='.$result['books_ID'].' >DEL</a></button>
                </td>
            </tr>';
    }

    }

?>