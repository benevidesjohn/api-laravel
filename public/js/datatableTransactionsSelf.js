$(function () {
    $("#table").DataTable({
        ajax: 'http://api.local/transactions/show-self',
        scrollCollapse: true,
        responsive: true,
        paging: true,
        processing: true,
        serverSide: true,
        deferRender: true,
        searching: true,
        order: [[3, "ASC"]],
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
        },
        columns: [
            {
                "width": "10%",
                "data": "account",
                "name": "account"
            },
            {
                "width": "38%",
                "data": "type",
                "name": "type"
            },
            {
                "width": "10%",
                "data": "amount",
                "name": "amount"
            },
            {
                "width": "15%",
                "data": "date",
                "name": "date"
            },
            {
                "width": "17%",
                "data": "acao",
                "name": "acao"
            },
        ]
    });
});
