var divIndex = 0;
var $_name;
$(function() {

    //this will show the form and fetch the maxindex from table so we can give next index to the new stic
    $('#add-notes').on('click', function(event) {
        $('.modal').show();
        $('#btn-n-save').hide();
        $('#btn-n-add').prop('disabled', false);
        $.ajax({
            url: "get_index.php",
            type: "GET",
            success: function(d) {
                var index = parseInt(d);
                if (isNaN(index)) {
                    divIndex = 0;
                } else {
                    divIndex = index;
                }
            },
            error: function(error) {
                console.log(error); // Handle any errors
            }
        })
        $.ajax({
            url: "get_userid.php",
            type: "GET",
            success: function(name) {
                $_name = name;
            }
        })
    });

    $('.close').on('click', function(event) {
        $('.modal').hide();
    });

    $('#btn-n-add').on('click', function(event) {
        divIndex++;
        event.preventDefault();
        /* Act on the event */
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth()); //January is 0!
        var yyyy = today.getFullYear();
        var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        today = dd + ' ' + monthNames[mm] + ' ' + yyyy;

        var $_noteTitle = document.getElementById('note-has-title').value;
        var $_noteDescription = document.getElementById('note-has-description').value;

        $html = '<div class = "card-view" id = "card" data-index ="' + divIndex + '">' + '<span class = "side-stick" ></span>' +
            '<h3 class = "title">' + $_noteTitle + '<i class = "point"></i></h3>' +
            '<p class = "note-date">' + today + '</p>' +
            '<p class="note-content text-muted">' + $_noteDescription + '</p>' + '<p>' + $_name + '</p></div>';
        var data = {
            title: $_noteTitle,
            description: $_noteDescription,
            index: divIndex,
        };
        $.ajax({
            url: 'save_data.php', // Replace with the actual URL of your PHP script
            type: 'POST',
            data: data,

            success: function(response) {
                // Handle the response from the PHP script
                console.log('Data saved successfully');
                // Optionally, you can perform additional actions after saving the data
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.error('Error occurred while saving data:', error);
            }
        });
        document.getElementById('note-has-title').value = '';
        document.getElementById('note-has-description').value = '';
        $('#note-full-container').prepend($html);
        $('.modal').hide();
    });
});