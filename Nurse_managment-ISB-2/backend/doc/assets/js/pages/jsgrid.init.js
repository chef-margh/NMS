var JsDBSource={loadData:function(a){console.log(a);var n=$.Deferred();return $.ajax({type:"GET",url:"assets/data/jsgrid.json",data:a,success:function(e){var t=$.grep(e,function(e){return!(a.Name&&!(-1<e.Name.indexOf(a.Name))||a.Age&&e.Age!==a.Age||a.Address&&!(-1<e.Address.indexOf(a.Address))||a.Country&&e.Country!==a.Country)});n.resolve(t)}}),n.promise()},insertItem:function(e){return $.ajax({type:"POST",url:"assets/data/jsgrid.json",data:e})},updateItem:function(e){return $.ajax({type:"PUT",url:"assets/data/jsgrid.json",data:e})},deleteItem:function(e){return $.ajax({type:"DELETE",url:"assets/data/jsgrid.json",data:e})},countries:[{Name:"",Id:0},{Name:"United States",Id:1},{Name:"Canada",Id:2},{Name:"United Kingdom",Id:3},{Name:"France",Id:4},{Name:"Brazil",Id:5},{Name:"China",Id:6},{Name:"Russia",Id:7}]};!function(a){"use strict";var e=function(){this.$body=a("body")};e.prototype.createGrid=function(e,t){e.jsGrid(a.extend({height:"550",width:"100%",filtering:!0,editing:!0,inserting:!0,sorting:!0,paging:!0,autoload:!0,pageSize:10,pageButtonCount:5,deleteConfirm:"Do you really want to delete the entry?"},t))},e.prototype.init=function(){var e={fields:[{name:"Name",type:"text",width:150},{name:"Age",type:"number",width:50},{name:"Address",type:"text",width:200},{name:"Country",type:"select",items:JsDBSource.countries,valueField:"Id",textField:"Name"},{type:"control"}],controller:JsDBSource};this.createGrid(a("#jsGrid"),e)},a.GridApp=new e,a.GridApp.Constructor=e}(window.jQuery),function(e){"use strict";window.jQuery.GridApp.init()}();