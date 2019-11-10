window.onerror = function(message, url, lineNum, columnNum, error) {
    // var log = document.getElementById('log');
    // log.innerText = '' +
    //   'Error: ' + message + 
    //   '\nURL: ' + url +
    //   '\nline: ' + lineNum +
    //   '\ncolumn: ' + columnNum;

    var error = '' +
      'Error: ' + message + 
      '\nURL: ' + url +
      '\nline: ' + lineNum +
      '\ncolumn: ' + columnNum;

    console.error(error)
}