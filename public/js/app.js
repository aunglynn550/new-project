import 'https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js';



/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	
/******/ 	
/******/ })()
;


document.getElementById('parallax').animate(
    { transform: ['translateY(0)', 'translateY(100px)']},
    { duration: 10000, // Totally arbitrary!
      fill: 'both',
      timeline: new ScrollTimeline({
          scrollOffsets: [
              new CSSUnitValue(0, 'px'),
              new CSSUnitValue(200, 'px')
          ]
      })
    });


const scrollTracker = document.querySelector(".scroll-tracker");


// var scrollTrackingTimeline = new ScrollTimeline({

//     scource: document.scrollingElement,
//     orientation :"block",
//     scrollOffsets: [
//         new CSSUnitValue(10, '%'),
//         new CSSUnitValue(98, '%')
//     ]
// });





// scrollTracker.animate(
//     {
//         transform : ['scaleX(0)','scaleX(1)']
//     },
//     {
//         duration : 1,
//         timeline: scrollTrackingTimeline,
//     }

// );

