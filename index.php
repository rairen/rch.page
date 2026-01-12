<!doctype html>
<html lang="ko">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>배관고스트 | 24시간 긴급출동</title>
  <meta name="description" content="변기·싱크대·욕조·세면대 등 각종 하수구 막힌 곳 24시간 긴급출동 - 배관고스트" />
  <style>
    :root{
      --brand:#1f98d6;
      --brand2:#0e79b8;
      --ink:#0f172a;
      --muted:#64748b;
      --bg:#f6fbff;
      --card:#ffffff;
      --line:rgba(15,23,42,.08);
      --shadow:0 12px 30px rgba(15,23,42,.10);
      --radius:18px;
      --max:1180px;
    }
    *{box-sizing:border-box}
    html,body{margin:0;padding:0;font-family:system-ui,-apple-system,"Segoe UI",Roboto,"Noto Sans KR",AppleSDGothicNeo,sans-serif;color:var(--ink);background:#fff}
    a{color:inherit;text-decoration:none}
    img{max-width:100%;display:block}
    .container{max-width:var(--max);margin:0 auto;padding:0 20px}
    .btn{
      display:inline-flex;align-items:center;gap:8px;
      padding:12px 16px;border-radius:999px;border:1px solid var(--line);
      background:#fff;box-shadow:0 6px 18px rgba(15,23,42,.06);
      font-weight:700;cursor:pointer;transition:.2s;
      white-space:nowrap;
    }
    .btn:hover{transform:translateY(-1px)}
    .btn.primary{background:linear-gradient(135deg,var(--brand),var(--brand2));color:#fff;border:0}
    .btn.kakao{background:#fee500;color:#111;border:0}
    .chip{
      display:inline-flex;align-items:center;gap:8px;
      padding:8px 12px;border-radius:999px;
      background:rgba(31,152,214,.10);
      color:var(--brand2);font-weight:800;font-size:13px
    }
    .section{padding:64px 0}
    .section.alt{background:var(--bg)}
    .title{font-size:34px;letter-spacing:-.5px;margin:0 0 12px}
    .subtitle{margin:0;color:var(--muted);font-size:16px;line-height:1.6}
    .grid{display:grid;gap:18px}
    .card{
      background:var(--card);
      border:1px solid var(--line);
      border-radius:var(--radius);
      box-shadow:0 10px 28px rgba(15,23,42,.06);
      overflow:hidden;
    }

    /* HEADER */
    header{
      position:sticky;top:0;z-index:30;
      background:rgba(255,255,255,.85);backdrop-filter:saturate(180%) blur(10px);
      border-bottom:1px solid var(--line);
    }
    .header-inner{
      height:70px;
      display:flex;align-items:center;justify-content:space-between;gap:16px
    }
    .logo{
      display:flex;align-items:center;gap:10px;font-weight:900;
      letter-spacing:-.6px;
    }
    .logo-badge{
      width:40px;height:40px;border-radius:14px;
      background:linear-gradient(135deg,var(--brand),#60c7ff);
      display:grid;place-items:center;box-shadow:0 10px 20px rgba(31,152,214,.25);
      flex:0 0 auto;
    }
    .nav{
      display:flex;gap:18px;align-items:center;justify-content:center;
      flex:1;min-width:0;
    }
    .nav a{
      font-weight:800;color:#1e293b;font-size:14px;
      padding:10px 10px;border-radius:999px;
    }
    .nav a:hover{background:rgba(31,152,214,.10);color:var(--brand2)}
    .header-cta{display:flex;gap:10px;align-items:center}

    /* HERO */
    .hero{
      padding:28px 0 70px;
      background:radial-gradient(1200px 420px at 50% 0%, rgba(31,152,214,.20), transparent 60%),
                 linear-gradient(180deg,#fff, #f9fdff);
    }
    .hero-wrap{
      display:grid;grid-template-columns:1.15fr .85fr;gap:24px;align-items:center
    }
    .hero h1{
      font-size:42px;line-height:1.18;margin:14px 0 14px;letter-spacing:-1px
    }
    .hero p{margin:0 0 22px;color:var(--muted);font-size:16px;line-height:1.7}
    .hero-box{
      border-radius:26px;
      background:linear-gradient(135deg,rgba(31,152,214,.16),rgba(14,121,184,.08));
      border:1px solid rgba(31,152,214,.18);
      box-shadow:0 20px 60px rgba(31,152,214,.18);
      padding:24px;
      overflow:hidden;
      position:relative;
      min-height:320px;
    }
    .pipe-art{
      position:absolute;right:-10px;bottom:-10px;width:320px;height:320px;opacity:.95
    }
    .hero-actions{display:flex;gap:10px;flex-wrap:wrap}
    .hero-note{margin-top:14px;color:rgba(15,23,42,.65);font-size:13px}

    /* REVIEWS */
    .review-grid{grid-template-columns:repeat(4,1fr)}
    .review-img{
      height:130px;background:
        linear-gradient(135deg,rgba(31,152,214,.25),rgba(96,199,255,.12)),
        radial-gradient(160px 120px at 20% 30%, rgba(255,255,255,.8), transparent 60%);
      border-bottom:1px solid var(--line);
    }
    .review-body{padding:14px}
    .stars{color:#f59e0b;font-weight:900;font-size:13px;letter-spacing:1px}
    .review-title{margin:6px 0 6px;font-weight:900}
    .review-text{margin:0;color:var(--muted);font-size:13px;line-height:1.5}
    .more-wrap{display:flex;justify-content:center;margin-top:20px}

    /* INSURANCE */
    .two-col{display:grid;grid-template-columns:1fr 1fr;gap:22px;align-items:center}
    .insurance-doc{
      padding:18px;border-radius:var(--radius);border:1px solid var(--line);
      background:#fff;box-shadow:var(--shadow);
      min-height:280px;position:relative;overflow:hidden
    }
    .doc-badge{
      position:absolute;top:16px;right:16px;
      background:linear-gradient(135deg,#fbbf24,#f59e0b);
      color:#111;font-weight:900;padding:10px 12px;border-radius:14px;
      box-shadow:0 12px 24px rgba(245,158,11,.25);
      font-size:12px;
    }
    .doc-paper{
      width:100%;height:100%;
      border-radius:14px;border:1px solid rgba(15,23,42,.08);
      background:
        linear-gradient(180deg,#fff,#f8fafc);
      padding:18px;
    }
    .doc-line{height:10px;border-radius:8px;background:rgba(15,23,42,.06);margin:10px 0}
    .doc-line.w70{width:70%}.doc-line.w55{width:55%}.doc-line.w85{width:85%}.doc-line.w40{width:40%}
    .doc-seal{
      width:74px;height:74px;border-radius:999px;
      background:radial-gradient(circle at 35% 35%, #ffd36a, #f59e0b);
      position:absolute;bottom:18px;right:18px;box-shadow:0 20px 34px rgba(245,158,11,.25);
    }

    /* REASONS 6 */
    .reason-grid{grid-template-columns:repeat(3,1fr)}
    .reason-item{padding:18px;display:flex;gap:12px;align-items:flex-start}
    .icon{
      width:46px;height:46px;border-radius:16px;
      background:rgba(31,152,214,.12);
      display:grid;place-items:center;flex:0 0 auto;
      border:1px solid rgba(31,152,214,.18)
    }
    .reason-item h3{margin:0 0 4px;font-size:16px}
    .reason-item p{margin:0;color:var(--muted);font-size:13px;line-height:1.5}

    /* DISPATCH MAP */
    .map-wrap{
      border-radius:var(--radius);
      background:linear-gradient(135deg,rgba(31,152,214,.18),rgba(96,199,255,.08));
      border:1px solid rgba(31,152,214,.18);
      padding:18px;
      min-height:280px;
      position:relative;
      overflow:hidden;
      box-shadow:0 24px 60px rgba(31,152,214,.14);
    }
    .korea{
      position:absolute;right:10px;bottom:-20px;width:320px;height:320px;opacity:.9
    }
    .pin{
      position:absolute;width:14px;height:14px;border-radius:999px;
      background:#0ea5e9;box-shadow:0 0 0 8px rgba(14,165,233,.18);
      border:2px solid #fff;
      animation:pulse 1.8s infinite;
    }
    .pin.seoul{left:58%;top:38%}
    .pin.incheon{left:54%;top:40%}
    .pin.gyeonggi{left:60%;top:44%}
    @keyframes pulse{
      0%{transform:scale(1);opacity:1}
      70%{transform:scale(1.25);opacity:.55}
      100%{transform:scale(1);opacity:1}
    }

    /* BANNER 24H */
    .water-banner{
      border-radius:26px;
      background:
        radial-gradient(800px 240px at 50% 0%, rgba(255,255,255,.35), transparent 60%),
        linear-gradient(135deg, var(--brand), #66ccff);
      color:#fff;box-shadow:0 28px 70px rgba(31,152,214,.28);
      padding:34px 26px;position:relative;overflow:hidden
    }
    .splash{
      position:absolute;left:-30px;bottom:-40px;width:360px;height:220px;opacity:.28
    }
    .splash2{
      position:absolute;right:-50px;top:-60px;width:340px;height:240px;opacity:.20
    }
    .water-banner h2{margin:0 0 10px;font-size:30px;letter-spacing:-.6px}
    .water-banner p{margin:0;font-size:15px;line-height:1.65;opacity:.95}
    .water-actions{margin-top:18px;display:flex;gap:10px;flex-wrap:wrap}

    /* PROCESS */
    .process-grid{grid-template-columns:repeat(4,1fr)}
    .step{padding:18px}
    .step .icon{width:54px;height:54px;border-radius:18px}
    .step h3{margin:12px 0 6px}
    .step p{margin:0;color:var(--muted);font-size:13px;line-height:1.5}

    /* SPECIAL 4 */
    .special-grid{grid-template-columns:repeat(2,1fr)}
    .special-item{padding:20px;display:flex;gap:14px;align-items:flex-start}
    .special-item .icon{width:56px;height:56px;border-radius:18px}
    .special-item h3{margin:0 0 6px}
    .special-item p{margin:0;color:var(--muted);font-size:13px;line-height:1.55}

    /* CONTACT */
    .contact-box{
      padding:26px;border-radius:26px;
      background:linear-gradient(135deg,rgba(31,152,214,.12),rgba(96,199,255,.06));
      border:1px solid rgba(31,152,214,.18);
      display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap
    }
    .contact-actions{display:flex;gap:10px;flex-wrap:wrap}

    /* FOOTER */
    footer{padding:34px 0;border-top:1px solid var(--line);color:var(--muted);font-size:13px}
    .foot{display:flex;gap:12px;align-items:center;justify-content:space-between;flex-wrap:wrap}
    .foot small{opacity:.95}

    /* FLOATING */
    .float{
      position:fixed;right:18px;bottom:18px;z-index:50;
      display:flex;flex-direction:column;gap:10px
    }
    .float .btn{padding:12px 14px}

    /* RESPONSIVE */
    @media (max-width: 980px){
      .nav{display:none}
      .hero-wrap{grid-template-columns:1fr}
      .review-grid{grid-template-columns:repeat(2,1fr)}
      .two-col{grid-template-columns:1fr}
      .reason-grid{grid-template-columns:repeat(2,1fr)}
      .process-grid{grid-template-columns:repeat(2,1fr)}
      .special-grid{grid-template-columns:1fr}
    }
    @media (max-width: 520px){
      .title{font-size:28px}
      .hero h1{font-size:34px}
      .review-grid{grid-template-columns:1fr}
      .reason-grid{grid-template-columns:1fr}
      .process-grid{grid-template-columns:1fr}
      .header-inner{height:auto;padding:12px 0}
      .header-cta{width:100%}
      .header-cta .btn{flex:1;justify-content:center}
    }
  </style>
</head>

<body>
<header>
  <div class="container header-inner">
    <a class="logo" href="#top">
      <span class="logo-badge" aria-hidden="true">
        <!-- ghost icon -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
          <path d="M12 3c-4 0-7 3.2-7 7.2V20c0 .6.7 1 1.2.6l1.6-1.2c.3-.2.7-.2 1 0l1.6 1.2c.3.2.7.2 1 0l1.6-1.2c.3-.2.7-.2 1 0l1.6 1.2c.3.2.7.2 1 0l1.6-1.2c.3-.2.7-.2 1 0l1.6 1.2c.5.4 1.2 0 1.2-.6V10.2C19 6.2 16 3 12 3Z" fill="white" opacity=".95"/>
          <circle cx="9.5" cy="11" r="1.3" fill="#1f98d6"/>
          <circle cx="14.5" cy="11" r="1.3" fill="#1f98d6"/>
          <path d="M9 14.5c1.6 1.3 4.4 1.3 6 0" stroke="#1f98d6" stroke-width="1.6" stroke-linecap="round"/>
        </svg>
      </span>
      <span>배관고스트</span>
    </a>

    <nav class="nav" aria-label="주요 메뉴">
      <a href="#section1">배관고스트</a>
      <a href="#section7">기술력</a>
      <a href="#section4">변기막힘</a>
      <a href="#section4">싱크대 막힘</a>
      <a href="#section4">하수구 막힘</a>
      <a href="#section2">작업후기</a>
    </nav>

    <div class="header-cta">
      <a class="btn primary" href="tel:010-0000-0000" aria-label="전화하기">📞 전화</a>
      <a class="btn kakao" href="#section9" aria-label="카카오톡 상담">💬 카카오톡</a>
    </div>
  </div>
</header>

<main id="top">

  <!-- SECTION 1: HERO -->
  <section id="section1" class="hero">
    <div class="container hero-wrap">
      <div>
        <span class="chip">24시간 긴급출동 · 1시간 내 출동</span>
        <h1>
          변기·싱크대·욕조·세면대 등<br/>
          각종 하수구 막힌곳 <span style="color:var(--brand2)">긴급출동</span>
        </h1>
        <p>
          막힘 · 악취 · 역류까지 한 번에 해결합니다.<br/>
          전문 장비와 숙련된 기술로 빠르고 깔끔하게 처리해드립니다.
        </p>
        <div class="hero-actions">
          <a class="btn primary" href="tel:010-0000-0000">📞 지금 전화하기</a>
          <a class="btn" href="#section2">⭐ 작업후기 보기</a>
        </div>
        <div class="hero-note">※ 현장 확인 후 정확한 원인 진단과 합리적인 견적을 안내드립니다.</div>
      </div>

      <div class="hero-box" aria-label="배관 이미지 영역(대체 그래픽)">
        <!-- pipe svg art -->
        <svg class="pipe-art" viewBox="0 0 400 400" fill="none" aria-hidden="true">
          <path d="M250 70h70c22 0 40 18 40 40v70" stroke="white" stroke-width="36" stroke-linecap="round"/>
          <path d="M360 180v75c0 22-18 40-40 40h-75" stroke="white" stroke-width="36" stroke-linecap="round"/>
          <path d="M245 295h-80c-25 0-45-20-45-45v-10" stroke="white" stroke-width="36" stroke-linecap="round"/>
          <path d="M120 240v-65c0-22 18-40 40-40h20" stroke="white" stroke-width="36" stroke-linecap="round"/>
          <path d="M180 135h35" stroke="white" stroke-width="36" stroke-linecap="round"/>
          <path d="M245 295c30 0 55 25 55 55" stroke="rgba(255,255,255,.7)" stroke-width="18" stroke-linecap="round"/>
          <path d="M200 310c40 60 100 70 140 25" stroke="rgba(96,199,255,.8)" stroke-width="18" stroke-linecap="round"/>
          <circle cx="310" cy="330" r="24" fill="rgba(255,255,255,.65)"/>
        </svg>

        <div style="position:relative;z-index:2;max-width:260px">
          <div style="font-weight:900;font-size:18px;margin-bottom:8px;color:#0b4f77">
            막힌 하수구, 바로 해결!
          </div>
          <div style="color:rgba(15,23,42,.75);line-height:1.55;font-size:14px">
            고압세척 · 스케일링 · 내시경 진단<br/>
            원인부터 정확하게 잡고 처리합니다.
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 2: REVIEWS -->
  <section id="section2" class="section">
    <div class="container">
      <h2 class="title">후기 및 사진 리뷰</h2>
      <p class="subtitle">현장 작업 사진과 실제 후기 스타일(8개 노출 / 4×2 구성)</p>

      <div class="grid review-grid" style="margin-top:20px">
        <!-- 8 cards -->
        <article class="card">
          <div class="review-img"></div>
          <div class="review-body">
            <div class="stars">★★★★★</div>
            <div class="review-title">변기 막힘 해결</div>
            <p class="review-text">늦은 시간에도 바로 와주셔서 빠르게 해결했어요.</p>
          </div>
        </article>
        <article class="card">
          <div class="review-img"></div>
          <div class="review-body">
            <div class="stars">★★★★★</div>
            <div class="review-title">싱크대 역류 처리</div>
            <p class="review-text">원인 설명이 친절했고 마무리까지 깔끔했습니다.</p>
          </div>
        </article>
        <article class="card">
          <div class="review-img"></div>
          <div class="review-body">
            <div class="stars">★★★★★</div>
            <div class="review-title">하수구 악취 제거</div>
            <p class="review-text">악취가 싹 사라졌어요. 사후 관리도 안내받았습니다.</p>
          </div>
        </article>
        <article class="card">
          <div class="review-img"></div>
          <div class="review-body">
            <div class="stars">★★★★★</div>
            <div class="review-title">욕실 배수 불량</div>
            <p class="review-text">장비가 전문적이라 믿음 갔고 작업이 빠릅니다.</p>
          </div>
        </article>
        <article class="card">
          <div class="review-img"></div>
          <div class="review-body">
            <div class="stars">★★★★★</div>
            <div class="review-title">세면대 막힘</div>
            <p class="review-text">가격도 합리적이고 설명이 정확했어요.</p>
          </div>
        </article>
        <article class="card">
          <div class="review-img"></div>
          <div class="review-body">
            <div class="stars">★★★★★</div>
            <div class="review-title">고압 세척</div>
            <p class="review-text">스케일링 후 배수 속도가 확 달라졌습니다.</p>
          </div>
        </article>
        <article class="card">
          <div class="review-img"></div>
          <div class="review-body">
            <div class="stars">★★★★★</div>
            <div class="review-title">주방 배관 청소</div>
            <p class="review-text">작업 전/후 사진까지 보여주셔서 신뢰가 갔어요.</p>
          </div>
        </article>
        <article class="card">
          <div class="review-img"></div>
          <div class="review-body">
            <div class="stars">★★★★★</div>
            <div class="review-title">긴급 출동</div>
            <p class="review-text">정말 1시간 내로 오셔서 해결했습니다. 추천!</p>
          </div>
        </article>
      </div>

      <div class="more-wrap">
        <a class="btn primary" href="#section9">리뷰 더 보기</a>
      </div>
    </div>
  </section>

  <!-- SECTION 3: INSURANCE -->
  <section id="section3" class="section alt">
    <div class="container two-col">
      <div>
        <h2 class="title">배관고스트 배상책임보험</h2>
        <p class="subtitle">
          작업 중 발생할 수 있는 사고에 대비해 배상책임보험에 가입되어 있습니다.<br/>
          고객님이 안심하고 맡길 수 있도록 안전 기준을 준수합니다.
        </p>
        <div style="margin-top:18px;display:flex;gap:10px;flex-wrap:wrap">
          <a class="btn primary" href="tel:010-0000-0000">📞 24시간 상담</a>
          <a class="btn" href="#section7">🛠 기술력 보기</a>
        </div>
      </div>

      <div class="insurance-doc" aria-label="보험가입 인증서(대체 이미지)">
        <div class="doc-badge">보험가입인증서</div>
        <div class="doc-paper">
          <div class="doc-line w70"></div>
          <div class="doc-line w55"></div>
          <div class="doc-line w85"></div>
          <div class="doc-line w40"></div>
          <div class="doc-line w70"></div>
          <div class="doc-line w55"></div>
          <div class="doc-line w85"></div>
          <div class="doc-line w40"></div>
        </div>
        <div class="doc-seal" aria-hidden="true"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: REASONS 6 -->
  <section id="section4" class="section">
    <div class="container">
      <h2 class="title">지금 바로 배관고스트를 불러주세요!</h2>
      <p class="subtitle">막힘 유형별 맞춤 장비로 정확하게 해결합니다.</p>

      <div class="grid reason-grid" style="margin-top:20px">
        <div class="card reason-item">
          <div class="icon">🚽</div>
          <div>
            <h3>변기 막힘</h3>
            <p>이물질·배관 구조 원인까지 진단 후 처리합니다.</p>
          </div>
        </div>
        <div class="card reason-item">
          <div class="icon">🍽️</div>
          <div>
            <h3>싱크대 막힘</h3>
            <p>기름때·음식물 찌꺼기 막힘을 빠르게 제거합니다.</p>
          </div>
        </div>
        <div class="card reason-item">
          <div class="icon">🕳️</div>
          <div>
            <h3>하수구 막힘</h3>
            <p>머리카락·비누때·슬러지 제거 및 배수 개선.</p>
          </div>
        </div>
        <div class="card reason-item">
          <div class="icon">💦</div>
          <div>
            <h3>고압 세척</h3>
            <p>배관 내부 스케일·슬러지를 강력하게 세척합니다.</p>
          </div>
        </div>
        <div class="card reason-item">
          <div class="icon">🌬️</div>
          <div>
            <h3>악취 제거</h3>
            <p>트랩·배관 오염 원인을 찾아 악취를 차단합니다.</p>
          </div>
        </div>
        <div class="card reason-item">
          <div class="icon">🔄</div>
          <div>
            <h3>역류 제거</h3>
            <p>역류 원인을 진단하고 재발 방지까지 안내합니다.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: DISPATCH -->
  <section id="section5" class="section alt">
    <div class="container two-col">
      <div>
        <h2 class="title">1시간 내로 출동</h2>
        <p class="subtitle">
          서비스 지역 : <b>서울 · 경기 · 인천</b><br/>
          365일 24시간, 고객님 위치로 빠르게 출동합니다.
        </p>
        <div style="margin-top:18px">
          <a class="btn primary" href="tel:010-0000-0000">📞 즉시 출동 요청</a>
        </div>
      </div>

      <div class="map-wrap" aria-label="대한민국 지도(대체 그래픽)">
        <div class="pin seoul" title="서울"></div>
        <div class="pin incheon" title="인천"></div>
        <div class="pin gyeonggi" title="경기"></div>

        <svg class="korea" viewBox="0 0 300 300" fill="none" aria-hidden="true">
          <path d="M150 20c30 10 55 45 45 75-8 25 10 45 20 65 10 20-2 45-18 60-18 18-20 38-40 50-25 15-60 5-78-18-18-22-22-55-10-80 10-22 8-35 2-55-8-28 2-55 20-73 16-16 35-28 59-24Z"
                fill="rgba(255,255,255,.85)" stroke="rgba(15,23,42,.10)" stroke-width="2"/>
        </svg>

        <div style="position:relative;z-index:2;max-width:340px">
          <div class="chip">출장비 상담 안내</div>
          <div style="margin-top:10px;font-weight:900;font-size:18px;color:#0b4f77">
            빠른 진단 · 빠른 해결
          </div>
          <div style="margin-top:6px;color:rgba(15,23,42,.72);line-height:1.6;font-size:14px">
            현장 방문 후 원인을 확인하고<br/>정확하고 합리적인 견적을 안내드립니다.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: 24H BANNER -->
  <section id="section6" class="section">
    <div class="container">
      <div class="water-banner">
        <svg class="splash" viewBox="0 0 400 220" fill="none" aria-hidden="true">
          <path d="M10 160c80-60 120-40 170-15 60 30 110 55 210-15" stroke="white" stroke-width="28" stroke-linecap="round"/>
          <path d="M30 200c80-60 120-40 170-15 60 30 110 55 210-15" stroke="white" stroke-width="18" stroke-linecap="round" opacity=".8"/>
        </svg>
        <svg class="splash2" viewBox="0 0 400 260" fill="none" aria-hidden="true">
          <path d="M60 70c70-40 120-30 160 0 55 40 95 35 150-5" stroke="white" stroke-width="20" stroke-linecap="round" opacity=".9"/>
          <path d="M60 120c70-40 120-30 160 0 55 40 95 35 150-5" stroke="white" stroke-width="14" stroke-linecap="round" opacity=".7"/>
        </svg>

        <h2>비교불가! 대체불가! 24시간 상시운영</h2>
        <p>
          지금 바로 전화 주세요!<br/>
          365일 24시간 언제든지 고객님을 위해 출동합니다.
        </p>
        <div class="water-actions">
          <a class="btn kakao" href="#section9">💬 카카오톡 상담</a>
          <a class="btn" style="background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.28);color:#fff" href="tel:010-0000-0000">📞 즉시 전화</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: PROCESS -->
  <section id="section7" class="section alt">
    <div class="container">
      <h2 class="title">배관고스트 스페셜 케어</h2>
      <p class="subtitle">
        배관청소 10년 이상 장인들이 1시간 내로 출동하여 막혔던 배관을 스케일링 해드리고,<br/>
        오랜 기간 유지될 수 있게 사후 관리 방법까지 상세히 알려드립니다.
      </p>

      <div class="grid process-grid" style="margin-top:20px">
        <div class="card step">
          <div class="icon">📞</div>
          <h3>고객 상담</h3>
          <p>24시간 빠른 상담 및 출동</p>
        </div>
        <div class="card step">
          <div class="icon">🧾</div>
          <h3>견적 안내</h3>
          <p>무료 출장 후 정확하고 합리적인 견적 안내</p>
        </div>
        <div class="card step">
          <div class="icon">🛠️</div>
          <h3>작업 진행</h3>
          <p>고성능 전문 장비로 장인의 작업 진행</p>
        </div>
        <div class="card step">
          <div class="icon">✅</div>
          <h3>작업 완료</h3>
          <p>고객 확인 및 사후 관리 안내</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: SPECIAL -->
  <section id="section8" class="section">
    <div class="container">
      <h2 class="title">배관고스트가 특별한 이유</h2>
      <p class="subtitle">고객이 체감하는 “확실한 차이”를 약속합니다.</p>

      <div class="grid special-grid" style="margin-top:20px">
        <div class="card special-item">
          <div class="icon">⏰</div>
          <div>
            <h3>24시간 출동</h3>
            <p>언제든지 연락주시면 즉시 현장으로 출동합니다.</p>
          </div>
        </div>
        <div class="card special-item">
          <div class="icon">🚗</div>
          <div>
            <h3>출장비 안내</h3>
            <p>현장 확인 후 합리적인 견적을 안내드립니다.</p>
          </div>
        </div>
        <div class="card special-item">
          <div class="icon">🧠</div>
          <div>
            <h3>경험과 노하우</h3>
            <p>전문가가 고성능 장비로 정확한 진단 후 진행합니다.</p>
          </div>
        </div>
        <div class="card special-item">
          <div class="icon">💯</div>
          <div>
            <h3>작업 성공 100%</h3>
            <p>다년간 현장 경험으로 실패 없이 문제를 해결합니다.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: CONTACT -->
  <section id="section9" class="section alt">
    <div class="container">
      <h2 class="title">배관고스트 고객센터</h2>
      <p class="subtitle">전화 또는 카카오톡으로 바로 상담 가능합니다.</p>

      <div class="contact-box" style="margin-top:18px">
        <div>
          <div class="chip">긴급 출동 접수</div>
          <div style="margin-top:10px;font-weight:900;font-size:20px">
            010-0000-0000
          </div>
          <div style="margin-top:6px;color:var(--muted);font-size:14px;line-height:1.6">
            365일 24시간 상담 · 서울/경기/인천 출동
          </div>
        </div>

        <div class="contact-actions">
          <a class="btn primary" href="tel:010-0000-0000">📞 전화 상담</a>
          <a class="btn kakao" href="https://pf.kakao.com/" target="_blank" rel="noopener">💬 카카오톡 상담</a>
        </div>
      </div>
    </div>
  </section>

</main>

<footer>
  <div class="container foot">
    <div class="logo" style="gap:8px">
      <span class="logo-badge" aria-hidden="true" style="width:34px;height:34px;border-radius:12px"></span>
      <b>배관고스트</b>
    </div>
    <small>© <span id="y"></span> 배관고스트. All rights reserved.</small>
  </div>
</footer>

<!-- floating quick actions -->
<div class="float" aria-label="빠른 상담 버튼">
  <a class="btn primary" href="tel:010-0000-0000">📞 전화</a>
  <a class="btn kakao" href="https://pf.kakao.com/" target="_blank" rel="noopener">💬 카톡</a>
</div>

<script>
  document.getElementById("y").textContent = new Date().getFullYear();

  // smooth scroll for internal links
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener("click", (e)=>{
      const id = a.getAttribute("href");
      if(!id || id === "#") return;
      const el = document.querySelector(id);
      if(!el) return;
      e.preventDefault();
      el.scrollIntoView({behavior:"smooth", block:"start"});
    });
  });
</script>
</body>
</html>
