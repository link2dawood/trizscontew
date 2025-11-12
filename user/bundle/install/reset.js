const resetBtn = document.getElementById('reset-btn');

var Alert = undefined;

(function(Alert) {
    var alert, error, trash, info, success, warning, _container;
    info = function(message, title, options) {
      return alert("info", message, title, "fa fa-info-circle", options);
    };
    warning = function(message, title, options) {
      return alert("warning", message, title, "fa fa-warning", options);
    };
    error = function(message, title, options) {
      return alert("error", message, title, "fa fa-exclamation-circle", options);
    };
  
    trash = function(message, title, options) {
      return alert("trash", message, title, "fa fa-trash-o", options);
    };
  
    success = function(message, title, options) {
      return alert("success", message, title, "fa fa-check-circle", options);
    };
    alert = function(type, message, title, icon, options) {
      var alertElem, messageElem, titleElem, iconElem, innerElem, _container;
      if (typeof options === "undefined") {
        options = {};
      }
      options = $.extend({}, Alert.defaults, options);
      if (!_container) {
        _container = $("#alerts");
        if (_container.length === 0) {
          _container = $("<ul>").attr("id", "alerts").appendTo($("body"));
        }
      }
      if (options.width) {
        _container.css({
          width: options.width
        });
      }
      alertElem = $("<li>").addClass("alert").addClass("alert-" + type);
      setTimeout(function() {
        alertElem.addClass('open');
      }, 1);
      if (icon) {
        iconElem = $("<i>").addClass(icon);
        alertElem.append(iconElem);
      }
      innerElem = $("<div>").addClass("alert-block");
      //innerElem = $("<i>").addClass("fa fa-times");
      alertElem.append(innerElem);
      if (title) {
        titleElem = $("<div>").addClass("alert-title").append(title);
        innerElem.append(titleElem);
        
      }
      if (message) {
        if(navigator.vibrate) {
          navigator.vibrate(50);
        };
        messageElem = $("<div>").addClass("alert-message").append(message);
        //innerElem.append("<i class="fa fa-times"></i>");
        innerElem.append(messageElem);
        //innerElem.append("<em>Click to Dismiss</em>");
        //      innerElemc = $("<i>").addClass("fa fa-times");
  
      }
      if (options.displayDuration > 0) {
        setTimeout((function() {
          leave();
        }), options.displayDuration);
      } else {
        innerElem.append("<em>Click to Dismiss</em>");
      }
      alertElem.on("click", function() {
        leave();
      });
  
      function leave() {
        alertElem.removeClass('open');
        alertElem.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
          return alertElem.remove();
        });
      }
      return _container.prepend(alertElem);
    };
    Alert.defaults = {
      width: "",
      icon: "",
      displayDuration: 3000,
      pos: ""
    };
    Alert.info = info;
    Alert.warning = warning;
    Alert.error = error;
    Alert.trash = trash;
    Alert.success = success;
    return _container = void 0;
  
  })(Alert || (Alert = {}));

const toggleScreen = (el, status) => {
  if (status === 'fade') {
    el.classList.remove('go');
  setTimeout(() => {
    el.classList.add('hido');
  }, 1000);
  } else if (status === 'render') {
    el.classList.remove('hido');
  setTimeout(() => {
    el.classList.add('go');
  }, 1000);
  }
};

const startReset = () => {
  const ajaxer = (obj, url) => {
    $.ajax({
      type: "POST",
      url: url,
      data: obj,
      cache: false,
      success: function(response) {
        response = response.trim();
        if(response.includes('||')) {
          Alert.success('Database reset successful','Success',{displayDuration: 4000, pos: 'top'});
          setTimeout(() => {
            location.reload();
          }, 3000);
        } else {
          Alert.error('Reset Failed','Error',{displayDuration: 4000, pos: 'top'});
        };
      },
      error: function(response) {
        Alert.error('Failed to connect to server','Reset Failed',{displayDuration: 4000, pos: 'top'});
      }
    });
  };

  const obj = {
    data: 'reset'
  };
  ajaxer(obj, "../bundle/install/reset.php");
};

const reset = async () => {
  const confirmPassword = () => {
    const passwordModal = document.createElement('div');
    passwordModal.innerHTML = `
    <div class="pop-modal password-conf-modal hido">
          <div class="modal-main">
            <div class="">
              <div class="card-body" style="background: #fff; width: 100%; pa">
                <div>
                <h4 class="font-weight-semibold" style="color: #000;">Confirm Password</h4>
                  <div>
                    <p style="color: #000;">Input your admin password</p>
                    
                    <input style="border: 2px solid #000;" type="text" placeholder="" id="admin-pass" class="form-control">
                    
                    <div style="display: flex; justify-content: space-between; padding: 0 .4rem; width: 100%; height: 90px;">
                      <button id="password-conf-go" class="btn bg-dark text-white" style="margin-top: auto;">Reset<i class="icon-paperplane ml-2"></i></button>
                      <button id="password-conf-back" class="btn bg-dark text-white" style="margin-top: auto;">Back<i class="icon-paperplane ml-2"></i></button>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>       
    </div>
    `;
    document.body.appendChild(passwordModal);
    toggleScreen(document.querySelector('.password-conf-modal'), 'render');

    document.getElementById('password-conf-go').onclick = () => {
      const adminPassword = document.getElementById('admin-pass').value;
      const ajaxer = (obj, url) => {
        $.ajax({
          type: "POST",
          url: url,
          data: obj,
          cache: false,
          success: function(response) {
            response = response.trim();
            if(response === 'ok') {
              startReset();
              toggleScreen(document.querySelector('.password-conf-modal'), 'fade');
              setTimeout(() => {
                document.body.removeChild(passwordModal);
              }, 500);
            } else if(response === 'wrong') {
              Alert.error('Wrong password','Error',{displayDuration: 4000, pos: 'top'});
            } else {
              Alert.error('An error occured','Error',{displayDuration: 4000, pos: 'top'});
            };
          },
          error: function(response) {
            Alert.error('Could not connect to server','Error',{displayDuration: 4000, pos: 'top'});
          }
        });
      };
    
      const obj = {
        password: adminPassword
      };
      if(adminPassword !== '') {
        ajaxer(obj, "../bundle/install/conf_password.php");
      } else {
        Alert.error('Input your password','Error',{displayDuration: 4000, pos: 'top'});
      };
    };
    document.getElementById('password-conf-back').onclick = () => {
      toggleScreen(document.querySelector('.password-conf-modal'), 'fade');
      setTimeout(() => {
        document.body.removeChild(passwordModal);
      }, 500);
    };
  };

  const resetWarning = () => {
    const resetWarnModal = document.createElement('div');
    resetWarnModal.innerHTML = `
    <div class="pop-modal resetwarn-modal hido">
          <div class="modal-main">
            <div class="">
              <div class="card-body" style="background: #fff; width: 100%; pa">
                <div>
                <h4 class="font-weight-semibold" style="color: red;">Reset Software!!</h4>
                  <div>
                    <p style="color: #000;">By resetting your database <span style="color: red; font-weight: bold;">you will lose all of your data and settings</span>. You can still restore them if you have backed them up</p>
                    
                    
                    
                    <div style="display: flex; justify-content: space-between; padding: 0 .4rem; width: 100%; height: 90px;">
                      <button id="resetwarn-go" class="btn bg-dark text-white" style="margin-top: auto;">Proceed<i class="icon-paperplane ml-2"></i></button>
                      <button id="resetwarn-back" class="btn bg-dark text-white" style="margin-top: auto;">Back<i class="icon-paperplane ml-2"></i></button>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>       
    </div>
    `;
    document.body.appendChild(resetWarnModal);
    toggleScreen(document.querySelector('.resetwarn-modal'), 'render');

    document.getElementById('resetwarn-go').onclick = () => {
      confirmPassword();
      toggleScreen(document.querySelector('.resetwarn-modal'), 'fade');
      setTimeout(() => {
        document.body.removeChild(resetWarnModal);
      }, 500);
    };
    document.getElementById('resetwarn-back').onclick = () => {
      toggleScreen(document.querySelector('.resetwarn-modal'), 'fade');
      setTimeout(() => {
        document.body.removeChild(resetWarnModal);
      }, 500);
    };
  };

  resetBtn.onclick = () => {
    resetWarning();
  };
};
reset();

