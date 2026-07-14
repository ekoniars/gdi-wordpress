<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32.png" sizes="32x32">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-192.png" sizes="192x192">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
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
    <div class="stat reveal"><b data-count="5">0</b><span>תפקידים שאיש אחד מחליף - ארכיטקט, בדיקות, תשתיות, בסיסי נתונים ואבטחת מידע</span></div>
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
        <div class="role">CTO</div>
        <p>13 שנים כבעלים טכני יחיד של פלטפורמת פרודקשן: ארכיטקטורה, QA אוטומטי בשש שכבות, DevOps, בסיסי נתונים ואבטחת מידע. מהנדס סניור אחד שמחליף צוות שלם - מוגבר ב־AI.</p>
      </article>
      <article class="card reveal">
        <img src="<?php echo get_template_directory_uri(); ?>/images/eitan-4.jpg" alt="איתן קונירסקי" class="avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="avatar" style="display:none;">אק</div>
        <h3>איתן קונירסקי</h3>
        <div class="role">מנהל פיתוח עסקי ושיווק</div>
        <p>מחבר בין הטכנולוגיה לעסק: אסטרטגיה, שיווק ופיתוח עסקי שמייצרים הכנסות - קמפיינים, מנויים ואינטגרציות תשלום שמזיזים את המחוגים.</p>
      </article>
      <article class="card reveal">
        <img src="<?php echo get_template_directory_uri(); ?>/images/einav-4.jpg" alt="עינב גולדברג" class="avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="avatar" style="display:none;">ע</div>
        <h3>עינב גולדברג</h3>
        <div class="role">מנהלת תפעול</div>
        <p>דואגת שהכל קורה בזמן ובתקציב: תפעול, תיאום ובקרה שמבטיחים שכל פרויקט נסגר - ולא נגרר.</p>
      </article>
    </div>
  </div>
</section>

<section id="capabilities">
  <div class="wrap">
    <p class="kicker reveal">מה אתם מקבלים</p>
    <h2 class="section-title reveal"><?php echo gdi_word_spans('מהנדס אחד במקום צוות שלם.'); ?></h2>
    <p class="section-sub reveal">ארכיטקט, בודק תוכנה, איש תשתיות, מנהל בסיסי נתונים ואיש אבטחת מידע - כל התפקידים האלה יושבים באדם אחד, מוגבר בבינה מלאכותית.<br><span class="highlight">כל תחום מגיע בכל התקשרות, לא כתוספת בתשלום.</span></p>
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
          <h3>שש שכבות של בדיקות אוטומטיות</h3>
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
          <p>אופטימיזציית שאילתות בקנה מידה גדול (מעל 50 אלף רשומות). בפועל: חיפוש מורכב בחברה לניהול פנסיות ירד מ-6.8 שניות ל-133 אלפיות השנייה!, כולל מעבר מלא מ-mongoDB ל-MySQL עם Redis.</p>
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
        <p>כל פרויקט יוצא עם שש שכבות QA אוטומטי ובדיקת אבטחת מידע מובנית בתוך תהליך הפיתוח עצמו - לא כתוספת בסוף, אלא חלק מהקוד מהיום הראשון.</p>
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
                  <span class="skill-years"><?php echo esc_html($gdi_item['years']); ?> שנים</span>
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

    <?php if (!empty($GLOBALS['gdi_contact_result'])): $gdi_r = $GLOBALS['gdi_contact_result']; ?>
      <p class="form-msg <?php echo $gdi_r['ok'] ? 'form-msg-ok' : 'form-msg-err'; ?>" role="status"><?php echo esc_html($gdi_r['msg']); ?></p>
    <?php endif; ?>

    <?php if (empty($GLOBALS['gdi_contact_result']['ok'])): ?>
    <form class="contact-form reveal" method="post" action="#contact">
      <?php wp_nonce_field('gdi_contact_form', 'gdi_contact_nonce'); ?>
      <div class="hp-wrap" aria-hidden="true">
        <label for="gdi_website">אתר</label>
        <input type="text" id="gdi_website" name="gdi_website" tabindex="-1" autocomplete="off">
      </div>
      <div class="form-row">
        <label for="gdi_name" class="sr-only">שם מלא</label>
        <input type="text" id="gdi_name" name="gdi_name" placeholder="שם מלא" required value="<?php echo gdi_old_value('gdi_name'); ?>">
      </div>
      <div class="form-row">
        <label for="gdi_email" class="sr-only">אימייל</label>
        <input type="email" id="gdi_email" name="gdi_email" placeholder="אימייל" required value="<?php echo gdi_old_value('gdi_email'); ?>">
      </div>
      <div class="form-row">
        <label for="gdi_phone" class="sr-only">טלפון</label>
        <input type="tel" id="gdi_phone" name="gdi_phone" placeholder="טלפון" value="<?php echo gdi_old_value('gdi_phone'); ?>">
      </div>
      <div class="form-row">
        <label for="gdi_message" class="sr-only">כמה מילים לפני שנדבר</label>
        <textarea id="gdi_message" name="gdi_message" placeholder="כמה מילים לפני שנדבר..." rows="4"><?php echo gdi_old_value('gdi_message', true); ?></textarea>
      </div>
      <button type="submit" name="gdi_contact_submit" value="1" class="cta">יאללה, בואו נדבר</button>
    </form>
    <?php endif; ?>
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
</script>
<?php wp_footer(); ?>
</body>
</html>
