$(document).ready(function() {
    load_member_datatable();
});

const load_member_datatable = props => {
    $('#membertable').DataTable();
    // var dataTable = $('#membertable').DataTable({
    //     "processing": true,
    //     "serverSide": true,
    //     "autoWidth" : false,
    //     "order": [],
    //     "columnDefs": [
    //         {
    //             "targets": [],
    //             "orderable": false,
    //         },
    //     ],
    //     "ajax": {
    //         url: admin_base_url + 'advertisement/datatable_userapplist',
    //         type: "POST",
    //         data: {
    //             fromDate: $('#fromDate').val(),
    //             toDate: $('#toDate').val(),
    //         }
    //     },
    //     "bDestroy": true
    // });
}