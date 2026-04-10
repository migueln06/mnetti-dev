const themeToggle = document.getElementById('theme-toggle');
const rootElement = document.documentElement;

function applyTheme(theme) {
  if (theme === 'dark') {
    rootElement.classList.add('dark');
  } else {
    rootElement.classList.remove('dark');
  }
}

function getInitialTheme() {
  const stored = localStorage.getItem('theme');
  if (stored === 'dark' || stored === 'light') {
    return stored;
  }

  return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
}

const initialTheme = getInitialTheme();
applyTheme(initialTheme);
localStorage.setItem('theme', initialTheme);

if (themeToggle) {
  themeToggle.addEventListener('click', () => {
    const current = rootElement.classList.contains('dark') ? 'dark' : 'light';
    const next = current === 'dark' ? 'light' : 'dark';
    applyTheme(next);
    localStorage.setItem('theme', next);
  });
}
