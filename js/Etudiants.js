$(document).ready(function () {
    $('#tableEtudiant').dataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
        },
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,
        responsive: true,
        responsive: {
            details: {
                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
            }
        },
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        "ajax" : {
            "url" : "./Requetes.php",
            "type" : 'POST',
            "dataSrc" :''
        },
        columns: [
            { 
            data: 'Nom',
            render: function ( data, type, row, meta ) {
                return '<a href="'+row['LinkPagePerso']+'" target="_blank">'+data+'</a>';
            }
            },
            { data: 'Prenom' },
            { data: 'AdresseEmail' },
            { data: 'StatusEtudiant' },
            { data: 'NomSpecialite' }
        ]
    });
    $('.dataTables_length').addClass('bs-select');
});
