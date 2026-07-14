<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32.png" sizes="32x32">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-192.png" sizes="192x192">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">

<?php
// Link preview (WhatsApp, Slack, iMessage, Facebook, LinkedIn...).
// og:image must be an absolute URL - relative paths are silently ignored.
// Bump ?v= when the card changes: WhatsApp caches previews aggressively.
$gdi_og_title = 'G.D.I - מהנדס אחד במקום צוות שלם';
$gdi_og_desc  = 'כל פרויקט, מינימום זמן ותקציב, בסטנדרט Gold. ארכיטקטורה, אבטחת מידע, בדיקות ותשתיות - הכל תחת קורת גג אחת.';
$gdi_og_image = get_template_directory_uri() . '/images/og-image.png?v=1';
?>
<meta property="og:type" content="website">
<meta property="og:locale" content="he_IL">
<meta property="og:site_name" content="G.D.I">
<meta property="og:title" content="<?php echo esc_attr($gdi_og_title); ?>">
<meta property="og:description" content="<?php echo esc_attr($gdi_og_desc); ?>">
<meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
<meta property="og:image" content="<?php echo esc_url($gdi_og_image); ?>">
<meta property="og:image:secure_url" content="<?php echo esc_url($gdi_og_image); ?>">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?php echo esc_attr($gdi_og_title); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr($gdi_og_title); ?>">
<meta name="twitter:description" content="<?php echo esc_attr($gdi_og_desc); ?>">
<meta name="twitter:image" content="<?php echo esc_url($gdi_og_image); ?>">

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
      <a href="#services">שירותים</a>
      <a href="#capabilities">יכולות</a>
      <a href="#roadmap">איך זה עובד</a>
      <a href="#ai">צוות AI</a>
      <a href="#skills">ארגז הכלים</a>
      <a href="#contact">דברו איתנו</a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="wrap">
    <p class="kicker">Goldberg Development Instruction</p>
    <h1>כל פרויקט.<br>מינימום זמן ותקציב.<br>בלי להתפשר על ה־<br><span class="gold">Gold Standard.</span></h1>
    <p>אנחנו לוקחים כל פרויקט ומסיימים אותו בסטנדרט Gold - כי השם מחייב. בלי מתחרים, בלי פשרות, בלי תירוצים.</p>
    <a class="cta" href="#contact">בואו נדבר</a>
    &nbsp;&nbsp;
    <a class="cta ghost" href="#capabilities">מה אנחנו יודעים לעשות</a>
  </div>
  <div class="scroll-hint">&#8964;</div>
</section>

<section class="stats">
  <div class="wrap">
    <div class="stat reveal"><b data-count="6">0</b><span>תפקידים שאיש אחד מחליף -<br>ארכיטקט תוכנה, בדיקות, תשתיות, בסיסי נתונים, אבטחת מידע וניהול מוצר</span></div>
    <div class="stat reveal"><b data-count="50" data-suffix="x">0</b><span>שיפור ביצועים בחיפוש - מ־6.8 שניות ל־133 אלפיות שנייה</span></div>
    <div class="stat reveal"><b data-count="116">0</b><span>בדיקות אוטומטיות שמחליפות צוות בדיקות ידני במלואו</span></div>
    <div class="stat reveal"><b data-count="0">0</b><span>זמן השבתה בפריסות -<br>מערכת Blue-Green סביב השעון</span></div>
  </div>
</section>

<section id="team">
  <div class="wrap">
    <p class="kicker reveal">הצוות</p>
    <h2 class="section-title reveal">שלושה אנשים. אחריות מלאה על הכל.</h2>
    <p class="section-sub reveal">במקום צוות שלם של ספקים ותיאומים - צוות אחד קטן שלוקח בעלות מקצה לקצה: מהארכיטקטורה ועד השיווק.</p>
    <div class="team-grid">
      <article class="card reveal">
        <img src="<?php echo get_template_directory_uri(); ?>/images/alon-3.jpg" alt="אלון גולדברג" class="avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="avatar" style="display:none;">א</div>
        <h3>אלון גולדברג <a class="linkedin-icon" href="https://www.linkedin.com/in/alon7/" target="_blank" rel="noopener noreferrer" aria-label="הפרופיל של אלון גולדברג בלינקדאין"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.02-3.03-1.85-3.03-1.85 0-2.14 1.45-2.14 2.94v5.66H9.36V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45z"/></svg></a></h3>
        <div class="role">מנהל טכנולוגיות ראשי (CTO)</div>
        <p>מוביל טכנולוגי עם מעל 13 שנות ניסיון כסמכות המקצועית הבלעדית מאחורי פלטפורמת פרודקשן מורכבת. מומחה בארכיטקטורת תוכנה, מערכות QA אוטומטיות ב-6 שכבות, DevOps, ניהול בסיסי נתונים ואבטחת מידע. מהנדס סניור בעל יכולות של צוות שלם, המשלב בעבודתו כלי AI מתקדמים.</p>
      </article>
      <article class="card reveal">
        <img src="<?php echo get_template_directory_uri(); ?>/images/eitan-4.jpg" alt="איתן קונירסקי" class="avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="avatar" style="display:none;">אק</div>
        <h3>איתן קונירסקי</h3>
        <div class="role">מנהל פיתוח עסקי, שיווק ואסטרטגיה</div>
        <p>הגשר המקשר בין פתרונות טכנולוגיים להצלחה עסקית. מוביל את מערך האסטרטגיה, השיווק והפיתוח העסקי ליצירת מנועי צמיחה והכנסות - החל מקמפיינים ממוקדים ומודלים של מנויים, ועד לאינטגרציות תשלום מתקדמות שמניעות את העסק קדימה.</p>
      </article>
      <article class="card reveal">
        <img src="<?php echo get_template_directory_uri(); ?>/images/einav-4.jpg" alt="עינב אהוד-גולדברג" class="avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="avatar" style="display:none;">ע</div>
        <h3>עינב אהוד-גולדברג</h3>
        <div class="role">מנהלת עסקית ותפעולית</div>
        <p>מובילה את האסטרטגיה העסקית והניהול השוטף של החברה. אחראית על ניהול תזרים המזומנים, תשלומים וניהול כספים, לצד תיאום, תפעול ובקרה קפדנית המבטיחים שכל פרויקט מבוצע בזמן, במסגרת התקציב וללא קצוות פתוחים.</p>
      </article>
    </div>
  </div>
</section>

<section id="services">
  <div class="wrap">
    <p class="kicker reveal">השירותים שלנו</p>
    <h2 class="section-title reveal"><?php echo gdi_word_spans('שני מסלולים. אותה רמת ביצוע.'); ?></h2>
    <p class="section-sub svc-sub reveal">אפשר להיכנס אלינו בשביל ליווי ממוקד בבינה מלאכותית, ואפשר למסור לנו פרויקט שלם מקצה לקצה.</p>
    <div class="svc-grid">
      <article class="cap reveal">
        <div class="svc-head">
          <span class="svc-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 3l1.9 4.6L18.5 9.5 13.9 11.4 12 16l-1.9-4.6L5.5 9.5l4.6-1.9L12 3z"/>
              <path d="M18.5 15.5l.8 2 2 .8-2 .8-.8 2-.8-2-2-.8 2-.8.8-2z"/>
            </svg>
          </span>
          <span class="svc-num">מסלול 1</span>
        </div>
        <div class="cap-body">
          <h3>הטמעת בינה מלאכותית וייעוץ</h3>
          <p>בונים לכם פיצ'רים מבוססי בינה מלאכותית שמבצעים משימות מהר ויעיל יותר - או דברים שפשוט לא היו אפשריים קודם. במקביל, יושבים עם מנהל הפיתוח או עם ראשי הצוותים ובונים את ההגדרות המדויקות שמתאימות לעסק ולצוות הספציפי שלכם.</p>
          <p class="svc-fit"><span class="highlight">מתאים ל:</span> ארגונים עם צוות פיתוח קיים שרוצים למנף בינה מלאכותית נכון, בלי לנחש ובלי לבזבז חודשים על ניסוי וטעייה.</p>
        </div>
      </article>
      <article class="cap reveal">
        <div class="svc-head">
          <span class="svc-icon" aria-hidden="true">
            <svg viewBox="0 0 44 26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <text x="3" y="12" font-size="12" font-weight="700" fill="currentColor" stroke="none" font-family="Arial, sans-serif">a</text>
              <text x="32" y="12" font-size="12" font-weight="700" fill="currentColor" stroke="none" font-family="Arial, sans-serif">z</text>
              <path d="M4.5 17c8 5 22 5 30 -1"/>
              <path d="M29.5 13.5l5.5 2.2-2 4.4"/>
            </svg>
          </span>
          <span class="svc-num">מסלול 2</span>
        </div>
        <div class="cap-body">
          <h3>פיתוח מלא מונע בינה מלאכותית</h3>
          <p>לוקחים את הפרויקט משלב האפיון ועד ההרצה בפרודקשן, כולל דוחות אוטומטיים לאורך כל הדרך. אחרי המסירה נשארים אתכם עם שלושה חודשי אחריות מלאה.</p>
          <p class="svc-fit"><span class="highlight">מתאים ל:</span> עסקים שצריכים מוצר שלם ועובד, בלי לגייס ובלי לנהל צוות פיתוח פנימי.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section id="capabilities">
  <div class="wrap">
    <p class="kicker reveal">מה אתם מקבלים</p>
    <h2 class="section-title reveal"><?php echo gdi_word_spans('מהנדס אחד במקום צוות שלם.'); ?></h2>
    <p class="section-sub reveal">מארכיטקטורת המערכות ועד לבדיקות הידניות - כל התפקידים האלה יושבים באדם אחד, מוגבר פי עשרות מונים באמצעות בינה מלאכותית.<br><span class="highlight">כל תחום מגיע בכל התקשרות, לא כתוספת בתשלום.</span></p>
    <div class="cap-grid">
      <article class="cap reveal">
        <div class="cap-role">במקום ארכיטקט מערכות</div>
        <div class="cap-body">
          <h3>ארכיטקטורה ובעלות מלאה</h3>
          <p>בעלות טכנית על המערכת כולה, עם ניהול סיכונים לאורך הדרך. כל פיצ'ר וכל תיקון נבנים על ארכיטקטורה נכונה מהיום הראשון - לא על תיקונים שנערמים.</p>
        </div>
      </article>
      <article class="cap reveal cap-security">
        <div class="cap-role">במקום איש אבטחת מידע</div>
        <div class="cap-body">
          <h3>אבטחת מידע בליבת הפיתוח</h3>
          <p>סגירת ממצאים ממבדקי חדירה מקצועיים תוך שבועות במקום חודשים, והקשחה מתמשכת כחלק מהשגרה. האבטחה נכנסת לקוד בזמן הכתיבה - לא כביקורת שמגיעה בסוף וקוברת את הלו"ז.</p>
        </div>
      </article>
      <article class="cap reveal">
        <div class="cap-role">במקום צוות בדיקות ידני</div>
        <div class="cap-body">
          <h3>6 שכבות של בדיקות אוטומטיות</h3>
          <p>116 בדיקות אוטומאטיות שמחליפות צוות בדיקות ידני במלואו. כל שינוי נבדק לפני שהוא עולה - אפס רגרסיות מגיעות לסביבת ה-Production.</p>
        </div>
      </article>
      <article class="cap reveal">
        <div class="cap-role">במקום איש תשתיות</div>
        <div class="cap-body">
          <h3>פריסות ללא השבתה</h3>
          <p>מערכת Blue-Green על שרתים מאוזני עומס, עם חזרה אוטומטית לאחור בכל תקלה. זמינות מלאה סביב השעון.</p>
        </div>
      </article>
      <article class="cap reveal">
        <div class="cap-role">במקום מנהל בסיסי נתונים</div>
        <div class="cap-body">
          <h3>חיפוש מהיר פי חמישים</h3>
          <p>אופטימיזציית שאילתות בקנה מידה גדול (מעל 50 אלף רשומות). בפועל: חיפוש מורכב בחברה לניהול פנסיות ירד מ-6.8 שניות ל-133 אלפיות השנייה!, כולל מעבר מלא מ-mongoDB ל-MySQL עם redis.</p>
        </div>
      </article>
      <article class="cap reveal">
        <div class="cap-role">במקום צוות מוצר</div>
        <div class="cap-body">
          <h3>מערכות שמייצרות הכנסה</h3>
          <p>קמפיינים, מנויים ואינטגרציות תשלום - פיצ'רים עסקיים שנמדדים בשורה התחתונה. לא רק תחזוקה של מה שקיים, אלא צמיחה.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section id="roadmap" class="roadmap">
  <div class="wrap">
    <p class="kicker reveal">איך זה עובד</p>
    <h2 class="section-title reveal"><?php echo gdi_word_spans("קל להתחיל. קל לסיים.\nאחריות שממשיכה אחרי המסירה."); ?></h2>
    <p class="section-sub reveal">משיחת הבריף הראשונה ועד התחזוקה השוטפת אחרי המסירה - תהליך אחד ברור, בלי הפתעות בדרך.</p>
    <div class="roadmap-track">
      <article class="milestone reveal" data-step="1">
        <h3>התחלה תוך ימים, לא חודשים</h3>
        <p>שיחת בריף אחת, הצעת מחיר תוך 48 שעות, וסטארט בפועל על הפרויקט תוך שבוע - בלי תהליך מכירה מתיש.</p>
      </article>
      <article class="milestone reveal" data-step="2">
        <h3>סיום בסטנדרט Gold, עם אבטחת מידע כברירת מחדל</h3>
        <p>כל פרויקט יוצא עם 6 שכבות QA אוטומטי ובדיקת אבטחת מידע מובנית בתוך תהליך הפיתוח עצמו - לא כתוספת בסוף, אלא חלק מהקוד מהיום הראשון.</p>
      </article>
      <article class="milestone reveal" data-step="3">
        <h3>תחזוקה ואחריות אחרי המסירה</h3>
        <p>אחריות לתיקון באגים למשך 90 יום מרגע המסירה, ותוכנית תחזוקה חודשית עם עד 20 משימות תמיכה - עדכונים, תיקונים ושינויים קטנים, בלי לספור שעות.</p>
      </article>
    </div>
  </div>
</section>

<section id="ai" class="ai">
  <div class="wrap">
    <p class="kicker reveal">צוות AI</p>
    <h2 class="section-title reveal">הנדסת AI בפרודקשן. לא Buzzwords.</h2>
    <p class="section-sub reveal">מאז 2024 אנחנו מפעילים מתודולוגיית הנדסת AI בסביבת פרודקשן אמיתית, על גב ניסיון של 13 שנים בפיתוח מוצרים בישראל.<br><span class="highlight">התוצאה: מהירות של סטארטאפ עם אמינות של מערכת ותיקה.</span></p>
    <div class="ai-badges reveal">
      <span class="badge">50 סוכני תחום</span>
      <span class="badge">51 כלי CLI</span>
      <span class="badge">פיצ'רים תוך ימים</span>
      <span class="badge">מתודולוגיה מ־2024 בפרודקשן</span>
    </div>
  </div>
</section>

<section id="skills" class="skills">
  <div class="wrap">
    <p class="kicker reveal">ארגז הכלים</p>
    <h2 class="section-title reveal">שנים של פיתוח בכלים אמיתיים.</h2>
    <div class="skills-grid">
      <?php foreach (gdi_skill_groups() as $gdi_group_title => $gdi_items): ?>
        <div class="skill-col reveal">
          <h3><?php echo esc_html($gdi_group_title); ?></h3>
          <ul class="skill-list">
            <?php foreach ($gdi_items as $gdi_item): ?>
              <li>
                <span class="skill-icon"><?php echo gdi_skill_icon($gdi_item['icon']); ?></span>
                <span class="skill-name"><?php echo esc_html($gdi_item['name']); ?></span>
                <?php if ($gdi_item['years']): ?>
                  <span class="skill-years"><?php echo esc_html(gdi_years_label($gdi_item['years'])); ?></span>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="contact" class="final">
  <div class="wrap">
    <h2 class="reveal">מוכנים להחליף מורכבות <span style="color:var(--gold)">בצוות אחד שלוקח אחריות על הכל?</span></h2>
    <p class="reveal">שיחה אחת. תוך שלוש דקות תבינו למה אין לנו מתחרים.</p>

    <p id="gdi-form-msg" class="form-msg" role="status" hidden></p>

    <!--
      Submits straight to Web3Forms from the visitor's browser, not through
      this server: Awardspace's free hosting has no outbound network access
      from PHP at all (confirmed directly - even a plain HTTPS request from
      the server times out), so wp_mail()/SMTP/any server-side email API can
      never work here. The browser has no such restriction.
      action=/method=POST is a native fallback for no-JS visitors (redirects
      to Web3Forms' own thank-you page); the script below intercepts the
      submit to show the styled in-page message instead when JS is available.
    -->
    <form class="contact-form reveal" id="gdi-contact-form"
          action="https://api.web3forms.com/submit" method="POST">
      <input type="hidden" name="access_key" value="ee71b3d2-045e-4b03-8e55-52b031a5927f">
      <input type="hidden" name="subject" value="פנייה חדשה מהאתר G.D.I">
      <input type="hidden" name="redirect" value="https://gdi.dpdns.org/?sent=1#contact">
      <div class="hp-wrap" aria-hidden="true">
        <label for="gdi_botcheck">אתר</label>
        <input type="checkbox" id="gdi_botcheck" name="botcheck" tabindex="-1" autocomplete="off">
      </div>
      <div class="form-row">
        <label for="gdi_name" class="sr-only">שם מלא</label>
        <input type="text" id="gdi_name" name="name" placeholder="שם מלא" required>
      </div>
      <div class="form-row">
        <label for="gdi_email" class="sr-only">אימייל</label>
        <input type="email" id="gdi_email" name="email" placeholder="אימייל" required>
      </div>
      <div class="form-row">
        <label for="gdi_phone" class="sr-only">טלפון</label>
        <input type="tel" id="gdi_phone" name="phone" placeholder="טלפון">
      </div>
      <div class="form-row">
        <label for="gdi_message" class="sr-only">כמה מילים לפני שנדבר</label>
        <textarea id="gdi_message" name="message" placeholder="כמה מילים לפני שנדבר..." rows="4" required></textarea>
      </div>
      <button type="submit" class="cta">יאללה, בואו נדבר</button>
    </form>
  </div>
</section>

<footer class="site-footer">
  <div class="wrap">G.D.I - Goldberg Development Instruction &copy; <?php echo date('Y'); ?></div>
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

// Scroll-progress fallback for browsers without animation-timeline: view()
// (Firefox, as of 2026). Feeds a single --p custom property per .sec block;
// the CSS gate in style.css only reads it when native support is absent.
if (!CSS.supports('animation-timeline: view()')) {
  const secs = document.querySelectorAll('.sec');
  if (secs.length) {
    let ticking = false;
    const update = () => {
      secs.forEach(s => {
        const r = s.getBoundingClientRect();
        const p = Math.min(1, Math.max(0, (innerHeight - r.top) / (innerHeight + r.height)));
        s.style.setProperty('--p', p);
      });
      ticking = false;
    };
    addEventListener('scroll', () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(update);
    }, { passive: true });
    update();
  }
}

// Contact form -> Web3Forms, submitted directly from the browser (see the
// HTML comment above the form for why). Progressive enhancement: the form's
// own action/method already work with JS disabled; this just intercepts the
// submit to show the result in-page instead of navigating away.
const gdiForm = document.getElementById('gdi-contact-form');
if (gdiForm) {
  const gdiMsg = document.getElementById('gdi-form-msg');
  gdiForm.addEventListener('submit', function (e) {
    e.preventDefault();
    gdiMsg.hidden = true;
    const submitBtn = gdiForm.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    fetch(gdiForm.action, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
      body: JSON.stringify(Object.fromEntries(new FormData(gdiForm)))
    })
      .then(r => r.json().then(json => ({ ok: r.ok && json.success, json })))
      .then(({ ok, json }) => {
        // Always our own Hebrew copy - Web3Forms' own message (e.g. "Form
        // submitted successfully!") is English and breaks the page's voice.
        gdiMsg.textContent = ok
          ? 'תודה! ההודעה נשלחה, נחזור אליכם בהקדם.'
          : 'משהו השתבש בשליחה. אפשר לכתוב ישירות ל-eitank80@gmail.com.';
        gdiMsg.className = 'form-msg ' + (ok ? 'form-msg-ok' : 'form-msg-err');
        gdiMsg.hidden = false;
        if (ok) gdiForm.reset();
      })
      .catch(() => {
        gdiMsg.textContent = 'משהו השתבש בשליחה. אפשר לכתוב ישירות ל-eitank80@gmail.com.';
        gdiMsg.className = 'form-msg form-msg-err';
        gdiMsg.hidden = false;
      })
      .finally(() => { submitBtn.disabled = false; });
  });
}
</script>
<?php // wa.me routes itself: native app on mobile, desktop app if installed, WhatsApp Web otherwise. ?>
<a class="wa-fab"
   href="https://wa.me/<?php echo esc_attr(GDI_WHATSAPP); ?>?text=<?php echo rawurlencode('היי, הגעתי מהאתר של G.D.I ואשמח לשמוע פרטים.'); ?>"
   target="_blank" rel="noopener noreferrer"
   aria-label="שליחת הודעה בוואטסאפ">
  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12 12 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884a9.82 9.82 0 0 1 6.988 2.896 9.82 9.82 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.8 11.8 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.9 11.9 0 0 0 5.688 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.8 11.8 0 0 0 20.464 3.488"/>
  </svg>
</a>
<?php wp_footer(); ?>
</body>
</html>
