<?php

echo date("Y-m-d l H:i:s "); // Output: 2025-09-27 07:30:15

// Y → Year (2025)
// m → Month (01–12)
// d → Day (01–31)
// H → Hour (00–23)
// i → Minutes (00–59)
// s → Seconds (00–59)
// l → Full day name (Monday)
// D → Short day name (Mon)

echo time(); // 1789435

// --> Usage 
$expiry = time() + 3600; // 1 hour later
if (time() > $expiry) {
    echo "Session expired!";
}


?>