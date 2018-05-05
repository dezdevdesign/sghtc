export default class helpers {
    constructor() {}
    showNotification(message, type, icon) {
        $.notify('<i class="'+ icon +'"></i> ' + message, {
            pos: 'bottom-right',
            timeout : 1000,
            status: type
        });
    }

    displayErrors(response, message) {
        let html = '<ul>';
        $.each(response, function (key, item) {
            html += '<li>'+item+'</li>'
        });
        html += '</ul>'
        this.showNotification('<strong>'+message+'</strong><br>' +html, 'danger', 'fa fa-times');
    }

    loadSelect(url, val, element, text) {
        axios.get(url + val)
        .then(function(response) {
            element.empty().trigger("change");
            element.select2({
                placeholder: 'Select ' + text,
                data: response.data,
                theme: 'bootstrap',
            })
            element.val(null).trigger("change");
        })
        .catch(function(error) {
            console.log(error);
        });
    }

    getFormData(data){
        var unindexed_array = data;
        var indexed_array = {};

        $.map(unindexed_array, function(n, i){
            indexed_array[n['name']] = n['value'];
        });

        return indexed_array;
    }

    replaceFormData(data, name, value) {
        for (let index = 0; index < data.length; ++index) {
            if (data[index].name == name) {
                data[index].value = value;
                break;
            }
        }
    }
}
