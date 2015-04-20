<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Exercise</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
		$(document).ready(function()
		{
			$.get('/notes/index_html', function(res)
			{
				$('#notes').html(res);
			});
			$('form').submit(function()
			{
				$.post('/notes/create', $(this).serialize(), function(res)
				{
					$('#notes').html(res);
				});
				return false;
			});
		});
	</script>
</head>
<body>
	<h1>My Posts:</h1>
	<div id="notes"></div>
	<form action="notes/create" method="post">
		<p>
			<label for="note">Add a note: </label>
		</p>
		<p>
			<textarea name="note"></textarea>
		</p>
		<input type="submit" value="Post It!">
	</form>
</body>
</html>