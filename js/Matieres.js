$(document).ready(function () {
    $('#tableMatiereS1').dataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
        },
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,
        responsive: true,
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: {
            details: {
                renderer: function ( api, rowIdx, columns ) {
                    var data = $.map( columns, function ( col, i ) {
                        return col.hidden ?
                            '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                                '<td>'+col.title+':'+'</td> '+
                                '<td>'+col.data+'</td>'+
                            '</tr>' :
                            '';
                    } ).join('');
     
                    return data ?
                        $('<table/>').append( data ) :
                        false;
                }
            }
        },
        "ajax" : {
            "url" : "./Requetes.php",
            "type" : 'POST',
            "data": { "semestre": "1"} ,
            "dataSrc" :''
        },
        columns: [
            { 
                data: 'Nom',
                width: "30%",
             },
            { 
                data: 'NbECTS' ,
                width: "20%",
            },
            { 
                data: 'DescMat' ,
                width: "50%"
            }
        ]
    });

    $('#tableMatiereS2').DataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
        },
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,
        responsive: true,
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        "ajax" : {
            "url" : "./Requetes.php",
            "type" : 'POST',
            "data": { "semestre": "2"} ,
            "dataSrc" :''
        },
        columns: [
            { 
                data: 'Nom',
                width: "30%",
             },
            { 
                data: 'NbECTS' ,
                width: "20%",
            },
            { 
                data: 'DescMat' ,
                width: "50%"
            }
        ]
    });

    $('.dataTables_length').addClass('bs-select');

    $('#tableMatiereS2').DataTable()
    .columns.adjust()
    .responsive.recalc();

    $('#tableMatiereS1').DataTable()
    .columns.adjust()
    .responsive.recalc();
    });



  