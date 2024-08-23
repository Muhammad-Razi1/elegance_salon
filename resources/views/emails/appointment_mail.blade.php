<!DOCTYPE html>
<html>
<head>
    <title>Appointment Details</title>
</head>
<body>
    <h1>Appointment Details</h1>
    <p><strong>Name:</strong> {{ $appointment['name'] }}</p>
    <p><strong>Date:</strong> {{ $appointment['date'] }}</p>
    <p><strong>Service:</strong> {{ $appointment['service'] }}</p>
    <p><strong>Time:</strong> {{ $appointment['time'] }}</p>
    <p><strong>Phone:</strong> {{ $appointment['phone'] }}</p>
    <p><strong>Message:</strong> {{ $appointment['message'] }}</p>
</body>
</html>