/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 6);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/formularios/formularios.js":
/*!*************************************************!*\
  !*** ./resources/js/formularios/formularios.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var procesos = [];
var numero1Correcto = false;
var numero2Correcto = false;
$(function () {
  $("#email").change(function () {
    validarEmail($("#email"));
  });
}); // Petición por post donde se pasa la variable y para validarla en servidor

function validarEmail(input) {
  var datosPost = {};
  datosPost[input.attr("email")] = input.val();
  realizarValidacion(datosPost, null); // Se realiza la petición ajax
}

function realizarValidacion(datosPost, funcionCallback) {
  $.ajax({
    url: "/reources/php/formularios/formularios.php",
    method: 'POST',
    data: datosPost,
    type: "JSON",
    beforeSend: function beforeSend() {
      $("#spinner").show();
    }
  }) // Se trata la respuesta
  .done(function (errores) {
    var todoCorrecto = true;

    for (inputName in errores) {
      var erroresInput = errores[inputName];
      var divErrores = $("#".concat(inputName)).next("div");
      divErrores.html("");

      if (!$.isEmptyObject(erroresInput)) {
        for (tipoError in erroresInput) {
          divErrores.append("<div>".concat(erroresInput[tipoError], "</div>"));
        }

        todoCorrecto = false;
      }
    }
  }) // Si la petición falla lanza el alert de error
  .fail(function () {
    alert("HA OCURRIDO UN ERROR EN LA PETICIÓN");
  }) // Al terminar siempre se esconde el spinner
  .always(function () {
    procesos.pop();

    if (procesos.length === 0) {
      $("#spinner").hide();
    }
  });
}

/***/ }),

/***/ 6:
/*!*******************************************************!*\
  !*** multi ./resources/js/formularios/formularios.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/gato/Sites/purrHub/resources/js/formularios/formularios.js */"./resources/js/formularios/formularios.js");


/***/ })

/******/ });