require('./bootstrap');

function deleteUser(){

    alert('Are you sure?');
};


function init() {
    $('.delete').click(deleteUser);


}
$(document).ready(init);
