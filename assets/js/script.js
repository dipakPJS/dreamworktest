 

 $(document).ready(function () {


/* ===== JQuery ajax section starts ====== */
$("#sku").on('keyup', function () {

  var sku = $("#sku").val();

  $.ajax({
    url: 'post.process.php',
    type: "POST",
    data: { sku: sku },
    success: function (datas) {

      if (datas == 'exists') {


        // show an error message if the sku id already exists

        alert("SKU Id already exists Please choose another one");
        $('#error-message').html('<p style = "color:red">SKU id already exists</p>');
        $("#save").attr("disabled", true);


      }

      else if (sku == "" || sku <= 0) {

        // show an available message if the sku id does not exists

        $('#error-message').html('<p style = "color:red">Please enter sku Id</p>');
        $("#save").attr("disabled", true);

      }

      else {

        $('#error-message').html('<p style = "color:green">SKU ID is available</p>');
        $("#save").attr("disabled", false);

      }
    }
  });

});


/* ===== JQuery ajax section ends ====== */


  // Jquery for Select Section starts 

  $("#productType").on("change", function () {

    var selectValue = $("#productType").val();

    if (selectValue == "") {

      $(".size, .weight, .height, .width, .length").css("display", "none");
      

      /* To remove required attribute if type is switched */

      $('#size, #weight, #height, #width, #length').removeAttr('required');
     


      /* JavaScript to reset input field if type is switched */

      $("#size, #weight, #height, #width, #length").val('');
    


    }

    else if (selectValue == "DVD") {


      $(".size").css("display", "block");
      $(".weight, .height, .width, .length").css("display", "none");
     


      $("#size").attr("required", true);

      /* To remove required attribute if type is switched */

      $('#weight, #height, #width, #length').removeAttr('required');
       


      /* JavaScript to reset input field if type is switched */


      $("#weight, #height, #width, #length").val('');
      



    }

    else if (selectValue == "Book") {


      $(".size, .height, .width, .length").css("display", "none");
      $(".weight").css("display", "block");
     


      $("#weight").attr("required", true);

      /* To remove required attribute if type is switched */

      $('#size, #height, #width, #length').removeAttr('required');
       

      /* JavaScript to reset input field if type is switched */


      $("#size, #height, #width, #length").val('');
      



    }

    else if (selectValue == "Furniture") {


      $(".size, .weight").css("display", "none");
      
      $(".height, .width, .length").css("display", "block");
     


      $("#height, #width, #length").attr("required", true);
     

      /* To remove required attribute if type is switched */

      $('#size, #weight').removeAttr('required');
       



      /* JavaScript to reset input field if type is switched */


      $("#size, #weight").val('');
      




    }

    else {

    }



  });

  // Jquery for Select Section ends 
 
 


/* ================= prevent default for <input type = "number"> starts ================== */

$('#price, #size, #weight, #height, #width, #length').on('keypress', function (e) {

  if (e.key === 'e' || e.key === '+' || e.key === '-' || e.key === 'E') {
    e.preventDefault();
  }

});

});
/* ================= prevent default for <input type = "number"> ends ================== */






/* ========== Jquery Section ends =============== */





