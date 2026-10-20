<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Журнал заходов')</title>
    <style>
        :root { --bg:#f5f6f8; --card:#fff; --text:#1d2129; --muted:#6b7280; --line:#e5e7eb; --accent:#2563eb; --bad:#dc2626; --bad-bg:#fef2f2; --ok:#16a34a; }
        * { box-sizing: border-box; }
        body { margin:0; background:var(--bg); color:var(--text); font:14px/1.45 -apple-system, "Segoe UI", Roboto, Arial, sans-serif; }
        .wrap { max-width:1400px; margin:0 auto; padding:20px 16px 60px; }
        h1 { font-size:22px; margin:0 0 16px; }
        h2 { font-size:17px; margin:24px 0 10px; }
        a { color:var(--accent); text-decoration:none; }
        a:hover { text-decoration:underline; }
        .top { display:flex; justify-content:space-between; align-items:center; gap:12px; flex-wrap:wrap; margin-bottom:16px; }
        .top h1 { margin:0; }
        .card { background:var(--card); border:1px solid var(--line); border-radius:10px; padding:16px; margin-bottom:16px; }
        .bar { display:flex; gap:8px; flex-wrap:wrap; align-items:center; margin-bottom:12px; }
        .pill { padding:6px 12px; border:1px solid var(--line); border-radius:999px; background:#fff; color:var(--text); }
        .pill.on { background:var(--accent); border-color:var(--accent); color:#fff; }
        .pill:hover { text-decoration:none; border-color:var(--accent); }
        .tbl-wrap { overflow-x:auto; background:var(--card); border:1px solid var(--line); border-radius:10px; }
        table { width:100%; border-collapse:collapse; white-space:nowrap; }
        th, td { padding:8px 10px; border-bottom:1px solid var(--line); text-align:left; vertical-align:top; }
        th { background:#fafafa; font-weight:600; font-size:12px; color:var(--muted); position:sticky; top:0; }
        tr.bad td { background:var(--bad-bg); }
        tr.blocked td { opacity:.55; }
        .num { text-align:right; }
        .muted { color:var(--muted); font-size:12px; }
        .tag { display:inline-block; padding:1px 7px; border-radius:6px; font-size:11px; font-weight:600; background:#eef2ff; color:#3730a3; margin-right:3px; }
        .tag.bad { background:#fee2e2; color:var(--bad); }
        .tag.ok { background:#dcfce7; color:var(--ok); }
        .tag.grey { background:#f3f4f6; color:var(--muted); }
        .fp { font-family:Consolas, monospace; font-size:12px; }
        .wrapcell { white-space:normal; max-width:340px; word-break:break-all; }
        button, .btn { cursor:pointer; padding:8px 14px; border-radius:8px; border:1px solid var(--accent); background:var(--accent); color:#fff; font:inherit; }
        button.ghost { background:#fff; color:var(--text); border-color:var(--line); }
        button.danger { background:var(--bad); border-color:var(--bad); }
        input[type=password], input[type=text], textarea { width:100%; padding:8px 10px; border:1px solid var(--line); border-radius:8px; font:inherit; }
        textarea { font-family:Consolas, monospace; font-size:12px; }
        .grid { display:grid; grid-template-columns:repeat(auto-fit, minmax(160px, 1fr)); gap:10px; }
        .stat b { display:block; font-size:20px; }
        .pagination { display:flex; gap:6px; flex-wrap:wrap; margin-top:12px; list-style:none; padding:0; }
        .pagination li > * { display:block; padding:5px 10px; border:1px solid var(--line); border-radius:6px; background:#fff; }
        .pagination .active > * { background:var(--accent); color:#fff; border-color:var(--accent); }
        details summary { cursor:pointer; color:var(--accent); }
    </style>
</head>
<body>
<div class="wrap">
    @yield('content')
</div>
</body>
</html>
