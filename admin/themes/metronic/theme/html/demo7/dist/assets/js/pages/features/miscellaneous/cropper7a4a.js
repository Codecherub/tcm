"use strict";var KTCropperDemo={init:function(){var e,t,n;e=document.getElementById("image"),t={crop:function(e){document.getElementById("dataX").value=Math.round(e.detail.x),document.getElementById("dataY").value=Math.round(e.detail.y),document.getElementById("dataWidth").value=Math.round(e.detail.width),document.getElementById("dataHeight").value=Math.round(e.detail.height),document.getElementById("dataRotate").value=e.detail.rotate,document.getElementById("dataScaleX").value=e.detail.scaleX,document.getElementById("dataScaleY").value=e.detail.scaleY;var t=document.getElementById("cropper-preview-lg");t.innerHTML="",t.appendChild(n.getCroppedCanvas({width:256,height:160}));var a=document.getElementById("cropper-preview-md");a.innerHTML="",a.appendChild(n.getCroppedCanvas({width:128,height:80}));var d=document.getElementById("cropper-preview-sm");d.innerHTML="",d.appendChild(n.getCroppedCanvas({width:64,height:40}));var o=document.getElementById("cropper-preview-xs");o.innerHTML="",o.appendChild(n.getCroppedCanvas({width:32,height:20}))}},n=new Cropper(e,t),document.getElementById("cropper-buttons").querySelectorAll("[data-method]").forEach(function(e){e.addEventListener("click",function(t){var a,d=e.getAttribute("data-method"),o=e.getAttribute("data-option"),r=e.getAttribute("data-second-option");try{o=JSON.parse(o)}catch(t){}if(a=r?o?n[d](o):n[d]():n[d](o,r),"getCroppedCanvas"===d){var i=document.getElementById("getCroppedCanvasModal").querySelector(".modal-body");i.innerHTML="",i.appendChild(a)}var c=document.querySelector("#putData");try{c.value=JSON.stringify(a)}catch(t){a||(c.value=a)}})}),document.getElementById("setAspectRatio").querySelectorAll('[name="aspectRatio"]').forEach(function(e){e.addEventListener("click",function(e){n.setAspectRatio(e.target.value)})}),document.getElementById("viewMode").querySelectorAll('[name="viewMode"]').forEach(function(a){a.addEventListener("click",function(a){n.destroy(),n=new Cropper(e,Object.assign({},t,{viewMode:a.target.value}))})}),document.getElementById("toggleOptionButtons").querySelectorAll('[type="checkbox"]').forEach(function(a){a.addEventListener("click",function(a){var d={};d[a.target.getAttribute("name")]=a.target.checked,t=Object.assign({},t,d),n.destroy(),n=new Cropper(e,t)})})}};jQuery(document).ready(function(){KTCropperDemo.init()});