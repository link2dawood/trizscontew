let current = null;

export const successPage = (dom, msg) => {
  const successPageEl = document.createElement('div');
  successPageEl.innerHTML = `
  <div class="pop-modal hido pay-success-area success-page">
      <div class="pay-success-wrapper">
          <div class="pay-success-3">
              <div class="pay-success-2">
                  <div class="pay-success-1">
                      <svg class="feather feather-check" fill="none" width="29" height="29" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
              </div>
          </div>
      </div>
      <h3>${msg}</h3>
    </div>
  `;
  document.body.appendChild(successPageEl);
  dom.toggleScreen(document.querySelector('.success-page'), 'render');
  current = 'success';
  window.history.pushState({}, null, null);

  document.querySelector('.pay-success-area').onclick = () => {
    dom.toggleScreen(document.querySelector('.success-page'), 'fade');
    document.body.removeChild(successPageEl);
    current = null;
  };

  window.addEventListener('popstate', () => {
    if(current === 'success') {
      dom.toggleScreen(document.querySelector('.success-page'), 'fade');
      document.body.removeChild(successPageEl);
      current = null;
    };
  });
};