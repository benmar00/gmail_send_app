<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Send Email</title>
</head>
<body>
    <form action="send.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" required><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea><br>

        <button type="submit" name="send">Send</button>
    </form>
</body>
</html>