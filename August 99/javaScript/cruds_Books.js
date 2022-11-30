// Add bookd
$(document).ready(function(){
    $("#btn_add_books").click(function(){
      //console.log('click')
      const Title = $("#inpt_Title").val();
      const ISBN =$("#inpt_ISBN").val();
      const Author = $("#inpt_Author").val();
      const Publisher =$("#inpt_Publisher").val();
      const Year_Published =$("#inpt_Year_Published").val();
      const Category = $("#inpt_Category").val();
      
      const xml = new XMLHttpRequest();

    //   $('#loading').css('display', 'flex')
        xml.onload = function(){
        
          const obj = JSON.parse(xml.responseText);  

          if(this.readyState == 4 && this.status == 200){
            // $('#loading').css('display', 'none')
            if(obj.dataStatus[0] == false){
              swal({
                title: obj.message[0],
                text: obj.message[1],
                icon: obj.message[2]
            })
          }
          if(obj.dataStatus[0] == true){
            swal({
              title: obj.message[0] ,
              text: obj.message[1],
              icon: obj.message[2],
              buttons: "OK",
              dangerMode: true,
            }).then((success) => {
              
              if (success) {
                window.location.href = 'index.php';
              } 
          })
         
          
            }
          }
        };
        xml.open('POST', 'CRUD/formSubmit.php')
        xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xml.send(`addBooks=addbooks&Title=${Title}&ISBN=${ISBN}&Author=${Author}&Publisher=${Publisher}&Year_Published=${Year_Published}&Category=${Category}`);


  });
});

//Update books
$(document).ready(function(){
  $("#btn_update_books").click(function(){
    //console.log('click')
    const books_ID = $("#inpt_ID").val();
    const Title = $("#inpt_Title").val();
    const ISBN =$("#inpt_ISBN").val();
    const Author = $("#inpt_Author").val();
    const Publisher =$("#inpt_Publisher").val();
    const Year_Published =$("#inpt_Year_Published").val();
    const Category = $("#inpt_Category").val();
    const xml = new XMLHttpRequest();

  //   $('#loading').css('display', 'flex')
      xml.onload = function(){
      
        const obj = JSON.parse(xml.responseText);  

        if(this.readyState == 4 && this.status == 200){
          // $('#loading').css('display', 'none')
          if(obj.dataStatus[0] == false){
            swal({
              title: obj.message[0],
              text: obj.message[1],
              icon: obj.message[2]
          })
        }
        if(obj.dataStatus[0] == true){
          swal({
            title: obj.message[0] ,
            text: obj.message[1],
            icon: obj.message[2],
            buttons: "OK",
            dangerMode: true,
          }).then((willDelete) => {
            
            if (willDelete) {
                window.location.href = 'index.php';
            } 
        })
       
        
          }
        }
      };
      xml.open('POST', 'CRUD/formSubmit.php')
      xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xml.send(`update=updates&booksID=${books_ID}&Title=${Title}&ISBN=${ISBN}&Author=${Author}&Publisher=${Publisher}&Year_Published=${Year_Published}&Category=${Category}`);


});
});
//Update books
$(document).ready(function(){
  $("#btn_delete_books").click(function(){
    //console.log('click')
    const xml = new XMLHttpRequest();

  //   $('#loading').css('display', 'flex')
      xml.onload = function(){
      
        const obj = JSON.parse(xml.responseText);  

        if(this.readyState == 4 && this.status == 200){
          // $('#loading').css('display', 'none')
          if(obj.dataStatus[0] == false){
            swal({
              title: obj.message[0],
              text: obj.message[1],
              icon: obj.message[2]
          })
        }
        if(obj.dataStatus[0] == true){
          swal({
            title: obj.message[0] ,
            text: obj.message[1],
            icon: obj.message[2],
            buttons: "OK",
            dangerMode: true,
          }).then((willDelete) => {
            
            if (willDelete) {
                window.location.href = 'index.php';
            } 
        })
       
        
          }
        }
      };
      xml.open('POST', 'CRUD/formSubmit.php')
      xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xml.send(`delete=delete`);


});
});