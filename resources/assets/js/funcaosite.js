
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

jQuery(document).ready(function($) {
  function highlight_map_states(){
    if($(".states_section").length>0){
       $(".states_section .list_states .item .link").hover(function(){
         var a="#state_"+$(this).text().toLowerCase();
         $(a).attr("class","state hover")
       },function(){
         var a="#state_"+$(this).text().toLowerCase();
         $(a).attr("class","state")
       })
    }
  };
});
