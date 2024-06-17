<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="../styles/booking.css">
</head>
<body>
    <!-- section 1 -->
    <div class="section1">
        <div class="navbar">
            <img src="../../assets/logo.png" alt="Logo XPLORE">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Package</a></li>
                <li><a href="#">History</a></li>
            </ul>
        </div>
        <h1>Book your trip!</h1>
        <div class="destination">Bunaken</div>
    </div>

    <!-- section 2 -->
    <div class="section2">
        <form>
            <label for="full-name">Full Name</label>
            <input type="text" id="full-name" name="full-name">
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            
            <label for="address">Address</label>
            <input type="text" id="address" name="address">
            
            <label for="guest">Guest</label>
            <input type="number" id="guest" name="guest">
            
            <label for="arrivals">Arrivals</label>
            <input type="date" id="arrivals" name="arrivals">
            
            <label for="leaving">Leaving</label>
            <input type="date" id="leaving" name="leaving">
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
