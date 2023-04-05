// ==UserScript==
// @name         My new BingBot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       Anton Panov
// @match        https://www.bing.com/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==

let links = document.links;
let btnK = document.getElementById("sb_form_go")[0];
let keywords = ["10 самых популярных шрифтов от Google", "Отключение редакций и ревизий в WordPress", "Вывод произвольных типов записей и полей в WordPress", "Взаимодействие PHP и MySQL"];
let keyword = keywords[getRandom(0, keywords.length)];

if (btnK != undefined) {
  document.getElementById("sb_form_q")[0].value = keyword;
  btnK.click();
} else {
  for(let i = 0; i < links.length; i++) {
    if (links[i].href.indexOf("napli.ru") != -1) {
      let link = links[i];
      console.log("Нашел строку " + link);
      link.click();
      break;
    }
  }
}

function getRandom(min,max){
  return Math.floor(Math.random() * (max-min) + min );
}
