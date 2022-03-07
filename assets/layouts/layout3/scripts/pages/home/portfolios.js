var editedSlideID = 0;


$('#btnAddNewModal').click(function() {
    $('#resource').val('');
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#newPortfolioForm').valid()) {
        return;
    }

    $.ajax({
		url: base_url + "api/slide/add",
		method: "POST",
		data: new FormData(document.getElementById('newPortfolioForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
			if (res.success == true) {
                showSuccessToastr('Add New Slide');
				document.location.reload();
            }
            else {
                showErrorToastr('Add New Slide');
            }
        },
        error: function (err) {
            showErrorToastr('Add New Slide');
        }
	});
});

function deleteSlide(ID) {
    editedSlideID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/slide/delete',
        method : 'post',
        data: {
            ID : editedSlideID
        },
        success: function() {
            showSuccessToastr('Delete Slide');
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Slide');
        }
    })
})

function editSlide(ID) {    
    $('#ID_Edit').val(ID);

    $.ajax({
        url: base_url + 'api/slide/get',
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
            
            $('#imgPortfolio').attr('src', base_url + 'assets/images/slides/' + data.Attach);
            $('#editModal').modal('show');

        }
    });    
}

$('.portfolio-camera').click(function() {    
    $('#Portfolio_Edit').click();
});

$('#Portfolio_Edit').change(function () {
    readURL(this, $('#imgPortfolio'));
});

function readURL(input, avatar) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$(avatar)
				.attr('src', e.target.result);
		};

		reader.readAsDataURL(input.files[0]);
	}
}

$('#btnUpdate').click(function() {
    $.ajax({
        url: base_url + 'api/slide/update',
        method: "POST",
		data: new FormData(document.getElementById('updateServiceForm')),
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
            showErrorToastr('Update Slide');
        }
    })
});

function deleteValue(ID) {
    editedID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/portfolio/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Portfolio');
        }
    })
});

$('#btnUpdatePortfolio').click(function() {
    if(!$('#jobForm').valid())
        return;

    var editedId = $('#ID').val();

    $.ajax({
		url: base_url + "api/portfolio/update",
		method: "POST",
		data: new FormData(document.getElementById('jobForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
			if (res.success == true) {
                document.location.href = base_url + 'admin/portfolios';
            }
            else {
                showErrorToastr(editedId == 0 ? 'Add New Job' : 'Edit Job');
            }
        },
        error: function (err) {
            showErrorToastr(editedId == 0 ? 'Add New Job' : 'Edit Job');
        }
	});
});


// Descriptions

$('#btnAddNewDescriptionModal').click(function() {
    $('#AddNewDescriptionModal').modal('show');
});

$('#btnAddNewDescription').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
        url: base_url + 'api/portfolio/description/add',
        type: 'post',
        data: {            
            PortfolioID: $('#ID').val(),
            Title : $('#Description').val(),                                   
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Add New Description');
        }        
    })
});

function editValue(ID) {
    editedID = ID;
    $.ajax({
        url: base_url + 'api/portfolio/description/get',
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

            $('#DescriptionEdit').val(data.description.Title);           
            $('#EditDescriptionModal').modal('show');
        }
    })
    
    
}

$('#btnUpdateDescription').click(function() {
    $.ajax({
        url: base_url + 'api/portfolio/description/update',
        type: 'post',
        data: {
            ID: editedID,
            Title : $('#DescriptionEdit').val(),                      
        },
        success: function(res) {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Update Description');
        }
    })
})



function deleteDescription(ID) {
    editedID = ID;
    $('#deleteDescriptionModal').modal('show');
}

$('#btnDeleteDescription').click(function() {
    $.ajax({
        url : base_url + 'api/portfolio/description/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Description');
        }
    })
});
