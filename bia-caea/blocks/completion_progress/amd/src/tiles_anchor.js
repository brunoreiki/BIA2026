define([], function() {
  function getParam(name) {
    var m = new RegExp('[?&]' + name + '=([^&#]*)').exec(location.search);
    return m ? decodeURIComponent(m[1].replace(/\+/g, ' ')) : null;
  }
  function isVisible(el){ return el && el.offsetParent !== null; }
  function tryScrollTo(targetId) {
    var el = document.getElementById(targetId);
    if (isVisible(el)) {
      el.scrollIntoView({behavior:'smooth', block:'start'});
      try { el.classList.add('completion-progress-highlight'); } catch(e){}
      return true;
    }
    return false;
  }
  function openTileForSection(section) {
    var tile =
      document.querySelector('[data-section="'+section+'"]') ||
      document.querySelector('[data-sectionid="'+section+'"]') ||
      document.getElementById('section-' + section) ||
      document.querySelector('.tile-section.section-' + section);
    if (!tile) return false;
    var opener =
      tile.querySelector('a.sectiontoggle, button.sectiontoggle, a.tile, .tile-click-target, .sectionname a');
    if (opener) { opener.click(); return true; }
    tile.classList.remove('collapsed');
    return true;
  }
  function init() {
    if (!/\/course\/view\.php/i.test(location.pathname)) return;
    if (!document.body.classList.contains('format-tiles')) return;

    var hash = window.location.hash || '';
    if (!/^#module-\d+$/.test(hash)) return;

    var section = getParam('section');
    var targetId = hash.substring(1);

    if (tryScrollTo(targetId)) return;
    if (section) { openTileForSection(section); }

    var attempts = 0, max = 80;
    var iv = setInterval(function() {
      if (tryScrollTo(targetId) || attempts++ > max) clearInterval(iv);
    }, 100);
  }
  return { init: init };
});

