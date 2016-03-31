          
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
   var cnt_3 = cnt_2 = cnt_4 = cnt_1 = 1, cnt = " ";
    $(".text").hide();


    $('#anc_dd').on('click',function(){
                    $('#row_table_1 tr').last().after('<tr><td class="col_1"><input type="text" name="txtbx1-' + cnt_1 + '" ></td>'+
                            '<td class="col_2"><input type="text" name="txtbx2-' + cnt_1 + '" value="' + cnt + '">'+
                            '</td><td class="col_3"><input type="text" name="txtbx3-' + cnt_1 + '" value="' + cnt + '"></td>'+
                            '<td class="col_4"><input type="text" name="txtbx4-' + cnt_1 + '" value="' + cnt + '"></td>'+
							'<td class="col_5"><input type="text" name="txtbx5-' + cnt_1 + '" value="' + cnt + '"></td>'+
                            '</tr>');
                    cnt_1++;
                });
            $("#anc_em").click(function() {
                if(cnt_1>1)
                   
                
                {$('#row_table_1 tr:last-child').remove();
                  
               cnt_1--;}
                else 
                    alert("No more rows to remove");
                });
                
           
 $('#add_row_table_2').on('click',function(){

   $('#row_table_2 tr').last().after('<tr><td class="col_1"><input type="text" name="txtbx1-' + cnt_2 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" name="txtbx2-' + cnt_2 + '" value="' + cnt + '">'+
                            '</td><td class="col_3"><input type="text" name="txtbx3-' + cnt_2 + '" value="' + cnt + '"></td>'+
                            '<td class="col_4"><input type="text" name="txtbx4-' + cnt_2 + '" value="' + cnt + '"></td>'+
                            '</tr>');
                    cnt_2++;
                });
      $("#remove_row_table_2").click(function() {
          if(cnt_2>1)
          {  $('#row_table_2 tr:last-child').remove();
                  
               cnt_2--;}
           else
               alert("No more rows to remove");
               
        });

$('#add_row_table_3').on('click',function(){

   $('#row_table_3 tr').last().after('<tr><td class="col_1"><input type="text" name="txtbx1-' + cnt_3 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" name="txtbx2-' + cnt_3 + '" value="' + cnt + '">'+
                            '</td><td class="col_3"><input type="text" name="txtbx3-' + cnt_3 + '" value="' + cnt + '"></td>'+
                            '<td class="col_4"><input type="text" name="txtbx4-' + cnt_3 + '" value="' + cnt + '"></td>'+
                            '</tr>');
                    cnt_3++;
                });
      $("#remove_row_table_3").click(function() {
          if(cnt_3>1)
          {  $('#row_table_3 tr:last-child').remove();
                  
               cnt_3--;}
           else
               alert("No more rows to remove");
               
        });
var cnt_4 = 1;
$('#add_row_table_4').on('click',function(){

   $('#row_table_4 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_4 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_4 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_4++;
                });
      $("#remove_row_table_4").click(function() {
          if(cnt_4>1)
          {  $('#row_table_4 tr:last-child').remove();
                  
               cnt_4--;}
           else
               alert("No more rows to remove");
               
        });

var cnt_5 = 1;
$('#add_row_table_5').on('click',function(){

   $('#row_table_5 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_5 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_5 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_5 + '" value="' + cnt + '">'+

                            '</tr>');
                    cnt_5++;
                });
      $("#remove_row_table_5").click(function() {
          if(cnt_5>1)
          {  $('#row_table_5 tr:last-child').remove();
                  
               cnt_5--;}
           else
               alert("No more rows to remove");
               
        });
         

var cnt_6 = 1;
$('#add_row_table_6').on('click',function(){

   $('#row_table_6 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_6 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_6 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_6 + '" value="' + cnt + '">'+

                            '</tr>');
                    cnt_6++;
                });
      $("#remove_row_table_6").click(function() {
          if(cnt_6>1)
          {  $('#row_table_6 tr:last-child').remove();
                  
               cnt_6--;}
           else
               alert("No more rows to remove");
               
        });
         

var cnt_7 = 1;
$('#add_row_table_7').on('click',function(){

   $('#row_table_7 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_7 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_7 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_7 + '" value="' + cnt + '">'+
 '<td class="col_4"><input type="text" style="width:100%;" name="txtbx4-' + cnt_7 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_7++;
                });
      $("#remove_row_table_7").click(function() {
          if(cnt_7>1)
          {  $('#row_table_7 tr:last-child').remove();
                  
               cnt_7--;}
           else
               alert("No more rows to remove");
               
        });
         
var cnt_8 = 1;
$('#add_row_table_8').on('click',function(){

   $('#row_table_8 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_8 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_8 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_8+ '" value="' + cnt + '">'+
 '<td class="col_4"><input type="text" style="width:100%;" name="txtbx4-' + cnt_8 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_8++;
                });
      $("#remove_row_table_8").click(function() {
          if(cnt_8>1)
          {  $('#row_table_8 tr:last-child').remove();
                  
               cnt_8--;}
           else
               alert("No more rows to remove");
               
        });
         
var cnt_9 = 1;
$('#add_row_table_9').on('click',function(){

   $('#row_table_9 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_9 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_9 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_9 + '" value="' + cnt + '">'+
 '<td class="col_4"><input type="text" style="width:100%;" name="txtbx4-' + cnt_9 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_9++;
                });
      $("#remove_row_table_9").click(function() {
          if(cnt_9>1)
          {  $('#row_table_9 tr:last-child').remove();
                  
               cnt_9--;}
           else
               alert("No more rows to remove");
               
        });
         

var cnt_10 = 1;
$('#add_row_table_10').on('click',function(){

   $('#row_table_10 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_10 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_10 + '" value="' + cnt + '">'+
			 

                            '</tr>');
                    cnt_10++;
                });
      $("#remove_row_table_10").click(function() {
          if(cnt_10>1)
          {  $('#row_table_10 tr:last-child').remove();
                  
               cnt_10--;}
           else
               alert("No more rows to remove");
               
        });
         
var cnt_11 = 1;
$('#add_row_table_11').on('click',function(){

   $('#row_table_11 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_11 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_11 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_11 + '" value="' + cnt + '">'+
			 '<td class="col_4"><input type="text" style="width:100%;" name="txtbx4-' + cnt_11 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_11++;
                });
      $("#remove_row_table_11").click(function() {
          if(cnt_11>1)
          {  $('#row_table_11 tr:last-child').remove();
                  
               cnt_11--;}
           else
               alert("No more rows to remove");
               
        });
         
var cnt_12 = 1;
$('#add_row_table_12').on('click',function(){

   $('#row_table_12 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_12 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_12 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_12 + '" value="' + cnt + '">'+
				 '<td class="col_4"><input type="text" style="width:100%;" name="txtbx4-' + cnt_12 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_12++;
                });
      $("#remove_row_table_12").click(function() {
          if(cnt_12>1)
          {  $('#row_table_12 tr:last-child').remove();
                  
               cnt_12--;}
           else
               alert("No more rows to remove");
               
        });
         
var cnt_13 = 1;
$('#add_row_table_13').on('click',function(){

   $('#row_table_13 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_13 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_13 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_13 + '" value="' + cnt + '">'+

                            '</tr>');
                    cnt_13++;
                });
      $("#remove_row_table_13").click(function() {
          if(cnt_13>1)
          {  $('#row_table_13 tr:last-child').remove();
                  
               cnt_13--;}
           else
               alert("No more rows to remove");
               
        });


var cnt_14 = 1;
$('#add_row_table_14').on('click',function(){

   $('#row_table_14 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_14 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_14 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_14 + '" value="' + cnt + '">'+
			 '<td class="col_4"><input type="text" style="width:100%;" name="txtbx4-' + cnt_14 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_14++;
                });
      $("#remove_row_table_14").click(function() {
          if(cnt_14>1)
          {  $('#row_table_14 tr:last-child').remove();
                  
               cnt_14--;}
           else
               alert("No more rows to remove");
               
        });



var cnt_15 = 1;
$('#add_row_table_15').on('click',function(){

   $('#row_table_15 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_15 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_15 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_15 + '" value="' + cnt + '">'+
			 '<td class="col_4"><input type="text" style="width:100%;" name="txtbx4-' + cnt_15 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_15++;
                });
      $("#remove_row_table_15").click(function() {
          if(cnt_15>1)
          {  $('#row_table_15 tr:last-child').remove();
                  
               cnt_15--;}
           else
               alert("No more rows to remove");
               
        });


var cnt_16 = 1;
$('#add_row_table_16').on('click',function(){

   $('#row_table_16 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_16 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_16 + '" value="' + cnt + '">'+
			
                            '</tr>');
                    cnt_16++;
                });
      $("#remove_row_table_16").click(function() {
          if(cnt_16>1)
          {  $('#row_table_16 tr:last-child').remove();
                  
               cnt_16--;}
           else
               alert("No more rows to remove");
               
        });


         
var cnt_17 = 1;
$('#add_row_table_17').on('click',function(){

   $('#row_table_17 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_17 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_17 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_17 + '" value="' + cnt + '">'+

                            '</tr>');
                    cnt_17++;
                });
      $("#remove_row_table_17").click(function() {
          if(cnt_17>1)
          {  $('#row_table_17 tr:last-child').remove();
                  
               cnt_17--;}
           else
               alert("No more rows to remove");
               
        });


var cnt_18 = 1;
$('#add_row_table_18').on('click',function(){

   $('#row_table_18 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_18 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_18 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_18 + '" value="' + cnt + '">'+

                            '</tr>');
                    cnt_18++;
                });
      $("#remove_row_table_18").click(function() {
          if(cnt_18>1)
          {  $('#row_table_18 tr:last-child').remove();
                  
               cnt_18--;}
           else
               alert("No more rows to remove");
               
        });
    

var cnt_19 = 1;
$('#add_row_table_19').on('click',function(){

   $('#row_table_19 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_19 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_19 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_19 + '" value="' + cnt + '">'+

                            '</tr>');
                    cnt_19++;
                });
      $("#remove_row_table_19").click(function() {
          if(cnt_19>1)
          {  $('#row_table_19 tr:last-child').remove();
                  
               cnt_19--;}
           else
               alert("No more rows to remove");
               
        });
    
var cnt_20 = 1;
$('#add_row_table_20').on('click',function(){

   $('#row_table_20 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_20 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_20 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_20 + '" value="' + cnt + '">'+
			 '<td class="col_4"><input type="text" style="width:100%;" name="txtbx4-' + cnt_20 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_20++;
                });
      $("#remove_row_table_20").click(function() {
          if(cnt_20>1)
          {  $('#row_table_20 tr:last-child').remove();
                  
               cnt_20--;}
           else
               alert("No more rows to remove");
               
        });
    

var cnt_21 = 1;
$('#add_row_table_21').on('click',function(){

   $('#row_table_21 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_21 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_21 + '" value="' + cnt + '">'+
			
                            '</tr>');
                    cnt_21++;
                });
      $("#remove_row_table_21").click(function() {
          if(cnt_21>1)
          {  $('#row_table_21 tr:last-child').remove();
                  
               cnt_21--;}
           else
               alert("No more rows to remove");
               
        });

	
var cnt_22 = 1;
$('#add_row_table_22').on('click',function(){

   $('#row_table_22 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_22 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_22 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_22 + '" value="' + cnt + '">'+

                            '</tr>');
                    cnt_22++;
                });
      $("#remove_row_table_22").click(function() {
          if(cnt_22>1)
          {  $('#row_table_22 tr:last-child').remove();
                  
               cnt_22--;}
           else
               alert("No more rows to remove");
               
        });
		
		var cnt_23 = 1;
$('#add_row_table_23').on('click',function(){

   $('#row_table_23 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_23 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_23 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_23 + '" value="' + cnt + '">'+
			 '<td class="col_4"><input type="text" style="width:100%;" name="txtbx4-' + cnt_23 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_23++;
                });
      $("#remove_row_table_23").click(function() {
          if(cnt_23>1)
          {  $('#row_table_23 tr:last-child').remove();
                  
               cnt_23--;}
           else
               alert("No more rows to remove");
               
        });
		
		
var cnt_24 = 1;
$('#add_row_table_24').on('click',function(){

   $('#row_table_24 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_24 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_24 + '" value="' + cnt + '">'+
			 '<td class="col_3"><input type="text" style="width:100%;" name="txtbx3-' + cnt_24 + '" value="' + cnt + '">'+
			 '<td class="col_4"><input type="text" style="width:100%;" name="txtbx4-' + cnt_24 + '" value="' + cnt + '">'+
                            '</tr>');
                    cnt_24++;
                });
      $("#remove_row_table_24").click(function() {
          if(cnt_24>1)
          {  $('#row_table_24 tr:last-child').remove();
                  
               cnt_24--;}
           else
               alert("No more rows to remove");
               
        });
		
		
		var cnt_25 = 1;
$('#add_row_table_25').on('click',function(){

   $('#row_table_25 tr').last().after('<tr><td class="col_1"><input style="width:100%;" type="text" name="txtbx1-' + cnt_25 + '" value="' + cnt + '"></td>'+
                            '<td class="col_2"><input type="text" style="width:100%;" name="txtbx2-' + cnt_25 + '" value="' + cnt + '">'+
			               '</tr>');
                    cnt_25++;
                });
      $("#remove_row_table_25").click(function() {
          if(cnt_25>1)
          {  $('#row_table_25 tr:last-child').remove();
                  
               cnt_25--;}
           else
               alert("No more rows to remove");
               
        });

});

function getResults(elem) {
    elem.checked && elem.value == "Show" ? $(".text").show() : $(".text").hide();
};