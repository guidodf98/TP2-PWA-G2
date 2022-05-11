var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))

triggerTabList.forEach(function (triggerEl){
    var div = $('#div-tab');
    triggerEl.addEventListener('click', function (event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: "./contenido/ejercicio-2.php",
            data: {'data': event.target.id},
            dataType: 'json',
            success: function(data){
                div.children().remove();
                div.append(data);
            }
        });
    });
});