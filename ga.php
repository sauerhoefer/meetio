<?php
if( isset( $_ENV['USE_GA'] ) ){
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50708752-1', 'meetio.herokuapp.com');
  ga('send', 'pageview');
</script>
<?php	
}else{
?>
<script>
  function ga(i,s,o,g,r,a,m){
	console.log( i+ ' ' + s + ' ' + o + ' ' + g + ' ' + r );
 }
 </script>
 <?php
}
?>	