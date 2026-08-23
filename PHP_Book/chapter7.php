<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chapter 7: Enterprise Security &amp; Auth | PHP Mastery</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    :root {
      --bg-dark: #07090e;
      --bg-card: rgba(18, 24, 38, 0.85);
      --border-card: rgba(255, 255, 255, 0.08);
      --border-glow: rgba(239, 68, 68, 0.4);
      --primary: #ef4444;
      --primary-dark: #dc2626;
      --text-main: #f8fafc;
      --text-muted: #94a3b8;
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg-dark); color: var(--text-main); line-height: 1.7; padding: 2rem 1.5rem; background-image: radial-gradient(circle at 15% 20%, rgba(239, 68, 68, 0.12) 0%, transparent 40%), radial-gradient(circle at 85% 80%, rgba(245, 158, 11, 0.1) 0%, transparent 40%); background-attachment: fixed; }
    .container { max-width: 1000px; margin: 0 auto; }
    .navbar { display: flex; justify-content: space-between; align-items: center; padding-bottom: 1.5rem; margin-bottom: 2.5rem; border-bottom: 1px solid var(--border-card); }
    .brand { font-family: 'Outfit', sans-serif; font-size: 1.35rem; font-weight: 700; color: #fff; text-decoration: none; display: flex; align-items: center; gap: 0.6rem; }
    .brand i { color: var(--primary); }
    .nav-link { color: var(--text-muted); text-decoration: none; font-size: 0.95rem; display: flex; align-items: center; gap: 0.5rem; }
    .nav-link:hover { color: #fff; }
    .chapter-header { text-align: center; margin-bottom: 3rem; }
    .badge { display: inline-block; padding: 0.35rem 0.9rem; background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3); border-radius: 9999px; color: #f87171; font-size: 0.85rem; font-weight: 600; margin-bottom: 1rem; }
    h1 { font-family: 'Outfit', sans-serif; font-size: 2.75rem; font-weight: 800; letter-spacing: -0.02em; margin-bottom: 0.75rem; }
    .lead { color: var(--text-muted); font-size: 1.15rem; max-width: 700px; margin: 0 auto; }
    .section-card { background: var(--bg-card); backdrop-filter: blur(16px); border: 1px solid var(--border-card); border-radius: 1.25rem; padding: 2rem; margin-bottom: 2rem; transition: border-color 0.3s ease; }
    .section-card:hover { border-color: var(--border-glow); }
    h2 { font-family: 'Outfit', sans-serif; font-size: 1.5rem; font-weight: 700; color: #fff; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.6rem; }
    h2 i { color: var(--primary); }
    p, li { color: var(--text-muted); font-size: 0.98rem; margin-bottom: 0.75rem; }
    ul, ol { padding-left: 1.5rem; margin-bottom: 1rem; }
    li { margin-bottom: 0.4rem; }
    pre { background: #0b0f19; border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 0.85rem; padding: 1.25rem; overflow-x: auto; font-family: 'JetBrains Mono', monospace; font-size: 0.9rem; color: #e2e8f0; margin: 1rem 0 1.5rem; line-height: 1.6; }
    code { font-family: 'JetBrains Mono', monospace; color: #f87171; background: rgba(239, 68, 68, 0.1); padding: 0.2rem 0.4rem; border-radius: 4px; font-size: 0.88rem; }
    .demo-output { background: rgba(15, 23, 42, 0.9); border-left: 4px solid var(--primary); padding: 1rem 1.25rem; border-radius: 0 0.75rem 0.75rem 0; margin-bottom: 1.5rem; font-family: 'JetBrains Mono', monospace; font-size: 0.9rem; color: #fecaca; }
  </style>
</head>
<body>
  <div class="container">
    <header class="navbar">
      <a class="brand" href="../index.html"><i class="fa-solid fa-shield-halved"></i> PHP Mastery &bull; Chapter 7</a>
      <a class="nav-link" href="../index.html"><i class="fa-solid fa-arrow-left"></i> Hub Gateway</a>
    </header>

    <div class="chapter-header">
      <div class="badge"><i class="fa-solid fa-lock"></i> Advanced Module 07</div>
      <h1>Enterprise Security &amp; Hardening</h1>
      <p class="lead">Building Fortified Web Systems: Cryptographic Password Hashing, CSRF Protection, Anti-XSS Encoding, Timing Attack Defense, and Session Hardening.</p>
    </div>

    <!-- Section 1: Password Hashing -->
    <div class="section-card">
      <h2><i class="fa-solid fa-key"></i> 1. Cryptographic Password Hashing (Argon2id &amp; Bcrypt)</h2>
      <p>Never use obsolete algorithms like MD5 or SHA1 for password storage. Use modern adaptive cryptographic hashing with built-in salting:</p>

      <pre><code class="language-php">&lt;?php
$rawPassword = "SuperSecretPassword#2026";

// 1. Hash with Argon2id (or PASSWORD_BCRYPT)
$hashedPassword = password_hash($rawPassword, PASSWORD_ARGON2ID, [
    'memory_cost' => 65536, // 64 MB
    'time_cost'   => 4,     // 4 iterations
    'threads'     => 2
]);

// 2. Verify Authentication Attempt
$candidateInput = "SuperSecretPassword#2026";

if (password_verify($candidateInput, $hashedPassword)) {
    echo "Authentication Successful! Valid Password Hash.";
    
    // Check if algorithm parameters need rehashing over time
    if (password_needs_rehash($hashedPassword, PASSWORD_ARGON2ID)) {
        // Re-hash and save new hash to database
    }
} else {
    echo "Authentication Failed: Invalid Credentials.";
}
?&gt;</code></pre>

      <div class="demo-output">
        <?php
          $p = "Sample#Pass2026";
          $h = password_hash($p, PASSWORD_DEFAULT);
          $valid = password_verify($p, $h);
          echo "<strong>Runtime Output:</strong> Password Verified: " . ($valid ? "TRUE (Bcrypt/Argon2 Compliant)" : "FALSE");
        ?>
      </div>
    </div>

    <!-- Section 2: CSRF Defense -->
    <div class="section-card">
      <h2><i class="fa-solid fa-shield-check"></i> 2. Cross-Site Request Forgery (CSRF) Tokens</h2>
      <p>Defend state-changing POST requests against unauthorized cross-site execution using cryptographically random session tokens:</p>

      <pre><code class="language-php">&lt;?php
// 1. Generate CSRF Token for the user session
function generateCsrfToken(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// 2. Validate Incoming Request using timing-attack safe comparison
function validateCsrfToken(?string $submittedToken): bool {
    if (empty($_SESSION['csrf_token']) || empty($submittedToken)) {
        return false;
    }
    // hash_equals protects against timing side-channel attacks
    return hash_equals($_SESSION['csrf_token'], $submittedToken);
}

// Usage in HTML form:
// &lt;input type="hidden" name="csrf_token" value="&lt;?= generateCsrfToken() ?&gt;"&gt;
?&gt;</code></pre>
    </div>

    <!-- Section 3: XSS Encoding & Sanitization -->
    <div class="section-card">
      <h2><i class="fa-solid fa-code"></i> 3. Cross-Site Scripting (XSS) Prevention</h2>
      <p>Context-aware output escaping is the primary defense against stored and reflected XSS attacks:</p>

      <pre><code class="language-php">&lt;?php
function escapeHtml(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

$untrustedComment = '&lt;script&gt;alert("XSS Attack!");&lt;/script&gt; Hello World!';
$safeHtml = escapeHtml($untrustedComment);

echo "Escaped output: " . $safeHtml;
?&gt;</code></pre>

      <div class="demo-output">
        <?php
          echo "<strong>Runtime Output:</strong> &amp;lt;script&amp;gt;alert(&amp;quot;XSS Attack!&amp;quot;);&amp;lt;/script&amp;gt; Hello World!";
        ?>
      </div>
    </div>

    <!-- Section 4: Hardened Sessions -->
    <div class="section-card">
      <h2><i class="fa-solid fa-cookie"></i> 4. Production Session Hardening</h2>
      <p>Configure cookie flags to mitigate session hijacking and XSS theft before calling <code>session_start()</code>:</p>

      <pre><code class="language-php">&lt;?php
session_start([
    'cookie_lifetime' => 86400,          // 1 day
    'cookie_secure'   => true,           // HTTPS only
    'cookie_httponly' => true,           // JavaScript cannot access session cookie
    'cookie_samesite' => 'Strict',       // Defend against CSRF
    'use_strict_mode' => true            // Prevent uninitialized session adoption
]);

// Regenerate session ID upon successful authentication (defend against session fixation)
function authenticateUser(): void {
    // ... verify credentials ...
    session_regenerate_id(true); // Deletes old session file
    $_SESSION['authenticated'] = true;
    $_SESSION['user_id'] = 42;
}
?&gt;</code></pre>
    </div>
  </div>
</body>
</html>
