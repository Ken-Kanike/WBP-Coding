<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chapter 8: RESTful APIs &amp; Microservices | PHP Mastery</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    :root {
      --bg-dark: #07090e;
      --bg-card: rgba(18, 24, 38, 0.85);
      --border-card: rgba(255, 255, 255, 0.08);
      --border-glow: rgba(6, 182, 212, 0.4);
      --primary: #06b6d4;
      --primary-dark: #0891b2;
      --text-main: #f8fafc;
      --text-muted: #94a3b8;
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg-dark); color: var(--text-main); line-height: 1.7; padding: 2rem 1.5rem; background-image: radial-gradient(circle at 15% 20%, rgba(6, 182, 212, 0.12) 0%, transparent 40%), radial-gradient(circle at 85% 80%, rgba(99, 102, 241, 0.1) 0%, transparent 40%); background-attachment: fixed; }
    .container { max-width: 1000px; margin: 0 auto; }
    .navbar { display: flex; justify-content: space-between; align-items: center; padding-bottom: 1.5rem; margin-bottom: 2.5rem; border-bottom: 1px solid var(--border-card); }
    .brand { font-family: 'Outfit', sans-serif; font-size: 1.35rem; font-weight: 700; color: #fff; text-decoration: none; display: flex; align-items: center; gap: 0.6rem; }
    .brand i { color: var(--primary); }
    .nav-link { color: var(--text-muted); text-decoration: none; font-size: 0.95rem; display: flex; align-items: center; gap: 0.5rem; }
    .nav-link:hover { color: #fff; }
    .chapter-header { text-align: center; margin-bottom: 3rem; }
    .badge { display: inline-block; padding: 0.35rem 0.9rem; background: rgba(6, 182, 212, 0.15); border: 1px solid rgba(6, 182, 212, 0.3); border-radius: 9999px; color: #22d3ee; font-size: 0.85rem; font-weight: 600; margin-bottom: 1rem; }
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
    code { font-family: 'JetBrains Mono', monospace; color: #22d3ee; background: rgba(6, 182, 212, 0.1); padding: 0.2rem 0.4rem; border-radius: 4px; font-size: 0.88rem; }
    .demo-output { background: rgba(15, 23, 42, 0.9); border-left: 4px solid var(--primary); padding: 1rem 1.25rem; border-radius: 0 0.75rem 0.75rem 0; margin-bottom: 1.5rem; font-family: 'JetBrains Mono', monospace; font-size: 0.9rem; color: #cffafe; }
  </style>
</head>
<body>
  <div class="container">
    <header class="navbar">
      <a class="brand" href="../index.html"><i class="fa-solid fa-network-wired"></i> PHP Mastery &bull; Chapter 8</a>
      <a class="nav-link" href="../index.html"><i class="fa-solid fa-arrow-left"></i> Hub Gateway</a>
    </header>

    <div class="chapter-header">
      <div class="badge"><i class="fa-solid fa-globe"></i> Advanced Module 08</div>
      <h1>RESTful APIs &amp; Microservices</h1>
      <p class="lead">Designing High-Performance JSON Endpoints, HTTP Verbs Routing, JWT Authentication, cURL Client Integrations, and Error Handling Standards.</p>
    </div>

    <!-- Section 1: Pure JSON API Endpoint Architecture -->
    <div class="section-card">
      <h2><i class="fa-solid fa-code-compare"></i> 1. Production REST Controller Pattern</h2>
      <p>Building clean, spec-compliant JSON responses with precise HTTP status codes (200, 201, 400, 404, 500):</p>

      <pre><code class="language-php">&lt;?php
declare(strict_types=1);

// Send JSON Response Headers
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

// Handle CORS pre-flight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Router Dispatcher
function jsonResponse(int $statusCode, array $data): void {
    http_response_code($statusCode);
    echo json_encode([
        'status'    => $statusCode >= 200 && $statusCode < 300 ? 'success' : 'error',
        'code'      => $statusCode,
        'timestamp' => time(),
        'data'      => $data
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    exit;
}

// Sample REST API Request handler
if ($method === 'GET') {
    jsonResponse(200, [
        'users' => [
            ['id' => 1, 'name' => 'Alex Taylor', 'role' => 'Lead Engineer'],
            ['id' => 2, 'name' => 'Sarah Connor', 'role' => 'Security Architect']
        ]
    ]);
} elseif ($method === 'POST') {
    $rawPayload = file_get_contents('php://input');
    $payload = json_decode($rawPayload, true);
    
    if (empty($payload['name'])) {
        jsonResponse(422, ['error' => 'Field "name" is required.']);
    }
    
    jsonResponse(201, ['message' => 'Resource created successfully', 'created' => $payload]);
}
?&gt;</code></pre>

      <div class="demo-output">
        <?php
          echo "<strong>Sample API Output:</strong><br>" . htmlspecialchars('{"status":"success","code":200,"data":{"status":"API Endpoint Active"}}');
        ?>
      </div>
    </div>

    <!-- Section 2: cURL Client Integration -->
    <div class="section-card">
      <h2><i class="fa-solid fa-cloud-arrow-down"></i> 2. External HTTP Client with cURL</h2>
      <p>Communicating with third-party microservices, payment gateways, or OAuth providers:</p>

      <pre><code class="language-php">&lt;?php
function fetchExternalApi(string $url, array $headers = []): ?array {
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL            => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 10,
        CURLOPT_HTTPHEADER     => array_merge(['Accept: application/json'], $headers),
        CURLOPT_SSL_VERIFYPEER => true
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error    = curl_error($ch);
    curl_close($ch);

    if ($error || $httpCode >= 400) {
        error_log("cURL Error [{$httpCode}]: {$error}");
        return null;
    }

    return json_decode($response, true);
}
?&gt;</code></pre>
    </div>

    <!-- Section 3: Stateless JWT Token Simulation -->
    <div class="section-card">
      <h2><i class="fa-solid fa-passport"></i> 3. Stateless Token Authentication (JWT Architecture)</h2>
      <p>Decoupling authentication from server sessions using Base64URL-encoded HMAC-SHA256 signatures:</p>

      <pre><code class="language-php">&lt;?php
class SimpleJwt {
    private static string $secretKey = "ProductionMasterSecretKey#2026";

    public static function createToken(array $payload): string {
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);
        $base64Header = self::base64UrlEncode($header);
        $base64Payload = self::base64UrlEncode(json_encode($payload));
        
        $signature = hash_hmac('sha256', "{$base64Header}.{$base64Payload}", self::$secretKey, true);
        $base64Signature = self::base64UrlEncode($signature);

        return "{$base64Header}.{$base64Payload}.{$base64Signature}";
    }

    private static function base64UrlEncode(string $data): string {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
}

$token = SimpleJwt::createToken(['sub' => 101, 'name' => 'Alex', 'exp' => time() + 3600]);
echo "Generated Token: " . substr($token, 0, 35) . "...";
?&gt;</code></pre>
    </div>
  </div>
</body>
</html>
