var editedID = 0;

$('#btnAddNewModal').click(function() {
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
        url: base_url + 'api/comment/add',
        type: 'post',
        data: {            
            Title : $('#Title').val(),            
            Content: $('#Content').val(),
            Author: $('#Author').val(),
            Location: $('#Location').val()
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Add New Comment');
        }        
    })
});

function editValue(ID) {
    editedID = ID;
    $.ajax({
        url: base_url + 'api/comment/get',
        type: 'post',
        data: {
            ID: ID
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == false) {
                showErrorToastr('Get Comment');
                return;
            }

            $('#TitleEdit').val(data.comment.Title);
            $('#ContentEdit').val(data.comment.Content);
            $('#AuthorEdit').val(data.comment.Author);
            $('#LocationEdit').val(data.comment.Location);
            $('#EditModal').modal('show');
        }
    })
    
    
}

$('#btnUpdate').click(function() {
    $.ajax({
        url: base_url + 'api/comment/update',
        type: 'post',
        data: {
            ID: editedID,
            Title : $('#TitleEdit').val(),            
            Content: $('#ContentEdit').val(),
            Author: $('#AuthorEdit').val(),
            Location: $('#LocationEdit').val()
        },
        success: function(res) {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Update Comment');
        }
    })
})



function deleteValue(ID) {
    editedID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/comment/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Comment');
        }
    })
});