var dateClicked;
var eventClicked;
var updating = 0;
var fullday;

$(document).ready(function(){
          	var d = new Date();
          	var y = d.getFullYear();
          	var m = d.getMonth();
          	
			$('#calendar').fullCalendar({
						 header: {
                			left: 'month',
                			center: 'title',
               				right: 'today, prev,next'
            			},
            			editable: true,
            			selectable: true,
            			disableDragging: false,
                        allDayDefault: true,
                        url: true,
                        events: JSON.parse(ajax_getevents()),
                        eventClick: function(event) {
                        	eventClicked = event;
                        	$('#desc_content').text(event.description);
                        	$('#descEventDialog').dialog('option','title',event.title);
                        	$("#descEventDialog").dialog('option','position','center');
                        	$("#descEventDialog").dialog('open');
                        	$('.ui-dialog :button').blur();
                        },
                        eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
                        	var start = new String(event.start.toISOString().substr(0,10));
							if (event.end != null){
								var end = new String(event.end.toISOString().substr(0,10));
							}else{
								var end = start;
							}
							ajax_drop(event.id,start,end);
   						},
                        eventDrop: function(event, delta) {
							var start = new String(event.start.toISOString().substr(0,10));
							if (event.end != null){
								var end = new String(event.end.toISOString().substr(0,10));
							}else{
								var end = start;
							}
							ajax_drop(event.id,start,end);
						},
                        dayClick: function(date, allDay, jsEvent, view) {
       						//if($('#privileges').text() == 'admin'){
       						// $(this).css('background-color', 'red');
       						 var day = date.getDate();
       						 var month = date.getMonth()+1;
							 var year = date.getFullYear();
							 dateClicked = year+'-'+month+'-'+day;
							$('#enddate').datepicker({dateFormat: "yy-mm-dd"}); 
							$('#enddate').datepicker('option','minDate', date);
       						 fullday = allDay;
       						 $("#newEventDialog").dialog('open');
       						// }else{
       						// 	return false;
       						// }
    					}
                }).css('color','black');
if($('#privileges').text() == 'admin'){
$('#descEventDialog').dialog({
	height: 300,
	width: 520,
	autoOpen: false,
	resizable: false,
	modal: true,
	position: 'center',
	show: { effect: 'drop', direction: "up" },
	hide: { effect: 'drop', direction: "up"},
	buttons: {
		'Update':{ text: 'Update',
				   class: 'btn btn-inverse',
				   click: function(){
				$('#desc_content').text('');
				$(this).dialog('close');
				ajax_update_get(eventClicked.id);
				$("#newEventDialog").dialog('open');
				updating = 1;
				}
		},
		'Delete':{ text: 'Delete',
				   class: 'btn btn-inverse',
				   click: function(){
				$('#desc_content').text('');
				$(this).dialog('close');
				ajax_delete(eventClicked.id);
				}
		},
		'Ok':{ text: 'Ok',
			   class: 'btn btn-inverse',
			   click: function(){
				$('#desc_content').text('');
				$(this).dialog('close');
				}
			}
		}
});
}else{
$('#descEventDialog').dialog({
	height: 300,
	width: 520,
	autoOpen: false,
	resizable: false,
	modal: true,
	position: 'center',
	show: { effect: 'drop', direction: "up" },
	hide: { effect: 'drop', direction: "up"},
	buttons: {
		'Ok':{ text: 'Ok',
			   class: 'btn btn-inverse',
			   click: function(){
				$('#desc_content').text('');
				$(this).dialog('close');
			}
		},
	}
});
}
                
$("#newEventDialog").dialog({
	height: 500,
	width: 600,
	autoOpen: false,
	resizable: false,
	modal: true,
	position: 'bottom',
	//show: { effect: 'drop', direction: "up" },
	//hide: { effect: 'drop', direction: "up"},
	title: 'New Event',
	buttons: {
		'Ok':{	text: 'Ok',
				class: 'btn btn-inverse',
				click: function() {
					if(($('#title').val() == '')||($('#enddate').val() == '')){
						$('#title').focus();
					}else{
						$(this).dialog('close');
						if (updating){
							ajax_update_set(eventClicked.id);
							updating = 0;
							$('#enddate').show();
						}else{
							ajax_insert();
						}
					}
				}
		},
		'Cancel':{ text: 'Cancel',
				   class: 'btn btn-inverse',
				   click: function() {
					$(this).dialog("close");
					$('#enddate').show();
					flush_dialog();
					}
				}
        }
});

function flush_dialog(){
	$('#title').val('');
	$('#enddate').val('');
	//$('button[name="colors"].active').removeClass('active');
	$('#desc').val('');
}

function ajax_update_get(eid){
	var response = $.ajax({ 
		type: "GET",
		url: "events/ajaxSQL.php",
		data: {update_get: 1, id: eid},
		async: false,
		dataType: "json",
		}).responseText;
	var temp = new String(response);
	var json = JSON.parse(temp);
	$('#title').val(json.title);
	$('#enddate').val(json.end);
	$('#enddate').hide();
	//$('#color').val(json.color);
	$('#desc').val(json.description);
}

function ajax_update_set(eid){
	$.ajax({
		type: "GET",
		url: "events/ajaxSQL.php",
		data: {update_set: 1, id: eid, title:$('#title').val(), color:$('button[name="colors"].active').val(), desc:$('#desc').val()},
		success: function(){
			$('#calendar').fullCalendar('removeEvents');
			$('#calendar').fullCalendar('addEventSource', JSON.parse(ajax_getevents()));
			$('#calendar').fullCalendar('rerenderEvents');
			flush_dialog();
		}
		})
}
function ajax_delete(eid){
	$.ajax({ 
		type: "GET",
		url: "events/ajaxSQL.php",
		data: {del: 1, id: eid},
		success: function(){
			$('#calendar').fullCalendar('removeEvents');
			$('#calendar').fullCalendar('addEventSource', JSON.parse(ajax_getevents()));
			$('#calendar').fullCalendar('rerenderEvents');
		}
		})
}

function ajax_drop(id,start,end){
	$.ajax({ 
		type: "GET",
		url: "events/ajaxSQL.php",
		data: {id: id,newstart: start, newend: end},
		})
}

function ajax_insert(){
	$.ajax({
		type: "GET",
		url: "events/ajaxSQL.php",
		data: {insert: 1,title:$('#title').val(), startdate:dateClicked, enddate:$('#enddate').val(), color:$('button[name="colors"].active').val(), desc:$('#desc').val()},
		success: function(){
			$('#calendar').fullCalendar('removeEvents');
			$('#calendar').fullCalendar('addEventSource', JSON.parse(ajax_getevents()));
			$('#calendar').fullCalendar('rerenderEvents');
			flush_dialog();
		}
		})
}

function ajax_getevents(){
	var response = $.ajax({
			type: "GET",
			url: "events/ajaxSQL.php",
			data: null,
			async: false,
			dataType: "json",
		}).responseText;
		var string = new String(response);
		return string;
}
});