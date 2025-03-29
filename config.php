
<?php

echo "Block nayo tutatoka.";
// M-Pesa Daraja API Credentials
define('MPESA_CONSUMER_KEY', 'your_consumer_key');
define('MPESA_CONSUMER_SECRET', 'your_consumer_secret');
define('MPESA_SHORTCODE', '174379'); // PayBill or Till
define('MPESA_PASSKEY', 'your_passkey');
define('MPESA_CALLBACK_URL', 'https://yourdomain.com/callback.php');

// MikroTik Credentials
define('MIKROTIK_IP', '192.168.88.1');
define('MIKROTIK_USER', 'admin');
define('MIKROTIK_PASS', 'password');

// Database (for logging payments)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'wifi_payments');
?>
```
