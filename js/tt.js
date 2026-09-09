

function show(){

    
  const d = +document.getElementById('in-d').value;
  const m = +document.getElementById('in-m').value - 1;
  const y = +document.getElementById('in-y').value;

  const birth = new Date(y, m, d);
  const now = new Date();

  const diffMs = now - birth;

  const seconds = Math.floor(diffMs / 1000);
  const minutes = Math.floor(diffMs / (1000 * 60));
  const hours   = Math.floor(diffMs / (1000 * 60 * 60));
  const days    = Math.floor(diffMs / (1000 * 60 * 60 * 24));

  const years = now.getFullYear() - y -
    (now < new Date(now.getFullYear(), m, d));

  const months = (now.getFullYear() - y) * 12 + (now.getMonth() - m);

  document.getElementById('sp-y').innerText   = years;
  document.getElementById('sp-m').innerText   = months;
  document.getElementById('sp-d').innerText   = days;
  document.getElementById('sp-h').innerText   = hours;
  document.getElementById('sp-min').innerText = minutes;
  document.getElementById('sp-s').innerText   = seconds;

    // const today = new Date();

    // const year  = today.getFullYear();   // سال
    // const month = today.getMonth() + 1;  // ماه (0 تا 11 → +1)
    // const day   = today.getDate();       // روز

    // var inday = document.getElementById('in-d').value;
    // var inmonth = document.getElementById('in-m').value;
    // var inyear = document.getElementById('in-y').value;

    // var ytavallod = year - inyear;
    // var mtavallod = ytavallod * 12;
    // var dtavallod = ytavallod * 365;

    // var htavallod = ytavallod * 8640;
    // var mintavallod = ytavallod * 1036800;
    // var stavallod = ytavallod * 6220800;

    // var sh1 = document.getElementById('sp-y').innerText = ytavallod;
    // var sh2 = document.getElementById('sp-m').innerText = mtavallod;
    // var sh3 = document.getElementById('sp-d').innerText = dtavallod;
    // var sh4 = document.getElementById('sp-h').innerText = htavallod;
    // var sh5 = document.getElementById('sp-min').innerText = mintavallod;
    // var sh6 = document.getElementById('sp-s').innerText = stavallod;


}