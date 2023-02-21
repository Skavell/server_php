<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
<h1>Feedback Form</h1>
<form action="https://httpbin.org/post" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="appeal_type">Type of Appeal:</label>
    <select id="appeal_type" name="appeal_type" required>
        <option value="">-- Select Type --</option>
        <option value="complaint">Complaint</option>
        <option value="suggestion">Suggestion</option>
        <option value="gratitude">Gratitude</option>
    </select><br><br>
    <label for="appeal_text">Appeal Text:</label><br>
    <textarea id="appeal_text" name="appeal_text" rows="5" cols="50" required></textarea><br><br>
    <label for="response_option">Response Option:</label><br>
    <input type="checkbox" id="sms" name="response_option[]" value="sms">
    <label for="sms">SMS</label><br>
    <input type="checkbox" id="email" name="response_option[]" value="email">
    <label for="email">Email</label><br><br>
    <input type="submit" value="Send">
</form><br><br>
<a href="page2.php">Go to Page 2</a>
</body>
</html>