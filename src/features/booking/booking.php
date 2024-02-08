<?php include 'header.php'; ?>
<body>
    <h1>Thank You!</h1>
    <p>Your order has been placed.</p>
    <h2>Order Details</h2>
    <p>Name: Aman Marina</p>
    <p>Phone: +358 098 567 09</p>
    <p>Date: 13th February, 2024</p>
    <p>Time: 12.00 pm</p>
    <p>Order Number: 01223</p>
    <p>Email: amanmarina23@gmail.com</p>

    <h2>Rate your experience</h2>
    <form action="process_feedback.php" method="post">
        <label for="delivery_satisfaction">How satisfied were you with delivery options available in the checkout?</label><br>
        <select name="delivery_satisfaction" id="delivery_satisfaction">
            <option value="5">Very satisfied</option>
            <option value="4">Satisfied</option>
            <option value="3">Neutral</option>
            <option value="2">Dissatisfied</option>
            <option value="1">Very dissatisfied</option>
        </select><br><br>
        <input type="submit" value="Submit Feedback">
    </form>
..
    
</body>
</html>
<?php include 'footer.php'; ?>

