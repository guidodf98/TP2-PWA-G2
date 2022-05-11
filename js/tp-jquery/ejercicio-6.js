$( "#state" ).autocomplete({
    source: getJsonInfo()
});

function json2array(json){
    var result = [];
    var keys = Object.keys(json);
    keys.forEach(function(key){
        result.push(json[key].nombre);
    });
    return result;
}

function getJsonInfo(){
	var jsonData = $.ajax({
        url: "../js/tp-jquery/eje-6-data.json",
        dataType: 'json',
        async: false
    });
    console.log(json2array(jsonData.responseJSON.provincias));
return json2array(jsonData.responseJSON.provincias);
}