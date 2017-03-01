/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.l = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };

/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};

/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};

/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("jQuery(document).ready(function($) {\r\n  $(\".data\").mask(\"99/99/9999\",{placeholder:\"mm/dd/yyyy\"});\r\n  $(\"#cep\").mask('99999-999');\r\n  $('.telefone').mask(\"(99) 99999-999?9\").ready(function(event) {\r\n    var target, phone, element;\r\n    target = (event.currentTarget) ? event.currentTarget : event.srcElement;\r\n    phone = target.value.replace(/\\D/g, '');\r\n    element = $(target);\r\n    element.unmask();\r\n    if(phone.length > 10) {\r\n        element.mask(\"(99) 99999-999?9\");\r\n    } else {\r\n        element.mask(\"(99) 99999-999?9\");\r\n    }\r\n  });\r\n\r\n  $('.grid').DataTable();\r\n});\r\n\r\ntinymce.init({\r\n  selector: 'textarea',  // change this value according to your HTML\r\n  cache_suffix: '?v=4.1.6'\r\n});\r\n\r\njQuery(document).ready(function($) {\r\n  $(document).on('click','.btnAdcCode', function(){\r\n    var variavel = $(this).data('ag');\r\n    $('#modalLinksExternos').modal('show');\r\n    $('.idAgenciaLink').val(variavel);\r\n    return variavel;\r\n  });\r\n\r\n  $(document).on('click', '.btnAddItem', function(){\r\n    $('.conteudoInput').append('<div class=\"col-md-4\"><input type=\"text\" name=\"titulo[]\" value=\"\" placeholder=\"Titulo\" class=\"form-control\"></div>')\r\n    $('.conteudoInput').append('<div class=\"col-md-8\"><div class=\"input-group\"><input type=\"text\" name=\"link[]\" class=\"form-control\" placeholder=\"Adicionar Codigo para incorporação\"><span class=\"input-group-btn\"><button class=\"btn btn-default btnAddItem\" type=\"button\"> Add <i class=\"fa fa-plus-circle fa-1x\" aria-hidden=\"true\"></i> </button></span></div></div>');\r\n  });\r\n\r\n});\r\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL2Z1bmNvZXMuanM/MWE5NSJdLCJzb3VyY2VzQ29udGVudCI6WyJqUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCQpIHtcclxuICAkKFwiLmRhdGFcIikubWFzayhcIjk5Lzk5Lzk5OTlcIix7cGxhY2Vob2xkZXI6XCJtbS9kZC95eXl5XCJ9KTtcclxuICAkKFwiI2NlcFwiKS5tYXNrKCc5OTk5OS05OTknKTtcclxuICAkKCcudGVsZWZvbmUnKS5tYXNrKFwiKDk5KSA5OTk5OS05OTk/OVwiKS5yZWFkeShmdW5jdGlvbihldmVudCkge1xyXG4gICAgdmFyIHRhcmdldCwgcGhvbmUsIGVsZW1lbnQ7XHJcbiAgICB0YXJnZXQgPSAoZXZlbnQuY3VycmVudFRhcmdldCkgPyBldmVudC5jdXJyZW50VGFyZ2V0IDogZXZlbnQuc3JjRWxlbWVudDtcclxuICAgIHBob25lID0gdGFyZ2V0LnZhbHVlLnJlcGxhY2UoL1xcRC9nLCAnJyk7XHJcbiAgICBlbGVtZW50ID0gJCh0YXJnZXQpO1xyXG4gICAgZWxlbWVudC51bm1hc2soKTtcclxuICAgIGlmKHBob25lLmxlbmd0aCA+IDEwKSB7XHJcbiAgICAgICAgZWxlbWVudC5tYXNrKFwiKDk5KSA5OTk5OS05OTk/OVwiKTtcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgICAgZWxlbWVudC5tYXNrKFwiKDk5KSA5OTk5OS05OTk/OVwiKTtcclxuICAgIH1cclxuICB9KTtcclxuXHJcbiAgJCgnLmdyaWQnKS5EYXRhVGFibGUoKTtcclxufSk7XHJcblxyXG50aW55bWNlLmluaXQoe1xyXG4gIHNlbGVjdG9yOiAndGV4dGFyZWEnLCAgLy8gY2hhbmdlIHRoaXMgdmFsdWUgYWNjb3JkaW5nIHRvIHlvdXIgSFRNTFxyXG4gIGNhY2hlX3N1ZmZpeDogJz92PTQuMS42J1xyXG59KTtcclxuXHJcbmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oJCkge1xyXG4gICQoZG9jdW1lbnQpLm9uKCdjbGljaycsJy5idG5BZGNDb2RlJywgZnVuY3Rpb24oKXtcclxuICAgIHZhciB2YXJpYXZlbCA9ICQodGhpcykuZGF0YSgnYWcnKTtcclxuICAgICQoJyNtb2RhbExpbmtzRXh0ZXJub3MnKS5tb2RhbCgnc2hvdycpO1xyXG4gICAgJCgnLmlkQWdlbmNpYUxpbmsnKS52YWwodmFyaWF2ZWwpO1xyXG4gICAgcmV0dXJuIHZhcmlhdmVsO1xyXG4gIH0pO1xyXG5cclxuICAkKGRvY3VtZW50KS5vbignY2xpY2snLCAnLmJ0bkFkZEl0ZW0nLCBmdW5jdGlvbigpe1xyXG4gICAgJCgnLmNvbnRldWRvSW5wdXQnKS5hcHBlbmQoJzxkaXYgY2xhc3M9XCJjb2wtbWQtNFwiPjxpbnB1dCB0eXBlPVwidGV4dFwiIG5hbWU9XCJ0aXR1bG9bXVwiIHZhbHVlPVwiXCIgcGxhY2Vob2xkZXI9XCJUaXR1bG9cIiBjbGFzcz1cImZvcm0tY29udHJvbFwiPjwvZGl2PicpXHJcbiAgICAkKCcuY29udGV1ZG9JbnB1dCcpLmFwcGVuZCgnPGRpdiBjbGFzcz1cImNvbC1tZC04XCI+PGRpdiBjbGFzcz1cImlucHV0LWdyb3VwXCI+PGlucHV0IHR5cGU9XCJ0ZXh0XCIgbmFtZT1cImxpbmtbXVwiIGNsYXNzPVwiZm9ybS1jb250cm9sXCIgcGxhY2Vob2xkZXI9XCJBZGljaW9uYXIgQ29kaWdvIHBhcmEgaW5jb3Jwb3Jhw6fDo29cIj48c3BhbiBjbGFzcz1cImlucHV0LWdyb3VwLWJ0blwiPjxidXR0b24gY2xhc3M9XCJidG4gYnRuLWRlZmF1bHQgYnRuQWRkSXRlbVwiIHR5cGU9XCJidXR0b25cIj4gQWRkIDxpIGNsYXNzPVwiZmEgZmEtcGx1cy1jaXJjbGUgZmEtMXhcIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+IDwvYnV0dG9uPjwvc3Bhbj48L2Rpdj48L2Rpdj4nKTtcclxuICB9KTtcclxuXHJcbn0pO1xyXG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gcmVzb3VyY2VzL2Fzc2V0cy9qcy9mdW5jb2VzLmpzIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOyIsInNvdXJjZVJvb3QiOiIifQ==");

/***/ }
/******/ ]);