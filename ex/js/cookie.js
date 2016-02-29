<!--
     // 쿠키 생성
     function setCookie(cName, cValue, cDay){
          var expire = new Date();
          expire.setDate(expire.getDate() + cDay);
          cookies = cName + '=' + escape(cValue) + '; path=/template/ex/ '; 
          if(typeof cDay != 'undefined') cookies += ';expires=' + expire.toGMTString() + ';';
          document.cookie = cookies;
     }

     // 쿠키 가져오기
     function getCookie(cName) {
          cName = cName + '=';
          var cookieData = document.cookie;
          var start = cookieData.indexOf(cName);
          var cValue = '';
          if(start != -1){
               start += cName.length;
               var end = cookieData.indexOf(';', start);
               if(end == -1)end = cookieData.length;
               cValue = cookieData.substring(start, end);
          }
          return unescape(cValue);
     }
//-->