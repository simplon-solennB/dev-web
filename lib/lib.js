function addClass(el, className) {
    if (el)
        el.classList.add(className);
}

function rmClass(el, className) {
    if (el)
        el.classList.remove(className);
}

function addRemoveClass(target, addClass, rmClass) {
    if (target) {
        target.classList.add(addClass);
        target.classList.remove(rmClass);
    } else
        console.log('no target to addRemoveClass...');
}

/**
 * applique une liste de style à un element
 * @param el
 * @param values
 */
function style(el, values) {
    for (var p in values) {
        el.style[p] = values[p];
    }
}

/**
 * set le z-index
 * @param el
 * @param newIndex
 */
function zId(el, newIndex) {
    el.style.zIndex = newIndex;
}

function byId(elId) {
    return document.getElementById(elId)
}

/**
 * renvoie <a href="">...</a>
 * @param text
 * @param link
 * @returns {Element}
 */
function href(text, link) {
    var a = document.createElement('a');
    a.setAttribute('href', link);
    a.textContent = text;
    return a;
}

function removeChildren(container) {
    [].slice.call(container.children).forEach(function (item) {
        container.removeChild(item);
        }
    )
}