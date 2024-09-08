<?php
ob_start();
session_start(); 
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Newstap</title>
    <link rel="icon" href="favicon-16x16.png" size="16x16"type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link href="css/contact.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function updateForm() {
            const reason = document.getElementById('reason').value;
            const summaryLabel = document.getElementById('summaryLabel');
            const summaryField = document.getElementById('summaryField');
            const detailField = document.getElementById('detailField');
            const bugFields = document.getElementById('bugFields');
            const mediaBuyField = document.getElementById('mediaBuyField');
            const userInfo = document.getElementById('userInfo');

            // Hide all additional fields
            summaryField.classList.add('hidden');
            detailField.classList.add('hidden');
            bugFields.classList.add('hidden');
            mediaBuyField.classList.add('hidden');
            userInfo.classList.add('hidden');

            // Show summary and detail fields for all options
            if (reason) {
                summaryField.classList.remove('hidden');
                detailField.classList.remove('hidden');
                if (reason === 'support' || reason === 'issue') {
                    summaryLabel.textContent = 'Summarize the issue in one sentence:';
                    detailLabel.textContent = 'Explain the problem in details :';
                } else if (reason === 'advertising') {
                    summaryLabel.textContent = 'Summarize the message in one sentence:';
                    detailLabel.textContent = 'Your message :';
                }
            }

            // Show additional fields based on the selected reason
            if (reason === 'support') {
                userInfo.classList.remove('hidden');
                bugFields.classList.remove('hidden');
            } else if (reason === 'issue') {
                bugFields.classList.remove('hidden');
                userInfo.classList.remove('hidden');
            } else if (reason === 'advertising') {
                mediaBuyField.classList.remove('hidden');
                userInfo.classList.remove('hidden');
            }
        }

        function validateForm() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;

            if (!name || !email) {
                alert("Please enter your name and email to submit the form.");
                return false;  // Prevent submission
            }
            return true;
        }
    </script>
</head>
<body>
    <!-- header-->
    <?php include("includes/header.php");?>

    <div class="container main-content">
        <h2>Contact Us</h2>
        <p>If you have any questions or concerns, please use the form below or email us at : newstap@wuaze@gmail.com</p><br>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $reason = $_POST['reason'];
            $summary = $_POST['summary'];
            $detail = $_POST['detail'];
            $os = isset($_POST['os']) ? $_POST['os'] : '';
            $browser = isset($_POST['browser']) ? $_POST['browser'] : '';
            $url = isset($_POST['url']) ? $_POST['url'] : '';
            $mediaBuy = isset($_POST['mediaBuy']) ? $_POST['mediaBuy'] : '';
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);

            // Server-side validation
            if (empty($name) || empty($email)) {
                echo "<p style='color:red;'>Error: Please enter your name and email to submit the form.</p>";
            } else {
                //  insert into the database
                $stmt = $con->prepare("INSERT INTO contact_us (reason, summary, detail, os, browser, url, media_buy, name, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssssss", $reason, $summary, $detail, $os, $browser, $url, $mediaBuy, $name, $email);

                if ($stmt->execute()) {
                    echo "<p>Thank you! We have received your message about '$reason'.</p>";
                    header("Refresh: 3; url=index.php");
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            }
        }

        $con->close();
        ob_end_flush();
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" onsubmit="return validateForm()">
            <label for="reason">Why are you contacting us?</label>
            <select id="reason" name="reason" onchange="updateForm()" required>
                <option value="">Select a reason</option>
                <option value="advertising">Interested in advertising with Newstap</option>
                <option value="issue">Report an issue with advertising</option>
                <option value="support">Need technical support / Want to report a bug</option>
            </select>

            <!-- bug report -->
            <div id="bugFields" class="hidden">
                <label for="url">URL of the page causing the problem:</label>
                <input type="text" id="url" name="url">
                
                <label for="browser">Browser:</label>
                <input type="text" id="browser" name="browser">

                <label for="os">Operating System: </label>
                <input type="text" id="os" name="os">
            </div>

            <!-- summary -->
            <div id="summaryField" class="hidden">
                <label id="summaryLabel" for="summary">Summarize the issue/message in one sentence:</label>
                <input type="text" id="summary" name="summary">
            </div>

            <!-- explain -->
            <div id="detailField" class="hidden">
                <label for="detail" id="detailLabel">Explain the problem/message:</label>
                <textarea id="detail" name="detail" rows="5"></textarea>
            </div>

            <!-- ad. -->
            <div id="mediaBuyField" class="hidden">
                <label for="mediaBuy">When are you planning your next media buy?</label>
                <select id="mediaBuy" name="mediaBuy">
                    <option value="">Select an option</option>
                    <option value="immediately">Immediately</option>
                    <option value="within next 3 months">Within next 3 months</option>
                    <option value="within next 6 months">Within next 6 months</option>
                    <option value="not sure">Not sure</option>
                </select>
            </div>

            <!-- user details -->
            <div id="userInfo" class="hidden">
                <br>
                <h3>Tell Us About You</h3>    
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name">    
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email">
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- footer-->
    <?php include('includes/footer.php'); ?>

</body>
</html>
