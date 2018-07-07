// images
require('./images/blur-city.jpg');

import './main.scss';

console.log('start app');


function getFormData($form) {
    let formData = new FormData($form);
    let query = "";
    for (let pair of formData.entries()) {
        // console.log(pair[0]+ ', ' + pair[1]);
        query += pair[0] + "=" + pair[1];
    }

    return query;
}

function makeAjaxRequest($form) {
    
    let data = getFormData($form);
    let action = $form.getAttribute('action');
    let $resultTarget = document.querySelector('[data-result="' + $form.getAttribute('data-result-target') + '"]');
    console.log(data);
    let request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            $resultTarget.innerHTML = this.responseText;
        }
    };

    request.open("GET", action + "?" + data, true);
    request.send();
}


// bind events
var addEvent = function($element) {
    console.log('bind events');
    $element.addEventListener('submit', (event) =>  {
        event.preventDefault();
        console.log(event);
        makeAjaxRequest(event.target);
    });
}

// get forms
let $forms = document.querySelectorAll('[data-form="search"]');
for(let i = 0; i < $forms.length; i++) {
    let $form = $forms[i];
    addEvent($form);
}