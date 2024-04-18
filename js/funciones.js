function $() {

    var elements = new Array();

    for (var i = 0; i < arguments.length; i++) {

      var element = arguments[i];

      if (typeof element == 'string') {
        if (document.getElementById) {
          element = document.getElementById(element);
        } else if (document.all) {
          element = document.all[element];
        }
      }

      elements.push(element);

    }

    if (arguments.length == 1 && elements.length > 0) {
      return elements[0];
    } else {
      return elements;
    }
}
