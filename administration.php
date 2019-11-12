<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administration</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/administration.css">
</head>
<body>
<?php
include('header.php');
?>
<section>
    <h1>Available Rooms</h1>
    <p><span class="notice">Notice: * means smoking allowed.</span></p>
    <table>
        <tr>
            <th></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
        </tr>
        <tr>
        <td>King (2nd floor)</td>
        <td>2</td>
        <td>3</td>
        <td>3</td>
        <td>4</td>
        <td>3</td>
        <td>0</td>
        <td>2</td>
    </tr>
        <tr>
            <td>King (3rd floor)</td>
            <td>2</td>
            <td>2</td>
            <td>3</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>King (4th floor)</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>3</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>King (5th floor)<span class="notice">*</span></td>
            <td>3</td>
            <td>2</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Queen (2nd floor)</td>
            <td>5</td>
            <td>5</td>
            <td>6</td>
            <td>4</td>
            <td>4</td>
            <td>4</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Queen (3rd floor)</td>
            <td>5</td>
            <td>5</td>
            <td>6</td>
            <td>5</td>
            <td>1</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
        <td>Queen (4th floor)</td>
        <td>4</td>
        <td>6</td>
        <td>6</td>
        <td>4</td>
        <td>4</td>
        <td>0</td>
        <td>0</td>
    </tr>
        <tr>
            <td>Queen (5th floor)<span class="notice">*</span></td>
            <td>6</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
        <td>Suite (2nd floor)</td>
            <td>1</td>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>1</td>
            <td>0</td>
    </tr>
        <tr>
            <td>Suite (3rd floor)</td>
            <td>1</td>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Suite (4th floor)</td>
            <td>1</td>
            <td>1</td>
            <td>2</td>
            <td>2</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Suite (5th floor)<span class="notice">*</span></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
    </table>

</section>
<?php
include('footer.php');
?>
</body>
</html>