// File           js/miscellaneous.js / ibWebAdmin
// Purpose        collection of javascript functions
// Author         Lutz Brueckner <irie@gmx.de>
// Copyright      (c) 2000-2006 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details
// Created        <03/05/01 17:25:01 lb>
//
// $Id: miscellaneous.js,v 1.9 2006/07/08 17:14:43 lbrueckner Exp $


function $() {
    var element = null;
    if (typeof arguments[0] == 'string') {
        element = document.getElementById(arguments[0]);
    }
    return element;
}


function hide(id) {
    var  obj = $(id);
    if (obj) {
        obj.style.display = 'none';
    }
}

function display(id) {
    var  obj = $(id);
    if (obj) {
        obj.style.display = '';
    }
}

// put the given html string into the specified div
function setInnerHtml(html, id) {
    var  obj = $(id);
    if (obj) {
        obj.innerHTML = html;
    }
}

// find and return the value of the selected element in a selectlist
function selectedElement(source) {

    return source.options[source.selectedIndex].value;
}


// request and display the accociated values for a foreign key from the watchtable panel
function requestFKValues(table, column, value) {
    var req = new XMLHttpRequestClient(php_xml_http_request_server_url);
    req.Request("fk_values", new Array(table, column, value), "setInnerHtml", new Array());
}
function displayFKValues(html) {
    setInnerHtml(html, 'fk');
    display('fk');
}


function detailPrefix(type) {
    switch (type) {
    case 'table':
        return 't';
        break;
    case 'view':
        return 'v';
        break;
    case 'trigger':
        return 'r';
        break;
    case 'procedure':
        return 'p';
        break;
    default:
        return '';
    }
}


//
// manipulate the DOM to rearrange panels without reloading the page
//
function movePanel(idx, where) {

    var divs = getPanelDivs();
    var last = divs.length -1;
    var parent = divs[0].parentNode;
    var html = '';

    var req = new XMLHttpRequestClient(php_xml_http_request_server_url);
    req.Request("move_panel", new Array(idx, where), '', new Array());

    switch (where) {
    case 'up':
        if (idx == 0) return;
        html = parent.removeChild(divs[idx]);
        parent.insertBefore(html, divs[idx-1]);
        divs.swap(idx, idx-1);
        break;
    case 'down':
        if (idx == last) return;
        html = parent.removeChild(divs[idx]);
        if (idx == last-1) {
            movePanelBottom(parent, divs[last], html);
        }
        else {
            parent.insertBefore(html, divs[idx+2]);
        }
        divs.swap(idx, idx+1);
        break;
    case 'top':
        if (idx == 0) return;
        html = parent.removeChild(divs[idx]);
        parent.insertBefore(html, divs[0]);
        temp = divs[idx];
        divs.splice(idx, 1);
        divs.unshift(temp);
        break;
    case 'bottom':
        if (idx == last) return;
        html = parent.removeChild(divs[idx]);
        movePanelBottom(parent, divs[last], html);
        temp = divs[idx];
        divs.splice(idx, 1);
        divs.push(temp);
        break;
    }

    adjustPanelIndices(divs);
}

Array.prototype.swap = function (one, two) {
    var temp = this[one];
    this[one] = this[two];
    this[two] = temp;
}

// place the panel-div stored in html at the bottom of the page
function movePanelBottom(parent, lastpanel, html) {

    // if there is a debug-div at the bottom, place the panel above
    if (lastpanel.nextSibling) {
        parent.insertBefore(html, lastpanel.nextSibling);
    }
    // make the panel-div the last child of <body>
    else {
        parent.appendChild(html);
    }
}

// fix the panel index in the div ids and in the navigation links
function adjustPanelIndices(divs) {

    var mapareas = [];
    var i=0, k=0;
    for (i=0; i<divs.length; i++) {
        // adjust the div id
        divs[i].id = 'p' + i;

        // adjust the toggle-panel link
        var links = divs[i].getElementsByTagName('a');
        for (k=1; k<=2; k++) {     // k=0 is an anchor for the panel
            if (links[k].href.substring(0, 4) == 'java') {
                links[k].href = links[k].href.replace(/\d+/, i);
            }
            else {
                links[k].href = links[k].href.replace(/p=\d+/, 'p=' + i);
            }
        }

        // adjust the navigation links from the imagemap
        mapareas = divs[i].getElementsByTagName('map')[0].areas;
        for (k=0; k<mapareas.length; k++) {
            mapareas[k].href = mapareas[k].href.replace(/\d+/, i);
        }
    }
}

// find and return all panel divs
function getPanelDivs() {

    var divs = new Array();
    var all = document.getElementsByTagName('div');
    for (var i=0; i<all.length; i++) {
        if (all[i].id  &&  all[i].id.search(/^p\d+$/) == 0) {
            divs.push(all[i]);
        }
    }
    return divs;
}
