<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Manhattan Hotel</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/confirmation.css">
</head>
<body>
<?php
include('header.php');
?>

<section id="topSection">
    <p id="ContentWrap">Confirmation</p>
</section>

<section id="bottomSection">
    <section>
        <p id="thankText">Thank you for choosing Just Like Home hotel. It is our pleasure to confirm the following
            reservation. Please inform
            us that any changes need to be make by calling us at 212-385-3983. </p>
    </section>
    <section id="leftConfirmation">
        <section id="checkoutSummary">
            <ul>
                <li>Name: Dong Zheng</li>
                <li>Check-in Date: 11/10/2019</li>
                <li>Check Out Date: 11/12/2019</li>
                <li>Number of guests: 2</li>
                <li>Preferences: Non-Smoking</li>
                <li>Room Type : Superior King Room</li>
                <li>breakfast include: Yes!</li>
                <li id="reservationNum">The reservation number is:ERFDDKG78339.</li>
                <li>The detail charge are list below:</li>

            </ul>
            <div id="checkoutTotals">
                <table>
                    <tr>
                        <td>Room Cost Per Night</td>
                        <td>
                            $99.99
                        </td>
                    </tr>
                    <tr>
                        <td>Subcost</td>
                        <td>
                            $9.00
                        </td>
                    </tr>
                    <tr>
                        <td>Breakfast Per Person</td>
                        <td>
                            $15.00
                        </td>
                    </tr>

                    <tr>
                        <td class="total">Total</td>
                        <td class="total">
                            $123.99
                        </td>
                    </tr>
                </table>
            </div>
        </section>

        <p><a href='index.html' class='commandButton'>Continue Exploring</a></p>

    </section>


</section>


<?php
include('footer.php');
?>

</body>
</html>