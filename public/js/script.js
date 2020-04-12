function showPaymentForm() {
    let seat_id = $("input:radio[name='seat_id_radio']:checked").val();
    if (seat_id===undefined) seat_id=0;
    $("#seat_id").val(seat_id);
    console.log(seat_id);
    $('#payment-tab').tab('show');
}