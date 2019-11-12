<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservation</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reservation.css">
</head>
<body>
<?php
include('header.php');
?>

<main>
    <h1>Checkout</h1>
    <section id="dataForm">


        <form method="POST" action="confirmation.php">
            <h1>Book Now and Relax in this homely place</h1>
            <fieldset>
                <p>Date</p>
                <label for="checkInDate">Check-In Date:</label>
                <input name="checkInDate" type="text" value='mm/dd/yyyy' autofocus>
                <span class="error"></span>

                <label for="checkOutDate">Check Out Date:</label>
                <input name="checkOutDate" type="text" value='mm/dd/yyyy'>
                <span class="error"></span>
            </fieldset>

            <fieldset>
                <p>Preference</p>
                <label for="roomType">Room Type:</label>
                <select name="roomType" type="text">
                    <option value=0>Select</option>
                    <option value=1>Superior Queen Room</option>
                    <option value=2>Superior King Room</option>
                    <option value=3>Deluxe Queen Room</option>
                    <option value=4>Deluxe King Room</option>
                    <option value=5>Suite</option>
                </select>
                <span class="error"></span>

                <label for="smokePreference">SmokePreference:</label>
                <select name="Type of Room" type="text">
                    <option value=0>Select</option>
                    <option value=1>Smoke</option>
                    <option value=2>Do not smoke</option>
                </select>
                <span class="error"></span>
            </fieldset>
            <fieldset>
                <p>Guest</p>
                <label for="guestNumber">Guest Number:</label>
                <select name="guestNumber" type="text">
                    <option value=0>Select</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                </select>
            </fieldset>


            <fieldset>
                <p>Name</p>
                <label for="firstName">First Name:</label>
                <input name="firstName" type="text" value=''>
                <span class="error"></span>

                <label for="lastName">Last Name:</label>
                <input name="lastName" type="text" value=''>
                <span class="error"></span>
            </fieldset>

            <fieldset>
                <p>Address</p>
                <label for="address1">Address 1:</label>
                <input name="address1" type="text"
                       value=''>
                <span class="error"></span>

                <label for="address2">Address 2:</label>
                <input name="address2" type="text"
                       value=''>
                <span class="error"></span>

                <label for="city">City:</label>
                <input name="city" type="text"
                       value=''>
                <span class="error"></span>

                <label for="state">State:</label>
                <select name="state" type="text">
                    <option value=0>Select</option>
                    <option value=1>Alabama</option>
                </select>
                <span class="error"></span>

                <label for="zip">ZIP:</label>
                <input name="zip" type="text" value=''>
                <span class="error"></span>
            </fieldset>

            <fieldset>
                <p>loyalty</p>
                <label for="loyaltyCardNumber">loyalty card number:</label>
                <input name="loyaltyCardNumber" type="text" value=''>
                <span class="error"></span>
            </fieldset>

            <fieldset>
                <p>price: 250$</p>
                <input id="submitButton" name="submit" type="submit" value="submit">
            </fieldset>


        </form>
    </section>
</main>
<?php
include('footer.php');
?>
</body>
</html>