
// Add Book 
$('#add_book_form').submit(function(e){
    e.preventDefault();
}).validate({
    rules: {
        book_name:"required",
        book_author:"required",
        book_edition:{
            required:true,
            number: true
        },
        category:"required",
        quantity:"required",
    },

    messages:{
        book_name:"Please enter book name",
        book_author:"Please enter author name",
        book_edition:{
            required:"Please enter edition ",
            number: "Only numbers"
        },
        category:"Please enter book category",
        quantity:"Please enter a quantity"
    },
    submitHandler: function () {
        var data = $('#add_book_form').serialize();
        $.ajax({
                url:"books/add",
                beforeSubmit:function(){
                    $("#add_book_form :button").attr("disabled","disabled");
                    $("#add_book_form :button").html('<i class="fa-solid fa-spinner px-2"></i> Submitting');
                },
                type: "POST",
                data: data,
                success: function(response){
                    if(response){
                        $('#add_book_form .alert-success').html(response)
                        $('#add_book_form .alert-success').fadeIn();
                        $("#add_book_form :button").html('Submit');
                        $("#add_book_form :button").attr("disabled", false);
                        $('#add_book_form')[0].reset();
                        setTimeout(function(){
                             $('#add_book_form .alert-success').fadeOut();
                        },2000)
                    }

                }
        });
      }
})
// Edit Book