/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/utils.js ***!
  \*******************************/
function validateMetaURL(meta_url) {
  return new Promise(function (resolve, reject) {
    $.ajax({
      url: "validateMetaUrl/".concat(meta_url),
      success: function success(result) {
        resolve(result);
      },
      error: function error(err) {
        reject(err);
      }
    });
  });
}
/******/ })()
;