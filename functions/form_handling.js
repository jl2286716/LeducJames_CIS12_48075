<script>
	function getFormInfo(url){
		//split info at the "?"
		var info=url.split("?");//creates 'info' array
		//split the name value pairs at the second part of the 'info' array
		var nameValuePairs=info[1].split("&");
		//map info for object
		var obj=new Object();
		for(var i=0;i<nameValuePairs.length-1;i++){
			var map=nameValuePairs[i].split("=");
			name=map[0].replace("_"," ");	// Removes the underscore "_" from the 'name'
			value=map[1];
			obj[name]=value;
		}
		return obj;
	}	
	function adjustCharacters(field){
		for(var i=0;i<$_GET[field].length;i++){
			$_GET[field]=$_GET[field].replace("+"," ");
			$_GET[field]=$_GET[field].replace("%20"," ");
			$_GET[field]=$_GET[field].replace("%21","!");
			$_GET[field]=$_GET[field].replace("%22","\"");
			$_GET[field]=$_GET[field].replace("%23","#");
			$_GET[field]=$_GET[field].replace("%24","$");
			$_GET[field]=$_GET[field].replace("%25","%");
			$_GET[field]=$_GET[field].replace("%26","&");
			$_GET[field]=$_GET[field].replace("%27","'");
			$_GET[field]=$_GET[field].replace("%28","(");
			$_GET[field]=$_GET[field].replace("%29",")");
			$_GET[field]=$_GET[field].replace("%2A","*");
			$_GET[field]=$_GET[field].replace("%2B","+");
			$_GET[field]=$_GET[field].replace("%2C",",");
			$_GET[field]=$_GET[field].replace("%2D","-");
			$_GET[field]=$_GET[field].replace("%2E",".");
			$_GET[field]=$_GET[field].replace("%2F","/");
			$_GET[field]=$_GET[field].replace("%3A",":");
			$_GET[field]=$_GET[field].replace("%3B",";");
			$_GET[field]=$_GET[field].replace("%3C","<");
			$_GET[field]=$_GET[field].replace("%3D","=");
			$_GET[field]=$_GET[field].replace("%3E",">");
			$_GET[field]=$_GET[field].replace("%3F","?");
			$_GET[field]=$_GET[field].replace("%40","@");
			$_GET[field]=$_GET[field].replace("%5B","[");
			$_GET[field]=$_GET[field].replace("%5C","\\");
			$_GET[field]=$_GET[field].replace("%5D","]");
			$_GET[field]=$_GET[field].replace("%5E","^");
			$_GET[field]=$_GET[field].replace("%5F","_");
			$_GET[field]=$_GET[field].replace("%60","`");
			$_GET[field]=$_GET[field].replace("%7B","{");
			$_GET[field]=$_GET[field].replace("%7C","|");
			$_GET[field]=$_GET[field].replace("%7D","}");
			$_GET[field]=$_GET[field].replace("%7E","~");
		}
	}	
</script>