function isFunction (func) {
  return typeof func === 'function' || Object.prototype.toString.call(func) === '[object Function]'
}

export function stack_error(error) {
    if (typeof error.response.data == 'string') {
        toastr.error(error.response.status + ' ' + error.response.statusText)
    } else {
        let response = error.response
        let data = []
        if (response.data.errors) {
            data = response.data.errors        
        }
        else {
            data = response.data.messages
        }

        let content = '';

        Object.keys(data).map(function(key, index) {
          let value = data[key];

          content += '<span style="color: #e74c3c">' + value + '</span><br>';
        });

        Swal.fire({
            title: "Error",
            html: content
        });
            
    }
}

export function validURL(str) {
    if (!str) {
        return false;
    }
    
    var res = str.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
    if(res == null)
        return false;
    else
        return true;
}

export function getBrowser(){
    var userAgent = navigator.userAgent;
    if(userAgent.indexOf("Opera") != -1){
      return "Opera";
    }
    else if (userAgent.indexOf("MSIE") != -1){
      return "IE";
    }
    else if (userAgent.indexOf("Chrome") != -1){
      return "Chrome";
    }
    else if (userAgent.indexOf("Safari") != -1){
      return "Safari";
    }
    else if (userAgent.indexOf("Firefox") != -1){
      return "Firefox";
    }
}

export function isMobileBrowser()
  {
    if( navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)
    ){
        return true;
    }
    else {
        return false;
    }
}