$( "#state" ).autocomplete({
    source: getJsonInfoEJ6()
});

$( "#ui-id-1").addClass("bg-white col-md-5");

function json2array(json){
    var result = [];
    var keys = Object.keys(json);
    keys.forEach(function(key){
        result.push(json[key].nombre);
    });
    return result;
}

function getJsonInfoEJ6(){
	var jsonData = $.ajax({
        url: "../js/tp-jquery/eje-6-data.json",
        dataType: 'json',
        async: false
    });
return json2array(jsonData.responseJSON.provincias);
}