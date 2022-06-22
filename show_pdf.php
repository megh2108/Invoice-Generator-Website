<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<div id="OK">
		<table id="printThisTable">
			<tr>
				<td>1</td>
				<td>ABC</td>
				<td>OK</td>
			</tr>
		</table>
	</div>

	<button type="button" id="printMe">Print</button>

</body>

<script type="text/javascript">
$('#printMe').click(function() {
    var divContents = document.getElementById("OK").innerHTML;
    var a = window.open('', '', 'height=500, width=500');
    a.document.write('<html>');
    a.document.write('<body>');
    a.document.write(divContents);
    a.document.write('</body></html>');
    a.document.close();
    a.print();
});
</script>

</html>