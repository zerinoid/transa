
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

$(document).ready(function() {
	$('#fullpage').fullpage({
		licenseKey: "OPEN-SOURCE-GPLV3-LICENSE",
		anchors: ['hea', 'abt', 'acts', 'pes', 'ctt','fc', 'ar','ja'],
		scrollingSpeed: 1500,
		css3: false,
		scrollOverflow: true,
	});
	//abre galeria lambe; fecha act
	var gal_lambe_aberta = false;

	$("#butgal_lambe").click(function(){
		
		if(gal_lambe_aberta == false){
			$('#gal_lambe').addClass('open');
			$('.act').addClass('close');
			gal_lambe_aberta = true;
		} 
	});
	//fecha galeria lambe; abre act
	$(".titulo-g").click(function(){
		
		if(gal_lambe_aberta == true){
			$('#gal_lambe').removeClass('open');
			$('.act').removeClass('close');
			gal_lambe_aberta = false;
		} 
	});
	//abre galeria muraw; fecha act
	var gal_muraw_aberta = false;

	$("#butgal_muraw").click(function(){
		
		if(gal_muraw_aberta == false){
			$('#gal_muraw').addClass('open');
			$('.act').addClass('close');
			gal_muraw_aberta = true;
		} 
	});
	//fecha galeria muraw; abre act
	$(".titulo-g").click(function(){
		
		if(gal_muraw_aberta == true){
			$('#gal_muraw').removeClass('open');
			$('.act').removeClass('close');
			gal_muraw_aberta = false;
		} 
	});
	//abre gal_low; fecha act
	var gal_low_aberta = false;

	$("#butgal_low").click(function(){
		
		if(gal_low_aberta == false){
			$('#gal_low').addClass('open');
			$('.act').addClass('close');
			gal_low_aberta = true;
		} 
	});
	//fecha gal_low; abre act
	$(".titulo-g").click(function(){
		
		if(gal_low_aberta == true){
			$('#gal_low').removeClass('open');
			$('.act').removeClass('close');
			gal_low_aberta = false;
		} 
	});
	//abre som_low; fecha act
	var som_low_aberta = false;

	$("#butsom_low").click(function(){
		
		if(som_low_aberta == false){
			$('#som_low').addClass('open');
			// $('.act').addClass('close');
			som_low_aberta = true;
		} 
	});
	//fecha som_low; abre act
	$(".x-close").click(function(){
		
		if(som_low_aberta == true){
			$('#som_low').removeClass('open');
			// $('.act').removeClass('close');
			som_low_aberta = false;
		} 
	});
	//desabilita rolagem em gal lambe
	document.getElementById('butgal_lambe').addEventListener('click', function(){
		fullpage_api.setAllowScrolling(false);
	});
	// reabilita rolagem gal lambe
	document.getElementById('off_lambe').addEventListener('click', function(){
		fullpage_api.setAllowScrolling(true);
	});
	//desabilita rolagem em gal muraw
	document.getElementById('butgal_muraw').addEventListener('click', function(){
		fullpage_api.setAllowScrolling(false);
	});
	// reabilita rolagem gal muraw
	document.getElementById('off_muraw').addEventListener('click', function(){
		fullpage_api.setAllowScrolling(true);
	});
	//desabilita rolagem em gal_low
	document.getElementById('butgal_low').addEventListener('click', function(){
		fullpage_api.setAllowScrolling(false);
	});
	//reabilita rolagem em gal_low
	document.getElementById('off_low').addEventListener('click', function(){
		fullpage_api.setAllowScrolling(true);
	});
	//botão voltar
	$(document).on('click', '#beck', function(){
		fullpage_api.moveTo('hea');
	});
	//botão flavia
	$(document).on('click', '#lfc', function(){
		fullpage_api.moveTo('pes', 0);
	});
	// botao ana
	$(document).on('click', '#lar', function(){
		fullpage_api.moveTo('pes', 1);
	});
	// botao joubert
	$(document).on('click', '#lja', function(){
		fullpage_api.moveTo('pes', 2);
	});
});