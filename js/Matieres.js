$(document).ready(function () {
    $('#tableMatiereS1').dataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
        },
        "ajax" : {
            "url" : "./Requetes.php",
            "type" : 'POST',
            "data": { "semestre": "1"} ,
            "dataSrc" :''
        },
        columns: [
            { data: 'Nom' },
            { data: 'NbHeures' },
            { data: 'DescMat' }
        ]
    });

    $('#tableMatiereS2').DataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
        },
        "ajax" : {
            "url" : "./Requetes.php",
            "type" : 'POST',
            "data": { "semestre": "2"} ,
            "dataSrc" :''
        },
        columns: [
            { data: 'Nom' },
            { data: 'NbHeures' },
            { data: 'DescMat' }
        ]
    });
    $('.dataTables_length').addClass('bs-select');
    });



  