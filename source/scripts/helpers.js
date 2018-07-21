NodeList.prototype.on = function (ev, cb) {
  if (typeof ev === 'object') {
    ev.forEach(e => {
      this.forEach(item => {
        item.addEventListener(e, cb)
      })
    })
  } else {
    this.forEach(item => {
      item.addEventListener(ev, cb)
    })
  }
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