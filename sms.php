<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMS SEND</title>
</head>
<body>
    <form action="sms_send.php" method="post">
        <table align="center" border="1">
            <tr>
                <td>Number</td>
                <td><input type="text" name="number"></td>
            </tr>
            <tr>
                <td>Message</td>
                <td><input type="text" name="message"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Send"></td>
            </tr>
        </table>
    </form>
</body>
</html>