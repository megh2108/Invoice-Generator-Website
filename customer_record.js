$('#fil').click(function() {

    let mb = $('#mb').val();
    if (mb != "") {

        $.ajax({
            method: "post",
            url: "http://localhost/internship/invoice/filter.php",
            data: {
                Mobile: mb
            }

        }).done(function(response) {

            $('#t1').html(response);
        })
    }

});

$('.del').click(function() {

    let val = $(this).val();
    console.log(val);

    $.ajax({
        method: "POST",
        url: "http://localhost/Invoice/delete_cust_record.php",

        data: {
            value: val
        }
    }).done(function(response) {

        alert("Data deleted successfully");
        $('#t_' + val).html("");
    });

});

var value;

$('.edit').click(function() {

    value = $(this).val();
    // console.log(value);
    $.ajax({
        method: "post",
        url: "http://localhost/Invoice/correction_cust.php",
        data: {
            value: value
        }
    }).done(function(msg) {
        $('#correct').html(msg);
    })

});
// $('#sub').click(function() {
//     var custid = value;
//     console.log(custid);

//     let ocname = $('#ocname').val();
//     let dcname = $('#dcname').val();
//     let mobno = $('#mobno').val();
//     let badd = $('#badd').val();
//     let bstate = $('#bstate').val();
//     let bcode = $('#bcode').val();
//     let sadd = $('#sadd').val();
//     let sstate = $('#sstate').val();
//     let scode = $('#scode').val();
//     $.ajax({
//         method: "post",
//         url: "http://localhost/Invoice/correct_cust_details.php",
//         data: {
//             custid: custid,
//             ocname: ocname,
//             dcname: dcname,
//             mobno: mobno,
//             badd: badd,
//             bstate: bstate,
//             bcode: bcode,
//             sadd: sadd,
//             sstate: sstate,
//             scode: scode
//         }
//     }).done(function() {
//         alert("data updated successfully");
//     });
//     $('#ocname').val('');
//     $('#dcname').val('');
//     $('#mobno').val('');
//     $('#badd').val('');
//     $('#bstate').val('');
//     $('#bcode').val('');
//     $('#sadd').val('');
//     $('#sstate').val('');
//     $('#scode').val('');



// });

// $(document).ready(function() {

//     $('#check').click(function() {

//         if ($('#check').is(":checked")) {
//             $('#sadd').val($('#badd').val());
//             $('#sstate').val($('#bstate').val()).change();
//             // $('#sstate').html($('#bstate').html());
//             $('#scode').val($('#bcode').val());
//         } else {

//             $('#sadd').val("");
//             $('#sstate').val("");
//             $('#scode').val("");

//         }

//     });






    $('.select1').select2();
    $('.select').select2();
