var editedServiceID = 0;

$('#btnAddNewModal').click(function() {
    $('#resource').val('');
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#newDocumentForm').valid()) {
        return;
    }

    $.ajax({
		url: base_url + "api/article/add",
		method: "POST",
		data: new FormData(document.getElementById('newDocumentForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
			if (res.success == true) {
                showSuccessToastr('Add New Article');
				document.location.reload();
            }
            else {
                showErrorToastr('Add New Article');
            }
        },
        error: function (err) {
            showErrorToastr('Add New Article');
        }
	});
});

function deleteService(ID) {
    editedServiceID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/article/delete',
        method : 'post',
        data: {
            ID : editedServiceID
        },
        success: function() {
            showSuccessToastr('Delete Article');
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Article');
        }
    })
})

function editService(ID) {    
    $('#ID_Edit').val(ID);

    $.ajax({
        url: base_url + 'api/article/get',
        type: 'post', 
        data: {
            ID : ID
        },
        success: function(res) {
            var data = JSON.parse(res);
            data = data.data;
            if (data.success == false) {
                showErrorToastr('Get Detail');
                return;
            }
            
            $('#TitleEdit').val(data.Title);
            $('#DateEdit').val(data.Date);
            $('#DurationEdit').val(data.Duration);
            $('#LinkEdit').val(data.Link);            
            $('#editModal').modal('show');
        }
    });    
}

$('#btnUpdate').click(function() {
    $.ajax({
        url: base_url + 'api/article/update',
        method: "POST",
		data: new FormData(document.getElementById('updateDocumentForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
        success: function(res){
            if (res.success == true)               
                document.location.reload();
            else   
                showErrorToastr(res.message);
        },
        error: function(err) {
            showErrorToastr('Update Document');
        }
    })
})