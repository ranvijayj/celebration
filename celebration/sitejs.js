//for arranging hotels
/*

function validate()
    {
if(document.form.country.value=='')
{
alert('Please enter place to go.');
document.form.country.focus();
return false;
}
else
{
document.form.submit();
return true;
}	
      }*/
    
	
	//for date picker of arraival
	$(function() {
		$( "#datepicker" ).datepicker({
			altField: "#alternate",
			altFormat: "DD",
			
		});
	});
	
	//for date picker of arraival
	$(function() {
		$( "#datepicker1" ).datepicker({
            altField: "#alternate1",
			altFormat: "DD",
			onClose: function() {/*  
   
    t1=document.getElementById('datepicker').value;
    t2=document.getElementById('datepicker1').value;
    var one_day=1000*60*60*24;
	
	   var x=t1.split("/");     
    var y=t2.split("/");
	
	var date1=new Date(x[2],(x[0]-1),x[1]);  
    var date2=new Date(y[2],(y[0]-1),y[1]);
    var month1=x[0]-1;
    var month2=y[0]-1; 
	
	
	 _Diff=Math.ceil((date2.getTime()-date1.getTime())/(one_day));
   
   
     document.getElementById('differenceofdates').innerHTML=_Diff+'&nbsp;nights';
     document.getElementById('differenceofdates1').value=_Diff+'&nbsp;nights';
	// IsNumeric(-1) == false;
                                     */}
		});
	});
	
	
	

	