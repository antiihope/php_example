</div>
<div id="footer">
    Copywrite &copy; <?php echo date('Y'); ?> Widget Corp
</div>
</body>

</html>
<?php

// Close connection
if (isset($conn)) {
    $conn->close();
}
