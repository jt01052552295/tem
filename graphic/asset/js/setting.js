"use strict";
var dict = {
  "Title": {
    kr: "제목테스트",
    en: "En Title"
  },
  "copyright": {
    kr: "부산시 연제구 마곡천로 30번길, 18   l   T. +82-1855-3022   l   M. vacation1022@gmail.com",
    en: "18, Magokcheon-ro 30beon-gil, Yeonje-gu, Busan, Korea   l   T. +82-1855-3022   l   M. vacation1022@gmail.com"
  },
  "flag_eng": {
    kr: "영문",
    en: "English"
  },
  "flag_chn": {
    kr: "중문",
    en: "中國"
  },


}

var translator = $('body').translate({lang: "kr", t: dict}); //use English
/*
var translation = translator.get("Home"); 
var translation2 = translator.get("Download"); 
console.info(translation, translation2)
translator.lang("en"); //change to lang
var translation = translator.get("Home"); 
var translation2 = translator.get("Download"); 
*/

dict['sibal'] = {kr:"씨발", en:"Fucker"}

console.dir(dict)

document.title = translator.get("Title");
$('#copy_text').text(translator.get("copyright"));
$('#flag_eng').text(translator.get("flag_eng"));
$('#flag_chn').text(translator.get("flag_chn"));