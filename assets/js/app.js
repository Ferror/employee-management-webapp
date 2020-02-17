require('bootstrap-reboot/dist/reboot.min.css');
require('../css/app.css');

let routes  = [
    {
        route: '/presence',
        element: 'PRESENCE-LINK',
    },
    {
        route: '/dashboard',
        element: 'DASHBOARD-LINK',
    },
];

/**
 * Po kliknięciu w przycisk:
 * > ma sie ustawic disabled = true
 * > pozostale przyciski maja byc diabled = false
 * > ma sie zaladowac content
 */

document.addEventListener("DOMContentLoaded", function() {
    routes.forEach(function (obj) {
        get(obj.route, obj.element);
    });
});

function get(route, elementId) {
    let element = document.getElementById(elementId);
    let request = new XMLHttpRequest();

    element.addEventListener('click', function () {
        document.querySelectorAll('.sidebar__item').forEach(function (item) {
            item.disabled = false;
        });
        element.disabled = true;
        request.open('GET', route, true);
        request.onload =  function () {
            document.getElementById('content').innerHTML = request.responseText;
        };
        request.send();
    });
}

function post(route, data) {
    let request = new XMLHttpRequest();

    request.open('POST', route, true);
    request.setRequestHeader('Content-Type', 'application/json');
    request.onload = function () {
        if (request.response.code === 200) {

        }
    };
    request.send(data);
}
