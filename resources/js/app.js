
    $( '#tokenize-1' ).tokenize2({
     sortable: true
    });


    $( '#search' ).on( 'keyup', function( e ) {
      var searchData = e.target.value;

      $.ajax(
          {
              url: 'app/ajax/search.php',
              method: 'POST',
              data: {
                  search: searchData
              },
              success( response ) {
                //   console.log( response);
                $( '#content' ).empty();
            
   

                $( '#content' ).html( response );
            
              },
              error( error ) {
                  console.log( error );
              }
          }
        
      )
    })





$('#category').change(  function() {
    $.ajax({
        url: 'app/ajax/ajax.php',
        method: 'POST',
        data: {
            type: 'category',
            data: $('#category').val()
        },
        success(response) {
            console.log(response);
            var data = JSON.parse(response);
            $( '#subcategory' ).children('option').remove();
            for (var data of Object.entries(data)) {
                var option = `<option value='${data[1].name}'>${data[1].name}</option>`;

                $('#subcategory').append(option);
            }
        },
        error(error) {
            console.log(error);
        }
    });
});

$('#area').on( 'change', function() {

    $.ajax({
        url: 'app/ajax/ajax.php',
        method: 'POST',
        data: {
            type: 'area',
            data: $('#area').val()
        },
        success(response) {
            var data = JSON.parse(response);

            $( '#city' ).val( '' ); 
            $('#city').children('option').remove();
            for (var data of Object.entries(data)) {
                var option = `<option value='${data[1].name}'>${data[1].name}</option>`;

                $( '#city' ).append( option );
             
            }
        }
    })
});

$( '#add-form' ).on( 'submit', function( e ) {
   
    e.preventDefault();

    var formData = new FormData( $(this)[0]);
    formData.set( 'Pod_Delatnost', $( '#tokenize-1').val().join( ',') )

    // console.log(formData);
    $.ajax(
        {
            url: 'app/ajax/insert.php',
            method: 'POST',
            
            data:  formData ,
            success( response) {
                console.log(response);
                $('.insert-modal').modal();
            },
            error( error ){
                console.log(error);
            },
            cache: false,
            contentType: false,
            processData: false
        }
    )
})

$('#update-form' ).on( 'submit', function( e ) {
    e.preventDefault();

    // var formData = new FormData( $(this)[0] );
    var formData = $( '#update-form' ).serializeArray(); 
    $.ajax(
        {
            url: 'app/ajax/update.php',
            method: 'POST',
            data: formData,
            success ( response ) {
                $('.update-modal').modal();
            },
            error( error ) {
                console.log( error );
            }
        }
    )
});


$('#detail-search').on( 'submit', function( e ) {
    e.preventDefault();

    var formData = $( '#detail-search' ).serializeArray();

    $.ajax(
       {
           url: 'app/ajax/detail_search.php',
           method: 'POST',
           data: formData,
           success( response ) {
               $('#content').empty();

               $('#content').html(response);
           },
           error( error ) {
               console.log( error );
           }
       }
   )

})