window.$buoop = {
  text:
    'Your browser, {brow_name}, is not supported on this site. <a{up_but}>Update your browser</a> for the best experience.',
  required: { e: -4, f: -3, o: -3, s: -1, c: -3 },
  insecure: true,
  api: 2020.1,
  reminder: 0,
  reminderClosed: 24,
}

window.$buo_f = function () {
  var e = document.createElement('script')
  e.src = '//browser-update.org/update.min.js'
  document.body.appendChild(e)
}

try {
  document.addEventListener('DOMContentLoaded', $buo_f, false)
} catch (e) {
  window.attachEvent('onload', $buo_f)
}
