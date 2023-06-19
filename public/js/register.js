$(document).ready(function () {
    displayData();
});

function displayData() {
    var displayData = "true";
    $.ajax({
        url: "http://localhost/projetos_luis/sem_ideia/CodeIgniter-3.0.0/index.php/home/display",
        type: "POST",
        data: {
            displayData: displayData,
        },
        success: function (data, status) {
            $('#displayDataTable').html(data);
        },
    });
}

function addUser() {

    var name = $('#complete_name').val();
    var email = $('#complete_email').val();
    var mobile = $('#complete_mobile').val();
    var place = $('#complete_place').val();

    $.ajax({
        url: "http://localhost/projetos_luis/sem_ideia/CodeIgniter-3.0.0/index.php/home/insertResult",
        type: "POST",
        data: {
            name: name,
            email: email,
            mobile: mobile,
            place: place
        },
        success: function (data, status) {
            alert('deu boa')
            $("#completeModal").modal("hide");
            displayData();
        },
        error: function (xhr, status, error) {
            alert("aa")
            console.log("deu ruimmmm")
        }
    })
}



function updateUser(updateid) {
    $("#hiddendata").val(updateid)
    
    $.post("./updateUser", {updateid: updateid} , function(data,status) {
        var userId = JSON.parse(data);
        console.log(data);
        console.log(userId[0]);
        $('#update_name').val(userId[0].username);
        $('#update_email').val(userId[0].email);
        $('#update_mobile').val(userId[0].mobile);
        $('#update_place').val(userId[0].place); 
    });
    $("#updateModal").modal("show");
    
}
/* $.ajax({
    url: "http://localhost/projetos_luis/sem_ideia/CodeIgniter-3.0.0/index.php/home/updateUser",
    type: "POST",
    data: {
        name: name,
        email: email,
        mobile: mobile,
        place: place
    },
    success: function (data, status) {
        alert('deu boa')
        $("#completeModal").modal("hide");
        displayData();
    },
    erro: function(xhr, status, error){
        alert("aa")
        console.log("deu ruimmmm")
    }
}) */

function updateDetails () {
    var data = {}; 
    data['update_name'] = $("#update_name").val() 
    data['update_email'] = $("#update_email").val()     
    data['update_mobile'] = $("#update_mobile").val() 
    data['update_place'] = $("#update_place").val()
    data['hiddendata'] = $("#hiddendata").val() 
    $.post("./updateDetails", data, function (data, status) {
        $("#updateModal").modal("hide");
        displayData();
    }
    );
}

function deleteUser(deleteid){
    alert("aaaa")
    $.ajax({
        url: "./deleteUser",
        type: "POST",
        data: {
            deletesend: deleteid,
        },
        success: function (data, status) {
            displayData();
        }
    });
}

function closeModal(){
    $("#completeModal").modal("hide");
    $("#updateModal").modal("hide");
}
