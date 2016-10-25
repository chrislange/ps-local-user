<?php
$username = str_replace(" ", "", $_POST['username']);
$ninumber = str_replace(" ", "", $_POST['ninumber']);
$company = $_POST['company'];
?>


	<div class="command-output">

		<?php
			echo "$", "Password = ", $ninumber, "$ -AsSecureString";
		?>
			<br><br>
		<?php
			echo "New-LocalUser '", $username, "' -Password $", "Password -FullName '", $username, "' -Description '", $company, "'"
		?>
	</div>
