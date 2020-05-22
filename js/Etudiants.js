$(document).ready(function () {
    $('#tableEtudiant').dataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
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
