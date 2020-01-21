function getItems() {
    const apiUrl = "http://localhost/minimonsterrpg/";
    const $list2 = $('.niewiem');


    $.ajax({
    url : apiUrl + '/?page=user_items',   
    dataType : 'json'
    })
    .done((res) => {
        $list2.empty();
        
        res.forEach(el => {
            $list2.append(`<tr>
                        <td>${el.item_name}</td>
                        <td>${el.item_cost}</td>
                        </tr>`);
        });
    });
}