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

eval("jQuery(document).ready(function($) {\r\n  $(\"#data-ini\").mask(\"99/99/9999\",{placeholder:\"mm/dd/yyyy\"});\r\n  $(\"#data-fim\").mask(\"99/99/9999\",{placeholder:\"mm/dd/yyyy\"});\r\n  $(\"#cep\").mask('99999-999');\r\n  $('#telefone').mask(\"(99) 99999-999?9\").ready(function(event) {\r\n    var target, phone, element;\r\n    target = (event.currentTarget) ? event.currentTarget : event.srcElement;\r\n    phone = target.value.replace(/\\D/g, '');\r\n    element = $(target);\r\n    element.unmask();\r\n    if(phone.length > 10) {\r\n        element.mask(\"(99) 99999-999?9\");\r\n    } else {\r\n        element.mask(\"(99) 99999-999?9\");\r\n    }\r\n  });\r\n});\r\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL2Z1bmNvZXMuanM/MWE5NSJdLCJzb3VyY2VzQ29udGVudCI6WyJqUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCQpIHtcclxuICAkKFwiI2RhdGEtaW5pXCIpLm1hc2soXCI5OS85OS85OTk5XCIse3BsYWNlaG9sZGVyOlwibW0vZGQveXl5eVwifSk7XHJcbiAgJChcIiNkYXRhLWZpbVwiKS5tYXNrKFwiOTkvOTkvOTk5OVwiLHtwbGFjZWhvbGRlcjpcIm1tL2RkL3l5eXlcIn0pO1xyXG4gICQoXCIjY2VwXCIpLm1hc2soJzk5OTk5LTk5OScpO1xyXG4gICQoJyN0ZWxlZm9uZScpLm1hc2soXCIoOTkpIDk5OTk5LTk5OT85XCIpLnJlYWR5KGZ1bmN0aW9uKGV2ZW50KSB7XHJcbiAgICB2YXIgdGFyZ2V0LCBwaG9uZSwgZWxlbWVudDtcclxuICAgIHRhcmdldCA9IChldmVudC5jdXJyZW50VGFyZ2V0KSA/IGV2ZW50LmN1cnJlbnRUYXJnZXQgOiBldmVudC5zcmNFbGVtZW50O1xyXG4gICAgcGhvbmUgPSB0YXJnZXQudmFsdWUucmVwbGFjZSgvXFxEL2csICcnKTtcclxuICAgIGVsZW1lbnQgPSAkKHRhcmdldCk7XHJcbiAgICBlbGVtZW50LnVubWFzaygpO1xyXG4gICAgaWYocGhvbmUubGVuZ3RoID4gMTApIHtcclxuICAgICAgICBlbGVtZW50Lm1hc2soXCIoOTkpIDk5OTk5LTk5OT85XCIpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgICBlbGVtZW50Lm1hc2soXCIoOTkpIDk5OTk5LTk5OT85XCIpO1xyXG4gICAgfVxyXG4gIH0pO1xyXG59KTtcclxuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHJlc291cmNlcy9hc3NldHMvanMvZnVuY29lcy5qcyJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTsiLCJzb3VyY2VSb290IjoiIn0=");

/***/ }
/******/ ]);