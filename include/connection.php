<?php

    $conn = mysqli_connect("localhost","root","","buson");
    if(!$conn)
    {
        echo('<script type="text/javascript">
			alert("Error: Database could not Connect");
			</script>');
    }




?>

