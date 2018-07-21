NodeList.prototype.on = function (ev, cb) {
    this.forEach(item => {
        item.addEventListener(ev, cb)
    })
};

Element.prototype.findParents = function (selector) {
    let item = this.parentElement;
    while (!item.matches('body')) {
        if (item.matches(selector)) {
            return item;
        }
        else {
            item = item.parentElement;
        }
    }
    return null;
};