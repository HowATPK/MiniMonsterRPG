function getUsers() {
    const apiUrl = "http://localhost/minimonsterrpg/";
    const $list = $('.users-list');

    $.ajax({
        url : apiUrl + '/?page=admin_users',
        dataType : 'json'
    })
    .done((res) => {
        $list.empty();
        
        res.forEach(el => {
            $list.append(`<tr>
                        <td>${el.ID_user}</td>
                        <td>${el.email}</td>
                        <td>${el.id_rola}</td>
                        <td>${el.money}</td>
                        </tr>`);
        });
    });
}


   