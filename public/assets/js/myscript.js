
$(document).ready(function () {
    $('#btnLoad').click(function () {
        $.get("http://127.0.0.1:8000/json2").done(function (data) {
            console.log(data);
            $.each(data, function (key, product) {
                $('#tblProducts > tbody:last-child').append(
                    '<tr>' +
                    '<td>' + product.id + '</td>' +
                    '<td>' + product.name + '</td>' +
                    '<td>' + product.description + '</td>' +
                    '<td>' + product.price + '</td>' +
                    '<td>' + product.category_id + '</td>' +
                    '</tr>'
                );
            });
        });
   

    $('#tblProducts_datatable').DataTable({
        "ajax": "http://127.0.0.1:8000/json2",
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "description" },
            { "data": "price" },
            { "data": "category_id" }
        ]
    });

    $('#tblLoad_Employees').DataTable({
        "ajax": "localhost:3000/api/employees",
        "columns": [
            { "data": "id" },
            { "data": "first_name" },
            { "data": "email" },
            { "data": "gender" }
        ]
    });
});
});