<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="wrap">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/GDI-Logo2.png" alt="G.D.I" class="logo-img">
    </div>
    <nav class="nav">
      <a href="#team">הצוות</a>
      <a href="#capabilities">יכולות</a>
      <a href="#ai">צוות AI</a>
      <a href="#contact">דברו איתנו</a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="wrap">
    <p class="kicker">Goldberg Development Instruction</p>
    <h1>כל פרויקט. מינימום זמן ותקציב.<br>בלי להתפשר על ה־<br><span class="gold">Gold Standard.</span></h1>
    <p>אנחנו לוקחים כל פרויקט ומסיימים אותו בסטנדרט Gold — כי השם מחייב. בלי מתחרים, בלי פשרות, בלי תירוצים.</p>
    <a class="cta" href="#contact">בואו נדבר</a>
    &nbsp;&nbsp;
    <a class="cta ghost" href="#capabilities">מה אנחנו יודעים לעשות</a>
  </div>
  <div class="scroll-hint">&#8964;</div>
</section>

<section class="stats">
  <div class="wrap">
    <div class="stat reveal"><b data-count="13">0</b><span>שנות ניסיון אמיתי בפיתוח מוצרים בישראל</span></div>
    <div class="stat reveal"><b data-count="50" data-suffix="x">0</b><span>שיפור ביצועים בחיפוש — מ־6.8 שניות ל־133 אלפיות שנייה</span></div>
    <div class="stat reveal"><b data-count="200" data-suffix="%">0</b><span>עלייה בפרודוקטיביות עם הנדסת AI בפרודקשן</span></div>
    <div class="stat reveal"><b data-count="0">0</b><span>זמן השבתה בפריסות — מערכת Blue-Green סביב השעון</span></div>
  </div>
</section>

<section id="team">
  <div class="wrap">
    <p class="kicker reveal">הצוות</p>
    <h2 class="section-title reveal">שלושה אנשים. אחריות מלאה על הכל.</h2>
    <p class="section-sub reveal">במקום צוות שלם של ספקים ותיאומים — צוות אחד קטן שלוקח בעלות מקצה לקצה: מהארכיטקטורה ועד השיווק.</p>
    <div class="team-grid">
      <article class="card reveal">
        <img src="<?php echo get_template_directory_uri(); ?>/images/alon-3.jpg" alt="אלון גולדברג" class="avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="avatar" style="display:none;">א</div>
        <h3>אלון גולדברג</h3>
        <div class="role">CTO</div>
        <p>13 שנים כבעלים טכני יחיד של פלטפורמת פרודקשן: ארכיטקטורה, QA אוטומטי בשש שכבות, DevOps, בסיסי נתונים ואבטחת מידע. מהנדס סניור אחד שמחליף צוות שלם — מוגבר ב־AI.</p>
      </article>
      <article class="card reveal">
        <img src="<?php echo get_template_directory_uri(); ?>/images/eitan-4.jpg" alt="איתן קונירסקי" class="avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="avatar" style="display:none;">אק</div>
        <h3>איתן קונירסקי</h3>
        <div class="role">מנהל פיתוח עסקי ושיווק</div>
        <p>מחבר בין הטכנולוגיה לעסק: אסטרטגיה, שיווק ופיתוח עסקי שמייצרים הכנסות — קמפיינים, מנויים ואינטגרציות תשלום שמזיזים את המחוגים.</p>
      </article>
      <article class="card reveal">
        <img src="<?php echo get_template_directory_uri(); ?>/images/einav-4.jpg" alt="עינב גולדברג" class="avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="avatar" style="display:none;">ע</div>
        <h3>עינב גולדברג</h3>
        <div class="role">מנהלת תפעול</div>
        <p>דואגת שהכל קורה בזמן ובתקציב: תפעול, תיאום ובקרה שמבטיחים שכל פרויקט נסגר — ולא נגרר.</p>
      </article>
    </div>
  </div>
</section>

<section id="capabilities">
  <div class="wrap">
    <p class="kicker reveal">יכולות מוכחות</p>
    <h2 class="section-title reveal">לא מצגות. מוצרים חיים בפרודקשן.</h2>
    <div class="cap-grid">
      <article class="cap reveal">
        <div class="ph">Placeholder — צילום מסך: מנוע חיפוש</div>
        <div class="cap-body"><h3>חיפוש מהיר פי 50</h3><p>אופטימיזציה של ליבת החיפוש מ־6.8 שניות ל־133 אלפיות שנייה, כולל הגירה מ־MongoDB ל־MySQL עם Redis.</p></div>
      </article>
      <article class="cap reveal">
        <div class="ph">Placeholder — סרטון: פריסה בלחיצה</div>
        <div class="cap-body"><h3>פריסות ללא השבתה</h3><p>מערכת Blue-Green שהרחיבה את חלון השחרורים משעות העבודה לזמינות מלאה סביב השעון.</p></div>
      </article>
      <article class="cap reveal">
        <div class="ph">Placeholder — צילום מסך: דשבורד סוכני AI</div>
        <div class="cap-body"><h3>מפעל AI הנדסי</h3><p>חמישים סוכני תחום ו־51 כלי שורת פקודה: פיצ'רים שיוצאים תוך ימים במקום שבועות.</p></div>
      </article>
      <article class="cap reveal">
        <div class="ph">Placeholder — צילום מסך: מערכת מנויים</div>
        <div class="cap-body"><h3>מערכות שמייצרות הכנסה</h3><p>קמפיינים, מנויים ואינטגרציות תשלום — פיצ'רים עסקיים שנמדדים בשורה התחתונה.</p></div>
      </article>
      <article class="cap reveal">
        <div class="ph">Placeholder — צילום מסך: כיסוי בדיקות</div>
        <div class="cap-body"><h3>שש שכבות של QA אוטומטי</h3><p>בדיקות אוטומטיות שמחליפות QA ידני לחלוטין — איכות שנאכפת על ידי מכונה, לא על ידי מזל.</p></div>
      </article>
      <article class="cap reveal">
        <div class="ph">Placeholder — צילום מסך: דוח אבטחה</div>
        <div class="cap-body"><h3>אבטחת מידע רציפה</h3><p>סגירת ממצאי מבדקי חדירה והקשחה מתמשכת — כחלק מהשגרה, לא כפרויקט חד־פעמי.</p></div>
      </article>
    </div>
  </div>
</section>

<section id="ai" class="ai">
  <div class="wrap">
    <p class="kicker reveal">צוות AI</p>
    <h2 class="section-title reveal">הנדסת AI בפרודקשן. לא באזוורדים.</h2>
    <p class="section-sub reveal">מאז 2024 אנחנו מפעילים מתודולוגיית הנדסת AI בסביבת פרודקשן אמיתית, על גב ניסיון של 13 שנים בפיתוח מוצרים בישראל. התוצאה: מהירות של סטארטאפ עם אמינות של מערכת ותיקה.</p>
    <div class="ai-badges reveal">
      <span class="badge">50 סוכני תחום</span>
      <span class="badge">51 כלי CLI</span>
      <span class="badge">פיצ'רים תוך ימים</span>
      <span class="badge">מתודולוגיה מ־2024 בפרודקשן</span>
      <span class="badge">200% יותר תפוקה</span>
    </div>
  </div>
</section>

<section id="contact" class="final">
  <div class="wrap">
    <h2 class="reveal">מוכנים להחליף מורכבות <span style="color:var(--gold)">בצוות אחד שלוקח אחריות על הכל?</span></h2>
    <p class="reveal">שיחה אחת. תוך שלוש דקות תבינו למה אין לנו מתחרים.</p>
    <a class="cta reveal" href="mailto:alon77@gmail.com">בואו נדבר</a>
  </div>
</section>

<footer class="site-footer">
  <div class="wrap">G.D.I — Goldberg Development Instruction &copy; <?php echo date('Y'); ?></div>
</footer>

<script>
// reveal on scroll + counters
const io = new IntersectionObserver(es => es.forEach(e => {
  if (!e.isIntersecting) return;
  e.target.classList.add('in');
  io.unobserve(e.target);
  const c = e.target.querySelector('[data-count]');
  if (c) {
    const end = +c.dataset.count, suf = c.dataset.suffix || '';
    let t0;
    const step = ts => {
      t0 ??= ts;
      const p = Math.min((ts - t0) / 1200, 1);
      c.textContent = Math.round(end * (1 - Math.pow(1 - p, 3))) + suf;
      if (p < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }
}), { threshold: 0.2 });
document.querySelectorAll('.reveal, .stat').forEach(el => io.observe(el));
</script>
<?php wp_footer(); ?>
</body>
</html>
