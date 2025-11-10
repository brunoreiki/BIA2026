// eslint-disable-next-line no-undef
define([], function() {
  const log = (...args) => { try { console.debug('[courseindexfix]', ...args); } catch(e) {} };

  const getParam = (url, name) => {
    try { return (new URL(url, window.location.href)).searchParams.get(name); }
    catch(e){ return null; }
  };

  const findSectionElementFromHref = href => {
    const sec = getParam(href, 'section');
    if (sec) {
      return document.getElementById('coursecontent-section-' + sec)
          || document.getElementById('section-' + sec);
    }
    const m = href && href.match(/#(coursecontent-section-\d+|section-\d+)/);
    return m ? document.getElementById(m[1]) : null;
  };

  const firstActivityHref = sectionEl => {
    if (!sectionEl) return null;
    const a = sectionEl.querySelector(
      '.activity .activityname a[href*="/mod/"][href*="/view.php"],' +
      '.activityinstance a[href*="/mod/"][href*="/view.php"]'
    );
    return a ? a.getAttribute('href') : null;
  };

  // When the course index points to /course/section.php#module-XXX,
  // fetch that page, parse DOM, and extract the activity link of that module.
  const resolveModuleAnchor = async (href) => {
    try {
      const m = href.match(/#module-(\d+)/);
      if (!m) return null;
      const resp = await fetch(href.split('#')[0], { credentials: 'same-origin' });
      if (!resp.ok) return null;
      const html = await resp.text();
      const dom = new DOMParser().parseFromString(html, 'text/html');
      const moduleEl = dom.getElementById('module-' + m[1]);
      if (!moduleEl) return null;
      const a = moduleEl.querySelector('a[href*="/mod/"][href*="/view.php"]');
      return a ? a.getAttribute('href') : null;
    } catch(e) {
      log('resolveModuleAnchor error', e);
      return null;
    }
  };

  const onClick = async (e) => {
    const a = e.target.closest(
      '[data-region="course-index"] a, nav.courseindex a, .courseindex a, [data-for="courseindex"] a'
    );
    if (!a) return;
    const href = a.getAttribute('href') || '';
    log('click', href);

    if (/\/mod\/[^/]+\/view\.php/.test(href)) {
      log('already activity link');
      return; // already points to an activity
    }

    // Case 1: section link on current page → open first activity of that section
    const sectionEl = findSectionElementFromHref(href);
    if (sectionEl) {
      const act = firstActivityHref(sectionEl);
      if (act) {
        e.preventDefault();
        log('redirect to first activity in-section', act);
        window.location.assign(act);
        return;
      }
    }

    // Case 2: points to /course/section.php...#module-XXX → fetch and resolve
    if (/\/course\/section\.php\?/.test(href) && /#module-\d+/.test(href)) {
      e.preventDefault();
      log('resolving module anchor via fetch');
      const act = await resolveModuleAnchor(href);
      if (act) {
        log('redirect to module activity', act);
        window.location.assign(act);
        return;
      } else {
        log('fallback: navigate to original href');
        window.location.assign(href);
      }
    }
  };

  const init = () => {
    // Only on course-related pages
    if (!/\/course\//.test(window.location.pathname)) return;
    document.removeEventListener('click', onClick, true);
    document.addEventListener('click', onClick, true);
    log('init');
  };

  return { init };
});
